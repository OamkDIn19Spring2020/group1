<br></br>
<h3 class="text-center text-muted"><?php echo $title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open('sellers/login'); ?>
<br>
<div class="d-flex flex-column">
<div class="d-flex justify-content-center">
  <fieldset>
        <div class="form-group p-1">
          <input type="email" name="email" class="form-group" placeholder="Enter Email" required autofocus>
        </div>
      <div class="form-group p-1">
        <input type="password" name="password" class="form-group" placeholder="Enter Password" required autofocus>
      </div>
    <div class="form-group text-muted">
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
<fieldset>
</div>
</div>
<?php echo form_close(); ?>