---
layout: page
title: "简历"

---
{% include JB/setup %}

<!--
todo: 
* 把硬件，嵌入式 firmware 还有数据处理，信号系统等的技能也添加进来，为物联网，医疗电子等行业作准备
* 添加求职意向，说明需要智能硬件，医疗电子，物联网，等行业的IOS开发，工资12K＋
* 精炼一下Other部分的描述，   简洁
* 挑选个人项目作为作品展示
* 对个人技能 评级，技能，语开发语言，工具 分开写
* 尝试精炼一下工作经历
 -->
 
####简要信息
* 丁松/男/1990
* 热爱学习和钻研，高效率，自我激励
* 软件工程师转IOS开发，2.5工作经验
* 工程学理学士，本科，电子信息工程
* 电话＋86-17097762778
* <DingSoung@outlook.com>
* <https://github.com/DingSoung>

<!--
Hi, I‘m a IOS software engineer,I am currently seeking more suitable careers, here is my basic information, if you would like to get touch with me,send an e-mail or call me directly. 
-->

---

####工作经历与主要项目经验

#####软件工程师 @ 得镨电子科技(上海)有限公司 2013.11 — 现在
* 升级新架构:与其他5位RD一起协作。在硬件不变的情况下，相比老架构，新架构最大的特点是上位机层支持更复杂的可编程IC，Frimware层支持了脱机工作，底层最大数据收发速率提升。 and reduced dependence on PC. Support the XML configuration option dialog IC support, this saves supporting time. The Firmware layer coordinate bus layer’s works, reserved memory for bus layer, make it possible to do data phrase, verification, comparison real-time and accurately.
* 支援IC: 设计各种通讯接口和通讯协议，包括IIC，SPI，UART，ISSP，SWD，JTAG以及其他非标准接口，Write kinds of communication IO and protocols with assembly language, and use C language control process, FLASH,EEPROM and varieties of programmable MCU such as power control,touch screen, motors controller ware supported, as well as AVR, ARM7, cortex M MCU,theses amplified series helped to expand the customer source and get more orders. 除了控制好时序，更多的是改进烧录方法，以达到足够高的稳定性和速度，例如一款JTAG OTP芯片IRMCK3xx不良率控制在0.05%以内，远低于生产要求，AT91SAM7xxx使用IAP方式速度提升约2.5倍。
* 做过有意思的事情:
  * 使用汇编指令，编写查表法CRC，对收发数据进行同步校验；
  * 使用汇编指令管理内存和缓冲数据；
  * 模拟JTAG接口，编写扫描链，对ARM7内核进行调试，访问内部寄存器，内存和Flash；
  * 使用XML快速配置Dilog;
* adjust the timing to make it works faster and more stable, especially for OTP series chip with JTAG interface ,witch usually unstable and has complex protocol, by using IAP,ping-pong cache technology to improve performance close to theoretical value,speeded up to 2.5x than usual, fail rate controlled in 0.05%.
<!-* JTAG 扫描链调试 ARM内核，   汇编 灵活运用，  使用汇编实现32位查表法CRC校验 -->


#####软件工程师 @ 点线科技(武汉)有限公司 2012.12 — 2013.11
<!--准同步采用算法 适应宽频带  统一的计算时间，以空间换计算误差 -->
* 设计算法：准同步采样算法，适应宽频带的采样信号，使得频率一定范围内变化时，计算误差仍然很小，该算法将原设计的误差从0.5%降到0.2%，达到国家0.2S三相智能电表要求. 
* 设计电信号采用和分析模块： 负责编写模块的采用、显示、时钟、通讯、存储和控制等驱动程序；使用状态机的思想快速切换任务，有效的控制MCU时间分配，降低功耗；结合DMA中断和双缓冲实现了AD的连续采样的同时，将绝大部分时间用于数据运算和通讯等任务，达到了一般需要更高性能的MCU结合RTOS才能实现的效果；

---

