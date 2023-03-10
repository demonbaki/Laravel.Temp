<x-layout>
  <div class="section-header justify-content-center align-items-center d-flex">
    <h2>Prodotti per la categoria :{{$category->name}}</h2>
    @if (session('message'))
    <div class="alert alert-success">
        <p class="m-0">{{session('message')}}</p>
    </div>
@endif
    
  </div>
  <div class="container-fluid my-5 ">
    <div class="row min-vh-100 mx-5 justify-content-center">
      
      @foreach ($category->products as $product)
      
     
     
       
        <div class="col-12 col-md-4 col-lg-4">
            <img src="{{Storage::url($product->img)}}" class="img-fluid rounded-start" alt="..." style="height:200px">
      </div>
      <div class="col-12 col-md-4 col-lg-4">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->description}}</p>
              <p class="card-text">{{$product->price}}</p>
              <p class="card-text"> Categoria :{{$product->category->name}}</p>
              <p class="card-text">Inserito da Te:<a href="{{route('user.product', $product->user->id)}}">{{$product->user->name}}</a></p>
              <div>
                <a href="{{route('product.show', $product)}}" class="btn btn-secondary">Dettaglio Prodotto</a>
              </div>
            
              
            </div>
          </div>
       
      @endforeach
    </div>
  </div>
</x-layout>