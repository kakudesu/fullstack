---
layout: page
title: "Interview Summary"

---
{% include JB/setup %}  


<!-- https://mp.weixin.qq.com/s?__biz=MjM5OTM0MzIwMQ==&mid=404533892&idx=1&sn=7b281b7d40304814352cfffe961bdb27&scene=1&srcid=0407v5yfnfjyu2qJofA3xQZb&pass_ticket=2I%2FxD2T%2FgSiJH9gGAnVTSsa%2FqcrYuluvb6Gh0gwhav099v%2B1z%2F504dwCGPhRtks8#rd


 -->

# iOS技术要点

### Objective-CC
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

#### 协议
* OC中的协议是一个方法列表, 可以被任何类使用(实现),但它并不是类(这里我们需要注意),自身不会实现这样方法, 而是又其他人来实现协议经常用来实现委托对象(委托设计模式), 默认是必须实现(@required),添加关键字@optional

#### 代理
代理又叫委托，是一种设计模式，代理是对象与对象之间的通信交互，代理解除了对象之间的耦合性,改变或传递控制链。允许一个类在某些特定时刻通知到其他类，而不需要获取到那些类的指针。可以减少框架复杂度。
代理的属性常是assign的原因：防止循环引用,以至对象无法得到正确的释放。
```
weak var delegate: UITableViewDelegate?
@property(nonatomic, weak) id< UITableViewDelegate > delegate
```

#### NSNotification、Block、Delegate和KVO的区别
* 代理是一种回调机制，且是一对一的关系，通知是一对多的关系，一个对向所有的观察者提供变更通知；
* 效率：Delegate比 NSNotification 高
* Delegate和Block一般是一对一的通信；
* Delegate需要定义协议方法，代理对象实现协议方法，并且需要建立代理关系才可以实现通信；
* Block：Block更加简洁，不需要定义繁琐的协议方法，但通信事件比较多的话，建议使用Delegate；

#### 可修改和不可以修改类型
比如NSArray和NSMutableArray,

#### 对谓词的认识
Cocoa 中提供了一个NSPredicate的类,该类主要用于指定过滤器的条件, 每一个对象通过谓词进行筛选,判断条件是否匹配。

#### static、self、super关键字的作用

#### #include与#import的区别，#import 与@class 的区别
* #include 和#import其效果相同,都是查询类中定义的行为(方法);
* #import不会引起交叉编译,确保头文件只会被导入一次；
* @class 的表明,只定 义了类的名称,而具体类的行为是未知的,一般用于.h 文件；
* @class 比#import 编译效率更高。
* 此外@class 和#import 的主要区别在于解决引用死锁的问题。

#### @public、@protected、@private 它们的含义与作用
* @public:对象的实例变量的作用域在任意地方都可以被访问 ;
* @protected:对象的实例变量作用域在本类和子类都可以被访问 ;
* @private:实例变量的作用域只能在本类(自身)中访问 .

#### isMemberOfClass 和 isKindOfClass
isKindOfClass 不仅用来确定一个对象是否是一个类的成员,也可以用来确定一个对象是否派生自该类的类的成员 ,而isMemberOfClass 只能做到第一点

#### 数据持久性
* 属性列表：只有NSString、NSArray、NSDictionary、NSData可writeToFile；存储依旧是plist文件。plist文件可以存储的7中数据类型：array、dictionary、string、bool、data、date、number。
* 对象序列化（对象归档）：对象序列化通过序列化的形式，键值关系存储到本地，转化成二进制流。通过runtime实现自动化归档/解档，请参考这个文章。实现NSCoding协议必须实现的两个方法：
  1.编码（对象序列化）：把不能直接存储到plist文件中得到数据，转化为二进制数据，NSData，可以存储到本地
  2.解码（对象反序列化）：把二进制数据转化为本来的类型。
* SQLite 数据库<FMDB>
* CoreData ：通过管理对象进行增、删、查、改操作<magical record>  <--重点缺失-->

#### 其它
* self.name = _name，name = _name区别? 前者是存在内存管理的setter方法赋值,它会对_name对象进行保留或者拷贝操作, 后者是普通赋值
* self = [super init]方法? 容错处理,当父类初始化失败,会返回一个nil,表示初始化失败。由于继承的关系,子类是需要拥有父类的实例和行为,因此,我们必须先初始化父类,然后再初始化子类
* assign、retain、copy 以及它们的之间的区别?
  * assign:普通赋值,一般常用于基本数据类型,常见委托设计模式, 以此来防止循环引用。(我们称之为弱引用).
  * retain:保留计数,获得到了对象的所有权,引用计数在原有基础上加1.
  * copy:一般认为,是在内存中重新开辟了一个新的内存空间,用来 存储新的对象,和原来的对象是两个不同的地址,引用计数分别为1。但是当copy对象为不可变对象时,那么copy 的作用相当于retain。因为,这样可以节约内存空间
* 堆和栈的区别
  * 栈区(stack)由编译器自动分配释放,静态分配和动态分配, 静态分配是编译器完成的，比如局部变量的分配,动态分配由alloca函数进行分配，但是栈的动态分配和堆是不同的，他的动态分配是由编译器进行释放，无需我们手工实现, 计算机会在底层对栈提供支持：分配专门的寄存器存放栈的地址，压栈出栈都有专门的指令执行，这就决定了栈的效率比较高。堆则是C/C++函数库提供的，它的机制是很复杂的。
  * 堆区(heap)一般由程序员分配释放, 动态分配
  * 全局区(静态区)(static),全局变量和静态变量的存储是放在一块 的,初始化的全局变量和静态变量在一块区域, 未初始化的全局变量和未初始化的静态变量在相邻的另一块区域。程序结束后有系统释放。
  * 文字常量区—常量字符串就是放在这里的。程序结束后由系统释放。
  * 程序代码区—存放函数体的二进制代码
* performSelector传入3个以上参数 <----缺失---->

## Objective-C / Swift

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
### 类目category, 扩展
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

#### 循环引用的产生原因，以及解决方法
* 对象A和对象B相互引用了对方作为自己的成员变量，只有自己销毁的时候才能将成员变量的引用计数减1。对象A的销毁依赖于对象B的销毁，同时对象B销毁也依赖与对象A的销毁，从而形成循环引用，此时，即使外界没有任何指针访问它，它也无法释放。
* 解决方法：1事先知道存在循环引用的地方，在合理的位置主动断开一个引用，是对象回收；2使用弱引用的方法。

#### 键路径(keyPath)、键值编码（KVC）和键值观察（KVO）
* keypath, setValue(5, keypath: "layer.cornerRadius")
* KVC, 通过key找到value的原理, [self valueForKey:@”someKey”],  setValue(CGRectZero(), key: "frame")；
* KVO中谁要监听谁注册，然后对响应进行处理，使得观察者与被观察者完全解耦。KVO只检测类中的属性，并且属性名都是通过NSString来查找，编译器不会检错和补全，全部取决于自己。

```
//注册观察者(注意：观察者和被观察者不会被保留也不会被释放)
- (void)addObserver:(NSObject *)observer forKeyPath:(NSString *)keyPath
options:(NSKeyValueObservingOptions)options
context:(void *)context;
//接收变更通知
- (void)observeValueForKeyPath:(NSString *)keyPath ofObject:(id)object change:(NSDictionary *)change context:(void *)context  {
        if ([keyPath isEqualToString:@"highlighted"] ) {
                [self setNeedsDisplay];
        }
}
//移除对象的观察者身份
- (void)removeObserver:(NSObject *)observer
forKeyPath:(NSString *)keyPath;
```




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
