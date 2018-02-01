<?php
if(isset($_POST['sum_deposit'])) {
  $sum_deposit = $_POST['sum_deposit'];
  $sum_refill = $_POST['sum_refill'];
  $years_deposit = $_POST['years_deposit'];
  $refill = $_POST['refill'];
  $percent = 0.1;
  $count = 0;
  $daysn = date('t', strtotime($_POST['date_deposit']));
  $daysy_l = date('L', strtotime($_POST['date_deposit']));
  if ($daysy_l == 0) {
    $daysy = 365;
  } else {
    $daysy = 366;
  }
  function cacl($y_arg, $sum_arg, $ref_arg, $daysn_arg, $percent_arg, $daysy_arg, $count_arg)
  {
    $count_arg++;
    $sum_res_arg = $sum_arg + ($sum_arg + $ref_arg)*$daysn_arg*$percent_arg/$daysy_arg;
    if($count_arg == $y_arg) {
      return $sum_res_arg;
    } else {
      return cacl($y_arg, $sum_res_arg, $ref_arg, $daysn_arg, $percent_arg, $daysy_arg, $count_arg);
    }
  }
  $sum_result = cacl($years_deposit, $sum_deposit, $sum_refill, $daysn, $percent, $daysy, $count);
  echo $sum_result;
}
?>
