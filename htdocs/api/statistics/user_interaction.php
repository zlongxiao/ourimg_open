<?php

/**
 * 统计:用户交互统计
 */
require dirname(dirname(dirname(__FILE__))) . '/app_api.php';
session_write_close();//关闭session

success_return("查询成功", (new QStatistics_Interaction())->userList(
    page_size(),
    current_page(),
    $_GET['tabType'],
    $_GET['sortField'],
    $_GET['sortOrder'],
    $_GET['query']
));
