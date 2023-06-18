<?php include('server.php') ?>

<?php include('includes/header.php'); ?>


<?php include('includes/nav.php'); ?>

<!-- ======  start a form ======= -->

<div class="container-fluid">
  <div class="container">
    <div class="card mt-2 mx-auto" style="width: 50%;">
      <div class="card-body mt-2">
        <h2 class="card-title text-center"><b>Registration</b></h2>
        <form method="post" action="regi.php">
          <?php include('errors.php'); ?>
          <div class="form-group mt-3">
            <label for="exampleInputname"> Name:</label>
            <input type="name"  name="username" class="form-control mt-2" id="exampleInputname" placeholder="Enter Name">
          </div>
          <div class="form-group mt-3">
            <label for="exampleInputphone"> Phone:</label>
            <input type="phone"  name="phone" class="form-control mt-2" id="exampleInputphone" placeholder="Enter phone">
          </div>
          <div class="form-group mt-3">
            <label for="exampleInputEmail1"> Email address:</label>
            <input type="email" name="email" class="form-control mt-2" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group mt-3">
            <label for="exampleInputPassword1"> Password:</label>
            <input type="password" name="password" class="form-control mt-2" id="exampleInputPassword1" placeholder="Enter Password">
          </div>
         <p class="text-end mt-2"><a href="login.php">Forgot Password?</a></p>

         <div class="d-grid">
          <button type="submit" class="btn btn-lg btn-primary mt-1" name="regi_user">Register Now</button>
          <p class="text-center mt-2">Already a member?<a href="login.php"> Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ======  END a form ======= -->


<?php include('includes/footer.php'); ?>