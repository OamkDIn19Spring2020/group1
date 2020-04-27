<br>
<h2 class="text-muted text-center"><?= $title; ?></h2><br>
<?php echo validation_errors(); ?>
<?php echo form_open('Sellers/register'); ?>
<div class="d-flex flex-column">
<div class="d-flex justify-content-center">
<fieldset>
        <div class="form-group p-1 text-muted">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Lastname</label>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Date of Birth</label>
        <input type="text" class="form-control" name="dateofbirth" placeholder="YYYY/MM/DD">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Address</label>
        <input type="text" class="form-control" name="streetaddress" placeholder="Street Address">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
    </div>
    <div class="form-group p-1 text-muted">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="City">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group p-1 text-muted">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
    <div class="form-group p-1 text-muted">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
    </div>
</div>
</div>
</fieldset>
</div>
<?php echo form_close(); ?>