<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Currency converter: DOP to EUR</title>
</head>
<body>
<!-- TODO input travel destination - Dominican Republic -->
<!-- TODO input local currency -->
<!-- TODO submit the value to PHP-->
<!-- TODO output to EURO -->
   <main>
      <h1>Am I being ripped off in the Dominican Republic?</h1>
      <p>Fill in the price:</p>
      <form class="converter" action="converterform.php" method="post">
         <input type="number" name="peso" id="peso" min="0" placeholder="Dominican Peso"> DOP
         <input type="submit" value="Convert to EUR">
      </form>
   </main>

</body>
</html>