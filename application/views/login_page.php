<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">

    <style>
        html {
            height: 100%;
        }
        body {
        margin:0;
        padding:0;
        font-family: Poppins;
        background: linear-gradient(#143021, #7d8547);
        }

        .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 30%;
        height: 90vh;
        padding: 40px;
        padding-bottom: 2px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
        }

        .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
        }

        .login-box .user-box {
        position: relative;
        }

        .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        }
        .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #085713;
        font-size: 12px;
        }

        .login-box form button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #dad709;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
        }

        .login-box button:hover {
        background: #d7d734;
        color: black;
        border-radius: 5px;
        box-shadow: 0 0 5px #1fa25a;
        }

        .login-box button span {
        position: absolute;
        display: block;
        }

        .login-box button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #e1e12a);
        animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
        }

        .login-box button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #07681f);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
        }

        @keyframes btn-anim2 {
        0% {
            top: -100%;
        }
        50%,100% {
            top: 100%;
        }
        }

        .login-box button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #e1e12a);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
        }

        @keyframes btn-anim3 {
        0% {
            right: -100%;
        }
        50%,100% {
            right: 100%;
        }
        }

        .login-box button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #07681f);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
        }

        @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }
        50%,100% {
            bottom: 100%;
        }
        }
        /*additional styles*/
        .logo-container{
                    height: 150px;
                    width: auto;
                    margin: 10px 0 3px;
                    background-image: url("application/views/assets/logo/FEU_Tech_official_seal.png");
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }
        button{
            background-color: #07681f;
        }
        #a-wrap{
                color: yellow;
            }

    </style>
</head>
<body>
    
    <div class="login-box">
    <div class="logo-container"></div>
    <h2>Login</h2>
    <form method="post" action="">
        <div class="user-box">
        <input type="text" name="n_stud" required="" value="<?php echo set_value('n_stud'); ?>">
        <label>Student Number</label>
        <?php echo form_error('n_stud');?>
        </div>
        <div class="user-box">
        <input type="password" name="lpass" required="" value="<?php echo set_value('lpass'); ?>">
        <label>Password</label>
        <?php echo form_error('lpass');?>
        </div>
        <button href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
        </button>
        <h5 style="text-align: center;"><a id="a-wrap" href="<?php echo base_url('register');?>">Don't have an account yet? Register now.</a></h5>
    </form>
    </div>
</body>
</html>