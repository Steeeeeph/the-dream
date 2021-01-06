<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Currency converter: DOP to EUR</title>
</head>
<body>
   <?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   // TODO Figure out what a form submit actually means / does
   // TODO How to get the form data after the submit?
   // TODO Calculate the amount in the desired valuta
   // TODO output to EURO
   // TODO Figure out a way to provide this data in the HTML
   $currencyRateDOPtoEUR = 0.014;
   
   if (isset($_POST['peso'])) {
      $peso = $_POST['peso'];
      $euro = $_POST['euro'];
      $euroValue = $peso*$currencyRateDOPtoEUR;   
      // echo "<p> $euroValue EUR </p>";

   }

?>

<!-- TODO input travel destination - Dominican Republic -->
<!-- TODO input local currency -->
<!-- TODO submit the value to PHP-->
   <main>
      <h1>Am I being ripped off in the Dominican Republic?</h1>
      <p>What's the price you wanna check?</p>
      <form class="converter" action="currencyconverter.php" method="post">
         <input type="number" name="peso" id="peso" min="0" value="<?php echo isset($_POST['peso']) ? $_POST['peso']: ''; ?>" placeholder="Dominican Peso"> DOP
         <input type="submit" name="submit" value="Convert to">
         <input type="number" name="euro" id="euro" value="<?php echo isset($euroValue) ? $euroValue: ''; ?>" readonly>EUR
      </form>
   </main>
   
</body>
</html>
<!-- value="< ?php echo isset(
   ternary rule:
   $_POST['peso']) ? 
   for converting to : htmlspecialchars($_POST['peso'], 
   converts both single and double quotes ENT_QUOTES) : ''; ? >" -->