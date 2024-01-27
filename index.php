<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="validation.js"></script>
    <style>
        body {
            background-image: url(back.avif);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100% 100% 100%;
        }

        .container {
            background: transparent;
            backdrop-filter: blur(2px);
            margin-top: 10%;
            height: 420px;
            width: 45%;
            color: #fff;
            box-shadow: 10px 10px 10px 10px black;
            /* display:grid; */

        }

        h1 {
            text-align: center;
        }

        #register {
            display: none;
        }

        label {
            color: orange;
        }

        .s00 {
            font-size: medium;
        }

        h1 {
            color: orange;
        }

        .form-control {
            border: 2px solid black;
        }
    </style>

</head>

<body>
    <!-- Login page -->
    <section id="login">
        <div class="container">
            <h1>Login</h1>
            <form action="" onsubmit="return valide()">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="no">Mobil Number:</label>
                    <input type="number" class="form-control" id="mn" placeholder="Enter Mobile Number" name="mn">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <label for="Forgot Password">Forgot Password</label>
                    <a href="#register" class="s00"><label for="Register" onclick="show()">Register</label></a>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </section>
    <!-- Register -->
    <section id="register">
        <div class="container">
            <h1>Register</h1>
            <form action="#login" onsubmit="return valide1()">
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input type="name" class="form-control" id="name1" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd"> Confirm Password:</label>
                    <input type="password" class="form-control" id="cp" placeholder="Enter Confirm password" name="cp">
                </div>
                <input type="submit" class="btn btn-default" value="Sign In">
                <!-- <button type="submit" class="btn btn-default" >Sign in</button> -->
            </form>
        </div>
    </section>
</body>

</html>

<script>
    function show() {
        const show = document.querySelector('#register');
        show.style.display = 'flex';

        const main = document.querySelector('#login');
        main.style.display = 'none';
    }

    function hide() {
        const show = document.querySelector('#register');
        show.style.display = 'none';

        const main = document.querySelector('#login');
        main.style.display = 'flex';
    }
</script>