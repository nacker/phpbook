// ! 细说函数

// ! 1. 命名函数

// 有名字的函数
// 命名: 动 + 名
// 声明
function getName(username) {
  return "Hello " + username;
}
// 调用
console.log(getName("猪老师"));

// ! 2. 匿名函数

// 没有名字的函数

// function (username) {
//   return "Hello " + username;
// }

// * 执行方式1: 立即执行

// * 立即执行函数( IIFE ):  声明 + 执行 2合1
// ! 2.1 IIFE
(function (username) {
  console.log("Hello " + username);
})("灭绝老师");

console.log(
  (function (username) {
    return "Hello " + username;
  })("灭绝老师")
);

// * IIFE: 阅后即焚, 不会给全局环境带来任何的污染,用来创建临时作用域
// node 模块, 就是用 IIFE 来写的

// * 执行方式2: 保存到一个变量中,
// ! 2.2 函数表达式

// 现在, "函数声明", 就变成了"变量声明", 只不过, 变量的值,是一个函数声明
const getUserName = function (username) {
  return "Hello " + username;
};

// ! 表达式: 任何一个可以计算出确定 "值"  的过程
// * 100, 12+45, 'a'+'c',

console.log(getUserName("马老师"));
console.log(getUserName);

// ! 3. 箭头函数

// 匿名函数: 函数表达式, 将函数声明保存到一个变量中, 以后使用这个变量来引用这个函数
let f1 = function (a, b) {
  return a + b;
};
console.log(f1(10, 20));

// 使用 箭头函数 来简化匿名函数的声明
// 匿名函数 --> 箭头函数的语法
// * 1. 去掉 function
// * 2. 在参数括号(...) 与 大括号{...} 之间使用 胖箭头 => 连接
f1 = (a, b) => {
  return a + b;
};
console.log(f1(8, 9));

// 只有一个参数的时候, 括号可以不要了
f1 = username => {
  return "Hello " + username;
};

// 如果只有一条语句,return ,可以不写大括号
// 因为只有一条语句,默认就是return ,所以 return 也可以不写的
f1 = x => {
  return x * 2;
};

f1 = x => x * 2;
console.log(f1(40));
console.log(f1(90));

// 没有参数时, 括号一定要写上
f1 = () => "今天天气很好";
console.log(f1());

f1 = $ => 100 + 200;
console.log(f1());

f1 = _ => 100 + 200;
console.log(f1());

// 箭头函数, 内部的 this, 是固定的, 与它的上下文绑定 , 不能充当构造函数来创建对象
// 箭头函数内部没有 arguments 对象

// ! 使用场景

// 1. 如果函数需要多次调用, 用命名, 函数表达式, 都可以
// 2. 如果代码要求,必须遵循"先声明, 再调用"的规则, 那就必须用"函数表达式"
// 3. 如果只有完成一些特定的,一次性的工作, 不想留下任何痕迹, 用"IIFE", 模块
// 4. 如果调用函数时,需要一个函数充当参数,例如:回调, 就可以使用箭头函数来简化 匿名函数的 声明
