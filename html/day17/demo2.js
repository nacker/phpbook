// http模块

// 导入http模块
const http = require("http")

http
    .createServer((request, response) => {
        // 设置响应头
        // response.writeHead(200, { "Content-Type": "text/plain" })
        // 写入并结束
        // response.end("Hello World")

        // html
        // "text/plain"  -> "text/html"
        //   response.writeHead(200, { "Content-Type": "text/html" })
        //   response.end("<h1 style='color:red'>Hello World</h1>")

        // json
        // "text/html"  -> "application/json"
        response.writeHead(200, { "Content-Type": "application/json" })
        response.end(`
        {
            "userId":123,
            "userName": "猪老师",
            "email": "498668472@qq.com"
        }
      `)
    })
    .listen(8081, () => console.log("http://127.0.0.1:8081/"))