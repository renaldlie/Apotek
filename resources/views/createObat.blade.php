<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @section('title','Create Obat')
</head>
<header>
@extends('layout.mainlayout')
</header>
<body class = "bg-secondary">
    <div class = "container">
@section('main_content')

<form action="{{route('obat.store')}}" method="POST">
    {{ csrf_field() }}
    <label for="colFormLabelSm" class="fs-3 col-sm-2"> Nama Obat :</label><br>
    <input type="text" id="lname" name="o_name"><br>
    <label for="lname" class="fs-3"> Code Obat :</label><br>
    <input type="text" id="lname" name="o_code"><br>
    <div class="form-group">
        <label class="fs-3">Jenis Obat:</label><br>                    
            <select name="o_jenis" class="custom-select">
                <option value="Bebas">Obat Bebas</option>
                <option value="Bebas Terbatas">Obat Bebas Terbatas</option>
                <option value="Keras">Obat keras</option>
            </select>
    </div>
    <div class="form-group">
        <label class="fs-3">Tipe Obat:</label><br>                   
            <select name="o_tipe" class="custom-select">
                <option value="Salep">Salep</option>
                <option value="Cairan">Cairan</option>
                <option value="Kapsul">Kapsul</option>
                <option value="Tablet">Tablet</option>
            </select>
    </div>
    <label for="lname" class="fs-3"> Deskripsi Obat :</label><br>
    <input type="text" id="lname" name="o_desc"><br><br><br>
    <input type="submit" value="Submit" class="btn btn-dark">
  </form>
  @endsection
</div>
</body>
</html>