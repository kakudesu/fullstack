---
layout: page
title: "简历"

---
{% include JB/setup %}

<!--
todo: 
不用加太多的术语，重点是demo、想法、解决问题的能力

http://ourcoders.com/

http://www.ihouzi.com/iOS.html

1、	熟练使用XCode开发工具；
2、	熟练掌握Obective-C编程语言；
3、	熟悉使用第三方如：AFNetworking，SDWebImage,DDMenu等；
4、	熟悉iOS常用框架及MVC设计模式；
5、	熟悉Coredata，数据库；
6、	熟悉使用CocoaPods，SourceTree；
7、	熟悉微博SDK使用；
8、	熟悉app上线流程；
9、	熟悉NSTread，NSOperationQueue，GCD；
10、	了解xml，json；
11、	了解TCP/IP，HTTP，Socket网络协议；
12、 熟练使用photoshop

IOS APP  掌握
Frimeware  精通
Sketch Design  熟悉
Embedded  掌握
Web 

https://www.v2ex.com/t/149934#reply21

 -->
 
###简要信息
* 丁松/男/1990
* 热爱学习和钻研，高效率，自我激励
* 软件工程师转IOS开发，2.5工作经验
* 工程学理学士，本科，电子信息工程
* 电话＋86-17097762778
* <DingSoung@outlook.com>
* <https://github.com/DingSoung>

<!--
Hi, I'm a IOS software engineer,I am currently seeking more suitable careers, here is my basic information, if you would like to get touch with me,send an e-mail or call me directly. 
-->

###擅长领域，编程语言，技能，开发工具
* IOS, Firmware, Embedded ARM, Linux;
* Swift, C/C++, 汇编, Lua, Objective-C;
* Git, JSON, SQL, Markdown, Makefile, XML, HTML, CSS;
* Xcode, Sketch, Visual Studio, IAR, Matlab;

###目标职位  
初级IOS应用和手机游戏开发，一周内到岗，薪水面议。

---

