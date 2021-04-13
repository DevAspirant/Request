<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php 
        error_reporting(E_ALL);
        ini_set('display_errors',1);

        if(count($_REQUEST)){
            foreach($_REQUEST as $key => $getValues){
                echo "<div> $key : $getValues </div>";
            }
        }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="age" placeholder="age">
        <input type="text" name="addrees" placeholder="address">
        <button type="submit">Save</button>
    </form>
    </body>
</html>