### 常规操作

* 安装 node

  `curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.25.2/install.sh | bash`

* 运行 app

  `node app.js`

* 初始化 npm

  `npm init`

* 安装/列出 pack

  `npm install express --registry=https://registry.npm.taobao.org` 

  ` npm list`

* 安装/列出 model

  ` npm install NODEL_NAME --save`

  ``ls -l ./node_modules`

### Package

| package    | discription                              |
| :--------- | :--------------------------------------- |
| express    |                                          |
| utility    |                                          |
| superagent | http 方面的库，可以发起 get 或 post 请求             |
| cheerio    | Node.js 版的 jquery，用来从网页中以 css selector 取数据，使用方式跟 jquery 一样一样的 |
| eventproxy | 起到计数器的作用                                 |
| async      | 控制并发连接数                                  |
| should     | 断言库                                      |
