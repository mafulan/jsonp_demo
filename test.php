<?php
    header("Content-type","text/html;charset=utf-8");
    //$fun：是php中定义变量的写法
    $fun = $_GET['callback'];//获取前端发送来的数据
    echo "$fun('ssss')";
?>