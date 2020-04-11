<?php echo form_open('Users/login'); ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h1 class="text-muted"><?php echo $title; ?></h1>
        <div class="form-group">
            <input type="email" name="email" class="form-group" placeholder="Enter Email" required autofocus>
        </div>
      </div>
    </div>
        <div class="form-group">
        <input type="password" name="password" class="form-group" placeholder="Enter Password" required autofocus>
            </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
<?php echo form_close(); ?>