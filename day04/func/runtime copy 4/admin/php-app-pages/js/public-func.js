// 选项卡自动切换
function showDetails(ev) {
  // 事件冒泡, 事件代理/委托
  // 事件绑定者
  // console.log(ev.currentTarget);
  // 事件触发者
  // console.log(ev.target);

  //  1 获取左侧所有选项, 右侧所有列表详情
  const children = ev.currentTarget.children;
  const details = document.querySelectorAll(".container  .list");
  console.log(children, details);

  // 2. 去掉原来的激活状态,由用户点击行为重新创建
  [children, details].forEach(items => {
    // items: 是元素集合,非真正数组,需要转换一下
    // console.log(items);
    [...items].forEach(item => item.classList.remove("active"));
  });

  // 3. 将当前点击的选项设置为激活,并获取到自定率索引data-index
  ev.target.classList.add("active");
  const index = ev.target.dataset.index;

  // 4. 根据左侧索引设置右侧与之对应的列表
  details.forEach(item => {
    if (item.dataset.index === index) {
      item.classList.add("active");
    }
  });
}
