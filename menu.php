<?php
  $pageTitle = 'Menu';
  require 'partials/head.php';
?>

<body class="page-menu">
  <?php
    require 'partials/header.php';
    require 'partials/navi-primary.php';
    require 'partials/slider.php';
  ?>

  <section class="container main-content">
    <h2>Menu</h2>
	<ul id="link-list">
	<li><a href="#breakfast">Breakfast Menu</a></li>
	<li><a href="#lunch">Lunch Menu</a></li>
	<li><a href="#dinner">Dinner Menu</a></li>
	</ul>
	<h3 id="breakfast">Breakfast</h3>
	<iframe id="menu-container" src="http://docs.google.com/gview?url=http://141.165.201.220/LocalUser/Team101/images/menu/menu_breakfast.pdf&embedded=true" 
	 frameborder="0"></iframe>	<h3 id="lunch">Lunch</h3>
	<iframe id="menu-container" src="http://docs.google.com/gview?url=http://141.165.201.220/LocalUser/Team101/images/menu/menu_lunch.pdf&embedded=true" 
	frameborder="0"></iframe>	<h3 id="dinner">Dinner</h3>
	<iframe id="menu-container" src="http://docs.google.com/gview?url=http://141.165.201.220/LocalUser/Team101/images/menu/menu_dinner.pdf&embedded=true" 
	frameborder="0"></iframe>
  </section>

  <?php require 'partials/footer.php'; ?>
</body>
</html>
