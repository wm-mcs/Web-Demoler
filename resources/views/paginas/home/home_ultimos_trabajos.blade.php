 
@if( isset($Noticia))
 <section class="page-section" id="trabajos">
    <div class="container">
      <h2 class="text-center mt-0">Ultima demolición </h2>
      <hr class="divider my-4">
      <p class="color-text-gris mb-4 text-center"> {{$Noticia->name}}   </p>

      <div class="video-responsive">
         <iframe  src="https://www.youtube.com/embed/{{$Noticia->url_video}}" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>

      <div class="post-img-texto">
        {{$Noticia->description}} 
      </div>

      @include('paginas.home.home_boton_contactar_whatsapp')
    </div>
  </section>
  @endif



  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>

         <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/2.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/2.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>

         <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/3.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/3.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>

         <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/4.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/4.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>

         <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/5.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/5.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>

         <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/6.jpg ">
            <img class="img-fluid" src="{{url()}}/imagenes/Galeria/6.jpg " alt="">
           {{--  <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div> --}}
          </a>
        </div>
       
      </div>
    </div>
  </section>