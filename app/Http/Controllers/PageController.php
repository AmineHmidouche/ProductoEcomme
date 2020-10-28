<?php

namespace App\Http\Controllers;
use App\Produit;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application products.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products($id)
    {
        

 $produit =Produit::find($id);
   // return $produits;
    return view('pages.productList',compact('produit'));
    }

    /**
     * Show the application product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product()
    {
      $produits =   Produit::withTrashed()->get();
        //return view('pages.product', compact('produit'));
       //   dd($produits);
       return view('pages.product' ,compact('produits') );
    }
    public function creatProduit()
    {
        $produit = new Produit();
        Produit::create([
      
            'title' => 'Nokie 3310',
            'description'=> 'new produit 2',
            'prix' => 127 ,
            'quantite' => 72,
        ]);
       
        dd($produit);

    }
    public function storProduit(Request $request)
    {
        $produits =  Produit::create($request->all());
       
        
        return redirect()->back();
    }
    public function destroy($id)
    {
        $produit = Produit::find($id);
        
        $produit->delete();

      // Post::destroy($id);

      
        return redirect()->back();
    }

     
  

    

    /**
     * Show the application users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        return view('pages.usersList' ,['users'=> User::all()]);
    }

    /**
     * Show the application access.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function access($id )
    {
      //dd(\App\User::find($id));

        return view('pages.accessManagement' ,['user'=> User::find($id) , 'produits'=> Produit::all()] );  
    }

    /**
     * Show the application shopcart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function shopcart($user)
    {
        return view('pages.shopcart', compact('user'));
    }

    public function trached()
    {
        $produits =   Produit::onlyTrashed()->get();
        return view('pages.trached', compact('produits'));
    }

    public function restore($id)
    {
        $produit =  Produit::onlyTrashed()->where('id' , $id)->first();
        
        $produit->restore();

      // Post::destroy($id);

      
        return redirect()->back();
        
    }

    public function forcedelete($id) {
        $produit = Produit::onlyTrashed()->where('id', $id)->first();

      //  $this->authorize('forceDelete', $produit);

        $produit->forceDelete();
        return redirect()->back();
    }
}