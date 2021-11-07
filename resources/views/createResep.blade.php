<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @section('title','Create Resep')
</head>
<header>
@extends('layout.mainlayout')
</header>
<body class = "bg-secondary">
<div class = "container">
@section('main_content')

<form action="{{route('resep.store')}}" method="POST">
    {{ csrf_field() }}
    <label for="lname" class="fs-3"> Nama Resep :</label> <br>
    <input type="text" id="lname" name="r_name" ><br>
    <div class="form-group">
        <label class="fs-3" >Resep Obat: </label>
        <select name="r_code" class="custom-select">
        <option value="r_code" selected hidden class="fs-3">Choose here</option>
        @foreach ($obat as $obat)
        <option value="{{ $obat['code'] }}">{{ $obat['code'] }}</option>    
        @endforeach     
        </select>
    </div>      
    <label for="lname" class="fs-3" > Deskripsi Resep :</label><br>
    <input type="text" id="lname" name="r_desc"><br>
    <br><br>
    <input type="submit" value="Submit" class="btn btn-dark">
</form>
  @endsection
</div>
</body>
</html>