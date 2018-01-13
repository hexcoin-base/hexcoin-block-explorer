<?php
/*
 * Copyright (c) 2018 by HexCoin (contact@hexco.in)
 * WebEngine 1.0
*/

// FOR DEBUG -- COMMENT OUT ON RELEASE!!
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// END FOR DEBUG

$a['title'] = "HexCoin Block Explorer";
$a['version'] = "1.0.2";
$a['copyright'] = "&copy; hexco.in 2018";
$a['subdir'] = ""; // LEAVE EMPTY IF INSTALLED ON DOMAIN ROOT || FILL OUT LIKE $a['subdir'] = "ip" if it's on example.com/ip

require_once("classes/easyHexcoin.class.php");

//$hexcoin = new Hexcoin('rpc_user', 'YOUR_HEXCOIN_RPC_PASSWORD', 'localhost', '4210');
$hexcoin = new Hexcoin('YOUR_HEXCOIN_RPC_USERNAME', 'YOUR_HEXCOIN_RPC_PASSWORD', 'YOUR_HEXCOIN_RPC_HOSTNAME', 'YOUR_HEXCOIN_RPC_PORT');

?>
