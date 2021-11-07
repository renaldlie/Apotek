<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resep</title>
</head>
<body class = "bg-secondary">
    @include ('layout.navigation')
    <table border=1px class = "table table-striped table-dark"  >
  <tr>
    <th>No</th>
    <th>Resep</th>
    <th>Description</th>
    <th>Resep Code</th>
    <th>Action</th>
    
    @foreach ($resep as $resep)
<tr>
  <td>{{$loop->index+1}}</td>
  <td>{{$resep['resep']}}</td>
  <td>{{$resep['resep_description']}}</td>  
  <td>
      <a href="{{route('obat.show', $resep->resep_code )}}">
      {{$resep['resep_code']}}
      </a>
  </td>
  <td>   
      <form action="{{route('resep.destroy', $resep->id )}}" method="POST">
      <a class ="btn btn-primary pull-right" href="{{route('resep.edit', $resep->resep_code )}}">Edit Resep</a>
      <a class ="btn btn-warning pull-right" href="{{route('resep.show', $resep->resep_code )}}">Show Resep</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger text-center">Delete Resep</button>
      </form>
  </td>
</tr>
@endforeach
</table>
<br><br>
<a class ="btn btn-dark pull-right" href="{{route('resep.create')}}" >Create Resep</a>
<br>
</body>
</html>