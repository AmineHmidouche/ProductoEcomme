@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 
        
                <div class="card-header">Utilisateur <b>{{ $user->id }}</b></div>  
                     
                <div class="card-body">
                     <form >
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
                            
                                        
                           
                                    <option value="1"> Produit 1</option>        
                                    <option value="2"> Produit 2</option>
                                    <option value="3"> Produit 3</option>
                                    <option value="4"> Produit 4</option>
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
                            <div class="col-lg-9 col-xl-6">
                                <select class="form-control" id="role" name="role" placeholder="Produit" required="" placeholder="Rôle"  >
                                    <option></option>
                                    <option value="1"> Admin</option>
                                    <option value="2"> Éditeur</option>
                                    <option value="3"> lecteur</option>
                                    <option value="4"> visiteur</option>

                                </select>
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