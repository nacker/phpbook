// 文件模块
// console.log(__dirname)
const fs = require("fs")
fs.readFile(__dirname + "/readme.txt", (err, data) => {
    if (err) return console.error(err)
    console.log(data.toString())
})