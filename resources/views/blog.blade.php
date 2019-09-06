@extends('layouts.app3')

@section('main')


<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts">
                <div class="row">
                    @foreach ($blogs as $blog)
                    <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="{{ asset('/storage/admin/blog/'.$blog->image)}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                    </a>
                                </div>
    
                                <div class="post-content">
    
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/blog/detail/{{ $blog->id }}">{{ $blog->title }}</a></h2>
                                    <p>{{ $blog->content }}</p>
    
                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">{{ $blog->user->name }}</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">{{ $blog->categorie->title }}</a></span>
                                        <span><i class="far fa-comments"></i> <a href="#">{{ $blog->comment_count }}</a></span>
                                        <span class="d-block mt-2"><a href="/blog/detail/{{ $blog->id }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
    
                                </div>
                            </article>
                        </div>
                    @endforeach
                    

                </div>

                <div class="row">
                    <div class="col">
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $blogs->links() }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
@endsection