<!-- HEAD JUMBOTRON -->
<div class="jumbotron">
 <div class="container">
   <h1 class="display-5">Block Count:</h1>
   <h3 class="display-5"><?php echo($hexcoin->getblockcount()); ?></h3>
   <h1 class="display-5">Difficulty:</h1>
   <h3 class="display-5"><?php echo($hexcoin->getdifficulty()); ?></h3>
   <h1 class="display-5">Connections:</h1>
   <h3 class="display-5"><?php echo($hexcoin->getconnectioncount()); ?></h3>
   <h1 class="display-5">Network kHashes per sec (khps):</h1>
   <h3 class="display-5"><?php echo($hexcoin->getnetworkhashps()/1000); ?></h3>
 </div>
</div>

<div class="container">
  <h1>Latest Blocks:</h1>
  <?php require_once("pages_includes/latest_blocks.php"); ?>
</div>