####教育背景
* 工程学理学士，本科，电子信息与科学技术，一次性通过NCRE2，CET4 
* 主要专业课程: 数据结构, 数字信号处理，信号与系统，嵌入式系统，数字通信原理等
* 专研，赛事，奖项，论文和毕业设计：  
2010年，我与导师一起申请到实验室，并与另外4人组成智能车试验小组，作为组长，我设计了[Linux驱动模块](https://github.com/DingSoung/linux-3.0.1/tree/master/drivers/char)和主要的系统程序,实现基本功能，并不断调试和调优。2011年,我们获得了学校的资助，2012年，关于该项目的论文被采纳，紧接着该项目衍生的个人毕业设计和论文被评优。

---

####个人项目

* [Online player](https://github.com/DingSoung/music)  
This is one of my typical swift language based IOS 8 app which contains UI ViewContraller, Auto Layout,data access, JSON phrase, and Interned request, related to application of kinds of framework such as  AVFoundation, SwiftyJSON, Alamofire etc. each functions has more friendly interface and independence.
* [data-graph](https://github.com/DingSoung/data-graph)
<!-* add detail -->

* [BLE framework](https://github.com/DingSoung/data-graph)
<!-* add readme -->

* [Sketch design](https://github.com/DingSoung/design)  
This project is my sketch repository, which my copy painting and few self-design, inspired by mental design,Click the link above to watch.

 <!-* add Technical summary -->
 
---

####自我评估
* 目前主要专注IOS APP的开发
* 热爱新潮技术，手机，互联网，设计，活跃于V2EX，Github，Google＋
* 学习和钻研，自我激励，有志向
* 丰富的Linux，Firmware开发经验和信号数据处理的理论基础，是医疗电子、智能硬件等行业的菜

####擅长领域，编程语言，技能，开发工具
<!--
IOS APP  掌握
Frimeware  精通
Sketch Design  熟悉
Embedded  掌握
Web 
-->
* IOS, Firmware, Embedded ARM, Linux;
* Swift, C/C++, 汇编, Lua, Objective-C;
* Git, JSON, SQL, Markdown, Makefile, XML, HTML, CSS;
* Xcode, Sketch, Visual Studio, IAR, Matlab;

---

####其他
* I once worked on embedded system, and turn to IOS App develop since Apple's 2014 WWDC when the swift language was published, In these months I start from using basic controls,network communications,data phrase,then learn to use libraries such as SwiftyJSON,Alamofire,also I practiced UI designing with sketch,now I had make several apps, and gained  my own experience, these increase self-confidence to join mobile and network developing. However ,as a new men, I know the lack of work experience, this is a unavoidable process,I must keep trying all my efforts to learn and design best apps, all I need is an opportunity, that's why I found you.

*工作态度，效率，能力*  

* As a developer obsessed with technology, I always deal with general affairs of my work with rigorous attitude,try my best to finish every project in time and without serious bugs, and it sincerely happy to saw my works being praised, and bring revenue.In the last year,my manager assessed my professional effectiveness and work efficiency 7 score witch means exceed goals,proactivity,time management and problem solving 8 score,almost far exceed goals. If you'r interesting the detail, you can also visit page <http://dingsoung.ml/pages/resume.html> about my past work experence.

*职业选择*  

* 开阔眼界，亲身实践，把时间花在自己最热爱和痴迷的领域

*我的优势*  

* 得益于我的专业和工作经历，相比其他IOS开发者，我具备更对的嵌入式，Linux和硬件经验，这在物联网，智能硬件，穿戴式设备，医疗电子等领域占有优势，不仅如此，我还获得了方方面面的*调试和改进*能力，追求代码美感，不断学习和自我提升的习惯，相信这些在今后的工作中带来更多的便利和发展潜力

---

*[Github Profile](https://github.com/DingSoung)*

![github](https://raw.githubusercontent.com/DingSoung/dingsoung.github.com/master/attach/githubUrl.png)
