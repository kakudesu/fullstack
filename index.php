<?php
echo $_SERVER['HTTP_HOST']."<br>";

if (strcmp($_SERVER['HTTP_HOST']."<br>", "cuicui.dingsoung.com")) {
        header("Location: http://dingsoung.com/cuicui/");
} else {
        echo $_SERVER['HTTP_HOST']."<br>";
}
//header("Location:http://dingsoung.com/info.php");
?>
