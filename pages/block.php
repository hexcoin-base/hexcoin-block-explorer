<?php
  if(!empty($_REQUEST['input'])) {
    $input = $_REQUEST['input'];
  } else {
    $input = "";
  }
?>

<!-- HEAD JUMBOTRON -->
<div class="jumbotron">
 <div class="container">
   <form method="GET">
			<div class="form-group">
				<input type="hidden" name="page" value="block">
				<input class="form-control form-control-lg" type="text" name="input" value="<?php echo($input); ?>" placeholder="Block Index or Block Hash">
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Check">
			</div>
		</form>
 </div>
</div>

<?php if(strlen($input) > 0 && $input >= 0) { ?>
  <?php $block = $hexcoin->getblock($input); ?>
  <?php if($block == false) {
    $block = $hexcoin->getblock($hexcoin->getblockhash(intval($input)));
    if($block == false) { ?>
      <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Block</strong> not found!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    <?php }
  }?>
  <div class="container">
    <div class="card">
      <h4 class="card-header">Block #<?php echo($block['height']); ?></h4>
      <div class="card-body">
        <p class="card-text">Hash: <?php echo($block['hash']); ?></p>
        <p class="card-text">Confirmations: <?php echo($block['confirmations']); ?></p>
        <p class="card-text">Size: <?php echo($block['size']); ?></p>
        <p class="card-text">Height: <?php echo($block['height']); ?></p>
        <p class="card-text">Merkle Root: <?php echo($block['merkleroot']); ?></p>
        <p class="card-text">Tx:   <?php
            foreach($block['tx'] as $value) {
              echo $value.'<br />';
            }
          ?></p>
        <p class="card-text">Time: <?php echo($block['time']); ?> / <?php echo gmdate("Y-m-d\TH:i:s\Z", $block['time']); ?></p>
        <p class="card-text">Nonce: <?php echo($block['nonce']); ?></p>
        <p class="card-text">Bits: <?php echo($block['bits']); ?></p>
        <p class="card-text">Difficulty: <?php echo($block['difficulty']); ?></p>
        <p class="card-text">Previous Block Hash: <?php echo($block['previousblockhash']); ?></p>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="container">
    <h1>Latest Blocks:</h1>
    <?php require_once("pages_includes/latest_blocks.php"); ?>
  </div>
<?php } ?>
