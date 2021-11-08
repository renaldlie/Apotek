@extends('layout.mainlayout')

@section('title','Show Obat')
@section('pagetitle','Detail Obat')

@section('main_content')
    <div class="mt-4 p-5 bg-secondary text-white rounded">
        <h1>{{$obat['obat']}}</h1>    
        <p>Code : {{$obat['code']}}</p>
        <p>Jenis : {{$obat['jenis_obat']}}</p>
        <p>Tipe : {{$obat['tipe_obat']}}</p>
        <p>Deskripsi : {{$obat['description']}}</p>
    </div>
    <h1 class = "text-center display-3 text-white ">Resep Membuat</h1> <br>
    <table border=1px class = "table table-striped table-dark">
        <thead>
        <tr>
            <th >No</th>
            <th >Nama Resep</th>
            <th >Deskripsi</th>
        </tr>
        </thead>
        <tbody>
        @php $index = 1 @endphp
        @foreach ($obat->reseps as $resep)
        <tr>
        <th >{{ $index }}</th>
        @php $index++ @endphp
        <td>{{ $resep['resep'] }}</td>
        <td>{{ $resep['resep_description'] }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection