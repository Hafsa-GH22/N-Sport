@extends('front')
@section('content')

<!-- Actualités -->
<section id="newsSection">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="latest_newsarea"> <span>Actualités</span>
                <ul id="ticker01" class="news_sticker">
                    @foreach ($top_articles as $article)
                    <li><a href="/detail/{{ $article->id }}"><img src="{{ $article->image }}" alt="">{{ $article->title }}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>
<!-- Partie 1 : Slides & Derniers posts -->
<section id="sliderSection">
    <div class="row">
        <!-- Slides des articles -->
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                @foreach ($articles as $article)
                <div class="single_iteam">
                    <a href="/detail/{{ $article->id }}"> <img src="{{ $article->image }}" alt=""></a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href="/detail/{{ $article->id }}">{{ $article->title }}</a></h2>
                        <p class="text1" style="text-align: justify; padding: 10px 15px 10px 15px;">{{ $article->text }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Dernières posts -->
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="latest_post">
                <h2><span>Derniers posts</span></h2>
                <div class="latest_post_container">
                    <!-- <div id="prev-button"><i class="fa fa-chevron-up"></i></div> -->
                    <ul class="spost_nav">
                        @foreach ($lastArticles as $article)
                        <li>
                            <div class="media"> <a href="/detail/{{ $article->id }}" class="media-left"> <img alt="" src="{{ $article->image }}"> </a>
                                <div class="media-body"> 
                                    <a href="/detail/{{ $article->id }}" class="catg_title" style="color: #27ae60;"> {{ $article->title }}</a>
                                    <p>publié le : {{ $article->created_at }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- <div id="next-button"><i class="fa  fa-chevron-down"></i></div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partie 2 : Photographie & Posts populaires -->
<section id="contentSection">
    <div class="row">
        <!-- Photographie -->
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>Photographie</span></h2>
                    <ul class="photograph_nav  wow fadeInDown">
                        @foreach ($photographie as $photo)
                        <li>
                            <div class="photo_grid">
                                <figure class="effect-layla"> 
                                    <a class="fancybox-buttons" data-fancybox-group="button" href="{{ $photo->image }}" title="{{ $photo->title }}"> 
                                        <img src="{{ $photo->image }}" alt="" />
                                    </a> 
                                </figure>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Posts populaires -->
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="latest_post">
                <!-- <div class="single_sidebar"> -->
                    <h2><span>Posts populaires</span></h2>
                    <div class="single_sidebar">
                        <!-- <div id="prev-button"><i class="fa fa-chevron-up"></i></div> -->
                        <ul class="spost_nav">
                            @foreach ($top_articles as $article)
                            <li>
                                <div class="media wow fadeInDown"> <a href="/detail/{{ $article->id }}" class="media-left"> <img alt="" src="{{ $article->image }}"> </a>
                                    <div class="media-body"> 
                                        <a href="/detail/{{ $article->id }}" class="catg_title" style="color: #27ae60;"> {{ $article->title }}</a> <br>
                                        <p>publié le : {{ $article->created_at }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <!-- <div id="next-button"><i class="fa  fa-chevron-down"></i></div> -->
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Partie 3 : Tous les articles -->
<section id="contentSection">
    <div class="single_post_content" >
        <h2><span>Tous les articles</span></h2>
        <!-- Pagination -->
        <!-- <div class="col-md-12 d-flex justify-content-center">
            {!! $articles->links() !!}
        </div> -->
        <!-- Date publication & Image -->
        @foreach ($articles as $article)
        <section style="padding-left: 15px; padding-right: 15px;">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-8"> -->
                    <div class="slick_slider">
                        <h1>{{ $article->title }}</h1>
                        <div class="single_iteam" style=""> 
                            <img src="{{ $article->image }}" alt="image de l'article" style="width: 700px; margin: 0 auto;">
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </section>
        <!-- Description -->
        <section  style="padding-left: 15px; padding-right: 15px;">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-8"> -->
                    <!-- <div class="left_content"> -->
                    <h5 style="color: rgb(194, 193, 193);"><span>Publié le : {{ $article->created_at }}</span></h5>
                        <div class="single_post_content">
                            <!-- <h2><span>Description</span></h2> -->
                            <div>
                                <aside class="right_content_desc">
                                    <!-- <div class="single_sidebar"> -->
                                        <ul class="spost_nav">
                                            <li>
                                                <div class="media wow fadeInDown">
                                                    <div class="media-body" style="text-align: justify; overflow: hidden;"> 
                                                        <p class="text2"> {{ $article-> text }} </p>
                                                    </div>
                                                    <div><a href="/detail/{{ $article->id }}" style="color: #27ae60; float: right; "> Plus d'infos <img src="css/images/slider_next.png" style="background-color: #27ae60; padding: 5px;"> </a></div>
                                                    <!-- <h5 style="color: #27ae60; float: right;"><span>Ecrit par : {{ $article-> author }}</span></h5> -->
                                                </div>
                                            </li>
                                        </ul>
                                    <!-- </div> -->
                                </aside>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            <img src="images/seperator.png" alt="separator" style="width: 100%; height: 20px;">
            </div>
        </section>
        @endforeach
    </div>
</section>
@endsection