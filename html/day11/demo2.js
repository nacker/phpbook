// todo 访问器属性

let user = {
  data: { name: "猪老师", age: 18 },
  getage() {
    return this.data.age;
  },
  setage(age) {
    if (age >= 18 && age <= 120) {
      this.data.age = age;
    } else {
      console.log("非法数据");
    }
  },
};

// console.log(user.data.name, user.data.age);
console.log(user.getage());
user.setage(60);
console.log(user.getage());

// 根据用户习惯, 访问属性
// 读
// console.log(user.age);
// 写
// user.age = age;

// 进行属性伪装, 将一个方法伪装成属性进行访问 : 访问器属性

user = {
  data: { name: "猪老师", age: 18 },
  get age() {
    return this.data.age;
  },
  set age(age) {
    if (age >= 18 && age <= 120) {
      this.data.age = age;
    } else {
      console.log("非法数据");
    }
  },
};

// 读
console.log(user.age);
// 写
user.age = 30;

console.log(user.age);

// 访问器属性: 看上去我们访问的是属性, 实际上调用的是方法
