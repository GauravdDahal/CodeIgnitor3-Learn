//Registration form Simple
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CodeIgniter Form Tutorial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Signup Form</h1>
                        <?php echo form_open('signupform', ['name' => 'signup']); ?>
                        <div class="form-group">
                            <label for="form-control">Full Name</label>
                            <?php echo form_input(['name' => 'fullname', 'id' => 'fullname', 'placeholder' => 'Enter your full name', 'class' => 'form-control']); ?>
                        </div>
                        <div class="form-group">
                            <label for="form-control">Password</label>
                            <?php echo form_password(['name' => 'password', 'id' => 'password', 'placeholder' => 'Enter your password', 'class' => 'form-control']); ?>
                        </div>
                        <div class="form-group">
                            <label for="form-control">Course</label>
                            <?php
                            $options = array(
                                'PHP' => 'PHP',
                                'MySQL' => 'MySQL',
                                'Wordpress' => 'Wordpress',
                                'HTML' => 'HTML'
                            );
                            echo form_dropdown('skill', $options, '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <Label>Gender:</Label>
                            <?php echo form_radio('Gender', 'Male', TRUE) ?>Male
                            <?php echo form_radio('Gender', 'Female', FALSE) ?> Female
                            <?php echo form_radio('Gender', 'Female', FALSE) ?> Non-Binary
                        </div>
                        <?php echo form_submit(['name' => 'submit', 'value' => 'Submit', 'class' => 'btn btn-custom btn-success btn-small']); ?>
                        <?php echo form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-custom btn-primary btn-small']); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
