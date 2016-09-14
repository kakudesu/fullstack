// 函数
function print(value) {
    document.writeln(value);
}
print('hello javascript');
// 换行
print('<br/>');

// 数学函数
function hello(deagree) {
    return Math.log(deagree);
}
print(hello(1));

print('<br/>');

// 设计
function totalPrice(num, tang) {
    return num * tang;
}
print(totalPrice(4, 3));

// object
print('<br/>');
product = {};
product.price = 4.00;
product.num = 3;
print(totalPrice(product.price, product.num));

// 对象 方法
print('<br/>');
var IO = new Object();
IO.print = print;
IO.print("a obejct with function");
IO.print(typeof IO.print);

// 对象 方法 属性
print('<br/>');
var Person = { name: "phodal", weight: 50, height: 166 };
function dream() {
    future;
};
Person.future = dream;
print(typeof Person)
print(Person.future);