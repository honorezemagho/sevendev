<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="/css/login.css">

</head>


<body>
<style>
    html,
    body {
        height: 100%;
    }

    .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #00ab9f;
    }

    form {
        padding-top: 10px;
        font-size: 14px;
        margin-top: 30px;
    }

    .card-title {
        font-weight: 300;
    }

    .btn {
        font-size: 14px;
        margin-top: 20px;
    }


    .login-form {
        width: 330px;
        margin: 20px;
    }

    .sign-up {
        text-align: center;
        padding: 20px 0 0;
    }

    .alert {
        margin-bottom: -30px;
        font-size: 13px;
        margin-top: 20px;
    }
</style>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">Login</h3>
            <div class="card-text">
                <form action="/students/login" method="POST">
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="email" class="form-control form-control-sm" id="name" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <!-- <a href="#" style="float:right;font-size:12px;">Forgot password?</a> -->
                        <input type="password" class="form-control form-control-sm" id="password" name='password'
                               required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="login">login</button>
                </form>
                <a href="/">
                    <input type="button" class="btn btn-block" id="home" style="float: right !important; margin-top: 10%; border: none; border-radius: 1.5rem;
                        padding: 2%; background: #f89623; color: #fff;
                        font-weight: 700;
                        width: 30%;
                        cursor: pointer;" value="Home">
                </a>

            </div>
        </div>
    </div>
</div>
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

<!-- JQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>

</html>
