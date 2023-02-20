<x-layout>
    <script src="https://kit.fontawesome.com/2ff2af688a.js" crossorigin="anonymous"></script>
    <link href="{{URL::asset ('/css/welcome.css')}}"rel="stylesheet">
@if (session('message'))
<div class="alert alert-success">
    <p>{{session('message')}}</p>
</div>
    
@endif
<div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down" class="aos-init aos-animate">Welcome to <span>UpConstruction</span></h2>
          <p data-aos="fade-up" class="aos-init aos-animate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a data-aos="fade-up" data-aos-delay="200" href="{{route('form')}}" class="btn btn-danger">Get Started</a>
        </div>
      </div>
    </div>
  </div>
  <section id="constructions" class="constructions">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header justify-content-center align-items-center">
        <h2>Constructions</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
          dolore earum</p>
      </div>
      

      <div class="row gy-4">

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg"><img class="w-100 img-fluid" src="/img/cantiere.webp"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                  <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti
                    adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg"><img class="w-100 img-fluid" src="/img/tizio.webp"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                  <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui
                    iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum
                    dignissimos.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                <div class="card-bg"><img class="w-100 img-fluid" src="/img/costru.jpg"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Error beatae dolor inventore aut</h4>
                  <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat
                    ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla
                    culpa.</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

        <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item">
            <div class="row">
                <div class="col-xl-5">
                <div class="card-bg"><img class="w-100 img-fluid" src="/img/tizi.png"></div>
             
                <div class="card-bg Card"></div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                  <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
                    architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
                    libero nobis.</p>
                    
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->

      </div>

    </div>
  </section>
  <section id="services" class="services section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-header">
        <h2>Services</h2>
        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos
          quam</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-mountain-city"></i>
            </div>
            <h3>Nesciunt Mete</h3>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis
              tempore et consequatur.</p>
            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Eosle Commodi</h3>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
              nesciunt dolorem.</p>
            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h3>Ledo Markt</h3>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci
              eos earum corrupti.</p>
            <a href="" class="danger readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Asperiores Commodit</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident
              adipisci neque.</p>
            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->
        

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>Velit Doloremque</h3>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem
              alias eius labore.</p>
            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Dolori Architecto</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti
              recusandae ducimus enim.</p>
            <a href="" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section>
</x-layout>


   