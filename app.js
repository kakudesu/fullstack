function print(value) {
    document.writeln(value);
}
print('hello javascript');

print('<br/>');

function hello(deagree) {
    return Math.log(deagree);
}
print(hello(1));

print('<br/>');

function totalPrice(num, tang) {
    return num * tang;
}
print(totalPrice(4, 3));

print('<br/>');
product = {};
product.price = 4.00;
product.num = 3;
print(totalPrice(product.price, product.num));

print('<br/>');
var IO = new Object();
IO.print = print;
IO.print("a obejct with function");
IO.print(typeof IO.print);

print('<br/>');
var Person = { name: "phodal", weight: 50, height: 166 };

function dream() {
    future;
};
Person.future = dream;
print(typeof Person)
print(Person.future);