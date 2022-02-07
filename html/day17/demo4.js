// path模块

const str = "./node/hello.js"

const path = require("path")

// 绝对路径
// console.log(path.resolve(str))

// 目录部分
// console.log(path.dirname(str))

// 文件名
// console.log(path.basename(str))

// 扩展名
// console.log(path.extname(str))

// pathStr -> obj
// console.log(path.parse(str))

// obj->pathStr
const obj = {
    root: "",
    dir: "./demo",
    base: "test.js",
    ext: ".js",
    name: "test",
}

console.log(path.format(obj))

// ./demo\test.js