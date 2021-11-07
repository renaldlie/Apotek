@extends('layout.mainlayout')

@section('title','Resep')
@section('pagetitle','Detail Resep')

@section('main_content')
    <div class="mt-4 p-5 bg-secondary text-white rounded">
        <h1>{{$resep['resep']}}</h1>
        <p>Deskripsi : {{$resep['resep_description']}}</p>
        <p>Code : {{$resep['resep_code']}}</p>
</div>
@endsection