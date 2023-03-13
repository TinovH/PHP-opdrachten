<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <label>Voornaam</label>
    <input type="text" name="first_name" id="first_name" pattern="[a-zA-Z]" required>
    <br>
    <label for="sex">Geslacht</label>
    <input type="radio" name="sex" id="men" checked="checked">
    <label>Man</label>
    <input type="radio" name="sex" id="women">
    <label>Vrouw</label>
    <br>
    <label>Achternaam</label>
    <input type="text" name="last_name" id="last_name" pattern="[a-zA-Z]" required>
    <br>
    <label>Straat+huisnummer</label>
    <input type="text" name="adres" id="adres" pattern="[a-zA-Z]" required>
    <br>
    <label>Stad</label>
    <input type="text" name="city" id="city" pattern="[a-zA-Z]" required>
    <br>
    <label for="county">land selecteren</label>
    <select name="county" id="county" required>
        <option value="Nederland">Nederland</option>
        <option value="Frankrijk">Frankrijk</option>
        <option value="Spanje">Spanje</option>
        <option value="Italie">Italie</option>
        <option value="Oostenrijk">Oostenrijk</option>
        <option value="Belgie">Belgie</option>
    </select>
    <br>
    <label>E-mail</label>
    <input type="email" name="mail" id="mail" required>
    <br>
    <label>Wachtwoord</label>
    <input type="password" name="password" id="password">
    <br>

        <button type="submit">Submit</button>
        
    </form>
</body>
</html>