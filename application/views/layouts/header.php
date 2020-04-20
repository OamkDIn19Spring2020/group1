<html>
    <head>
        <title>DiscoverCommerce</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
        <link rel="stylesheet"href="<?php echo base_url(); ?>/assets/css/style.css">
    </head>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <h1 class="navbar-brand">Discover Commerce</h1>
             <?php if($this->session->userdata('logged_in_customer')) : ?>
                <a href="<?php echo base_url(); ?>customers/logout">Log out</a>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in_seller')) : ?>
                <a href="<?php echo base_url(); ?>sellers/logout">Log out</a>
                <?php endif; ?>
               <div class="shopping-cart">
                <a href="#">Shopping cart</a>
               </div>
            </nav>
        </header>
    </nav>