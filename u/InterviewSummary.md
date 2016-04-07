---
layout: page
title: "Interview Summary"

---
{% include JB/setup %}  


<!-- https://mp.weixin.qq.com/s?__biz=MjM5OTM0MzIwMQ==&mid=404533892&idx=1&sn=7b281b7d40304814352cfffe961bdb27&scene=1&srcid=0407v5yfnfjyu2qJofA3xQZb&pass_ticket=2I%2FxD2T%2FgSiJH9gGAnVTSsa%2FqcrYuluvb6Gh0gwhav099v%2B1z%2F504dwCGPhRtks8#rd


 -->

# iOS技术要点

## Objective-C / Swift

#### 语言特性
* 对象的语言特性：封装、继承、多态。
* 静态语言的特性
* 动态语言的效率, 动态类型（Dynamic typing）、动态绑定（Dynamic binding）和动态加载（Dynamic loading）。动态——必须到运行时（run time）才会做的一些事情
#### 内存管理
* 之前：OC内存管理遵循“谁创建，谁释放，谁引用，谁管理”的机制，当创建或引用一个对象的时候，需要向她发送alloc、copy、retain消息，当释放该对象时需要发送release消息，当对象引用计数为0时，系统将释放该对象，这是OC的手动管理机制（MRC）。
* 目前：iOS 5.0之后引用自动管理机制——自动引用计数（ARC），管理机制与手动机制一样，只是不再需要调用retain、release、autorelease；它编译时的特性，当你使用ARC时，在适当位置插入release和autorelease；它引用strong和weak关键字，strong修饰的指针变量指向对象时，当指针指向新值或者指针不复存在，相关联的对象就会自动释放，而weak修饰的指针变量指向对象，当对象的拥有者指向新值或者不存在时weak修饰的指针会自动置为nil。
* 如果使用alloc、copy(mutableCopy)或者retian一个对象时,你就有义务,向它发送一条release或者autorelease消息。
* 向一个对象发送一条autorelease消息,这个对象并不会立即销毁, 而是将这个对象放入了自动释放池,待池子释放时,它会向池中每一个对象发送 一条release消息,以此来释放对象.
* 向一个对象发送release消息,并不意味着这个对象被销毁了,而是当这个对象的引用计数为0时,系统才会调用dealloc方法,释放该对象和对象本身它所拥有的实例。
* 如果一个对象有一个_strong类型的指针指向着，这个对象就不会被释放。如果一个指针指向超出了它的作用域，就会被指向nil。如果一个指针被指向nil，那么它原来指向的对象就被释放了。当一个视图控制器被释放时，它内部的全局指针会被指向nil。用法“：不管全局变量还是局部变量用_strong描述就行。
  * 局部变量：出了作用域，指针会被置为nil。
  * 方法内部创建对象，外部使用需要添加_autorelease;
  * 连线的时候，用_weak描述。
  * 代理使用unsafe_unretained就相当于assign；
  * block中为了避免循环引用问题，使用_weak描述；
  * 声明属性时，不要以new开头。如果非要以new开头命名属性的名字，需要自己定制get方法名，如@property(getter=theString) NSString * newString;
  * 如果要使用自动释放池，用@autoreleasepool{}
  * ARC只能管理Foundation框架的变量，如果程序中把Foundation中的变量强制换成COre Foundation中的变量需要交换管理权；
  * 在非ARC工程中采用ARC去编译某些类：-fobjc-arc。
  * 在ARC下的工程采用非ARC去编译某些类：-fno-fobjc-arc。

#### 垃圾回收机制
* OC是支持垃圾回收机制的(Garbage collection简称GC),但是apple的移动终端中,是不支持GC的,Mac桌面系统开发中是支持的.
* 移动终端开发是支持ARC（Automatic Reference Counting的简称）,ARC是在IOS5之后推出的新技术,它与GC的机制是不同的。

### 异常处理
```
try {
        //do someting
} catch {
        //error
}
```
```
if let a = b as NSString {
}
guard let a = b as NSString else {
}
```
### 扩展
```
@interface classNAme (extensionName)
 -(NSString)stringWithType:(Type*)type {
         return @"string"
 }
@end
```

```
extension className {
        public var a:String {
                return "a"?
        }

        public func funcName(a:Int)->String {
                return "result"
        }

        convenience init(jsonStr: String) {
                self.init()
        }
}
```
[更多例子](https://github.com/DingSoung/Brick/blob/master/Extension/NSObject%2BTools.swift)
### 闭包, Block
###

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
#### MVC
* M表示Model，V表示视图View，C表示控制器Controller
* Model负责存储、定义、操作数据；
* View用来展示书给用户，和用户进行操作交互；
* Controller是Model和View的协调者,Controller把Model中的数据拿过来给View用。Controller可以直接与Model和View进行通信，而View不能和Controller直接通信。View与Controller通信需要利用代理协议的方式.
#### MVVM
* ViewModel层，就是View和Model层的粘合剂，他是一个放置用户输入验证逻辑，视图显示逻辑，发起网络请求和其他各种各样的代码的极好的地方。就是把原来ViewController层的业务逻辑和页面逻辑等剥离出来放到ViewModel层。



 MPV, , view Model,
