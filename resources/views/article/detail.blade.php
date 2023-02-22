<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Dettaglio</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center d-flex">
            
            <div class="col-12 col-lg-4">
                
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://picsum.photos/200/300" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                            <p class="card-text">{{$article->email}}</p>
                            <a href="{{route('welcome')}}" class="btn btn-primary">Go somewhere</a>
                            <a href="{{route('article.update', compact('article'))}}" class="btn btn-primary">modifica</a>
                            <form method="POST" action="{{route('article.delete', compact('article'))}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </x-layout>