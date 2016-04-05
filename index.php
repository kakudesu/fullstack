<?php
//重定向浏览器
if ($_SERVER['HTTP_HOST'] == "cuicui.dingsoung.com") {
        header("Location: http://dingsoung.com/cuicui/);
} else {
        exit;
}

//确保重定向后，后续代码不会被执行
exit;
?>
