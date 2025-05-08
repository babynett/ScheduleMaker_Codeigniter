<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <title>FEU Tech COR Scheduler</title>

    <style>
        body{
            background-image: url("application/views/assets/backgrounds/welc_bg.jpg");
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
        }
        .logo-container{
            height: 150px;
            width: auto;
            margin: 10px 0 3px;
            background-image: url("application/views/assets/logo/FEU_Tech_official_seal.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .sched_enter{
            height: 65vh;
            width: auto;
            border-radius: 200px;
            background-color: rgba(255, 204, 117, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .title-cont{
            height: 50vh;
            width: 50%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-size: 80px;
        }

        .font-style{
            margin: 0 auto;
            position: fixed;
        }

        /*button*/
        .wrap{
            position: relative;
            bottom: 60px;
        }
        /*button style*/
        .btn-wrapper{
        align-items: center;
        background-color: initial;
        background-image: linear-gradient(rgba(132, 201, 145, 0.84), rgba(29, 60, 1, 0.84) 50%);
        border-radius: 42px;
        border-width: 0;
        box-shadow: rgba(57, 31, 91, 0.24) 0 2px 2px,rgba(106, 110, 1, 0.4) 0 8px 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: flex;
        font-family: Quicksand,sans-serif;
        font-size: 18px;
        font-weight: 700;
        justify-content: center;
        letter-spacing: .04em;
        line-height: 16px;
        margin: 0;
        padding: 18px 18px;
        text-align: center;
        text-shadow: rgba(255, 255, 255, 0.4) 0 0 4px,rgba(255, 255, 255, 0.2) 0 0 12px,rgba(57, 31, 91, 0.6) 1px 1px 4px,rgba(57, 31, 91, 0.32) 4px 4px 16px;
        vertical-align: baseline;
        }

        .btn-wrapper:hover {
        background-image: linear-gradient(#dcc815, #dfd808 50%);
        }

        @media (min-width: 768px) {
        .btn-wrapper {
            font-size: 21px;
            padding: 18px 34px;
        }
        }

        /*login and reg style*/

        .login-cont{
        height: 80vh;
        width: 50%;
        background-color: green;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>

<!--LINKS-->
<!--CSS Links-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="logo-container">

    </div>

    <div class="sched_enter">
        <section class="title-cont">
            <p class="font-style">Create a schedule</p>
        </section>
        <button class="wrap btn-wrapper"><a href="<?= base_url('login') ?>">Continue</a></button>
    </div>
</body>
</html>