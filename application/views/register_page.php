<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        width: 50%;
        height: 95vh;
        padding: 60px;
        padding-top: 20px;
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
        font-size: 14px;
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
                    height: 130px;
                    width: auto;
                    margin: 10px 0 3px;
                    background-image: url("application/views/assets/logo/FEU_Tech_official_seal.png");
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            #a-wrap{
                color: yellow;
            }
        button{
            background-color: #07681f;
        }
        form{
            padding: 10px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <br>
    <h2>Register</h2>
    <form action="<?php echo base_url('register');?>" method="POST">
        <div class="user-box">
            <div class="column">    
                <input type="text" name="stud_num" required="" value="<?php echo set_value('stud_num'); ?>">
                <label>Student Number</label>
                <?php echo form_error('stud_num');?>
            </div>
        </div>

        <div class="user-box">
            <div class="column">    
                <input type="email" name="email_add" required="" value="<?php echo set_value('email_add'); ?>">
                <label>Email</label>
                <?php echo form_error('email_add');?>
            </div>
        </div>

        <div class="user-box">
            <div class="column">    
                <input type="password" name="pass" required="" value="<?php echo set_value('pass'); ?>">
                <label>Password</label>
                <?php echo form_error('pass');?>
            </div>
        </div>

        <div class="user-box">
            <div class="column">    
                <input type="password" name="conf_pass" required="" value="<?php echo set_value('conf_pass'); ?>">
                <label>Confirm password</label>
                <?php echo form_error('conf_pass');?>
            </div>
        </div>

        <button type="submit" href="#" style="margin-top: 10px;">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
        </button>
        <h5 style="text-align: center;"><a id="a-wrap" href="<?php echo base_url('login');?>">Already have an account? Login.</a></h5>
    </form>
    </div>
</body>
</html>