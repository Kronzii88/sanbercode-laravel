<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>

    <form action="{{url('/welcome')}}" method="post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label>Gender :</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label>Nationality :</label><br><br>
        <select id="national">
            <option value="indonesia">Indonesia</option>
            <option value="argentina">Argentina</option>
            <option value="inggris">Inggris</option>
            <option value="amerika">Amerika</option>
        </select>
        <br><br>
        <label>Language Spoken :</label><br><br>
        <input type="checkbox" name="laguage1" value="bahasa" checked>
        <label for="laguage1"> Bahasa Indonesia</label><br>
        <input type="checkbox" name="language2" value="english">
        <label for="language2"> English</label><br>
        <input type="checkbox" name="language3" value="other">
        <label for="language3"> Other</label><br><br>
        <label>Bio :</label><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>