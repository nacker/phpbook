// Node中的模块

// 风格: CommonJS

// 模块就是一js文件, 内部成员全部私有,只有导出才可以被访问

// 1. 核心模块: 内置,开箱即用
// 2. 文件模块: 自定义
// 3. 第三方模块: npm安装的

// 1. 核心模块, 无须声明,直接导入并使用
const http = require("http")
    // console.log(http)
const fs = require("fs")
    // console.log(fs)

// 2. 文件模块: 先声明,再导入
// exports
let site = require("./m1.js")
    // console.log(site)
    // console.log(site.getSite())

site = require("./m2.js")
console.log(site)
console.log(site.getSite())

// exports: 导出多个
// module.exports: 导出一个