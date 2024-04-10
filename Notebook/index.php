<?php
    $db = require('db.php');
    $connect = mysqli_connect($db['host'],$db['user'],$db['password'],$db['database']);
    if (mysqli_connect_errno()) echo mysqli_connect_error();

    if(isset($_POST['save'])){
        $sql= "INSERT INTO `friends`
                (`firstname`, `name`, `lastname`, `gender`, `birthdate`, `address`, `phone`, `comment`, `email`) 
                VALUES ('".htmlspecialchars($_POST['FirstName'])."',
                '".htmlspecialchars($_POST['Name'])."',
                '".htmlspecialchars($_POST['LastName'])."',
                '".($_POST['Gender'])."',
                '".($_POST['BirthDate'])."',
                '".htmlspecialchars($_POST['Address'])."',
                '".($_POST['Phone'])."',
                '".htmlspecialchars($_POST['Email'])."',
                '".htmlspecialchars($_POST['Comment'])."')";
        mysqli_query($connect, $sql);
        if (mysqli_errno($connect)) echo 'Ошибка запроса:' .mysqli_error($connect);
            else $s = 'Added!';
    }

    if(isset($_POST['update'])){
        $sql = "UPDATE `friends` 
        SET `firstname`='".htmlspecialchars($_POST['FirstName'])."',
        `name`='".htmlspecialchars($_POST['Name'])."',
        `lastname`='".htmlspecialchars($_POST['LastName'])."',
        `gender`='".($_POST['Gender'])."',
        `birthdate`='".($_POST['BirthDate'])."',
        `address`='".htmlspecialchars($_POST['Address'])."',
        `phone`='".($_POST['Phone'])."',
        `comment`='".htmlspecialchars($_POST['Comment'])."',
        `email`='".htmlspecialchars($_POST['Email'])."'
        WHERE `id` = ".$_POST['id'];
        mysqli_query($connect, $sql);
        if (mysqli_errno($connect)) echo 'Ошибка запроса:' .mysqli_error($connect);
            else $s = 'Updated!';
    }


    if (!isset($_GET['p'])) $_GET['p'] = 'view';
    if (!isset($_GET['o'])) $_GET['o'] = 'id';
    if (!isset($_GET['page'])) $_GET['page'] = '0';

    require('header.php');
    
   
    if ($_GET['p'] == 'view' || $_GET['p'] == 'add' || $_GET['p'] == 'update' || $_GET['p'] == 'delete') require($_GET['p'].'.php');
    
    require('footer.php');
?>