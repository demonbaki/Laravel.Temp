

  <div class="col-lg-6 aos-init mt-3" data-aos="fade-up" data-aos-delay="200">
    <div class="card-item">
      <div class="row">
        <div class="col-xl-5">
          <div class="card-bg"><img class="w-100 img-fluid" src="https://picsum.photos/200/300"></div>
        </div>
        <div class="col-xl-7 d-flex align-items-center justify-conent-center">
          <div class="card-body">
            <h4 class="card-title">{{$article->name}}</h4>
            <p>{{$article->email}}</p>
              <a href="{{route('article.detail', compact('article'))}}" class="btn btn-primary">Dettagli articolo</a>
              {{-- <a href="{{route('article.detail', ['name' => $article->name ])}}" class="btn btn-primary">Dettagli articolo</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>