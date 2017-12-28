<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/2/13
 * Time: 16:01
 */
$link=@mysqli_connect("localhost:3306","root","","test")or die("连接错误！");
echo "连接成功！";
if(mysqli_real_query($link,"insert ts values(1009,'bbb');"))
    echo "操作成功！";
else echo "操作失败！";
mysqli_close($link);
