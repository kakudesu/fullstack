var http = require('http');
var querystring = require('querystring');

http.createServer(function(req, res) {
    //req.setEncoding('utf-8');
    var postData = '';
    // 注册监听, 接收数据块
    req.on("data", function(postDataChunk) {
        postData += postDataChunk;
    });
    // 数据接收完毕, 执行回调函数
    req.on("end", function() {
        var result = querystring.parse(postData); //解析 HEADER 中的数据
        
        res.writeHead(200, { 'Content-Type': 'text/plain' });
        res.end(result);
    });
}).listen(3000);