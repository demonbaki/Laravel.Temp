<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Dettaglio Prodotto</h1>
            </div>
        </div>
    </div>
 
    <div class="contianer my-5">
        <div class="row align-items-center">
            <div class="col-6 ">
                <img src="{{Storage::url($product->img)}}" class="img-fluid ms-5" alt="">
            </div>
            <div class="col-6">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
                <p>Inserito dal venditore:{{$product->user->name}}</p>
                <p>Inserito il: {{$product->created_at}}</p>
            </div>
        </div>
    </div>
</x-layout>