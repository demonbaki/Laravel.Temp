<x-layout>
    <div class="container">
        <div class="row justify-content-center">
        
          @foreach ($articles as $article)
          <div class="col-12 col-lg-6">
            <x-card-article
            :article="$article"
            />
          </div>
       
              
          @endforeach
        </div>
      </div>
</x-layout>