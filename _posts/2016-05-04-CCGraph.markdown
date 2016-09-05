---
layout: post
title: CCGraph
date: 2016-05-04 00:00:00.000000000 +08:00
---

`CCGraph`支持不重启APP强制设置APP语言，代码量最低只需要两行，无须继承，控件无须任何特殊设置，零耦合，并且支持内嵌`NSBundle`资源包强制国际化，几乎不占用资源。
实现原理是设置强行设置APP偏好语言code后，使用运行时，将mian bundle的根国际化方法`localizedStringForKey`重载，从指定的国际化语言文件中读取。整个文件使用Swift extension实现，同样完全兼容Objective C，代码量仅74行（包括描述，注释，和空行，非常精简哦）。具体实现参Github
<center>
<div class="github-card" data-user="DingSoung" data-repo="WJLocalization" data-width=100% data-height="177"></div>
</center>
<!--
<center>
<h1>
<a href="https://github.com/DingSoung/CCPDFImage" class="fa fa-github"></a>
</h1>
</center>
-->

