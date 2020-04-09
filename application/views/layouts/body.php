</div>
<body>
     <div class="content">
         <nav class="sidebar">
         <ul class="side-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li><br>
            <li><a href="#">Browse Products</a></li><br>
            <li><a href="#">Sell Products</a></li><br>
            <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
            </ul>
        </nav>
            <main class="content-view">

        <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
        <?php endif; ?>
                    
          
          