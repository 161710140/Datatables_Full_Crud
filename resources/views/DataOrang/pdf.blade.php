<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Data PDF</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Nama</th>
                <th>Lahir</th>
                <th>Status</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Foto</th>
                
			</tr>
		</thead>
		<tbody>
			@foreach($Nama as $data)
			<tr>
				<td>{{$data->Nama}}</td>
				<td>{{$data->Lahir}}</td>
				<td>{{$data->Status}}</td>
				<td>{{$data->Gender}}</td>
				<td>{{$data->Alamat}}</td>
				<td>{{$data->Pekerjaan}}</td>
				<td><img src=".move(public_path('/upload/Photo/rastian-fajar.jpg')."></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>