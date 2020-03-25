<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('customers/register'); ?>
<div class="container">
 <div class="jumbotron">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label>Lastname</label>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
    </div>
    <div class="form-group">
        <label>Date of Birth</label>
        <input type="text" class="form-control" name="dateofbirth" placeholder="Date of Birth">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" placeholder="address">
    </div>
    <div class="form-group">
        <label>Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="zipcode">
    </div>
    <div class="form-group">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="city">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="phone">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
 </div>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>

    
<?php echo form_close(); ?>