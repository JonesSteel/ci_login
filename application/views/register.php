<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form using Codeigniter</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Tags -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
            <h2>Registration Form</h2>
        </div>
    </div>

    <div class="row">

        <?php
            echo validation_errors();

            if (isset($errorMsg)) {
                echo '<div class="error-msg">';
                echo $errorMsg;
                echo '</div>';
                unset($errorMsg);
            }
        ?>

        <form action="<?php echo base_url()."user/RegisterUser"?>" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="name">First Name</label>
                <div class="col-sm-5">
                    <input type="text" name="first_name" class="form-control" value="<?php echo set_value('first_name'); ?>" placeholder="Enter First name" id="fname">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="name">Last Name</label>
                <div class="col-sm-5">
                    <input type="text" name="last_name" class="form-control" value="<?php echo set_value('last_name'); ?>" placeholder="Enter Last name" id="lname">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">Email</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Enter Email" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="confirm_email">Confirm Email</label>
                <div class="col-sm-5">
                    <input type="email" name="confirm_email" class="form-control" value="<?php echo set_value('confirm_email'); ?>" placeholder="Confirm Email" id="confirm_email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" id="password">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="phone">Phone</label>
                <div class="col-sm-5">
                    <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" placeholder="Enter Phone" id="phone">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form action="<?php echo base_url('login/index') ?>" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-info" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<!-- JS -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>