@extends('layouts.app3')

@section('main')

<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts single-post">

                <article class="post post-large blog-single-post border-0 m-0 p-0">
                    <div class="post-image ml-0">
                        <a href="blog-post.html">
                            <img src="img/blog/wide/blog-11.jpg"
                                class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                        </a>
                    </div>

                    <div class="post-date ml-0">
                        <span class="day">10</span>
                        <span class="month">Jan</span>
                    </div>

                    <div class="post-content ml-0">

                        <h2 class="font-weight-bold"><a href="blog-post.html">{{ $blogs->title }}</a></h2>

                        <div class="post-meta">
                            <span><i class="far fa-user"></i> By <a href="#">{{ $blogs->user->name }}</a> </span>
                            <span><i class="far fa-folder"></i> <a href="#">{{ $blogs->categorie->title }}</a>
                            </span>
                            <span><i class="far fa-comments"></i> <a href="#">{{ $blogs->comment_count }}</a></span>
                        </div>

                        <p>{{ $blogs->content }}</p>


                       
                    </div>
                </article>

            </div>
        </div>
    </div>

</div>

@endsection
