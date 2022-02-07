// ! 函数的参数与返回值

// y 1. 参数不足: 默认参数

let f = (a, b) => a + b;

console.log(f(1, 2));
// Nan: Not a Number
console.log(f(1));

// * 解决方案: 默认参数
f = (a, b = 0) => a + b;
console.log(f(1));
console.log(f(1, 2));

// y 2. 参数过多, ...rest

f = (a, b) => a + b;
// 多余的参数3,4忽略了
console.log(f(1, 2, 3, 4));

// 怎么将多余的参数,全部接收? ...rest
f = (...arr) => arr;
// ! ...: rest语法,剩余参数,归并参数,将所以参数全部压入到一个数组中
console.log(f(1, 2, 3, 4, 5));
// ...集合数据,可以将它"展开"成一个个独立的元素,用在调用的时候
console.log(...[1, 2, 3, 4]);

f = (a, b, ...arr) => `${a}, ${b}, ${arr}`;
console.log(f(1, 2, 3, 4, 5, 6));
f = (a, b, ...arr) => arr;
console.log(f(1, 2, 3, 4, 5, 6));

// 计算任何数量的数据之和
f = (...arr) => arr.reduce((a, c) => a + c);
console.log(f(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));

// 从服务器API接口获取到了个商品列表: JSON数组
const list = ["笔记本电脑", "小米12手机", "佳能 EOS-R相机"];
console.log(list);
// 将每个商品,套上html标签,最终渲染到html页面中
f = (...items) => items.map(item => `<li>${item}</li>`).join("");
console.log(f(...list));
// document.body.innerHTML = "<ul>" + f(...list) + "</ul>";

// ! 返回值

// p 函数默认:'单值返回'

// y 如何返回多个值?

// * 数组
f = () => [1, 2, 3];
console.log(f());

// * 对象: 模块
f = () => ({ a: 1, b: 2, get: function () {} });
console.log(f());
