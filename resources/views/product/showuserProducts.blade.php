<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>I prodotti {{$user->name}}</h1>
            </div>
        </div>
    </div>
 
    <div class="container-fluid">
        <div class="row justify-content-center ">  
            @foreach ($user->products as $product)
            <div class="col-md-6 col-12 animate__fadeInLeft">
                <x-product-card
                :product="$product"
                />
            </div>
            @endforeach
           
        </div>
    </div>
<footer/>
</x-layout>