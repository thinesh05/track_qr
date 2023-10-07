<head>
    <?= $header ?>
    <title><?= $title ?></title>
    <!-- CUSTOM STYLES -->
    <style {csp-style-nonce}>
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
            padding: 14px 20px;
            border-radius: 16px;
            border: 2px solid #f0f0f0;
            font-size: 14px;
            outline-color: #4495FA;
        }
        .container-section-right .forgot-password a{
            font-size: 12px;
            color: #4495FA;
            text-decoration: none;
            font-weight: 300;
            display: flex;
            align-items: center;
            justify-content: end;
            margin-top: 8px;
        }
        .container-section-right .forgot-password a:hover {
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
            border-radius: 16px;
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
            <img src="assets/welcomePage.png" alt="background" class="img-responsive">
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
                    <a href="/forget-password">Forgot password</a>    
                </div>
                <span class="login-btn">Login</span>
            </div>
        </div>
    <?= $footer ?>
    <script>
        $(".login-btn").on("click", function(){
            submitLogin();
        })

        $('body .main-container').keypress((e) => {
            if (e.which === 13) {
                submitLogin();
            }
        })

        function submitLogin() {
            var username = $("#username").val();
            var password = sha256($("#password").val());
            
            $.ajax({
                url: 'login',
                method: 'POST',
                dataType: 'JSON',
                data: {
                    username: username,
                    password: password
                },
                success: function(response) {
                    if(response.success) {
                        
                        var decoded_data = atob(decodeURIComponent(response.data))
                        var json_data = $.parseJSON(decoded_data)

                        window.location.href = json_data.role+"?data="+response.data;
                    } else {
                        nativeToast({
                            message: response.data,
                            type: 'error',
                            timeout: 3000
                        })
                    }
                }
            });
        }
    </script>
</body>