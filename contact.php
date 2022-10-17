<!DOCTYPE html>
<html lang="en">
<head>
<title>Webshop - Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
// initate the variables
   $name = $email = ... = $message = '';
   $nameErr = $emailErr = ... = $messageErr = '';
   $valid = false;


   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // validate the 'POST' data

      // ....   

      $valid = ...
   }
  ?>

    <div>
        <h1>CONTACT</h1>
    </div>

<div class="navbar">
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=home">Home</a>
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=about">About</a>
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=contact" class="active">Contact</a>
</div>
<p>
                <section>;

<?php if (!$valid) { /* Show the next part only when $valid is false */ ?>

  <form method="POST" action="contact.php">;
    ...
    <input name="email" value="<?php echo $email; ?>" id="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    ...
  </form>;

<?php } else { /* Show the next part only when $valid is true */ ?>

 <p>Bedankt voor uw reactie:</p>
 ...
 <div>Email: <?php echo $email; ?></div>
 ...     

<?php } /* End of conditional showing */ ?>

</section>

<div class="footer">
    <footer>
        <p>&copy; 2022 - Randy Hamilton</p> 
    </footer>  
</div>

</body>
</html>