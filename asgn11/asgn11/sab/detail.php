<?php require_once('private/initialize.php'); ?>

<?php

// Get requested ID

$id = $_GET['id'] ?? false;
if (!$id) {
  redirect_to('birds.php');
}

$bird = Bird::find_by_id($id);
// 2. dump bird
//var_dump($bird); exit;

?>

<?php $page_title = 'Detail'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<a href="birds.php">Back to Inventory</a>

<dl>
  <dt>Brand</dt>
  <dd><?php echo h($bird->brand); ?></dd>
</dl>
<dl>
  <dt>Model</dt>
  <dd><?php echo h($bird->model); ?></dd>
</dl>
<dl>
  <dt>Year</dt>
  <dd><?php echo h($bird->year); ?></dd>
</dl>
<dl>
  <dt>Category</dt>
  <dd><?php echo h($bird->category); ?></dd>
</dl>
<dl>
  <dt>Gender</dt>
  <dd><?php echo h($bird->gender); ?></dd>
</dl>
<dl>
  <dt>Color</dt>
  <dd><?php echo h($bird->color); ?></dd>
</dl>
<dl>
  <dt>Weight</dt>
  <dd><?php echo h($bird->weight_kg()) . ' / ' . h($bird->weight_lbs()); ?></dd>
</dl>
<dl>
  <dt>Condition</dt>
  <dd><?php echo h($bird->condition()); ?></dd>
</dl>
<dl>
  <dt>Price</dt>
  <dd><?php echo h(money_format('$%i', $bird->price)); ?></dd>
</dl>
<dl>
  <dt>Description</dt>
  <dd><?php echo h($bird->description); ?></dd>
</dl>

<?php include(SHARED_PATH . '/public_footer.php'); ?>