<?php
include TEMPLATEPATH . '/inc/includes.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary smart-scroll ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav <?php echo $nav_position_class; ?>">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown has-megamenu">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega menu </a>

        <div class="dropdown-menu megamenu" role="menu">
          <div class="row">
            <div class="col-md-3">
              <div class="col-megamenu">
                <h6 class="title">Title Menu One</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-md-3">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Two</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
            <div class="col-md-3">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Three</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div>
            <div class="col-md-3">
              <div class="col-megamenu">
                <h6 class="title">Title Menu Four</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                  <li><a href="#">Custom Menu</a></li>
                </ul>
              </div>  <!-- col-megamenu.// -->
            </div><!-- end col-3 -->
          </div><!-- end row -->
        </div>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>