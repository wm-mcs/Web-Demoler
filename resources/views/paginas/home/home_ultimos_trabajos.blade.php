 
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