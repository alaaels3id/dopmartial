<?php

    $to ='alaa4cat@gmail.com';
    $subject ='Dopmartial.inc';

    $name = $_POST['username'];
    $message = $_POST['message'] . "  \n the owner is : " . $name;

    if(isset($_POST['submit']) && $_POST['submit'] == "Send"){
        mail($to, $subject, $message);
        // phpAlert('Thank You\nYour e-mail has been sent Successfully!');
    }
    function phpAlert($mes){
        echo '<script type="text/javascript">alert("'.$mes.'");</script>';
    }
?>