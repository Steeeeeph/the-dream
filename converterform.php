<?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   // TODO Figure out what a form submit actually means / does
   // TODO How to get the form data after the submit?
   // TODO Calculate the amount in the desired valuta
   // TODO Figure out a way to provide this data in the HTML
   $currencyRate = 0.014;

   if (isset($_POST['peso'])) {
      $peso = $_POST['peso'];
   }
   $euro = $peso*$currencyRate;
   
   echo "<p> $peso DOP = $euro EUR </p>";
?>