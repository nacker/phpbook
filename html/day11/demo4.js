// todo 解构赋值

const user = ["朱老师", "498668472@qq.com"];
let userName = user[0];
let userEmail = user[1];
console.log(userName, userEmail);

// es6: 解构, 将以上操作变得非常简单
// 1. 数组解构
// 模板  = 数组
let [name, email] = ["朱老师", "498668472@qq.com"];
console.log(name, email);

[name, email] = ["王老师", "123456@qq.com"];
console.log(name, email);
// 参数不足, 默认参数
[name, email, age = 18] = ["王老师", "123456@qq.com"];
console.log(name, email, age);
// 参数过多, ...rest
let [a, b, c, ...d] = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
console.log(a, b, c, d);

// 二数交换
let x = 100;
let y = 200;
console.log([x, y]);
[y, x] = [x, y];
console.log([x, y]);

// 2. 对象解构
// 对象模板 = 对象字面量
let { id, lesson, score } = { id: 1, lesson: "js", score: 80 };
console.log(id, lesson, score);
// 大括号 不能出现在等号左边, {}不能充当"左值", 使用括号包一下转为表达式就可以了
 ({ id, lesson, score }) = { id: 2, lesson: "node", score: 90 };
console.log(id, lesson, score);
// 当左边模板中的变量出现命名冲突,使用别名解决
let { id:userId, lesson:userLesson, score:userScore } = { id: 3, lesson: "vue", score: 50 };
console.log(userId, userLesson, userScore);
// 克隆对象
let {...obj} ={ id: 1, lesson: "js", score: 80 };
console.log(obj);

// 3. 应用场景 
function getUser(user) {
    console.log(user.id,user.name,user.email);
}

// 用对象解构传参
function getUser({id,name,email}) {
    console.log(id,name,email);
}
getUser({id:123, name:'张三',email:'zs@php.cn'})
