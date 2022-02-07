// 导出模块成员: module.exports
// module.exports 是完整的语法,它是一个对象
// exports 是 module.exports 的一个简化,别名

// let domain = "www.php.cn"
// let name = "PHP中文网"
// let getSite = function() {
//         return this.name + "(" + this.domain + ")"
//     }
// module.exports.domain = domain
// module.exports.name = name
// module.exports.getSite = getSite

// module.exports: 导出一个对象

// module.exports = { domain: domain, name: name, getSite: getSite }
// 属性与变量同名,且作用域相同,则可以只写属性,不写变量值
// module.exports = { domain, name, getSite }
// module.exports = { domain, name, getSite }

// 将 module.exports作为当前模块中的所有成员的"命名空间"来使用

// 推荐方案
module.exports = {
    domain: "www.php.cn",
    name: "PHP中文网",
    getSite() {
        return this.name + "(**" + this.domain + "**)"
    },
}