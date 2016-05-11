<?php

$dapan_sai = $_POST['dapan_sai'];
  if(empty($dapan_sai))
  {
    echo("You didn't select any boxes.");
  }
  else
  {
    $i = count($dapan_sai);
    echo("You selected $i box(es): ");
    for($j=0; $j < $i; $j++)
    {
      echo($dapan_sai[$j] . " ");
    }
  }

?>