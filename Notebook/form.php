<?php 
    $sql = 'SELECT * FROM `friends` WHERE `id` = '.$_GET['id'].'';
    $res = mysqli_query($connect,$sql);
    if (mysqli_errno($connect)) echo mysqli_error($connect);

    $row = mysqli_fetch_assoc($res);
?>
<h1 class='text-center'>Change data</h1>
<form method="POST" action="index.php">
    <input type="hidden" name="update">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <div class="form-group mt-2">
        <label for="exampleInputFirstName">FirstName</label>
        <input type="text" class="form-control" id="exampleInputFirstName" name="FirstName" require value="<?=$row['firstname'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="Name" require value="<?=$row['name'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputLastName">LastName</label>
        <input type="text" class="form-control" id="exampleInputLastName" name="LastName" require value="<?=$row['lastname'];?>">
    </div>
    <div class="form-group mt-2">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Gender" >
      <option <?php if($row['gender'] == 'Male') echo 'selected';?>>Male</option>
      <option <?php if($row['gender'] == 'Female') echo 'selected';?>>Female</option>
    </select>
  </div>
    <div class="form-group mt-2">
        <label for="exampleInputBirthDate">BirthDate</label>
        <input type="date" class="form-control" id="exampleInputBirthDate" name="BirthDate" require value="<?=$row['birthdate'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputAddress">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress" name="Address" require value="<?=$row['address'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputPhone">Phone</label>
        <input type="tel" class="form-control" id="exampleInputPhone" name="Phone" require value="<?=$row['phone'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail" name="Email" require value="<?=$row['email'];?>">
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputComment">Comment</label>
        <input type="text" class="form-control" id="exampleInputComment" name="Comment" value="<?=$row['comment'];?>">
    </div>
  
  <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>