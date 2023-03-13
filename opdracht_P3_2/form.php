<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormulierP3-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="replyform.php" method="post">
<label>Voornaam</label>
<input type="text" name="name">

<label>Achternaam</label>
<input type="text" name="surname">

<label>Email</label>
<input type="email" name="email">

<label>Geslacht:</label>
<br>
<label>Man</label>
<input type="radio" name="gender" value="Man">
<label>Vrouw</label>
<input type="radio" name="gender" value="Vrouw">

<label>straatnaam</label>
<input type="text" name="streetname">

<label>Huisnummer</label>
<input type="text" name="housenumber">

<label>Stad</label>
<input type="text" name="city">

<label>Land</label>
<br>
<select name="land">
 <option>Belgie</option>
 <option>Duitsland</option>
 <option>Oostenrijk</option>
 <option>Zwitserland</option>
 <option>Italie</option>
</select>

<br>
<label>Wachtwoord</label>
<input type="password" name="password">

<button type="submit" name="submit">verzenden</button>

</form>

</body>
</html>