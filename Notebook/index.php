<?php
    require('header.php');
    if (!isset($_GET['p'])) $_GET['p'] = 'view';
    if ($_GET['p'] == 'view') require('view.php');
    require('footer.php');
?>