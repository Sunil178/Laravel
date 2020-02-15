<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="/show_create/">Insert Data</a>

<table>
	<tr>
		<th>NAME</th>
		<th>ENROLLMENT</th>
		<th>DELETE</th>
	</tr>

	@foreach($data as $row)
	<tr>
		<td>{{$row->name}}</td>
		<td>{{$row->enrollment}}</td>
		<td><a href="/remove/{{$row->id}}">Delete</a></td>
		<td><a href="/show_update/{{$row->id}}">Update</a></td>
	</tr>
	@endforeach
</table>



<!-- <?php foreach ($data as $row){ ?>
<p><?php echo ($row->name); ?></p>
<p><?php echo ($row->enrollment); ?></p>
<?php } ?> -->
</body>
</html>