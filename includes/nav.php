<?php include('includes/header.php'); ?>

<!-- ======     Start NAV      ======== -->

<nav class="navbar sticky-md-top navbar-expand-sm bg-body-tertiary" data-bs-theme="dark" ;>
  <a class="navbar-brand ms-3" href="index.php">Master Finders</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ms-5">
        <button class="btn btn-outline-success btn-sm "><a class="nav-link active" aria-current="page"
            href="index.php">Home</a></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-success btn-sm"><a class="nav-link" href="regi.php">Registration</a></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-success btn-sm"><a class="nav-link" href="contact.php">Contact Us</a></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-success btn-sm"><a class="nav-link" href="privacy.php">Privacy
            Policy</a></i></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-success btn-sm"><a class="nav-link" href="blog.php">Blog</a></i></button>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-success btn-sm"><a class="nav-link" href="profile.php">Profile</a></i></button>
      </li>
      <li class="nav-item">
        <button class="btn  btn-outline-success btn-sm"><a class="nav-link" href="login.php">Login</a></i></button>
      </li>
    </ul>
  </div>
  </div>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Find Me" aria-label="Search">
        <button class="btn btn-outline-primary ms-2" type="submit">Search</button>
      </form>
    </div>
  </nav>
</nav>
</div>
</div>

<!-- ======     ENDING NAV      ======== -->

<?php include('includes/footer.php'); ?>