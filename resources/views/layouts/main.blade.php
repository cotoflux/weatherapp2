@extends('layouts.content')
@section('main')     
    <form action="{{action('HomeController@insertar')}}" method="post">
        {{@csrf_field()}}
        <p>Entérate del tiempo en la zona exacta que te interesa buscando por 
        código postal</p>
        <input name="_method" type="INSERT" placeholder="Intoduce el código postal">
        <button class="btn btn-primary btn-xs" type="submit"><i class="fab fa-searchengin"></i>
        </button>
    </form>
@endsection