<body>
    <div class="content">
         <nav class="sidebar">
         <ul class="side-nav">
            <li><a href="<?php echo base_url(); ?>pages/home">Home</a></li><br>
            <li><a href="#">Browse Products</a></li><br>
            <li><a href="#">Sell Products</a></li><br>
            <li><a href="<?php echo base_url(); ?>login">Login</a></li><br>
            <li><a href="<?php echo base_url(); ?>Register">Register</a></li>
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
        </div>
       
                    
                    
          
          