<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Obat</title>
</head>
<body class="bg-secondary">
    @include ('layout.navigation')
    <table border=1px class = "table table-striped table-dark" >
<tr>
    <th>No</th>
    <th>Code</th>
    <th>Obat</th>
    <th>Deskripsi</th>
    <th>Action</th>

    @foreach ($obats as $o)
<tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$o['code']}}</td>
      <td>{{$o['obat']}}</td>
      <td>{{$o['description']}}</td>
      <td>
      <form action="{{route('obat.destroy', $o->code )}}" method="POST">
      <a class ="btn btn-primary pull-right" href="{{route('obat.edit', $o->code )}}">Edit Obat</a>
      <a class ="btn btn-warning pull-right" href="{{route('obat.show', $o->code )}}">Show Obat</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete Obat</button>
      </form>
      </td>
</tr>
@endforeach
</table>
<br><br>
<a class ="btn btn-dark pull-right" href="{{route('obat.create')}}" >Create Obat</a>
<br>
</body>
</html>
