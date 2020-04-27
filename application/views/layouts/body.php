<body>
    <div class="content">
         <nav class="sidebar">
         <ul class="side-nav">
            <li><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li><br>
            <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/browse">Browse Products</a></li><br>
            <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/create">Sell Products</a></li><br>
            <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/login">Login</a></li><br>
            <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/register">Register</a></li>
            </ul>
        </nav>
        
        <div class="content-view">
       
        <div class="container">
            <?php if($this->session->flashdata('users_registered')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('users_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('users_loggedin')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('users_loggedin').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('users_loggedout')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('users_loggedout').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('added')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('added').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('edited')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('edited').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('deleted')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('deleted').'</p>'; ?>
            <?php endif; ?>
        </div>
       
                    
                    
          
          