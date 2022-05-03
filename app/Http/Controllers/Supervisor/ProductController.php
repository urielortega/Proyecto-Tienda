<?php

namespace App\Http\Controllers\Supervisor;
// namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->only('index');
    // }

    public function index() {
        // Usando Query Builder:
        // $products = DB::table('products')->get();

        // Usando Modelos:
        // $products = Product::all();

        // dd($products);
        // return $products;

        return view('supervisor.products.index')->with([
            'products' => Product::all(),
        ]);
    }

    // public function create() {
    //     return view('products.create');
    // }
    public function create() {
        $categories = Category::all();
        // $data = ['categories' => $categories];
        return view('supervisor.products.create')->with([
                'categories' => $categories, // El primer nombre es la variable que se envía a show.blade.php
            ]); 
        // return view('products.screatehow')->with([
        //     'product' => $product, // El primer nombre es la variable que se envía a show.blade.php
        // ]); 
    }

    // public function store(ProductRequest $request) 
    public function store(Request $request) 
    {
        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' => request()->description,
        //     'price' => request()->price,
        //     'stock' => request()->stock,
        //     'status' => request()->status,
        // ]); OTRA FORMA DE LLENAR LA TABLA
        
        // $rules =[
        //     'title' => ['required','max:255'],
        //     'description' => ['required','max:1000'],
        //     'price' => ['required','min:1'],
        //     'stock' => ['required','min:0'],
        //     'status' => ['required','in:available,unavailable'],
        // ];  forma de comprobara las reglas
        // request()->validate($rules);

        // if (request()->status == 'available' && request()->stock == 0) {
        //     // session()->put('error', 'If available mist have stock'); crea el valor de error y lo agrega a la session
        //     //52 session()->flash('error', 'If available mist have stock'); // establece el valor de error en la session, pero el valor solo estara disponible hasta la siguiente peticion
            
        //     return redirect()
        //         ->back()
        //         ->withInput(request()->all())
        //         ->withErrors('If available mist have stock');  //aqui nos ahorramos la necesidad de mandar los errores personalizados como el de la linea 52
        //     // se le agrega back() para redireccionar a la pagina anterior
        //     // withInput(request()->all()) sirve para obtener los valores agregados recientemente
        // }

        //session()->forget('error'); Es una forma anticuada de remover el error

        //$product = Product::create(request()->all());esto sirve para el if que teniamos para comprobar el stock
        
        //este es el bueno $product = Product::create($request->validated());

       // session()->flash('success', "The new product whit id {$product->id} was created"); sirve para mostrar un mensaje de edicion

        // return redirect()->back(); // Redirigir hacia atrás
        // return redirect()->action('MainController@index'); // Redirigir hacia una acción (La función index de MainController)
        
        // $category = Category::find($request->input('category'));
        // $user = $request->user();
       
        // dd($user);
         //dump($category);
        $product = Product::create([
            'name' => request()->name,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock,
            'status' => request()->status,    
            'user_id' => $request->user()->id,    
            'category_id' => $request->input('category'),    
        ]);
        // $user ->products()->save($product);
        // $category->products()->save($product);
        
        
        return redirect()
         ->route('supervisor.products.index')// Redirigir a una ruta
         ->withSuccess("The new product with id {$product->id} was created"); //manda el valor de success a la sesion
     //  ->with(['success' => "The new product whit id {$product->id} was created"]); es otra forma de mandar vaores a la sesion
    }

    public function show(Product $product) {
        // Usando Query Builder:
        // $product = DB::table('products')->where('id', $product)->first();
        // $product = DB::table('products')->find($product);

        // Usando Modelos:
        // $product = Product::find($product);
        // $product = Product::findOrFail($product); // Muestra un error 404, en lugar de null

        // dd($product);
        // return $product;

        return view('supervisor.products.show')->with([
            'product' => $product, // El primer nombre es la variable que se envía a show.blade.php
        ]); 
    }

    public function edit(Product $product) {
        return view('supervisor.products.edit')->with([
            'product' => $product,
            // 'product' => Product::findOrFail($product),
        ]);
    }

    public function update(ProductRequest $request, Product $product) {
      
        // $rules =[
        //     'title' => ['required','max:255'],
        //     'description' => ['required','max:1000'],
        //     'price' => ['required','min:1'],
        //     'stock' => ['required','min:0'],
        //     'status' => ['required','in:available,unavailable'],
        // ];

        // request()->validate($rules);
    
        // $product = Product::findOrFail($product); 
        
        //$product->update(request()->all());
        $product->update($request->validated());

        return redirect()
        ->route('supervisor.products.index')
        ->withSuccess("The product whit id {$product->id} was edited");
    }

    public function destroy(Product $product) {

        // $product = Product::findOrFail($product); 

        $product->delete();

        return redirect()
        ->route('supervisor.products.index')
        ->withSuccess("The product whit id {$product->id} was deleted");
    }

}
