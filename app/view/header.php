<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="app/view/style/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#" style="margin-right:30px;">E-Commerce Website</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item" >
        <a class="nav-link" href="index.php?url=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="index.php?url=products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?url=categories">Categories</a>
      </li>

      <li class="nav-item" style="margin-left: 50rem;">
        <a class="nav-link" href="index.php?url=cart">Cart 
          (<span id="cartCountSpan"><?php echo Controller::getCartCount() ?></span>)</a>
      </li>
    
  </div>
</nav>


