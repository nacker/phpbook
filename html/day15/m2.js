let user = "猪老师";
function hello(name) {
  return "Hello " + name;
}

let email = "498668472@qq.com";

// hello 默认导出的成员
export { user, hello as default, email };
