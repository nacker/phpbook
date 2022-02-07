// y 对象字面量的简化,推荐使用

let name = "猪老湿";

// ! 属性简化
let user = {
  //   name: "猪老湿",
  //   name: name,
  //   * 1 变量name 与 属性name 同名
  //   * 2且在同一个作用域中,可以不写变量名
  name,
};

console.log(user.name);

// ! 方法简化
user = {
  name,
  // 所谓方法:本质仍是属性,只不过它的值是一个函数声明
  //   getName: function () {
  //     return this.name;
  //   },
  //   简化,将 ”: function" 删除
  getName() {
    return this.name;
  },

  // 箭头函数
  getName1: () => this.name,

  //   箭头函数如果用到 this, 就不要用到对象字面量方法中
  //   this: 普通函数, 调用时确定
  //   this: 箭头函数, 声明时确定
};

console.log(user.getName());
console.log(user.getName1());
