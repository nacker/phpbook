<!DOCTYPE html>
<html lang="zh-CN">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../font_icon/iconfont.css" />
    <link rel="stylesheet" href="../css/index-header.css" />
    <link rel="stylesheet" href="../css/index-main.css" />
    <link rel="stylesheet" href="../css/public-footer.css" />

    <title>首页: 主体部分</title>
</head>

<body>
    <!-- todo 头部 -->
    <header>
        <!-- ? 1. 顶部导航 -->
        <nav class="top">
            <a href="" class="active">推荐</a>
            <a href="">训练营</a>
            <a href="">会员</a>
            <a href=""><span class="iconfont icon-zhong"></span></a>
        </nav>

        <!-- ? 2. 搜索框 -->
        <!-- 搜索框实际上就是一个可点击跳转换盒子,最终搜索在"搜索页面"完成 -->
        <div class="search" onclick="location.href='search.html'">
            <span class="iconfont icon-fangdajing"></span>
            <span>搜索课程和关键词</span>
        </div>

        <!-- ? 3. 轮播图 -->
        <div class="slider">
            <div class="imgs">
                <!-- 轮播图默认从第一张开始显示 -->
                <a href=""><img src="../images/banner1.jpg" alt="" data-index="1" class="active" /></a>
                <a href=""><img src="../images/banner2.jpg" alt="" data-index="2" /></a>
                <a href=""><img src="../images/banner3.png" alt="" data-index="3" /></a>
            </div>
            <!-- 切换按钮数量与图片数量必须一致 -->
            <div class="btns">
                <span data-index="1" class="active" onclick="setActive()"></span>
                <span data-index="2" onclick="setActive()"></span>
                <span data-index="3" onclick="setActive()"></span>
            </div>
        </div>

        <script>
            // 获取全部图片与按钮
            const imgs = document.querySelectorAll("header .slider .imgs img");
            const btns = document.querySelectorAll("header .slider .btns span");
            // console.log(imgs, btns);
            // 返回数组键名数组[0,1,2],数组也是对象
            // console.log(Object.keys(btns));

            // 设置激活状态
            function setActive() {
                // 1. 清空按钮与图片的激活状态
                imgs.forEach(img => img.classList.remove("active"));
                btns.forEach(btn => btn.classList.remove("active"));

                // 2. 根据按钮索引设置激活对应的图片
                // event.target: 当前正在被点击的按钮
                event.target.classList.add("active");
                imgs.forEach(img => {
                    if (img.dataset.index == event.target.dataset.index) {
                        img.classList.add("active");
                    }
                });
            }

            // 图片自动播放(间隔2秒)
            let timer = setInterval(
                function(arr) {
                    // 头部取出来,再从尾部给它塞回去,这样就形成了一个首尾总是相连的永不间断的数组,实现循环
                    // arr.shift()头部取出元素
                    let i = arr.shift();
                    btns[i].dispatchEvent(new Event("click"));
                    // 将刚刚从头部取出的,再从尾部重新添加到数组中
                    // app.push(): 尾部追加元素
                    arr.push(i);
                },
                2000,
                // 定时器第三个参数,是传入到回调方法的参数,可以有多个,这里传入按钮索引的数组
                Object.keys(btns) // [0,1,2]
            );

            // 当前是移动端, 不需要为轮播图添加: "鼠标移出启动轮播/移出启动轮播" 的功能
            // 感兴趣的同学, 可以为它加上鼠标移入移出事件, 启动/清除定时器即可
        </script>

        <!-- ? 4. 公告 -->
        <div class="tips">
            <span class="iconfont icon-zhong"></span>
            <span>开课了! PHP从小白到大牛三个月速成班</span>
        </div>
        <?php
        // 模拟数据库数据集合
        $menus = [
            ["id" => 1, "name" => '找课程', "icon" => "chakankucun"],
            ["id" => 2, "name" => '前端', "icon" => "diannao"],
            ["id" => 3, "name" => '后端', "icon" => "web"],
            ["id" => 4, "name" => '数据库', "icon" => "yunshujuku"],
            ["id" => 5, "name" => '手册', "icon" => "anzhuangshouce"],
            ["id" => 6, "name" => '武侠', "icon" => "wushu"],
            ["id" => 7, "name" => '闯关', "icon" => "icon"],
            ["id" => 8, "name" => '路径', "icon" => "orbit-full"],

        ];
        ?>
        <!-- ? 5. 导航组 -->
        <nav class="main">
            <? foreach ($menus as $v) : ?>
                <a href="" data-id="<?= $v['id'] ?>"><span class="iconfont icon-<?= $v['icon'] ?>"></span><span><?= $v['name'] ?></span></a>
            <? endforeach ?>

        </nav>
    </header>

    <!-- todo 主体 -->
    <main style="min-height: 900px">
        <!-- ? 直播列表 -->
        <div class="course-list-1">
            <div class="title">
                <span>直播列表</span>
                <div class="more">
                    <span>更多</span>
                    <span class="iconfont icon-gengduomore12"></span>
                </div>
            </div>
            <ul class="courses">
                <li class="item">
                    <div class="img">
                        <img src="../images/course1.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 直播预约</span>
                        <span class="tag2">2022-02-17 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第十八期_综合实战</span>
                        <span>直播班</span>
                        <span class="iconfont icon-wode">&nbsp;402人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course1.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 即将上课</span>
                        <span class="tag2">2022-01-17 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第十八期_PHP开发</span>
                        <span>直播班</span>
                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course1.jpg" alt="" />
                        <span class="tag1">回放</span>

                    </div>
                    <div class="desc">
                        <span>第十八期_前端开发</span>
                        <span>直播班</span>
                        <span class="iconfont icon-wode">&nbsp;402人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course1.jpg" alt="" />
                        <span class="tag1">回放</span>

                    </div>
                    <div class="desc">
                        <span>公益直播|基于tp6的门店排号系统</span>
                        <span>公益</span>
                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course1.jpg" alt="" />
                        <span class="tag1">回放</span>

                    </div>
                    <div class="desc">
                        <span>公益直播|Uniapp 1:1仿饿了么</span>
                        <span>公益</span>
                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- ? 特色系列课程: 横向 -->
        <div class="course-list-2">
            <span>特色系列课程</span>

            <ul class="courses">
                <li class="item" onclick="location.href='xxx.html'">
                    <img src="../images/dgjj.jpg" alt="" />
                    <span class="title">独孤九剑系列课程</span>
                </li>
                <li class="item" onclick="location.href='xxx.html'">
                    <img src="../images/ynxj.jpg" alt="" />
                    <span class="title">玉女心经系列课程</span>
                </li>
                <li class="item" onclick="location.href='xxx.html'">
                    <img src="../images/tlbb.jpg" alt="" />
                    <span class="title">天龙八部系列课程</span>
                </li>
            </ul>
        </div>

        <!-- ? 最新课程 -->
        <div class="course-list-1">
            <div class="title">
                <span>最新课程</span>
                <div class="more">
                    <span>更多</span>
                    <span class="iconfont icon-gengduomore12"></span>
                </div>
            </div>
            <ul class="courses">
                <li class="item">
                    <div class="img">
                        <img src="../images/course2.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 直播预约</span>
                        <span class="tag2">2022-02-17 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第一期_大前端直播班</span>

                        <span class="iconfont icon-wode">&nbsp;402人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course2.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 直播预约</span>
                        <span class="tag2">2022-02-10 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第一期_大前端直播班</span>

                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course2.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 直播预约</span>
                        <span class="tag2">2022-02-17 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第一期_大前端直播班</span>

                        <span class="iconfont icon-wode">&nbsp;402人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course2.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i>直播预约</span>
                        <span class="tag2">2022-02-10 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第一期_大前端直播班</span>

                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
                <li class="item">
                    <div class="img">
                        <img src="../images/course2.jpg" alt="" />
                        <span class="tag1"><i class="iconfont icon-shizhong"></i> 直播预约</span>
                        <span class="tag2">2022-02-10 20:00</span>
                    </div>
                    <div class="desc">
                        <span>第一期_大前端直播班</span>

                        <span class="iconfont icon-wode">&nbsp;502人感兴趣</span>
                    </div>
                </li>
            </ul>
        </div>
    </main>

    <!-- todo 底部 -->
    <!-- ! 注意: 每个页面都有底部,并且完全相同,所以应该做成公共组件 -->
    <footer>
        <div class="item active" onclick="location.href= 'index.html'">
            <span class="iconfont icon-shouye"></span>
            <span>首页</span>
        </div>
        <div class="item" onclick="location.href='category.html'">
            <span class="iconfont icon-fenlei"></span>
            <span>分类</span>
        </div>
        <div class="item" onclick="location.href='live.html'">
            <span class="iconfont icon-zhibo-01"></span>
            <span>直播</span>
        </div>
        <div class="item" onclick="location.href='study.html'">
            <span class="iconfont icon-xuexi"></span>
            <span>学习</span>
        </div>
        <div class="item" onclick="location.href='user.html'">
            <span class="iconfont icon-wode"></span>
            <span>我的</span>
        </div>
    </footer>
    <!-- 加载 JS 公共函数库 -->
    <script src="../js/public-func.js"></script>
</body>

</html>