// 函数
function print(value) {
    document.writeln(value);
}
print('hello javascript' + "<br>");
print('<br/>');

// 数学函数
function hello(deagree) {
    return Math.log(deagree);
}
print(hello(1) + "<br>");
print('<br/>');

// 设计
function totalPrice(num, tang) {
    return num * tang;
}
print(totalPrice(4, 3) + "<br>");
print('<br/>');

// object
product = {};
product.price = 4.00;
product.num = 3;
print(totalPrice(product.price, product.num) + "<br>");
print('<br/>');

// 对象 方法
var io = new Object();
io.print = print;
io.print("a obejct with function" + "<br>");
io.print(typeof io + "<br>");
io.print(typeof io.print + "<br>");
print('<br/>');

// 对象 方法 属性 实例 可重用
var Person = function(name, weight, height) {
    this.name = name;
    this.weight = weight;
    this.height = height;
    this.future = function dream() {
        return "future"
    }
};
var person = new Person("Songwen", 55, 172);
print(person + "<br>");
print(person.name + "<br>");
print(person.future + "<br>")
print(typeof person + "<br>");
print(typeof person.future + "<br>");
print('<br/>');

// 连接, 共享, （好无理啊）
var Country = function() {
    this.code = "CHN";
}
var country = new Country();
Person.prototype = country;
var person2 = new Person("Songwen2", 55, 172);
var person3 = new Person("Songwen3", 55, 172);
print(person2.name + person2.code + "<br>");
print(person3.name + person3.code + "<br>");
country.code = "EN";
print(person2.name + person2.code + "<br>");
print(person3.name + person3.code + "<br>");
person2.code = "TW";
print(person2.name + person2.code + "<br>");
print(person3.name + person3.code + "<br>");
print(country.code + "<br>");
country.code = "HK";
print(person2.name + person2.code + "<br>");
print(person3.name + person3.code + "<br>");
print('<br/>');


var para = document.getElementById("para");
para.style.color = "orange";


// 创建 XMLHttpRequest 对象
var xmlhttp;
try {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
} catch (e) {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
// 每次改变 readyState，都会调用该方法
xmlhttp.onreadystatechange = function() {
    //print(xmlhttp.readyState);
    //print(xmlhttp.status);
    //print(xmlhttp.responseText);

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        // AJAX 请求成功，处理响应数据
        document.getElementById("para").innerHTML = xmlhttp.responseText;
        document.getElementById("para").style.color = "green";
    }

}

// 初始化请求参数
xmlhttp.open("POST", "http://music.163.com/api/search/get/1111", true);
// 发送请求
xmlhttp.send();