<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>This is test page</h1>
<p>This is a paragraph.</p>

<form action ="/save" method="Post ">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <input type="supmit" value="save">
</form>
</body>
</html>
