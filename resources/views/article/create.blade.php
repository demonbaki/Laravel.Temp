<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Crea Card</h1>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid login-box ">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">                                   
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Nome e Cognome</label>
                      <input placeholder="Inserisci il tuo nome e cognome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Email</label>
                      <input placeholder="Inserisci la tua mail" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{old('email')}}" name="email">
                      <input type="file" class="form-control mt-5" name="img">
                    </div>
                   <button type="submit" class="btn btn-secondary">Pubblica l'articolo</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>