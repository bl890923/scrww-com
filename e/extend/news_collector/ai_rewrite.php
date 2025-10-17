<?php
// AI洗稿处理（使用阿里通义大模型）
function ai_rewrite($content) {
    $config = include('config.php');
    $api_key = $config['settings']['api_key']; // 通义API的API Key
    $secret_key = $config['settings']['secret_key']; // 通义API的Secret Key

    // 获取Access Token
    $auth_url = "https://dashscope.aliyuncs.com/api/v1/auth/token";
    $auth_data = [
        'api_key' => $api_key,
        'api_secret' => $secret_key,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $auth_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($auth_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    $auth_response = curl_exec($ch);
    curl_close($ch);

    $auth_data = json_decode($auth_response, true);
    $access_token = $auth_data['access_token'];

    if (!$access_token) {
        die('Failed to get access token');
    }

    // 调用通义API
    $api_url = "https://dashscope.aliyuncs.com/api/v1/models/qwen-1.8b-chat/completions";
    $post_data = json_encode([
        'prompt' => "请对以下新闻内容进行洗稿：\n" . $content,
        'max_tokens' => 500, // 最大生成长度
        'temperature' => 0.7, // 控制生成文本的随机性
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $access_token,
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $response_data = json_decode($response, true);

    // 返回洗稿后的内容
    return $response_data['choices'][0]['text'];
}