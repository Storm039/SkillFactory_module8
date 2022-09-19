
<?php
  $a = 'Сегодня на улице прохладно... ';
  $b = 10;
  $c = '°'. "C"; 
  $p = "%"; 

  $textProgress = "Прогресс изучения данного модуля:";
  $fullProgress = False;
  $currentProgress = 99.99;
  $pBar = '[*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*';

  if($fullProgress) {
    $porogressBar = $pBar . ' 100 ' . $p;
  } else {
    $porogressBar = $pBar . " " . $currentProgress . " " . $p;
  }
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>
