function hello() {
    return document.write("hello,world");
}
hello();



function calc(tang, num) {
    return tang * num;
}

function printResult(tang, num) {
    document.write(calc(tang, num));
}
printResult(3, 4)



store = {};
store.tang = 4;
store.num = 3;
document.write(store.tang * store.num);