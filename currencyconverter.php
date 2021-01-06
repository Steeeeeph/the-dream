<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Currency converter: DOP to EUR</title>
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet"> 
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
         $euroValue = round($peso*$currencyRateDOPtoEUR, 2);   

      } 
   ?>

<!-- TODO input travel destination - Dominican Republic -->
<!-- TODO input local currency -->
<!-- TODO submit the value to PHP-->
   <main>
      <h1>Am I being ripped off in the <span>Dominican Republic</span> ?</h1>
      <p>Check  the value here:</p>
      <form class="converter" action="currencyconverter.php" method="post">
         <input type="number" name="peso" id="peso" min="0" step="0.01" value="<?php echo isset($_POST['peso']) ? $_POST['peso']: ''; ?>" placeholder="Dominican Peso"> <label for="peso">DOP</label>
         <input type="submit" name="submit" value="Convert to">
         <input type="number" name="euro" id="euro" placeholder="Euro" step="0.01" value="<?php echo isset($euroValue) ? $euroValue: ''; ?>" readonly> <label for="euro">EUR</label>
      </form>
   </main>
   
</body>
</html>
<!-- value="< ?php echo isset(
   ternary rule:
   $_POST['peso']) ? 
   for converting to : htmlspecialchars($_POST['peso'], 
   converts both single and double quotes ENT_QUOTES) : ''; ? >" -->