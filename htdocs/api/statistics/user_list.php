<?php

/**
 * 统计:用户图片状态列表
 */
require dirname(dirname(dirname(__FILE__))) . '/app_api.php';
session_write_close();//关闭session

success_return("查询成功", (new QStatistics_Img())->paginate(
    page_size(),
    current_page(),
    $_GET['tabType'],
    $_GET['sortField'],
    $_GET['sortOrder'],
    $_GET['query']
));