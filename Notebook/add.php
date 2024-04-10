<form method="POST" action="index.php">
    <input type="hidden" name="save">
    <div class="form-group mt-2">
        <label for="exampleInputFirstName">FirstName</label>
        <input type="text" class="form-control" id="exampleInputFirstName" name="FirstName" require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="Name" require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputLastName">LastName</label>
        <input type="text" class="form-control" id="exampleInputLastName" name="LastName" require>
    </div>
    <div class="form-group mt-2">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Gender">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
    <div class="form-group mt-2">
        <label for="exampleInputBirthDate">BirthDate</label>
        <input type="date" class="form-control" id="exampleInputBirthDate" name="BirthDate" value= <?=date("Y-m-d");?> require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputAddress">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress" name="Address" require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputPhone">Phone</label>
        <input type="tel" class="form-control" id="exampleInputPhone" name="Phone" require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail" name="Email" placeholder="name@example.com" require>
    </div>
    <div class="form-group mt-2">
        <label for="exampleInputComment">Comment</label>
        <input type="text" class="form-control" id="exampleInputComment" name="Comment">
    </div>
  
  <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>