        <div class="post-preview">
         
            <h2 class="post-title">
              {{$Noticia->name}} 
            </h2>
            <h3 class="post-subtitle">
                {{$Noticia->sub_name}} 
            </h3>

             <div class="flex-row-column get_width_100">
              <div class="contiene-video">
                  <div class="video-responsive">
                     <iframe  src="https://www.youtube.com/embed/{{$Noticia->url_video}}" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>

                  <div class="post-img-texto">
                    {{$Noticia->description}} 
                  </div>
              </div>
           </div>
         
          <p class="post-meta">Publicado por
            <a href="#">{{$Empresa->name}}</a> el
             {{$Noticia->created_at->format('d,m,y')}} 
          </p>
        </div>
        <hr class="post-hr">