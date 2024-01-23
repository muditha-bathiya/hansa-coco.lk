<?php
require_once('inc/connection.php'); 

$product = '';
$sql = "SELECT * FROM `item`  "; //item_name => "TEame", 
$res = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($res))
{ 
  $product .='
            <div class="col-xl-3 col-md-6 col-sm-6 mt-2">
              <div class="card">
                <img class="card-img-top" src="images/products/cpimg.png" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">'.$row['item_name'].'</h5>
                  <p class="card-text">
                    '.$row['item_description'].' 
                  </p>
                  <div>
                  <a href="" class="custom_dark-btn">
                    Buy Now
                  </a>
                </div>
                </div>
              </div>
            </div>
            ';
}
?>
<!DOCTYPE html>
<html>
  
<head>
  <?php include_once 'includes/head.php'; ?>
</head>

<body>

  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <?php include_once 'includes/navbar.php'; ?>
    <!-- end header section -->

      <div class="layout_padding2">
        <div class="container">
          <div class="row">

            <!-- <div class="col-xl-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="card-img-top" src="images/products/cpimg.png" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Coconut Processing Mastery</h5>
                  <p class="card-text">
                    We leverage our coconut processing expertise to transform handpicked 
                    coconuts into the purest, most versatile forms of coconut oil, milk, and other derivatives. 
                  </p>
                  <div>
                  <a href="" class="custom_dark-btn">
                    Buy Now
                  </a>
                </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="card-img-top" src="images/products/cpimg.png" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Coconut Processing Mastery</h5>
                  <p class="card-text">
                    We leverage our coconut processing expertise to transform handpicked 
                    coconuts into the purest, most versatile forms of coconut oil, milk, and other derivatives. 
                  </p>
                  <div>
                  <a href="" class="custom_dark-btn">
                    Buy Now
                  </a>
                </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="card-img-top" src="images/products/cpimg.png" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title">Coconut Processing Mastery</h5>
                  <p class="card-text">
                    We leverage our coconut processing expertise to transform handpicked 
                    coconuts into the purest, most versatile forms of coconut oil, milk, and other derivatives. 
                  </p>
                  <div>
                  <a href="" class="custom_dark-btn">
                    Buy Now
                  </a>
                </div>
                </div>
              </div>
            </div> -->

            <?php echo $product;?>

          </div>
        </div>

          <!-- <div class="card">
            <img class="card-img-top" src="images/products/cpimg.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Coconut Processing Mastery</h5>
              <p class="card-text">
                We leverage our coconut processing expertise to transform handpicked coconuts into the purest, most versatile forms of coconut oil, milk, and other derivatives. 
              </p>
              <div>
              <a href="" class="custom_dark-btn">
                Buy Now
              </a>
            </div>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="images/products/peimg.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Production Excellence</h5>
              <p class="card-text">
                Our cutting-edge manufacturing facilities employ rigorous quality controls to produce a diverse range of coconut-based products, from oils and cosmetics to culinary delights.
              </p>
              <div>
              <a href="" class="custom_dark-btn">
                Buy Now
              </a>
            </div>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="images/products/lbimg.png" alt="Card image cap"  >
            <div class="card-body">
              <h5 class="card-title">Customization and Private Labeling</h5>
              <p class="card-text">
                Our manufacturing services include customization and private labeling, allowing you to brand our premium coconut products with your unique identity. 
              </p>
              <div>
              <a href="" class="custom_dark-btn">
                Buy Now
              </a>
            </div>
            </div>
          </div> -->

        </div>
      </div>  

  </div>

  <?php include_once 'includes/footer.php'; ?>
</body>

</html>