@extends('front')
@section('content')

<section id="contentSection">
    <div class="single_post_content">
        <h2><span>Les articles de la catégorie : {{$category->name}} </span></h2>
        <!-- Date publication & Image -->
        @foreach ($articles as $article)
        <section style="padding-left: 15px; padding-right: 15px;">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-8"> -->
                <div class="slick_slider">
                    <h1>{{ $article->title }}</h1>
                    <div class="single_iteam">
                        <img src="{{ $article->image }}" alt="" style="width: 700px; margin: 0 auto;">
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </section>
        <!-- Description -->
        <section style="padding-left: 15px; padding-right: 15px;">
            <div class="row">
                <!-- <div class="col-lg-8 col-md-8 col-sm-8"> -->
                <!-- <div class="left_content"> -->
                <h5 style="color: rgb(194, 193, 193);"><span>publié le : {{ $article->created_at }}</span></h5>
                <div class="single_post_content">
                    <!-- <h2><span>Description</span></h2> -->
                    <div>
                        <aside class="right_content_desc">
                            <!-- <div class="single_sidebar"> -->
                                <ul class="spost_nav">
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <div class="media-body" style="text-align: justify;"> 
                                                <p class="text2"> {{ $article-> text }} </p> 
                                            </div>
                                            <div><a href="/detail/{{ $article->id }}" style="color: #27ae60; float: right; "> Plus d'infos <img src="/css/images/slider_next.png" style="background-color: #27ae60; padding: 5px;"> </a></div>
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
                <img src="/images/seperator.png" alt="separator" style="width: 100%; height: 20px;">
            </div>
        </section>
        <div>
        </div>
        @endforeach
    </div>
</section>
@endsection