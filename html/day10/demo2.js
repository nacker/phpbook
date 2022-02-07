// todo 流程控制: 循环

const colors = ["red", "green", "blue"];
// 0: red,  1: green,  2: blue

// * 1. 从哪开始? 2. 到哪结束? 索引从 0 开始, 到2 结束
console.log(colors[0], colors[1], colors[2]);
//array是一个对象, 是对象就会有属性或方法
// colors.length 数组长度, 数组内的成员数量
console.log(colors.length);

// 最后一个
console.log(colors[2]);
console.log(colors[colors.length - 1]);

// 遍历结束的标记, 数组越界了, undefined
console.log(colors[3]);
console.log(colors[colors.length]);

// * 1. 起始索引
let i = 0;

// * 2. 循环条件
let length = colors.length;
// i < colors.length 直到  i === 3 , i === colors.length的时候,遍历结束

// * 3. 更新条件
// 让数据的索引,自动指向下一个成员, 更新必须在代码块中
// ! 必须更新条件，否则进入死循环

// 第1次遍历
if (i < length) {
  console.log(colors[i]);
  // * 更新条件, 将 i 指向下一个元素的索引
  //   i = i + 1;
  //   i += 1;
  //   如果每一次都递增 1, 还可进一步简化
  i++;
}
console.log(i);
// 第2次遍历
if (i < length) {
  console.log(colors[i]);
  // * 更新条件
  i++;
}
console.log(i);
// 第3次遍历
if (i < length) {
  console.log(colors[i]);
  // * 更新条件
  i++;
}
console.log(i);
// 第4次遍历, 3 === length, i<length 为 false 不执行了
if (i < length) {
  console.log(colors[i]);
  // * 更新条件
  i++;
}
console.log(i);

// ! while 循环
// * while 可以将上面的多次的if()遍历进行合并
i = 0;
while (i < length) {
  console.log(colors[i]);
  // * 更新条件
  i++;
}

/**
 * * 循环三条件
 * * 1. 初始条件: 数组索引的引用 ( i = 0 )
 * * 2. 循环条件: 为真才执行循环体 ( i < arr.length )
 * * 3. 更新条件: 必须要有,否则进入死循环 ( i++ )
 */

// //while()入口型判断
// * do {} while(), 出口型判断,无论条件是否成立, 必须执行一次代码块
i = 0;
do {
  console.log(colors[i]);
  // * 更新条件
  i++;
} while (i > length);

// ! for () 是 while 的简化
// * 语法: for (初始条件; 循环条件; 更新条件) {...}

for (let i = 0; i < colors.length; i++) {
  console.log(colors[i]);
}

// 优化, 将数组长度,提前计算出来缓存到一个变量中
for (let i = 0, length = colors.length; i < length; i++) {
  console.log(colors[i]);
}

// ! for - of : 快速迭代处理集合数据
// * 数组内部有一个迭代器的方法, 可以用for-of
// * for-of优点: 用户不必再去关心索引, 而将注意力集中到数组成员上

// v 输出数组中的 "键值" 对组成的数组
for (let item of colors.entries()) {
  console.log(item);
}
// v 输出数组中的 "键" 对组成的数组
for (let item of colors.keys()) {
  console.log(item);
}

// v 输出数组中的 "值" 对组成的数组
for (let item of colors.values()) {
  console.log(item);
}

// ! 默认调用values(),输出值
for (let item of colors) {
  console.log(item);
}

// ! for - in: 遍历对象
const obj = { a: 1, b: 2, c: 3, say: function () {} };

// 遍历对象
for (let key in obj) {
  console.log(obj[key]);
}
// 数组也是对象
for (let i in colors) {
  console.log(colors[i]);
}

// 数组也能用for-in,但不要这么用, for - of, forEach, map...
