

@extends('layout.app')


@section('content')
  <!--Grille de Produit Mobile un produit par ranger,tablette deux par ranger, ordinateur quatre par ranger--> 

  <div class="grid grids-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
  
   
    @forelse ($products as $product)
         <x-card-product :product="$product"/>
           
    @empty
       
    @endforelse

  </div>

 

@endsection