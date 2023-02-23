<x-layout>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h1>Crea Prodotto</h1>
            </div>
        </div>
    </div>
  
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">                                   
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome Prodotto</label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci la descrizione del prodotto</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci prezzo</label>
                        <input type="number" class="form-control" name="price" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci l'immagine dell'articolo</label>
                        <input type="file" class="form-control" name="img" >
                    </div>
                    <button type="submit" class="btn btn-primary">Pubblica il prodotto</button>
                </form>
            </div>
        </div>
    </div>    
</x-layout>