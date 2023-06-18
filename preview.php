<?php include('includes/header.php'); ?>


<?php include('includes/nav.php'); ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prasenjit Mess Mahato para, Dulmi , Near Madhab Mess, Purulia, 723102 - MessFinder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/preview.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="card-wrapper">
        <div class="card mt-3" style="height: 80%";>
          <!-- card left -->
          <div class="product-imgs m-2">
            <div class="img-display" style="overflow:hidden;">
              <div class="img-showcase mt-1" style="align-items:center; text-align: center;">
                <img src="uploadimage/omar.jpg" alt="upload image" style=" width: 100%; height:100%;">
                <img src="uplaodimage/abir.jpg" alt="upload image" style=" width: 100%; height:100%;">
                <img src="uplaodimage/masud.jpg" alt="upload image" style=" width: 100%; height:100%;">
                <img src="uploadimage/maruf.jpg" alt="upload image" style="width: 100%; height:100%;">
              </div>
            </div>
            <div class="img-select">
              <div class="img-item" style="width: 25%;">
                <a href="uploadimage/maruf.jpg" data-id="1">
                  <img src="uploadimage/maruf.jpg" alt="upload image" style="width:100%; height:100%;">
                </a>
              </div>

              <div class="img-item" style="width: 25%;">
                <a href="uploadimage/maruf.jpg" data-id="2">
                  <img src="uploadimage/maruf.jpg" alt="Mess Image" style="width:100%; height:100%;">
                </a>
              </div>

              <div class="img-item" style="width: 25%;">
                <a href="uploadimage/maruf.jpg" data-id="3">
                  <img src="uploadimage/maruf.jpg" alt="Mess Image" style="width:100%; height:100%;">
                </a>
              </div>

              <div class="img-item" style="width: 25%;">
                <a href="uploadimage/maruf.jpg" data-id="4">
                  <img src="uploadimage/maruf.jpg" alt="Mess Image" style="width:100%; height:100%;">
                </a>
              </div>

            </div>
          </div> <!-- card right -->
          <div class="product-content">
            <h1 style="font-size:2rem; width='100%'" class="product-title">Pavel Mess</h1>
            <a href="#" class="product-link">Boys</a>
            <div class="product-price border_buttom">
              <p class="last-price">Bed Price: <span style="text-decoration: none; color:blue; font-weight:bold;">800
                  /Month</span></p>
              <p class="new-price">Address: <span style="color:black;">Potkhali,Doc,Near Barguna Polytechnic
                  Institute.</span></p>
            </div>

            <div class="product-detail border_buttom">
              <h2>About This Mess: </h2>
              <p>Mess has well-furnished rooms and bathrooms. Total room is 5. and total student can stay 18 only. Food
                facility is available.</p>

              <ul>
                <li>Food Facility: <span>Yes</span></li>
                <li>Bed Available: <span>Available</span></li>
                <li>Bathroom: <span>Yes</span></li>
                <li>Contact: <span>01780566585</span></li>
                <li>Email: <span></span>pra*******235@gmail.com</li>
                <p id="extra_textarea" class="width_textarea" style="border:none;" disabled>1.Wifi facility available
                  with
                  minimum charges.. 2. cycle parking area available. 3. By default mess provide a bed.</p>
              </ul>
            </div>
            <div class="purchase-info">
              <button type="button" class="btn" style="background-color:green; height:40px;">
                <a href="https://wa.me/+8801780566585" target="_blank"
                  style="color:black; text-decoration:none; color:white; font-weight:bold;">WhatsApp<i
                    style="padding:00px 00px 00px 10px; font-size:18px;" class="fa-brands fa-whatsapp"></i></a>
              </button>
              <button type="button" class="btn" style=" background-color: rgb(0, 115, 255); height:40px;">
                <a href="tel:+8801780566585" target="_blank"
                  style="color:black; text-decoration:none; color:white; font-weight:bold;">Call<i
                    class="fa-solid fa-phone" style="padding:00px 00px 00px 10px;"></i></a>
              </button>
              <button type="button" class="btn" style=" background-color: rgb(0, 115, 255); height:40px;">
                <!-- get user location -->
                <script>
                  let center_and_marker_lat = 0;
                  let center_and_marker_lng = 0;

                  function success(position) {
                    center_and_marker_lat = position.coords.latitude;
                    center_and_marker_lng = position.coords.longitude;

                    user_lat_lng = center_and_marker_lat + "," + center_and_marker_lng;
                    let Direction = document.querySelector("#get_direction_on_google");
                    mess_lat = '23.311832323251483';
                    mess_lng = '86.35735746151514';

                    Direction.href = "https://www.google.com/maps/dir/" + user_lat_lng + "/" + mess_lat + "," +
                    mess_lng;
                  }

                  function error() {
                    console.log("error");
                    alert("location not allowed");
                  }

                  navigator.geolocation.getCurrentPosition(success, error);
                </script>
                <a id="get_direction_on_google" target="_blank"
                  style="color:black; text-decoration:none; color:white; font-weight:bold;">Map<i
                    class="fa-solid fa-diamond-turn-right" style="padding:00px 00px 00px 10px;"></i></a>
              </button>
            </div>
          </div>
        </div>
        <?php include('includes/footer.php'); ?>