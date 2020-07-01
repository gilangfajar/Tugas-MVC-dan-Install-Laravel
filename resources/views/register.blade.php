<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Register</title>
</head>
<body>
<fieldset>
    <h1>Buat Account Baru!</h1>
    <form action="/selwelcome" method="post">
        @csrf
        <h3>Sign Up Form</h3>
        <label>First Name:</label> <br> <br>
        <input type="text" name="first_name"> <br> <br>
        <label>Last Name:</label> <br> <br>
        <input type="text" name="last_name"> <br> <br>
        <label>Gender:</label> <br> <br>
        <input type="radio"> Male <br>
        <input type="radio"> Female <br>
        <input type="radio"> Other <br> <br>
        <label>Nationality:</label> <br> <br>
        <select>
            <option>Indonesia</option>
            <option>Singapura</option>
            <option>Australia</option>
        </select> <br> <br>

        <label>Language Spoken:</label> <br> <br>
        <input type="checkbox"> Bahasa Indonesia <br>
        <input type="checkbox"> English <br>
        <input type="checkbox"> Other <br> <br>

        <label>Bio:</label> <br><br>
        <textarea cols="30" rows="10"></textarea> <br><br>

        <!-- <input type="button" value="Sign Up" class="button_active" onclick="location.href='welcome.html';" /> -->
        <input type="submit" value="Sign Up">

</fieldset>
</form>
</body>
</html>
