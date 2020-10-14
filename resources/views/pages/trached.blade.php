@extends('layouts.app')

@section('content')
<h1>trached product</h1>

@foreach ($produits as $produit)
<div style="align-content: left">
<h1>{{$produit->title}}</h1>
<p>{{$produit->description}}</p>
    </div>
@endforeach
@endsection