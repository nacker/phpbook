// todo 流程控制 : 分支
/**
 * * 程序默认执行流程:
 * * 1. 顺序: (默认)
 * * 2. 分支: 单分支, 双分支, 多分支
 * * 3. 循环: 单分支的重复执行
 */

// 代码块
{
  console.log("Hello php.cn");
}

// ! 分支: 有条件的执行某个代码块

// * 单分支: 仅当表达式计算结果为真时, 才执行代码块

let age = 28;

// age >= 18 true: 执行
if (age >= 18) {
  console.log("允许观看");
}

// 如果为false, 怎么办?
// 创建一个分支: 默认分支,  else

// ! 双分支: 有一个"默认分支"

age = 15;

if (age >= 18) {
  console.log("允许观看");
}
// * 默认分支
else {
  console.log("少儿不宜");
}

// ! 双分支的简化

// ! 双分支属于高频操作, 系统提供了一个"语法糖"(简化方案): 三元
// * 语法: (条件)  ? true : false
age = 50;
let res = age >= 18 ? "允许观看" : "少儿不宜";
console.log(res);

// ! 多分支: 有多个"默认分支"
age = 4;
if (age >= 18 && age < 35) {
  console.log("允许单独观看");
}
// * 第1个默认分支
else if (age >= 35 && age < 60) {
  console.log("建议二人观看");
}
// * 第2个默认分支
else if (age >= 60 && age < 120) {
  console.log("建议在家人陪同下观看");
}
// * 第3个默认分支: 异常分支, 使用 "||" 或 , 满足条件之一就可以了, true
else if (age <= 3 || age >= 120) {
  console.log("非法年龄");
}
// * 默认分支(可选)
else {
  console.log("少儿不宜");
}

// 传统多分, if - else if - else if --- , 代码混乱
// switch 进行优化

// ! 多分支 switch
age = 15;
// * 区间判断, 使用 true
switch (true) {
  case age >= 18 && age < 35:
    console.log(允许单独观看);
    break;
  case age >= 35 && age < 60:
    console.log("建议二人观看");
    break;
  case age > 60 && age < 120:
    console.log("请在家人陪同下观看");
    break;
  case age <= 3 || age >= 120:
    console.log("非法年龄");
    break;
  default:
    console.log("少儿不宜");
}

// * 单值判断: 变量
let lang = "html";
lang = "css";
lang = "javascript";
lang = "js";
lang = "CSS";
lang = "JavaScript";
lang = "HTML";
console.log(lang.toLowerCase());

switch (lang.toLowerCase()) {
  // 将传入的进行判断的变量值,进行统一化
  // 将传入的字符串, 全部小写, 或者 大写
  case "html":
    console.log("超文本标记语言");
    break;
  case "css":
    console.log("层叠样式表");
    break;
  case "javascript":
  case "js":
    console.log("通用前端脚本编程语言");
    break;
  default:
    console.log("不能识别");
}
