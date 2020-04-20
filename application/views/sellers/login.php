<div class="container d-inline-flex">
<?php echo form_open('sellers/login'); ?>
  <br></br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center text-muted"><?php echo $title; ?></h3>
        <div class="form-group">
            <input type="email" name="email" class="form-group" placeholder="Enter Email" required autofocus>
        </div>
      </div>
    </div>
        <div class="form-group">
        <input type="password" name="password" class="form-group" placeholder="Enter Password" required autofocus>
            </div>
<<<<<<< HEAD:application/views/sellers/login.php
        <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>  
=======
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="submit" class="btn btn-primary">Register</button>
>>>>>>> home:application/views/users/login.php
        </div>
    </div>
</div>
<?php echo form_close(); ?>