---
layout: post
title: Localization
date: 2016-06-06 00:00:00.000000000 +08:00
---

`Localization`支持不重启APP强制设置APP语言，代码量最低只需要两行，无须继承，控件无须任何特殊设置，零耦合，并且支持内嵌`NSBundle`资源包强制国际化，几乎不占用资源。
实现原理是设置强行设置APP偏好语言code后，使用运行时，将mian bundle的根国际化方法`localizedStringForKey`重载，从指定的国际化语言文件中读取。整个文件使用Swift extension实现，同样完全兼容Objective C，代码量仅74行（包括描述，注释，和空行，非常精简哦）。具体实现参Github
<center>
<div class="github-card" data-user="DingSoung" data-repo="Localization" data-width=100% data-height="177"></div>
</center>
