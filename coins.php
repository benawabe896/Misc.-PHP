<?php

function findCoins($num) {
  $coins = array(25,10,5,1);
  $results = array();

  foreach ($coins as $coin) {
    if($num < 1)
      break;

    $results[$coin] = floor($num / $coin);
    $num = $num % $coin;
  }
  return $results;

}

if(isset($_REQUEST['num'])){
	echo json_encode(findCoins((int)$_REQUEST['num']));
}
