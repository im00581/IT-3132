<?php
function isActivePage($find, $pageTitle) {
  return stripos($pageTitle, $find) === false ? '' : 'active';
}
?>

<nav class="nav-primary">
  <div class="<?= isActivePage('home', $pageTitle); ?>">
    <a href="index.php">Home</a>
  </div>

  <div class="<?= isActivePage('about', $pageTitle); ?>">
    <a href="about.php">About</a>
  </div>

  <div class="<?= isActivePage('menu', $pageTitle); ?>">
    <a href="menu.php">Menu</a>
  </div>

  <div class="<?= isActivePage('recipe', $pageTitle); ?>">
    <a href="recipes.php">Recipes</a>
  </div>

  <div class="<?= isActivePage('contact', $pageTitle); ?>">
    <a href="contact.php">Contact</a>
  </div>
</nav>
