@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produit <b>{{$produit->id}}</b></div>

                <div class="card-body">
                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Identifiant</dt>
                        <dd class="w-75">{{$produit->id}}</dd>
                    </dl>

                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Title</dt>
                        <dd class="w-75">{{$produit->title}}</dd>
                    </dl>

                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Description</dt>
                        <dd class="w-75">{{$produit->description}}</dd>
                    </dl>


                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Prix (par unité)</dt>
                        <dd class="w-75">{{$produit->prix}} €</dd>
                    </dl>

                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Quantité</dt>
                        <dd class="w-75">{{$produit->quantite}}</dd>
                    </dl>

                    <dl class="d-flex">
                        <dt class="w-25 pr-3">Prix total</dt>
                        <dd class="w-75">600 €</dd>
                    </dl>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection