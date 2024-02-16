<style type="text/css">
  .nav-item {
    font-family: sans-serif;
    padding: 15px;
    color: black;
  }

  .nav-link {
    color: white;
  }

  .nav-item:hover .nav-link, .nav-link:hover {
  background-color: white !important; /* Override Bootstrap's styles */

}
  
  .logo-text{
    font-family: "Abril Fatface"; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px;
  }

  .container-fluid {
    background-color: black;
  }
</style>
<nav class="navbar navbar-default">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <h1 class="logo-text">Beng Curry Fish Head</h1> -->
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav " style="display: flex;justify-content: center;">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>