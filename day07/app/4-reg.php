<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>瓜子二手车登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme style -->
    <link rel="stylesheet" href="/public/static/css/adminlte.min.css">

</head>
<style>

</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>瓜子</b>二手车登录</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">请输入账户和密码</p>

                <form role="form" id="quickForm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="uname">账户</label>
                            <input type="text" name="uname" class="form-control" id="uname" placeholder="输入账户" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="pwd">密码</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="输入密码">
                        </div>

                        <div class="form-group">
                            <label for="pwd_check">密码确认</label>
                            <input type="password" name="pwd_check" class="form-control" id="pwd_check" placeholder="密码确认">
                        </div>
                        <div class="form-group">
                            <label for="pwd_check">性别&nbsp;&nbsp;</label>
                            <input type="radio" name="gender" id="gender" value="1" checked>男&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="gender" id="gender" value="0">女
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class=" form-control btn btn-primary">确认</button>
                    </div>
                    <a href="4-reg.php" class="login-box-msg">已有账号去登录？</a>
                </form>




            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/public/static/js/jquery.min.js"></script>
    <!-- jquery-validation -->
    <script src="/public/static/js/jquery.form.min.js"></script>
    <script src="/public/static/js/jquery.validate.min.js"></script>


    <script type="text/javascript">
        // 检测用户名是否被占用

        $().keyup(function() {
            // 发起异步请求 检查数据表里存不存在该用户名
            $.post()
        })
        $(document).ready(function() {

            $.validator.setDefaults({
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        url: '3-doSubmit.php?type=reg',
                        dataType: 'json',
                        type: 'POST',
                        success: function(res) {

                            if (res.status == 1) {
                                alert('注册成功');

                                window.location.href = "2-login.php";

                            } else {
                                alert('注册失败,系统出错啦请检查');
                            }
                        },
                        error: function() {
                            alert('系统出错啦,请稍后重试');
                        }
                    })
                }
            });

            // 对表单的校验
            $('#quickForm').validate({
                rules: {
                    uname: {
                        required: true,
                        rangelength: [2, 10]

                    },
                    pwd: {
                        required: true,
                        minlength: 5
                    },
                    pwd_check: {
                        equalTo: "#pwd",
                        required: true,
                        minlength: 5

                    }
                },
                messages: {
                    uname: {
                        required: "账户不能为空",
                        rangelength: '用户名必须2-10字符'

                    },
                    pwd: {
                        required: "密码不能为空",
                        minlength: "密码至少5个字符"
                    },
                    pwd_check: {
                        equalTo: "两次密码输入值需一致",
                        required: "请再次确认密码",
                        minlength: "密码至少5个字符"

                    }

                },

                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

</body>

</html>