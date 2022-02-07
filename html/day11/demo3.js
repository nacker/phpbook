// 类与对象

// ! 构造函数, 创建对象专用
let User = function (name, email) {
  this.name = name;
  this.email = email;
};

User = function (name, email) {
  // 1. 创建一个新对象
  // let this = new User;

  // 2. 给新对象添加自定义的属性
  this.name = name;
  this.email = email;

  // 3. 返回 这个新对象
  //   return this;

  //   以上, 1, 3 都是new的时候,自动执行, 不需要用户写
};

const user1 = new User("admin", "admin@php.cn");
console.log(user1);
const user2 = new User("zhu", "zhu@php.cn");
console.log(user2);

// 对象方法一般是公共, 操作的是当前对象的属性
// 任何一个函数都有一个属性, 叫原型, 这个原型,对于普通函数来说,没用
// 只有把函数当 成构造函数来创建对象时, 这个原型属性才有用

console.log(User.prototype, typeof User.prototype);
// 给类User添加自定义方法,必须添加到它的原型对象属性上
// 声明在 User.prototype原型上的方法, 被所有类实例/对象所共用
User.prototype.getInfo = function () {
  return `name = ${this.name}, email = ${this.email}`;
};
console.log(user1.getInfo());
console.log(user2.getInfo());

// 静态成员: 直接挂载到构造函数对象上的属性
User.status = "enabled";
console.log(User.status);

// 私有成员
User = function (name, email, sex) {
  // 私有变量
  let gender = sex;
  this.name = name;
  this.email = email;
  console.log(gender);
};
const user3 = new User("jack", "jack@php.cn", "male");
console.log(user3);

// 传统的基于构造函数的类与对象,语法上非常的复杂, 对于从语言转到js来的同学来说, 不友好

// ES6, class

class Parent {
  // 公共字段(可选)
  name = "username";
  email = "username@email.com";

  // 私有成员
  #gender = "male";

  // 构造方法
  constructor(name, email, sex) {
    this.name = name;
    this.email = email;
    this.#gender = sex;
  }

  // 公共方法: 原型
  getInfo() {
    return `name = ${this.name}, email = ${this.email}, sex=${this.#gender}`;
  }

  // 静态成员
  static status = "enabled";
}

const user4 = new Parent("猪老师", "zhulaoshi@php.cn", "男");
console.log(user4.getInfo());

// 继承, 为了扩展

class Child extends Parent {
  constructor(name, email, sex, salary) {
    super(name, email, sex);
    // 子类中的新属性
    this.salary = salary;
  }
  getInfo() {
    return `${super.getInfo()}, salary = ${this.salary}`;
  }
}

const user5 = new Child("灭绝", "mj@php.cn", "女", 12345676);
console.log(user5.getInfo());

// 在类中可以使用访问器属性

class Stu {
  #age = 0;

  get age() {
    return this.#age;
  }

  set age(age) {
    if (age >= 18 && age <= 120) {
      this.#age = age;
    } else {
      console.log("非法数据");
    }
  }
}

let stu = new Stu();

console.log(stu.age);
stu.age = 40;
console.log(stu.age);
