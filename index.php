<?php
//重定向浏览器
//$_SERVER['HTTP_HOST']

if (strcmp($_SERVER['HTTP_HOST'], "http://cuicui.dingsoung.com")) {
        header("Location: http://dingsoung.com/cuicui/);
} else {
        echo $_SERVER['HTTP_HOST'];
}
exit;

?>
