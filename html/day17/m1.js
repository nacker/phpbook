// 模块: exports

// exports: 导出多个
// 1. 逐个导出
// exports.domain = "www.php.cn"
// exports.name = "PHP中文网"
// exports.getSite = function() {
//     return this.name + "(" + this.domain + ")"
// }

// 2. 统一导出
let domain = "www.php.cn"
let name = "PHP中文网"
let getSite = function() {
    return this.name + "(" + this.domain + ")"
}
exports.domain = domain
exports.name = name
exports.getSite = getSite