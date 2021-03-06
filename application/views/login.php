<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form using Codeigniter</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Tags -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/please-wait.css')?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/spinkit.css')?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/spinners/8-circle.css')?>">

    <style>
        body {
            background: #d9edf7;
        }

        .custom-bottom-margin {
            padding-bottom: 30px;
        }

        .error-msg {
            margin: 5px auto;
            width: 30%;
            background: #db3737;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Login Form</h2>
        </div>
    </div>

    <div class="row" id="app">

        <?php
        echo validation_errors();

        if (isset($errorMsg)) {
            echo '<div class="error-msg">';
            echo $errorMsg;
            echo '</div>';
            unset($errorMsg);
        }
        ?>
        <form action="<?php echo base_url('login/LoginUser') ?>" method="post">

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" id="password">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <div class="g-recaptcha" data-sitekey="6LdzLWgUAAAAAHdiGAfsMeteq6ajiDtVUtEhRWtL"></div>
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>
        </form>
        <br />
        <form action="<?php echo base_url('user/index') ?>" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-info" type="submit">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/please-wait.js')?>"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url('js/app.js')?>"></script>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
</html>