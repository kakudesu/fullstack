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

// 对象 方法 属性 实例
var Person = function() {
    this.name = "phodal";
    this.weight = 50;
    this.height = 166
    this.future = function dream() {
        return "future"
    }
};
var person = new Person();
print(person + "<br>");
print(person.name + "<br>");
print(person.future + "<br>")
print(typeof person + "<br>");
print(typeof person.future + "<br>");
print('<br/>');