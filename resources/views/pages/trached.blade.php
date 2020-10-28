@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Trached Product
    </div>
    <div class="card-body">@foreach ($produits as $produit)
      <h5 style="color: seagreen" class="card-title">{{$produit->title}}</h5>
      <p class="card-text">{{$produit->description}}</p>
  
      <form method="POST" class="fm-inline" action="{{route('produit.forcedelete',$produit->id)}}">
         
          @csrf
          @method('DELETE')
   <input style="margin-bottom: 3%" type="submit" value="Force delete!" class="btn btn-sm btn-danger"/>
        </form>
       
      
      @endforeach


      
    </div>
  </div>
@endsection

