<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
//重定向浏览器
header("Location: http://cuicui.ga/qixi.php?me=%E8%80%81%E5%A4%A7&you=%E5%B4%94%E5%B4%94&yi=%E6%88%91%E6%83%B3%E8%B7%9F%E4%BD%A0%E4%B8%80%E8%B5%B7%E5%8E%BB%E5%90%83%E5%B0%BD%E7%BE%8E%E9%A3%9F%2C+%E5%8E%BB%E6%B8%B8%E5%B1%B1%E7%8E%A9%E6%B0%B4%2C+%E5%85%B1%E5%BB%BA%E7%BE%8E%E6%BB%A1%E7%94%9F%E6%B4%BB%2C+%E4%BB%A5%E5%90%8E%E8%BF%98%E6%9C%89%E5%BE%88%E5%A4%9A%E5%BE%88%E5%A4%9A%E5%BF%AB%E4%B9%90%E7%9A%84%E4%BA%8B%E6%83%85.+%E5%81%9A%E6%88%91%E6%B8%A9%E6%9F%94+%E5%8F%AF%E7%88%B1+%E4%BD%93%E8%B4%B4+%E7%BA%AF%E7%9C%9F+%E7%88%B1%E6%88%91%E7%9A%84%E5%B4%94%E5%B4%94&wu=%E8%80%81%E5%A9%86%E6%83%B3%E4%BD%A0%E4%BA%86&year=2015&yue=12&ri=25&submit=");
//确保重定向后，后续代码不会被执行
exit;
?>
