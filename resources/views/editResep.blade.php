<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @section('title','Edit Resep')
</head>
<header>
@extends('layout.mainlayout')
</header>
<body class="bg-secondary">
    <div class = "container">
@section('main_content')

<form action="{{route('resep.update', $resep->resep_code )}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <label for="lname"> Nama Resep:</label><br>
    <input type="text" id="lname" name="r_name" value="{{ $resep->resep}}" required><br>
    <label for="lname"> Code Resep:</label><br>
    <input type="text" id="lname" name="r_code" value="{{ $resep->resep_code}}" readonly required><br>
    <label for="lname"> Deskripsi Resep:</label><br>
    <input type="text" id="lname" name="r_desc" value="{{ $resep->resep_description}}" required><br>
    <br><br>
    <input type="submit" value="Submit">
  </form>
  @endsection
</div>
</body>
</html>