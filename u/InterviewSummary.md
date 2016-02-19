---
layout: page
title: "Interview Summary"

---
{% include JB/setup %}  

# iOS技术要点

## Objective-C

weak block。GCD巩固 NSoperation巩固。TV盒子项目。交换变量。动画图形，drawrect. 动画的详细。
Xcode 调试命令。Linux GDB调试。
collection view约束设置。
缓存机制。NSURLcache
归档需要做什么。自定义内容要存在NSData. 自定义对象需要编码解码。
WWDC 要点 兴趣 见解。

CALayer动画不会
聊天的 看的书太少
苹果发布的技术太少
Swift更新细节



- Break point User

- realview

- Dash

- paint code
- Spark
- paw 调试HTTP
- d  画图的


- expr @import UIKit
- expr @import Foundation



- Command LLDB
bt
po
fr select 3  选择栈  左边的
reg read 读寄存器  reg read rip
mem read &rip 读内存
disassemble -c 10 汇编码



## iOS技术
### NSObject 与ARC
```
//...
```
### UIViewController
```
loadView
viewDidLoad
//...
```
### UIView
```
init
initWithFrame
awakeFromNib
layoutSubViews
drawRect
//...
//CALayer
//Core Graph
```
### 常用控件
* UITableView
* UIWebView 及最新的Web browser
* CollectionView
* UINavigationController
*

### [多线程](http://www.cocoachina.com/ios/20150731/12819.html)
### Pthreads
#### NSThread
#### GCD
  * 任务队列:串行,并行队列队列
  * 执行任务(代码块block)的方式:同步,异步执行

|同步执行|异步执行
----|------|----
串行队列|当前线程,一个一个执行|其它线程,一个一个执行
并行队列|当前线程,一个一个执行|很多线程,一起执行

#### NSOperation, NSOperationQueue

### 应用


归档 encode decode


## Swift

尾随闭包
AutoClosure
Init 初始化 super.init之前
lazy 关键字 还有很多其它关键字

# Git
## 常用的情况
1. 已有版本库
```
git clone <url of remote> <directoryName>
cd  <directoryName>
// add & add file1
git add file1
git commit -m "commit message"
git push origin master
```
2. 新版本库
```
mkdir <directoryName>
cd <directoryName>
git init
// add & add file1
git add file1
git commit -m "commit message"
git remote add <<url of remote, github etc.>
git push origin master -u
```
3. 分支
```
git checkout master
git checkout -b <branchName>
// add & add file1
git add file1
git commit -m "commit message"
git push origin <branchName>
git checkout master
git merge <branchName>
// fix conflict
git push origin master
```
4. fork & pull request
5. develop branch, feature branch

## 工具 & 平台
1. SourceTree
2. github

# 数据结构

# 算法

# 软件架构
MVC, MPV, MVVM, view Model,
