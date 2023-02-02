 
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAILY_CHALLENGE</title>
</head>
<body>
<form action="" method="post">
<div >
		<h1>Electricity Bill</h1>

		<form action="" method="post" >
            	<input type="number" name="units" id="units" placeholder="entrer un nombre svp" />
            	<input type="submit" name="btnok" id="unit-submit" value="OK" />
		</form>

		
	</div>
  </form>
  <br />
  
<?php
if ( isset ($_POST['btnok'])) {
  $value=$_POST['units'];
 
   
  if($value=="")
  {
    echo 'Veillez renseigner tous les champs svp';
  }else
  {
 
    function calculate_bill($units) {
      $unit_cost_first = 3.50;
      $unit_cost_second = 4.00;
      $unit_cost_third = 5.20;
      $unit_cost_fourth = 6.50;
  
      if($units <= 50) {
          $bill = $units * $unit_cost_first;
      }
      else if($units > 50 && $units <= 100) {
          $temp = 50 * $unit_cost_first;
          $remaining_units = $units - 50;
          $bill = $temp + ($remaining_units * $unit_cost_second);
      }
      else if($units > 100 && $units <= 200) {
          $temp = (50 * 3.5) + (100 * $unit_cost_second);
          $remaining_units = $units - 150;
          $bill = $temp + ($remaining_units * $unit_cost_third);
      }
      else {
          $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
          $remaining_units = $units - 250;
          $bill = $temp + ($remaining_units * $unit_cost_fourth);
      }
      return number_format((float)$bill, 2, '.', '');
  }
  $result = calculate_bill($value);
  echo 'Total amount of ' . $value . ' => ' . $result;
}
}
?>
 

</body>
</html> 
