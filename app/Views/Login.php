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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;0,900;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
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
            height: 100%;
        }
        .main-container {
            display: flex;
            flex-direction: row;
            height: 100%
        }
        .container-section-left,
        .container-section-right {
            width: 50%;
        }
        .container-section-right {
            color: #4495FA;
            font-weight: 600;
            font-size: 32px;
        }
        .container-section-right .login-input {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        .container-section-right input[type="text"],
        .container-section-right input[type="password"] {
            padding: 14px 16px;
            border-radius: 24px;
            border: 0px;
            background: #F8F8F8;
        }
        .square {
            background: blue;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container-section-left">
            <div class="square"></div>
        </div>
        <div class="container-section-right">
            <span class="welcome-back">Welcome Back</span>
            <div class="login-input">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <span class="login-btn">Login</span>
        </div>
    </div>
font x change pula
jap need to check
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
