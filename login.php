<?php include('server.php') ?>

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<!-- ======== Start a Login Form ========= -->


<div class="container-fluid">
  <div class="container">
    <div class="card mt-5 mx-auto" style="width: 40%;">
      <div class="card-body mt-4">
        <h2 class="card-title text-center"><b>Login</b></h2>
        <form method="post" action="login.php">
          <?php include('errors.php'); ?>
          <div class="form-group mt-4">
            <label for="exampleInputphone"> Phone:</label>
            <input type="phone" name="phone" class="form-control mt-3" id="exampleInputphone" placeholder="Enter phone">
          </div>
          <div class="form-group mt-4">
            <label for="exampleInputPassword1"> Password:</label>
            <input type="password" name="password" class="form-control mt-3" id="exampleInputPassword1" placeholder="Enter Password">
          </div>
          <p class="mt-3"><a href="login.php">Forgot Password?</a></p>

          <div class="d-grid">
            <button type="submit" name="login_user" class="btn btn-lg btn-primary mt-2">Login</button>
            <p class="text-center mt-4">Not a member?<a href="regi.php"> SignUp Now</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





<!-- ======== END a Login Form ========= -->


<?php include('includes/footer.php'); ?>