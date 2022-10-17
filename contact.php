<!DOCTYPE html>
<html lang="en">
<head>
<title>Webshop - Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div>
        <h1>CONTACT</h1>
    </div>

<div class="navbar">
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=home">Home</a>
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=about">About</a>
  <a href="http://localhost/educom-webshop-basis-1/index.php?page=contact" class="active">Contact</a>
</div>
<p>
<form method=”GET” action=”https://api.dev-master.ninja/html/form”>
            
    <select name=”YouLikeHtml”>
        <label for="fname">Voornaam:</label><br><br>
                       <option disabled selected>-- aanhef -- </option>
                       <option value=”Y”>Dhr.</option>
                       <option value=”N”>Mvr.</option>
                       <input type="text" id="fname" name="fname"><br><br>
                       <label for="fname">E-mail:</label><br><br>
                       <input type="text" id="email" name="email"><br><br>
                       <label for="fname">Telefoonnummer:</label><br><br>
                       <input type="text" id="phone" name="phone"><br>
                       <p>Communicatievoorkeur:</p>
                       <input type="radio" id="html" name="fav_com" value="email">
                       <label for="email">E-mail</label><br><br>
                       <input type="radio" id="css" name="fav_com" value="phone">
                       <label for="phone">Telefoon</label><br><br> 
                        <label for="subject">Onderwerp:</label><br><br>-/*9
                             name=”age”
                             min=”1” max=”50”><br><br> 
                        <input type="submit" value="Verstuur">
                      </form>
                    </select>
                </form></p>

<div class="footer">
    <footer>
        <p>&copy; 2022 - Randy Hamilton</p> 
    </footer>  
</div>

</body>
</html>