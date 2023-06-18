
<?php include('server.php'); ?>



<?php include('includes/header.php'); ?>


<link rel="stylesheet" href="asset/css/addnew.css">
</head>

<body>




  <div class="container">



    <header>Register a new Mess</header>

    <form method="POST" enctype="multipart/form-data" id="add_mess_form" autocomplete="off">
      <div class="form first">
        <div class="details personal">
          <span class="title winpaytmcash" style="display:inline-block;">Register and win 10 paytm cash.</span>
          <span class="title how_to_register" style="display:inline-block; font-size:13px;"><a
              href="php/how_to_register.html">How to register ?</a></span>

          <div class="fields">
            <div class="input-field">
              <label>Mess Name</label>
              <input type="text" name="messname" placeholder="Enter your mess name" id="messname" required>
            </div>

            <div class="input-field">
              <label>Price</label>
              <input type="number" name="price" placeholder="Price per Bed" id="price" required>
            </div>

            <div class="input-field">
              <label>Mess Location</label>
              <input type="text" name="messlocation" placeholder="Mess Address" id="messlocation" required>
            </div>

            <div class="input-field">
              <label>Mess Contact No</label>
              <input type="number" name="messcontactno" placeholder="Enter mobile number" id="messcontactno" required>
            </div>

            <div class="input-field">
              <label>Type</label>
              <select name="messtype" id="messtype" required>
                <option disabled selected>Select Type</option>
                <option>Boys</option>
                <option>Girls</option>
                <option>Family Flate</option>
                <option>Rent House</option>
              </select>
            </div>

            <div class="input-field">
              <label>About</label>
              <textarea style="outline:0; padding:5px; height:42px; border-radius:5px;" type="text" name="messabout"
                placeholder="Enter Mess Details" id="messabout" required></textarea>
            </div>
          </div>
        </div>

        <div class="details ID">


          <div class="fields">
            <div class="input-field">
              <label>Food Facility</label>
              <select name="foodfacility" id="foodfacility" required>
                <option disabled selected>Food Available?</option>
                <option id="food_yes" value="Yes">Yes</option>
                <option value="No">No</option>
                <!-- <option>Family Flate</option> -->
              </select>
            </div>


            <div class="read_div box_hide">
              <div id="read_div_first">
                <span
                  style="display:inline-block; height:100%; margin-top:1.8vh; padding:00px 10px 00px 30px; font-size:25px;">Food
                  Facility</span>
                <span
                  style="display:inline-block; height:100%; padding:5px; margin-left:auto; padding:1.3vh 3vh 00px 00px; font-size:35px;"
                  id="close_n_b">&#10539;</span>
              </div>
              <div id="read_div_second">

                <div class="foodfacility_btn"
                  style="display:inline-block; background-color:rgb(36, 150, 250); border:none; border-radius:5px; width:50%; height:35px; text-align:center;color:white; margin-left:25%; padding-top:5px; cursor: pointer;">
                  Save</div>
              </div>
            </div>
            <!-- food facility input box end -->
            <div class="input-field">
              <label>Bathroom</label>
              <select name="bathroom" id="bathroom" required>
                <option disabled selected>Bathroom Available?</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="input-field">
              <label>Mess Owner Name</label>
              <input type="text" name="ownername" placeholder="Owner Name" id="ownername" required>
            </div>
            <div class="input-field">
              <label>Total Room</label>
              <input type="text" name="totalroom" placeholder="Total Room" id="totalroom" required>
            </div>

            <div class="input-field">
              <label>Total Student</label>
              <input type="text" name="totalstudent" placeholder="Total Room" id="totalstudent" required>
            </div>
            <div class="input-field">
              <label>Students In one Room</label>
              <select name="bedavailable" id="bedavailable" required>
                <option>1-2</option>
                <option>2-3</option>
                <option>3-4</option>
              </select>
            </div>
            <div class="input-field">
              <label>Bed Available?</label>
              <select name="bedavailable" id="bedavailable" required>
                <option>Available</option>
                <option>Not Available</option>
              </select>
            </div>
            <div class="input-field">
              <label>Extra Electricity Cost</label>
              <select name="electricity" id="electricity" required>
                <option disabled selected>Choose</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
            <div class="input-field">
              <label>Extra Facility</label>
              <textarea style="outline:0; padding:5px; height:42px; border-radius:5px;" type="text" name="extrafacility"
                placeholder="Extra Facility" id="extrafacility" required></textarea>
            </div>
          </div>
          <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div>
          <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled>
          </div>
          <div class="mb-3">
            <label for="formFileSm" class="form-label">Small file input example</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
          </div>

        </div>
        <div>
          <br>
          <span class="nextBtn">
            <input type="submit" name="add_mess_button" value="Submit"
              style=" width:100%; height:100%; border-radius:10px;color:white; font-weight:bold;background-color: #4070f4; border: none; font-size: 100%; height:120%; padding:10px;">
          </span>
        </div>
      </div>
  </div>
  </form>
  <div class="error_show_div" style="text-align:center; color:red; overflow-x:auto; font-size:12px; padding:5px;">
  </div>
  </div>
  </div>
  <!-- loading animation div -->
  <div class="loading_animation_div loading_hide"
    style=" position:absolute; justify-content:center; align-items:center; top:00px; left:00px; width:100vw; height:100vh; background-color:rgba(132, 132, 132, 0.642);">
    <div class="loader"></div>
  </div>
  <!-- // loading animatiom div -->

  <body>

    </html>
    <script>
      let form = document.querySelector('#add_mess_form');

      let loading_animation_div = document.querySelector('.loading_animation_div');

      form.addEventListener("submit", image_load_function);

      function image_load_function(e) {
        e.preventDefault();


        loading_animation_div.setAttribute("class", "loading_animation_div");

        let ajax = new XMLHttpRequest();
        ajax.open("POST", "php/mess_details.php", true);
        ajax.onload = () => {
          if (ajax.status === 200) {
            console.log(ajax.responseText);
            if (ajax.responseText == "ok") {
              form.reset();
              window.location.href = "php/image_upload.php?add_mess=ok&step=1";
            } else {
              loading_animation_div.setAttribute("class", "loading_animation_div loading_hide");
              document.querySelector(".error_show_div").innerHTML = ajax.responseText;
              console.log("falied");
            }
            console.log(ajax.responseText);
          } else {

          }
        }
        let form_data = new FormData(form);
        ajax.send(form_data);
      }
    </script>


    <!-- upload image room washroom..ect  -->





    <?php include('includes/footer.php'); ?>