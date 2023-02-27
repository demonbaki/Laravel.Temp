<x-layout>
    <div class="container">
        <div class="row justify-content-center">
          
          @foreach ($products as $product)
          
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{Storage::url($product->img)}}" class="img-fluid rounded-start" alt="..." style="height:200px">
              </div>
              <div class="col-md-8 col-12">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <p class="card-text">{{$product->description}}</p>
                  <p class="card-text">{{$product->price}}</p>
                  <p class="card-text"> Categoria :{{$product->category->name}}</p>
                  <p class="card-text">Inserito da Te:<a href="{{route('user.product', $product->user->id)}}">{{$product->user->name}}</a></p>
                  <a href="{{route('product.show', $product)}}" class="btn btn-primary">Dettaglio Prodotto</a>
                  
                </div>
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
</x-layout>