<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Track QR</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- STYLES -->

    <style {csp-style-nonce}>
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            margin: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            width: 100%;
        }
        * {
            box-sizing: border-box;
        }
        .main-container {
            display: flex;
            flex-direction: row;
            height: 100%
        }
        .container-section-left,
        .container-section-right {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container-section-right {
            flex-direction: column;
        }
        .container-section-right .welcome-back{
            color: #4495FA;
            font-weight: 600;
            font-size: 32px;
            margin: 40px 0px;
        }
        .container-section-right .login-input-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 350px;
        }
        .container-section-right .login-input-wrapper input[type="text"],
        .container-section-right .login-input-wrapper input[type="password"] {
            padding: 16px;
            border-radius: 24px;
            border: 0px;
            background: #F8F8F8;
        }
        .container-section-right .forgot-password {
            font-size: 12px;
            color: #4495FA;
            text-decoration: none;
            font-weight: 300;
            display: flex;
            align-items: center;
            justify-content: end;
            margin-top: 8px;
        }
        .container-section-right .forgot-password span:hover {
            text-decoration: underline;
            cursor: pointer;
        }
        .container-section-right .login-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4495FA;
            margin-top: 20px;
            padding: 10px;
            border-radius: 24px;
            font-weight: 600;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            border: 1px solid #4495FA;
        }
        .container-section-right .login-btn:hover {
            background: #fff;
            color: #4495FA;
            transition: 0.3s;
            border: 1px solid #4495FA;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container-section-left">
            <img src="assets/welcomePage.png" alt="">
        </div>
        <div class="container-section-right">
            <img src="assets/logo.png" alt="Logo" width="86"/>
                <span class="welcome-back">Welcome Back</span>
            <div class="login-input">
                <div class="login-input-wrapper">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="forgot-password">
                    <span>Forgot password</span>    
                </div>
                <span class="login-btn">Login</span>
            </div>
        </div>

<!-- SCRIPTS -->
<!-- <script src="<?= base_url('js/jquery/dist/jquery.min.js') ?>"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(".submit-btn").on("click", function(){
        var name = $("#name").val()

        $.ajax({
            url: 'login',
            method: 'GET',
            dataType: 'JSON',
            data: {
                name: name
            },
            success: function(response,data) {
               
            }
        });
    })
</script>

<!-- -->

</body>
</html>
