var http = require('http');
var url = require('url');
var util = require('util');

http.createServer(function (req, res) {
    var reqult = url.parse(req.url, true)
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end(util.inspect(reqult);
}).listen(3000);