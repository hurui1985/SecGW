<?php
ob_start();                   //打开缓冲区
echo "Hello\n";               //输出
header("location:index.php"); //把浏览器重定向到index.php
ob_end_flush();               //输出全部内容到浏览器

