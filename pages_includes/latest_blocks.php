<?php $block1 = $hexcoin->getblock($hexcoin->getblockhash($hexcoin->getblockcount())); ?>
<?php $block2 = $hexcoin->getblock($hexcoin->getblockhash($hexcoin->getblockcount()-1)); ?>
<?php $block3 = $hexcoin->getblock($hexcoin->getblockhash($hexcoin->getblockcount()-2)); ?>
<?php $block4 = $hexcoin->getblock($hexcoin->getblockhash($hexcoin->getblockcount()-3)); ?>

<div class="card">
  <h4 class="card-header">Block #<?php echo($block1['height']); ?></h4>
  <div class="card-body">
    <p class="card-text">Hash: <a href="<?php echo($a['subdir']); ?>?page=block&input=<?php echo($block1['hash']); ?>"><?php echo($block1['hash']); ?></a></p>
    <p class="card-text">Time: <?php echo gmdate("Y-m-d  H:i:s", $block1['time']); ?></p>
    <p class="card-text">Confirmations: <?php echo($block1['confirmations']); ?></p>
    <p class="card-text">Difficulty: <?php echo($block1['difficulty']); ?></p>
    <p class="card-text">Previous Block Hash: <?php echo($block1['previousblockhash']); ?></p>

    <a href="?page=block&input=<?php echo($block1['hash']); ?>" class="btn btn-primary">View details</a>
  </div>
</div>
<br />
<div class="card">
  <h4 class="card-header">Block #<?php echo($block2['height']); ?></h4>
  <div class="card-body">
    <p class="card-text">Hash: <a href="<?php echo($a['subdir']); ?>?page=block&input=<?php echo($block2['hash']); ?>"><?php echo($block2['hash']); ?></a></p>
    <p class="card-text">Time: <?php echo gmdate("Y-m-d  H:i:s", $block2['time']); ?></p>
    <p class="card-text">Confirmations: <?php echo($block2['confirmations']); ?></p>
    <p class="card-text">Difficulty: <?php echo($block2['difficulty']); ?></p>
    <p class="card-text">Previous Block Hash: <?php echo($block2['previousblockhash']); ?></p>

    <a href="?page=block&input=<?php echo($block2['hash']); ?>" class="btn btn-primary">View details</a>
  </div>
</div>
<br />
<div class="card">
  <h4 class="card-header">Block #<?php echo($block3['height']); ?></h4>
  <div class="card-body">
    <p class="card-text">Hash: <a href="<?php echo($a['subdir']); ?>?page=block&input=<?php echo($block3['hash']); ?>"><?php echo($block3['hash']); ?></a></p>
    <p class="card-text">Time: <?php echo gmdate("Y-m-d  H:i:s", $block3['time']); ?></p>
    <p class="card-text">Confirmations: <?php echo($block3['confirmations']); ?></p>
    <p class="card-text">Difficulty: <?php echo($block3['difficulty']); ?></p>
    <p class="card-text">Previous Block Hash: <?php echo($block3['previousblockhash']); ?></p>

    <a href="?page=block&input=<?php echo($block3['hash']); ?>" class="btn btn-primary">View details</a>
  </div>
</div>
<br />
<div class="card">
  <h4 class="card-header">Block #<?php echo($block4['height']); ?></h4>
  <div class="card-body">
    <p class="card-text">Hash: <a href="<?php echo($a['subdir']); ?>?page=block&input=<?php echo($block4['hash']); ?>"><?php echo($block4['hash']); ?></a></p>
    <p class="card-text">Time: <?php echo gmdate("Y-m-d  H:i:s", $block4['time']); ?></p>
    <p class="card-text">Confirmations: <?php echo($block4['confirmations']); ?></p>
    <p class="card-text">Difficulty: <?php echo($block4['difficulty']); ?></p>
    <p class="card-text">Previous Block Hash: <?php echo($block4['previousblockhash']); ?></p>

    <a href="?page=block&input=<?php echo($block4['hash']); ?>" class="btn btn-primary">View details</a>
  </div>
</div>
