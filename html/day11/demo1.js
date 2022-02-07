// todo 闭包

// y 自由变量

let x = 10;

let fn = function (a, b) {
  /**
   * 函数内部的变量
   * 1. 参数变量: a, b
   * 2. 内部变量: c
   */

  let c = 3;

  // a,b,c: 私有变量

  //   return a + b + c;

  // x : 声明在函数外部

  // x : 自由变量
  return a + b + c + x;
};

console.log(fn(1, 2));

// 实际开发中的用到的闭包

/**
 * * 闭包
 * * 1. 父子函数
 * * 2. 子函数调用了父函数中的变量
 */

fn = function (a) {
  // a = 10;
  // 1. 父子函数, f: 子函数
  let f = function (b) {
    // b = 20;
    return a + b;
  };
  // 2. 返回一个子函数
  return f;
};

let f = fn(10);
// fn()调用完成,但是内部的a被子函数引用了, 所以fn()创建的作用域不消失
console.log(typeof f);
console.log(f(20));

// 闭包: 偏函数(高阶函数的一种)

// 当一个函数需要多个参数的时候,不一定一次性全部传入,可以分批传入
fn = function (a, b, c) {
  return a + b + c;
};
console.log(fn(1, 2, 3));
console.log(fn(1, 2));

fn = function (a, b) {
  return function (c) {
    return a + b + c;
  };
};

// 使用闭包, 可以将三个参数分2次传入
f = fn(1, 2);
console.log(f(3));

//能不能分3次?

fn = function (a) {
  return function (b) {
    return function (c) {
      return a + b + c;
    };
  };
};

console.log(fn(1)(2)(3));
// 将参数逐个传入, 叫"柯里化"函数
// 服务器获取数据, 大量数据分块获取,分批传入

// 将上面的柯里化函数,改为箭头函数
fn = a => b => c => a + b + c;
console.log(fn(1)(2)(3));

// ! 把闭包: 纯函数

// 纯函数: 函数中用到的变量全间自己的, 没有"自由变量"

// 如果函数内部必须要用到外部变量怎么办? 通过参数传入

// 外部变量
let discound = 0.8;

function getPrice(price, discound = 1) {
  // 纯函数中禁用有自由变量
  return price * discound;
}

console.log(getPrice(12000, discound));
