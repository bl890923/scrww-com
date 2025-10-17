<?php
// 插件主文件
require_once('config.php');
require_once('ai_rewrite.php');

// 采集新闻
function collect_news() {
    $config = include('config.php');
    $source_url = $config['settings']['source_url'];

    // 使用cURL获取新闻内容
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $source_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    // 解析新闻内容（这里假设新闻是JSON格式）
    $news_data = json_decode($output, true);

    // 调用AI洗稿
    $rewritten_news = ai_rewrite($news_data['content']);

    // 发布新闻
    publish_news($rewritten_news);
}

// 发布新闻到帝国CMS
function publish_news($content) {
    global $empire, $dbtbpre;
    $title = 'AI洗稿后的新闻标题';
    $newstime = time();
    $sql = "INSERT INTO {$dbtbpre}ecms_news (title, newstime, smalltext) VALUES ('$title', '$newstime', '$content')";
    $empire->query($sql);
}

// 执行采集
collect_news();