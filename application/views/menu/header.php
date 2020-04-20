<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
      <link rel="stylesheet" href="<?php echo base_url('assets/css/mystyle.css'); ?>">
</head>

  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <h1 class="navbar-brand">Discover Commerce</h1>
        <div class="shopping-cart">
          <a href="#">Shopping cart</a>
        </div>
        <div class="container">
        <?php
          if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
           echo 'Welcome '.$_SESSION['username'];
        }
          else {
            echo 'Welcome guest';
        }
        ?>
        </div>

        <?php
          if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
            echo '<li> <a href="'.site_url('secret').'">Secret</a> </li>';
          }
        ?>
    </nav>
  </header>