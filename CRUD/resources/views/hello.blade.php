<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/create/" method="POST">
	@csrf
	NAME : <input type="text" name="name"> <br>
	ENROLLMENT : <input type="text" name="enrollment">
	<input type="submit">
</form>
</body>
</html>