<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Currency converter</title>
</head>
<body>
<!-- TODO input travel destination - Dominican Republic -->
<!-- TODO input local currency -->
<!-- TODO submit the value to PHP-->
   <!-- TODO Figure out what a form submit actually means / does -->
   <!--TODO How to get the form data after the submit? -->
   <!-- TODO Calculate the amount in the desired valuta -->
   <!-- TODO Figure out a way to provide this data in the HTML -->
<!-- TODO output to EURO -->
   <main>
      <h1>Am I being ripped off in the Dominican Republic?</h1>
      <p></p>
      <form class="converter" action="converterform.php" method="post">
         <input type="text" name="peso" id="peso" placeholder="Dominican Peso">
         <p>DOP</p>
         <input type="submit" value="Convert to EUR">
      </form>
   </main>

</body>
</html>