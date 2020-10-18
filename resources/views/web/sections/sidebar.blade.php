<!-- Sidebar Column -->
<div class="sidebar col-md-4">
    <!-- search -->
    <div class="well">
        <h5>Buscar</h5>
        <div class="input-group">
        <input class="form-control input-lg">
        <div class="input-group-btn">
            <div class="btn">
                <div class="btn-line"></div>
                <div class="btn-line btn-line-shift"></div>
                <i class="fa fa-search"></i>
            </div>
        </div>
        </div>
        <!-- /.input-group -->
    </div>
    <!-- /well -->				 	  
    <!-- About us Widget -->
    <div class="well">
        <h5>Nosotros</h5>
        <p>Somos una empresa virtual 100% costarricense con servicios de repostería.</p>
        <!-- Social Media icons -->
        <div class="social-media smaller">
        <a href="#" title=""><i class="fa fa-facebook"></i></a>
        <a href="#" title=""><i class="fa fa-instagram"></i></a>
        <a href="#" title=""><i class="fa fa-whatsapp"></i></a>
        </div>
    </div>
    <!-- /well -->
    <!-- popular posts widget -->        
    <div class="well">
    <h5>Recientes</h5>
    <div class="panel panel-default popular-posts">
        <div class="panel-body">
            <ul class="media-list">
                @foreach($posts as $post)
                <!-- popular product 1 -->   
                <li class="media">
                <div class="media-left">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive img-rounded" alt="">
                    @endif
                </div>
                <div class="media-body">
                    <a href="{{route('post', $post->slug)}}">
                        <h6 class="media-heading">
                            {{ $post->name }}
                        </h6>
                    </a>
                    <small>
                        Publicado: {{ $post->created_at }}
                    </small>
                </div>
                </li>
                <!-- /media -->
                @endforeach
            </ul>
            <!-- /media-list --> 
        </div>
        <!-- /panel-body --> 
    </div>
    <!-- /panel --> 
    </div>
    <!-- /well -->							  
    <!-- Blog Categories -->
    <div class="well">
        <h5>Categorías</h5>
        <div class="row">
        <ul class="list-unstyled">
            @foreach($categories as $category)
            <li><a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
        </div>
    </div>
    <!-- /well --> 
    <!-- Image Widget -->
    <!--<div class="well">
        <h5>Super oferta</h5>
        <img src="{{ asset('bakery/img/bannerblog.jpg') }}" class="img-rounded img-responsive" alt="">
    </div> -->
    <!-- /well -->				  
    <!-- Tags Widget -->
    <div class="well">
        <h5>Etiquetas</h5>
        <div class="blog-tags">
            @foreach($tags as $tag)
                <a href="{{route('tag', $tag->slug)}}">{{ $tag->name }}</a> 
            @endforeach
        </div>
    </div>
    <!-- /well -->
</div>
<!-- /sidebar col-md-3 --> 