# Node.js 基础

## 1. 下载与安装

1. 下载: <https://nodejs.org/zh-cn/>
2. 参考镜像: <http://nodejs.cn/>

```shell
# node版本号
node --version
node -v;
# npm版本号
npm --version
npm -v;

# 查看当前路径
pwd

# 进入目录
cd path # path用具体路径名称代替

# 清屏
clear

```

> node 参数规律: 全称用"--", 简化用 "-"

## 2. 命令行交互式

```shell
node
> let a = 1;
> let b = 2;
> console.log(`${a} + ${b} = ${a+b}`);
> process.exit() # 退出命令行
> .exit # process.exit()简化
```

## 3. 执行 js 文件

- `demo1.js`

```js
let a = 1;
let b = 2;
console.log(`${a} + ${b} = ${a + b}`);

// console.log()控制台输出,类似还有:
// console.info(): 与console.log()功能类似
// console.dir(): 对象信息
// console.warn(): 警告信息
// console.error(): 出错信息
// console.trace(): 当前跟踪栈信息
// console.time(f),console.timeEnd(f)统计执行时间
```

- 执行

```shell
# node js文件名
node demo1.js
> 1 + 2 = 3

# node 默认执行的就是js文件,所以扩展名可省略
node demo1
> 1 + 2 = 3
```

## 4. npm

- `npm`: node 内置的"包"管理器,与 node 发行版本一起提供
- `npm version`: 查询当前`npm`更详细的描述信息

> NPM 是通过`package.json`配置文件管理当前项目依赖项

- 生成`package.json`

  - 交互式: `npm init`
  - 默认: `npm init --yes` 或 `npm init -y`(推荐)

<!-- ^4.17.21:
4: 主版本
17: 次版本
21: 补丁/修复 -->

- 版本号规则: `主版本.次版本.补丁版本`,例如`3.2.3`
  - `^`: 锁定`主版本`,更新到最新的`次版本和补丁版本`,`^3.3.3`=>`3.5.x`,但不会到`4.0.x`
  - `~`: 锁定`次版本`,更新到最新的`补丁版本`,`~3.2.3`=>`3.2.5`但不会到`3.3.x`
  - `*`: 任意版本,即最新版本
  - `a,b,c`: 锁定到指定版本,禁止更新
- 版本书写举例
  - 只接受补丁版本的更新:
  - `1.0`
  - `1.0.x`
  - `~1.0.4`
- 只接受小版本更新:默认补丁也接受
  - `1`
  - `1.x`
  - `^1.0.4`
- 可接受大版本更新,默认次版本补丁都接受
  - `*`

## 5. 安装与删除包

- `package.json`与包相关字段

  - `dependencies`: 生产依赖
  - `devDependencies`: 开发依赖

- 安装包指令: `npm install package` 或 `npm i package`
- 删除包指令 `npm uninstall package` 或 `npm uni package`

- 参数:

  - 生产依赖: `--save`或`-S`
  - 开发依赖: `--save-dev`或`-D`

- 包会自动下载到`node_modules`目录中,如果目录不存在会自动创建
- 并会创建或更新`package-lock.json`文件,锁定当前版本
- 当再次安装时,会直接安装`package-lock.json`中的指定的版本

## 6. 更新包

```shell
# 检查是否有可更新的包
# 检查全部
npm outdated
# 检查指定包
npm outdated lodash

# 安装用来更新包的插件,推荐安装到全局
npm i -g npm-check-updates

# 查看是否安装成功?
npm list -g

# 用更新插件来检查可更新的包的列表
npm-check-updates
# 该命令太长, 通常用 ncu 简化
ncu

# 更新所有包到最新版本
ncu -u
# 或仅更新指定的包也可以
ncu -u lodash

# 查看 package.json, 版本号已更新
# 现在只是版本了版本号, 最新的包,还是下载安装到项目中
# 即 "node_modules"中的包,还是老版本
# 所以,还要用 npm install 安装一下

npm install

# 再次查看包版本,已更新到最新版本
npm list

# 打开package-lock.json,可以看到已锁定到最新版本
# 更新成功,结束
```
