<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>I nostri Prodotti</h1>
            </div>
        </div>
    </div>
 
    <div class="container-fluid">
        <div class="row justify-content-center ">  
            @foreach ($products as $product)
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