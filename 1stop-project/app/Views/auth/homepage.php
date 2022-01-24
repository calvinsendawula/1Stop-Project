<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?php echo base_url('css/styles.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
</head>
<body>
    <h1>This is the User's home page</h1>
    <?php

        $session = session();
        $user_details = $session->get('user_details');
        #echo "<pre>";print_r($user_details);
        $firstName = $user_details[0];
        $lastName = $user_details[1];
        $fullname = $firstName ." ". $lastName;

        echo "Welcome $fullname";
    ?>
    <br/>
    <button id="images_toggle_btn">Toggle Image Show</button>
    <br/>
    <div id="images_div">
        <img src="<?php echo base_url('images/one.jpg'); ?>" alt="Abstract Image from Unsplash.com">
        <br/>
        <img src="<?php echo base_url('images/two.jpg'); ?>" alt="Desert image from Unsplash.com">
    </div>
    <script type="text/javascript" src="<?php echo base_url('js/main.js'); ?>"></script>
</body>
</html>