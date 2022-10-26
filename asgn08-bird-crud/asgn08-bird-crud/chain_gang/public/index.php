<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <ul id="menu">
    <li><a href="<?php echo url_for('/birds.php'); ?>">View Our Birds</a></li>
    <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
  </ul>

</div>

<?php $super_hero_image = 'images/home-page.jpg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>