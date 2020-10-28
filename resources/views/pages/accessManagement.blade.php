@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 
        
                <div class="card-header">Utilisateur <b>{{ $user->id }}</b></div>  
                     
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-lg-right" for="userName">Nom </label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" id="userName" value="{{ $user->name }}" name="userName" readonly="" disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-lg-right" for="mail">Email  </label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="text" class="form-control" id="mail" value="{{ $user->email }}" name="mail" readonly="" disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-lg-right" for="product">Produit  </label>
                        <div class="col-lg-9 col-xl-6">
                            <select class="form-control" placeholder="Produit" id="product" name="product" required="" multiple="">
                                
                                
                                @foreach ($produits as $produit)
                            <option value="{{$produit->id}}">   {{$produit->title}} 
                        </option>
                                @endforeach
                          
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-lg-right" for="amount">Quantité  </label>
                        <div class="col-lg-9 col-xl-6">
                            <input type="number" class="form-control" id="amount" value="" name="amount" placeholder="Quantité" />
                        </div>
                    </div>
                  
                    
                   <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-lg-right" for="role">Rôle  </label>
                        <div class="col-lg-9 col-xl-9">
                            <form action="/add_role" method="post">
                        <input type="hidden" name="email" value="{{ $user->email }}">
                        @csrf
                      
                       {{--  
                            <select class="form-control" id="role" name="role" placeholder="Produit" required="" placeholder="Rôle"  >
                                <option></option>
                                @if($user->hasRole('Admin'))
                                <option value="{{$user->id}}"  name="Role_Admin"> Admin</option>
                                @endif
                                <option {{$user->hasRole('Editeur') ? 'selected' : '' }}   name="Role_Editeur"> Éditeur</option>
                                <option {{$user->hasRole('User')    ? 'selected' : '' }}   name="Role_User"> Utilisateur</option>
                                 
                                
                            </select>---}}
                            <div class="form-check form-check-inline">
                                <input  class="form-check-input"  name="Role_Admin" type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineCheckbox1">Admin</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" name="Role_Editeur" type="checkbox" {{$user->hasRole('Editeur') ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineCheckbox2">Editeure</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input"  name="Role_User" type="checkbox" {{$user->hasRole('User') ? 'checked' : ''}}>
                                <label class="form-check-label" for="inlineCheckbox2">Utislisateur</label>
                              </div>
                            
                         
                   
                            
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-lg-9 col-xl-9 text-right my-4">
                                <button type="submit" id="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection