<html>
    <head>
        <title>DiscoverCommerce</title>
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- Dark theme bootstrap CSS -->
      <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    </head>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <h1 class="navbar-brand">Discover Commerce</h1>
             <div class="header-items">
             <?php if($this->session->userdata('logged_in_customer')) : ?>
                <a class="text-right" href="<?php echo base_url(); ?>customers/logout">Log out</a>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in_seller')) : ?>
                <a class="text-right" href="<?php echo base_url(); ?>sellers/logout">Log out</a>
                <?php endif; ?>
                <a class="text-right" href="<?php echo base_url(); ?>browse/view"><svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                </svg></a>
            </div>
            </nav>
        </header>
    </nav>

    <div class="container">
