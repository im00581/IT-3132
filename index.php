<?php
  $pageTitle = 'Home';
  require 'partials/head.php';
?>

<body class="page-home">
  <?php
    require 'partials/header.php';
    require 'partials/navi-primary.php';
    require 'partials/slider.php';
  ?>

  <section class="container main-content">
    <div class="row">
      <div class="col-sm-6">
        <div class="pic1">
        <div class="thumbnail">
          <div class="caption">
            <h3>Breakfast Special</h3>
            <h4>Blueberry Scone</h4>
            <p>The berries change with the season. Right now, our scones are bursting with blueberries!
            <figure>
              <img src="images/special_1.jpg" alt="blueberry scone">
            </figure>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="thumbnail">
          <div class="pic1">
          <div class="caption">
            <h3>Lunch / Dinner Special</h3>
            <h4>Creamy Mushrooms</h4>
            <p>Three savory mushrooms grilled and filled with cheese, tomatoes, and spinach!</p>
            <figure>
			        <img src="images/special_2.jpg" alt="mushrooms">
			      </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require 'partials/footer.php'; ?>
</body>
</html>
