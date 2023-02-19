<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./Public/CSS/stars.css">
    <link rel="stylesheet" href="./Public/CSS/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
    <form action="index.php?mod=auth&&act=handleLogin" method="post">
        <h1>Login</h1>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Email" name="email">
        </div>
        <div class="error">
            <?= $_SESSION["errorLogin"] ?? null;
            unset($_SESSION["errorLogin"])
            ?>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                   name="password">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info" style="color: #FFFFFF ; width: 100%">Đăng nhập</button>
        </div>
        <a href="#">Quên mật khẩu ?</a>
    </form>
</div>
</body>
</html>