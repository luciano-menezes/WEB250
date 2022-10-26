<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

      <?php

      $birds = Bird::find_all();

      ?>
      <?php foreach ($birds as $bird) { ?>
        <tr>
          <td><?php echo h($bird->common_name); ?></td>
          <td><?php echo h($bird->habitat); ?></td>
          <td><?php echo h($bird->food); ?></td>
          <td><?php echo h($bird->conservation()); ?></td>
          <td><?php echo h($bird->backyard_tips); ?></td>
          <td><a href="detail.php?id=<?php echo $bird->id; ?>">View</a></td>
        </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>