###个人项目  
* [onlineMusicPlayer](https://github.com/DingSoung/music)  
这是我的一个典型IOS8 APP之一，它涉及到UIKit、Auto Layout、文件本地存取、JSON解析、网络访问等，使用AVFoundation, SwiftyJSON, Alamofire等Framework,各个功能友好衔接。此外还有其他若干APP，如[Photo](https://github.com/DingSoung/photo),[Web APP](https://github.com/DingSoung/webApp),[Login & Side Menu](https://github.com/DingSoung/ThumbsOnTheRun),[Note](https://github.com/DingSoung/noteBook)等

* [BLE framework](https://github.com/DingSoung/BLE)  
目前还在进行中的蓝牙库，主要针对与IOS挂钩的穿戴式设备、智能家居、物联网、机器人开发。

* [data-graph](https://github.com/DingSoung/data-graph)  
常用代码片段，算法归纳和一些技术总结

* [Sketch design](https://github.com/DingSoung/design)  
我的Sketch作品，一些是临摹，也有很多是自主设计的，其中一些灵感来自于mental design

###工作经历与主要项目经验

####软件工程师 @ 锝镨电子科技(上海)有限公司 2013.11 — 现在
* 升级新架构:与其他5位RD一起协作。在硬件不变的情况下，相比老架构，新架构最大的特点是上位机层支持更复杂的可编程IC，Frimware层支持了脱机工作，底层最大数据收发速率提升；其中，我所负责的底层烧录协议和Firmware流程控制部分在烧录速度和稳定性方面起到了重要作用。

* 支援IC: 设计各种通讯接口和通讯协议，如IIC，SPI，UART，JTAG以及其他非标准接口，涉及到EEPROM、FLSH、OTP、MTP等类型的存储芯片、各种MCU、及其他可编程IC; 这些工作不仅要求控制好时序更多的是改进烧录方法，以达到足够高的稳定性和速度；其中对稳定性要求最高的OTP芯片之一IRMCK3xx不良率控制在0.05%以内，远低于生产要求，另一颗典型烧录流程极其为复杂，需要通过JTAG深入调试ARM内核AT91SAM7xxx，经过研究，最终使用IAP方法烧录，相比老架构的速度提升约2.5倍。

* 工作中做过有意思的事情:
  * 使用汇编指令，[编写查表法CRC](https://github.com/DingSoung/data-graph/tree/master/TransmissionEncryption/crc)，对收发数据进行同步校验；
  * 使用汇编指令管理内存和缓冲数据；
  * 模拟JTAG接口，编写扫描链，对ARM7内核进行调试，访问内部寄存器，内存和Flash；
  * 使用XML快速配置Dialog;

####嵌入式软件工程师 @ 点线科技(武汉)有限公司 2012.12 — 2013.11
<!--准同步采用算法 适应宽频带  统一的计算时间，以空间换计算误差 -->

* [设计算法](https://github.com/DingSoung/data-graph/tree/master/DiscreteDataAnalysis)：准同步采样算法，适应宽频带的采样信号，使得频率一定范围内变化时，计算误差仍然很小，该算法将原设计的误差从0.5%降到0.2%，达到国家0.2S三相智能电表要求。

* 设计电信号采用和分析模块： 负责编写模块的采用、显示、时钟、通讯、存储和控制等驱动程序；使用状态机的思想快速切换任务，有效的控制MCU时间分配，降低功耗；结合DMA中断和双缓冲实现了AD的连续采样的同时，将绝大部分时间用于数据运算和通讯等任务，达到了一般需要更高性能的MCU结合RTOS才能实现的效果。

###教育背景
* 工程学理学士，本科，电子信息与科学技术，一次性通过NCRE2，CET4。
* 主要专业课程: 数据结构, 数字信号处理，信号与系统，嵌入式系统，数字通信原理等
* 专研，赛事，奖项，论文和毕业设计。
2010年，我与导师一起申请到实验室，并与另外4人组成智能车试验小组，作为组长，我设计了[Linux驱动模块](https://github.com/DingSoung/linux-3.0.1/tree/master/drivers/char)和主要的系统程序,实现基本功能，并不断调试和调优。2011年,我们获得了学校的资助，2012年，关于该项目的论文被采纳，紧接着该项目衍生的个人毕业设计和论文被评优。

---

###自我评估
* 目前主要专注IOS APP的开发。
* 热爱新潮技术，手机，互联网，设计，活跃于V2EX，Github，Google。
* 学习和钻研，自我激励，有志向。
* 丰富的Linux，Firmware开发经验和信号数据处理的理论基础。

###其他  
* 我现自苹果公司2014年WWDC开始正式转向iOS开发，在这几个月里，得益于以往的编程基础，我很快的掌握Swift语言、常用控件、Framework的使用，并在Github上积极参与开源项目，向资深开发者学习，同时通过自己动手开发应用程序获得经验，这些增加强了我加入移动开发行业的自信心。然而，作为一个人，我知道我仍然缺乏足够经验，这是一个不可避免的过程，我会继续努力学习，设计最佳的应用程序，我所需要的是一个机会，这就是为什么我找到了你。

####工作态度，效率，能力 
* 作为专注与于技术的开发者，我总是以严谨的态度对待工作事务，尽我所能按时无差错地完成每一个项目，并且很高兴看到自己的作品受到客户的青睐。在过去的一年，我的经理评估我的专业效能和工作效率7分，意味着超越目标，积极性，时间管理和解决问题高达的8分。

####职业选择  
* 只有开阔眼界，勇敢的尝试，经过了亲身实践，才能确定是否适合自己，此后才能把时间花在自己最热爱和痴迷的领域。

####我的优势  
* 得益于我的专业和工作经历，相比其他IOS开发者，我具备更对的嵌入式，Linux和硬件经验，这在物联网，智能硬件，穿戴式设备，医疗电子等领域占有优势; 更多的是，我还形成了**良好的编程能力和代码风格**, 获得了方方面面的**调试和改进**能力，不断**学习和自我提升**的习惯，相信这些在今后的工作中带来更多的便利和发展潜力。

---

[下载PDF版本简历](https://raw.githubusercontent.com/DingSoung/dingsoung.github.com/master/attach/CV_zh.pdf)  
*[Github Profile](https://github.com/DingSoung)*

![github](https://raw.githubusercontent.com/DingSoung/dingsoung.github.com/master/attach/githubUrl.png)
