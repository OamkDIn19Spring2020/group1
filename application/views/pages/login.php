<?php echo validation_errors(); ?>
<?php echo form_open('login'); ?>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-muted"><?php echo $title; ?></h3>
        <div class="form-group">
            <input type="email" name="email" class="form-group" placeholder="Enter Email" required autofocus>
        </div>
      </div>
    </div>
        <div class="form-group">
        <input type="password" name="password" class="form-group" placeholder="Enter Password" required autofocus>
            </div>
        <div class="wrapper">
        <button type="submit" class="btn btn-primary">Login</button>
        </div>  
</div>
    </div>
<?php echo form_close(); ?>