// ! 数据类型

// ! 1. 原始类型
// * number, string, boolean, undefined, null
// 不可再分, 是构成其它复合类型的基本单元

console.log(123, typeof 123);
console.log("php", typeof "php");
console.log(true, typeof true);

console.log(undefined, typeof undefined);
console.log(null, typeof null);

// 原始类型, 简单类型, 基本类型:  一个变量,存一个值
// 单值类型
let a = 1;
console.log(typeof a);
a = "php";
console.log(typeof a);
// 动态语言: 变量的类型, 由它的值的类型决定

// ! 2. 引用类型

// 引用类型, 都是对象, 默认返回 object ,函数除外 function

// * array, object, function

// 引用类型: 类似其它语言中的"复用类型", 集合类型
// 引用类型的数据,由一个或多个, 相同, 或不同类型的"原始类型"的值构造
// 是一个典型的: 多值类型

// ! 2.1 数组
// 声明
const arr = ["手机", 2, 5000];
console.log(arr);
// 数组的索引是从0开始递增的正整数, 0, 1, 2
console.log(arr[0]);
console.log(arr[1]);
console.log(arr[2]);
console.log(arr[3]);

console.log(typeof arr);
// 判断数组类型的正确方法
console.log(Array.isArray(arr));

// 为了更直观的表达数据之间的关联, 可以将 数字索引 换 有意义 的"字符串"

// const arr1 = { 0: "手机", 1: 2, 2: 5000 };
// console.log(arr1);
// console.log(arr1[0]);
// console.log(arr1[1]);

// ! 2.2 对象
// 对象 更像一个语义化的  数组
// name, num , price : 属性,类似于变量
let obj = { name: "手机", num: 2, price: 5000 };
console.log(obj);
console.log(obj["name"]);
console.log(obj["num"]);
console.log(obj["price"]);

// 因为对象的属性名称都是合法的标识符,可以使用点来访问
console.log(obj.name, obj.num, obj.price);

// 当属性名是非常标识符时, 必须使用数组的方式来访问对象的属性
obj = { "my email": "admin@php.cn" };
console.log(obj["my email"]);

// * 对象最吸引人的,不是数组的语义化封装, 而是对数据操作的封装, 方法(语法与函数是一样的)
// 本质上来说, 对象, 就是变量与函数的封装, 内部, 变量->属性, 函数 -> 方法
obj = {
  // name, num, price: 属性, 类似于变量
  name: "手机",
  num: 3,
  price: 7000,

  // total: 方法,实际上还是一个属性,只不过它的值是一个函数
  total: function () {
    // let str = obj.name + " 总计: " + obj.num * obj.price + " 元 ";
    // 模板字面量, 来简化, 内部有变量的字符串
    // let str = obj.name + " 总计: " + obj.num * obj.price + " 元 ";
    // 反引号声明的模板字符串, 可以插入变量/表达式, 这叫"插值"
    // 应该是对象内部, 使用 当前对象的一个引用, 这样才独立于外部对象
    // let str = `${obj.name} 总计 ${obj.num * obj.price} 元`;
    // this: 始终与当前对象绑定(执行环境 /  执行上下文 )
    // this = obj
    let str = `${this.name} 总计 ${this.num * this.price} 元`;
    return str;
  },
};

console.log(obj.total());

console.log(typeof obj);
console.log(obj instanceof Object);

// 实际工作中, 而是将数组与对象组合起来一起用
// obj是一个由三个对象构成的数组
obj = [
  { name: "手机", num: 2, price: 5000 },
  { name: "电脑", num: 2, price: 5000 },
  { name: "相机", num: 2, price: 5000 },
];

// 求三个商品的总和
let res = obj.map(item => item.num * item.price).reduce((acc, cur) => acc + cur);
console.log(res);

// ! 3. 函数
// 函数是一种数据类型 , 并且 还是 对象

console.log(typeof function () {});
// 函数即是函数, 也是对象
console.log(function () {} instanceof Object);

// ! (一) 函数是数据类型的好处?
// 可以当成普通值来使用, 例如充当函数的参数,或者函数的返回值
// 这个很重要, 当参数,就是回调函数, 当返回值,可以创建一个闭包
// js中很多高级应用, 都严重依赖这二个功能, 这也是"高阶函数"的基本特征
// 函数是js的一等公民, 就是通过这个体现的

// * 应用场景1: 函数做为参数使用, 回调
function f1(callback) {
  // 参数 callback 是一个函数
  console.log(callback());
}

// 调用f1, 匿名函数当成f1的参数
f1(function () {
  return "Hello 朱老师";
});

// * 应用场景2: 函数当成返回值, 闭包
function f2() {
  let a = 1;
  return function () {
    return a++;
  };
}

// f2()返回值是一个函数
console.log(f2());
const f = f2();
console.log(f);
console.log(f());
console.log(f());
console.log(f());
console.log(f());
console.log(f());
console.log(f());

//* 以上的 回调 + 闭包, 都 是 函数当成"值"来用的经典应用场景

// * 以下是函数当成对象来用

// * 对象有属性和方法, 当然函数也有属性有方法

function func(a, b) {
  return a + b;
}
// 查看函数名
console.log(func.name);
// 查看函数需要几个参数
console.log(func.length);

func.email = "498668472@qq.com";

console.log(func.email);

// ! 函数当成对象有啥用呢?
// * 用处太大了, 整个JS语言体系就靠它撑着了
// * 就算是你没学过编程, 至少听说过面向对象编程, 对象可以被继承,实现代码复用
// * 而JS就是基于原型,实现的继承, 而原型,就是在函数上创建一个普通对象而已
// console.log(func.prototype);
// * 后面要学到的类class,构造函数, 他们都是基于"函数是对象"这个前提的
