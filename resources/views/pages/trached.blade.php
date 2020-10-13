<h1>trached product</h1>

@foreach ($produits as $produit)

<h1>{{$produit->title}}</h1>
<p>{{$produit->description}}</p>
    
@endforeach