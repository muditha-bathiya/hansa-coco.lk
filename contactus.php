<?php
    //require_once('inc/connection.php'); 
    require_once('inc/connection.php'); 
    /**php connection opening**/
?>
<?php
  $name='';
  $phone='';
  $email='';
  $message = '';
  $errors = array(); // Create an array to store errors

if (isset($_POST['submit'])) {
  $name= $_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $message = $_POST['message'];

  if (empty(trim($_POST['name']))) {
        $errors[] = 'Name is required';
    }
  if (empty(trim($_POST['phone']))) {
        $errors[] = 'Phone Number is required';
    }
  if (empty(trim($_POST['email']))) {
        $errors[] = 'Email is required';
    }
  if (empty(trim($_POST['message']))) {
        $errors[] = 'Message is required';
    }
    if (empty($errors)) {
      $name = mysqli_real_escape_string($connection, $_POST['name']);
      $phone = mysqli_real_escape_string($connection, $_POST['phone']);
      $email = mysqli_real_escape_string($connection, $_POST['email']);
      $message = mysqli_real_escape_string($connection, $_POST['message']);
  
      $query = "INSERT INTO `contact_us`(`c_name`, `c_phone`, `c_email`, `c_message`) VALUES ('{$name}','{$phone}','{$email}','{$message}')";
  
      try {
          $result = mysqli_query($connection, $query);
          echo '<script>alert("We received your contact information. We will get to you as soon as possible.");</script>';
          header('Location: contactus.php'); // Use Location to redirect to another page
      } catch (Exception $e) {
          echo '<script>alert("Something Went Wrong. Please Try Again.\n' . $e->getMessage() . '");</script>';
      }
  }
}
?>
<?php 

if (isset($_POST['subscribe'])) {
  // Get the email from the form
  $email = $_POST['email'];

  // Insert the data into the database
  $sql = "INSERT INTO hansa_subscription (sub_email) VALUES ('$email')";

  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Subscription successful!')</script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php include_once 'includes/head.php'; ?>
</head>

<body>
 

  <!-- header section strats -->
    <?php include 'includes/navbar.php'; ?>
  <!-- end header section -->

  
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
        Contact Us
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form action="contactus.php" method="post">
            <div class="contact_form-container">
              <?php
              if (!empty($errors)) {
                  echo '<div class="alert alert-danger">';
                  echo '<ul>';
                  foreach ($errors as $error) {
                      echo '<li>' . $error . '</li>';
                  }
                  echo '</ul>';
                  echo '</div>';
              }
              ?>

              <div>
                <div>
                  <input type="text" placeholder="Name" name="name">
                </div>
                <div>
                  <input type="text" placeholder="Phone Number" name="phone">
                </div>
                <div>
                  <input type="email" placeholder="Email" name="email">
                </div>

                <div class="mt-5">
                  <input type="text" placeholder="Message" name="message">
                </div>
                <div class="mt-5">
                  <button type="submit" name="submit">
                    send
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Fruits
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Services
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            List
          </h5>
          <ul>
            <li>
              randomised
            </li>
            <li>
              words which
            </li>
            <li>
              don't look even
            </li>
            <li>
              slightly
            </li>
            <li>
              believable. If you
            </li>
            <li>
              are going to use
            </li>
            <li>
              a passage of
            </li>
            <li>
              Lorem Ipsum,
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
              Follow Us
            </h5>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>

              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
          <div class="subscribe_container">
            <h5>
              Subscribe Now
            </h5>
            <div class="form_container">
              <form method="post">
                <input type="email" name="email" required>
                <button type="submit" name="subscribe">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



 <?php include_once 'includes/footer.php'; ?>
</body>

</html>