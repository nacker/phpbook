// 渲染用户数据到页面中
function render(data, btn) {
  // 1. 如果是数组,则创建表格展示
  if (Array.isArray(data)) {
    // 创建表格
    const table = document.createElement("table");
    // 设置表格样式
    table.border = 1;
    table.cellPadding = 3;
    table.cellSpacing = 0;
    table.width = 360;

    // 设置标题
    const caption = table.createCaption();
    caption.textContent = "用户信息列表";
    caption.style.fontSize = "18px";
    caption.style.fontWeight = "bolder";
    caption.style.marginBottom = "8px";
    // 创建表头
    const thead = table.createTHead();
    thead.style.backgroundColor = "lightcyan";
    thead.innerHTML = "<tr><th>ID</th><th>用户名</th><th>邮箱</th></tr>";

    // 创建表格主体
    const tbody = table.createTBody();
    tbody.align = "center";

    // 遍历数组
    data.forEach(user => {
      let html = `
                <tr>
                  <td>${user.id}</td><td>${user.name}</td><td>${user.email}</td>
                </tr>
              `;
      // 插入到表格中
      tbody.insertAdjacentHTML("beforeEnd", html);
    });

    // 防止重复生成表格,应该判断一下当前按钮的下一个兄弟是否是表格
    if (btn.nextSibling.tagName !== "TABLE") {
      btn.after(table);
    }
  }
  // 2. 如果是单个对象,则用列表渲染
  else {
    // 创建列表元素,用于显示用户信息
    const ul = document.createElement("ul");

    // 使用模板字面量,快速创建用户数据
    ul.innerHTML = `
            <li>ID : <span class="user">${data.id}</span></li>
            <li>用户名 : <span class="user">${data.name}</span></li>
            <li>邮箱 : <span class="user">${data.email}</span></li>
          `;

    // 与上面功能一样,也是为了防止重复创建列表
    if (btn.nextSibling.tagName !== "UL") {
      btn.after(ul);
      // 添加自定义样式,将用户信息高亮显示
      document.querySelectorAll("ul li .user").forEach(item => (item.style.color = "red"));
    }
  }
}
