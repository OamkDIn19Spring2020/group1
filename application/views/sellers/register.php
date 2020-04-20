<div class="container d-inline-flex">
<br></br>
<h2 class="text-muted"><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('sellers/register'); ?>
<br></br>
     <div class="row">
<<<<<<< HEAD:application/views/sellers/register.php
     <div class="d-flex flex-column bd-highlight mb-3">
=======
         <div class="col-md-4 col-md-offset-4">
>>>>>>> home:application/views/users/register.php
        <div class="form-group text-muted">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group text-muted">
        <label>Lastname</label>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
    </div>
    <div class="form-group text-muted">
        <label>Date of Birth</label>
        <input type="text" class="form-control" name="dateofbirth" placeholder="YYYY/MM/DD">
    </div>
    <div class="form-group text-muted">
        <label>Address</label>
        <input type="text" class="form-control" name="streetaddress" placeholder="Street Address">
    </div>
    <div class="form-group text-muted">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
    </div>
    <div class="form-group text-muted">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="City">
    </div>
    <div class="form-group text-muted">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone">
    </div>
    <div class="form-group text-muted">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group text-muted">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group text-muted">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
<<<<<<< HEAD:application/views/sellers/register.php
=======
    <fieldset class="form-group text-muted">
      <legend>Customer or seller</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
          Customer
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Seller
        </label>
      </div>
    </fieldset>
>>>>>>> home:application/views/users/register.php
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<<<<<<< HEAD:application/views/sellers/register.php
</div>
=======

    
>>>>>>> home:application/views/users/register.php
<?php echo form_close(); ?>