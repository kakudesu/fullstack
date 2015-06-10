---
layout: page
title: "使用Git管理软件开发"

---
{% include JB/setup %}
。
###Git方法
    git clone 远程库地址
    //本地编辑调试代码
    git add *
    git commit -m "修改说明"
    git push

####多人协作
如果是多人协作，在前面的第5步之前，一般需要做一下操作:

    git pull
    //再次本地编辑编译，修复报错的地方，确认工程正确
    git add *
    git commit -m 

####大型工程
######默认版本库在master分支上，该分支用于软件发布

######开发是在develop分支上，创建develop分支：

    git checkout -b develop
    git push origin developer

######添加新的特性，功能，应该在developer分支上在做一个分支出来

    git checkout -b feature-xxxx
    编辑代码
    git add *
    git commit -m "xxx"
    git checkout developer
    git merge feature-xxxx
    //解决冲突
    git push origin developer

######有时候修复bug也需要像添新特性那样做

    git checkout -b debug
    git checkout -b fix-xxx
    修复bug并提交到fix-xxx 分支
    
######发布
切换到debug分支，合并fix-xxx分支，在debug分支验证是否修复
确定developer 或者 debug分支OK后，将代码合并到master分支，用于发布
    
    git checkout master
    git merge developer
    git merge debug
    //修复冲突
    git push
