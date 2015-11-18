---
layout: page
title: "Git brief tips"

---
{% include JB/setup %}



####Brief

	//Step 1
	git clone https://git.coding.net/xinyihezi/iOS1.0.git	//克隆版本库，可能需要输入帐号密码
	cd iOS1.0		//进入到目录
	git branch -v	//查看分支

	//Step 2
	git checkout develop	//切换到developer分支
	open .	//打开Finder  打开工程 在developer分支上编辑代码
	git add *	//添加新增的文件
	git commit -m "开发log"	//将代码提交到当前分支（develop）
	git push origin developer	//将develop分支更新到远程版本库

	//Step 3 多个人找develop分支上开发，可能会push失败，提示pull
	git pull	//将其他开发者提到远程库的代码更新到本地,然后编辑代码，确认变异正常，不影响别人开发
	git add *
	git commit -m "合并冲突"
	git push origin developer	//再次提交本地并更新到远程

	//Step 4 当一个功能在develop分支上开发并初步测试OK，就可以合并到master分支上，用于发布
	git checkout master	//切换到主分支
	git merge develop	//将develop分支上功能OK的代码合并到主分支上,   再次编译，测试OK
	git add *
	git commit -m "添加xxx功能"
	git push origin master	//或者git push，如果push 失败，需要像step3那样 git pull，编辑编译解决错误，git add *,git commit -m "merge"， git push origin master

	重复step 2, step 3, step4 为工程添加新功能
	一般将developer 换成debug ,用来修复bug


###Git方法
    git clone 远程库地址
    //本地编辑调试代码
    git add *
    git commit -m "修改说明"
    git push

####多人协作
如果是多人协作，在前面的第5步之前，一般需要做一下操作:

fork
git clone myUrl

git remote add upstring
git fecth upstring
git merge upstring/master


git checkout -b feature-branch

pull request  feature-branch    origin Response master or develop

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
