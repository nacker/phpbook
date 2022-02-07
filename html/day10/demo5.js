// y 模板字面量 与 模板函数

// ! 模板字面量

// 传统
console.log("hello world");
// 模板字面量
console.log(`hello world`);
// 模板字面量中,可以使用"插值"(变量,表达式),可以解析变量
let name = "朱老师";
console.log("Hello " + name);
// 变量/表达式等插值,使用 ${...}插入到模板字面量中
console.log(`Hello ${name}`);
console.log(`10 + 20 = ${10 + 20}`);
console.log(`${10 < 20 ? `大于` : `小于`}`);

// ! 模板函数

// * 就是使用"模板字面量'为参数的函数

//* 模板函数(第一个参数是字面量组成的数组,第二个参数起,是字面量中的插值列表)

// y 声明模板函数
function total(strings, num, price) {
  console.log(strings);
  console.log(num, price);
}
let num = 10;
let price = 20;
// y 调用模板函数
total`数量: ${10}单价:${500}`;

// ! 模板函数的优化, 以后只用这一种, 上面也要能看懂
// * 使用 ...rest 将插值进行合并
function sum(strings, ...args) {
  console.log(strings);
  console.log(args);
  console.log(`[${args.join()}] 之和是:  ${args.reduce((a, c) => a + c)}`);
}

// 调用
sum`计算多个数和: ${1}${2}${3}${4}`;

/**
 * * 模板字面量: 可以使用插值表达式的字符串
 * * 模板函数: 可以使用"模板字面量"为参数的函数
 * * 模板函数,就是在"模板字面量"之前加一个标签/标识符,而这个标签,就是一个函数名
 * * 模板函数的参数是有约定的, 不能乱写, 第一个是字面量数组,从第二起才是内部的占位符参数
 */

// v 模板字面量, 也叫"模板字符串" , 是同义词,我觉得用"模板字面量"更直观,准确
// v 模板函数, 有的书也翻译与"标签函数", 因为 它使用"模板字面量"做参数,称为"模板函数"更直观, 一看知识必须传一个模板字面量当参数
