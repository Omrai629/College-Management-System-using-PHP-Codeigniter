<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
  nav{
    border-bottom:solid;
    
  }
  a{
    text-decoration:bold;
    color:black;
    font-weight:bold;
    padding:15px;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
   
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("login"); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("register"); ?>">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url("adminlogin"); ?>">Admin Login</a>
        </li>
      </ul>
   
      
    </div>
  </div>
</nav>
</body>
</html>