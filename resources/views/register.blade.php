<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    {{--<link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
<style>

html,
body {
height: 100%;
}

.register {
background: -webkit-linear-gradient(left, #00ab9f, #52898b);
margin-top: 3%;
padding: 9%;
}

.register-left {
text-align: center;
color: #fff;
margin-top: 4%;
}

.register-left button {
border: none;
border-radius: 1.5rem;
padding: 2%;
width: 60%;
background: #f89623;
font-weight: bold;
color: #383d41;
margin-top: 30%;
margin-bottom: 3%;
cursor: pointer;
}

.register-right {
background: #f8f9fa;
border-top-left-radius: 10% 50%;
border-bottom-left-radius: 10% 50%;
}

.register-left img {
margin-top: 15%;
margin-bottom: 5%;
width: 25%;
-webkit-animation: mover 2s infinite alternate;
animation: mover 1s infinite alternate;
background: #f89623;
}

@-webkit-keyframes mover {
0% {
transform: translateY(0);
}

100% {
transform: translateY(-20px);
}
}

@keyframes mover {
0% {
transform: translateY(0);
}

100% {
transform: translateY(-20px);
}
}

.register-left p {
font-weight: lighter;
padding: 12%;
margin-top: -9%;
}

.register .register-form {
padding: 10%;
margin-top: 10%;
}

.btnRegister {
float: right;
margin-top: 10%;
border: none;
border-radius: 1.5rem;
padding: 4%;
background: #f89623;
color: #fff;
font-weight: 700;
width: 50%;
cursor: pointer;
}

.register .nav-tabs {
margin-top: 3%;
border: none;
background: #f89623;
border-radius: 1.5rem;
width: 28%;
float: right;
}

.register .nav-tabs .nav-link {
padding: 2%;
height: 34px;
font-weight: 600;
color: #fff;
border-top-right-radius: 1.5rem;
border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
border: none;
}

.register .nav-tabs .nav-link.active {
width: 100px;
color: #0062cc;
border: 2px solid #0062cc;
border-top-left-radius: 1.5rem;
border-bottom-left-radius: 1.5rem;
}

.register-heading {
text-align: center;
margin-top: 8%;
margin-bottom: -15%;
color: #495057;
}

.link {
background-color: #00ab9f;
border-radius: 50%;
margin-right: 2px;
}

.link:hover {
background-color: chocolate;
border-radius: 50px;
color: white
}

a .href {
text-decoration: none;
color: #fff;
}

/*!* for the landing page *!*/

.img {
width: 200px;
height: 70px;
}

span {
font-style: italic;
}

.btns {
border-radius: 50px;
}

/*!* Container holding the image and the text *!*/
.contain {
position: relative;
text-align: center;
color: white;
background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));

}

/*!* Centered text *!*/

.arrange-text {
font-weight: 900;
font-size: 50px;
color: white;
}

.home-overlay {
background-color: rgba(0, 0, 0, 0.3);
width: 100%;
;
height: 100%;
position: fixed;
top: 0;
left: 0;
z-index: 0.1;
}

.centered {
position: absolute;
top: 50%;
left: 50%;

transform: translate(-50%, -50%);
}

.btn1 {
background-color: steelblue;
color: white;
margin-right: 50px;
font-size: 20px;
margin-top: 40px;
font-weight: 900;
border-radius: 50px;
}

.btn2 {
background-color: orange;
color: white;
margin-left: 50px;
font-size: 20px;
margin-top: 40px;
border-radius: 50px;
font-weight: 900;
}
</style>
<div class="container register">

    <div class="row">
        <div class="col-md-3 col-sm-4 register-left">
            <h3 style="color: #f8f9fa;">Welcome</h3>
            <p>SevenDevCommunity</p>

        </div>

        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">

                <!-- for student registration *** by default this rendered because of the class active on the first div -->

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Become Part of Seven Dev Community</h3>

                    <form action="/students/register" multimedia="true" method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstName"
                                           placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastName"
                                           placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label for="level">Registering as:</label>
                                        <select name="level">
                                            <option value="member">Member</option>
                                            <option value="mentor">Mentor</option>
                                            <option value="sponsor">Sponsor</option>
                                            <option value="patron/matron">Patron/Matron</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *"
                                           value="" />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="date"
                                           placeholder="Date Of Birth *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="maxl">
                                        <label for="username">UserName:</label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="9" maxlength="9" name="txtEmpPhone"
                                           class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="image"
                                           placeholder="upload image *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password"
                                           placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirmPassword"
                                           placeholder="Confirm Password *" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                            <p>If you already have an Account, <span><a href="/login">Login</a></span></p>
                        </div>
                        <a href="/">
                            <input type="button" class="btn btn-primary" style="float: right !important; margin-top: 10%; border: none; border-radius: 1.5rem;
                                padding: 2%; color: #fff;
                                font-weight: 700;
                                width: 30%;
                                cursor: pointer;" value="Home">
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

{{--<!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>--}}
</body>

</html>
