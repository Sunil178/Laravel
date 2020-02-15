<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($data as $row)
<form action="/update/{{$row->id}}" method="POST">
	@csrf
	NAME : <input type="text" name="name" value="{{$row->name}}"> <br>
	ENROLLMENT : <input type="text" name="enrollment" value="{{$row->enrollment}}">
	<input type="submit">
</form>
@endforeach
</body>
</html>