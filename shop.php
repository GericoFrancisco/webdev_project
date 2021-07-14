<?php
session_start();
if(empty($_SESSION['username'])){
    header("Location: index.php");
}
?>
<html>
    <head>
        <title>Document</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
        <script src="js/navbarScript.js"></script>
    </head>
    <body onload="getProducts();">
    <?php include_once 'header.php';?>
        <div id="shop_container"></div>
        <script src="js/men-women-sale.js"></script>
        <?php include_once 'messaging.php' ?>
    </body>
</html>