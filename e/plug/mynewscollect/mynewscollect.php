<?php
if (!defined('InEmpireCMS')) {
    exit();
}
// 引入帝国cms数据库连接等核心文件
require_once(ECMS_PATH.'e/class/connect.php');
require_once(ECMS_PATH.'e/class/db_sql.php');
require_once(ECMS_PATH.'e/class/functions.php');
$link = db_connect();
$empire = new mysqlquery();

// 采集函数
function collectNews($url) {
    global $empire;
    // 获取网页内容
    $html = file_get_contents($url);
    if (!$html) {
        return false;
    }

    // 使用正则表达式或DOM解析获取新闻标题和内容，这里以简单示例说明
    // 假设新闻标题在h1标签内，内容在div class="content"标签内
    preg_match('/<h1>(.*?)<\/h1>/is', $html, $titleMatch);
    preg_match('/<div class="content">(.*?)<\/div>/is', $html, $contentMatch);

    if (!isset($titleMatch[1]) ||!isset($contentMatch[1])) {
        return false;
    }

    $title = trim($titleMatch[1]);
    $content = trim($contentMatch[1]);

    // 处理采集到的数据，例如去除HTML标签等
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);

    // 插入到帝国cms数据库，假设插入到新闻表，表名为phome_ecms_news
    $sql = "INSERT INTO phome_ecms_news (title, content) VALUES ('$title', '$content')";
    $empire->query($sql);
    return true;
}

// 插件入口
if ($enews == 'MyNewsCollect') {
    $collectUrl = $_GET['collecturl'];
    if ($collectUrl) {
        if (collectNews($collectUrl)) {
            echo "采集成功";
        } else {
            echo "采集失败";
        }
    } else {
        echo "请提供采集网址";
    }
}
?>