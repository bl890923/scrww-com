<?php
// 插件配置
return [
    'name' => '新闻采集插件',
    'version' => '1.0',
    'author' => 'Your Name',
    'description' => '自动采集新闻并通过AI洗稿后发布',
    'settings' => [
        'api_key' => 'sk-24cf8b4628d74d8faac469bf478a57cc', // 通义API的API Key
        'secret_key' => '0cba7520-5710-49d3-90ed-311577e9aaed', // 通义API的Secret Key
        'source_url' => 'https://www.scwmw.cn/bydll/', // 新闻源URL
    ],
];