 
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



  <section id="portfolio" class="p-0">
    <div class="container-fluid p-0">
      <div class="row no-gutters popup-gallery">

        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>

         <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>

         <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{url()}}/imagenes/Galeria/1.jpg ">
              <img class="img-fluid" src="{{url()}}/imagenes/Galeria/1.jpg " alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Río Arapey
                  </div>
                  <div class="project-name">
                    Especial para pesca de Vadeo
                  </div>
                </div>
              </div>
            </a>
          </div>
       
      </div>
    </div>
  </section>