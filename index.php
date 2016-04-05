<?php
//重定向浏览器
if (strcmp($_SERVER['HTTP_HOST'], "http://cuicui.dingsoung.com")) {
        header("Location: http://dingsoung.com/cuicui/);
} else {
        echo $_SERVER['HTTP_HOST'];
}

//确保重定向后，后续代码不会被执行
exit;
?>
