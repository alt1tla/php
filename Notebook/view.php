<?php 
    $db = require('db.php');
    $connect = mysqli_connect($db['host'],$db['user'],$db['password'],$db['database']);
    if (mysqli_connect_errno()) echo mysqli_connect_error();
    $sql = 'SELECT * FROM `friends`';
    $res = mysqli_query($connect, $sql);
    
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Пол</th>
      <th scope="col">ДР</th>
      <th scope="col">Адрес</th>
      <th scope="col">Телефон</th>
      <th scope="col">Почта</th>
      <th scope="col">Комментарий</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>

    </tr>
  </tbody>
</table>