@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view health-view">
    <div class="container-fluid">
        <h2 class="view-title">Dashboard Use Case 3 (Health App)</h2>
        <div class="row">
            <div class="module-wrapper col-xl-12 col-12">
                <section class="module module-health-overview module-no-heading">
                    <div class="module-inner">
                        <div class="module-content collapse show">
                            <div class="module-content-inner pb-0">
                                {{-- @foreach ($blogs as $b) --}}
                                   
                                <div class="profile">
                                    <img class="profile-image img-fluid" src="{{ asset('/storage/admin/blog/'.$blog->image)}}" alt="" />
                                    <div class="meta-wrapper">
                                        <h3 class="title">{{ $blog->title }}<span class="pro-label label label-warning" >by {{ $blog->user->name }}</span></h3>
                                        <ul class="meta-list list-unstyled">
                                            <li>{{ $blog->content }}</i></li>
                                            <li><strong>Category : </strong>{{ $blog->categorie->title }} </li>
                                            <li><strong> Tags : </strong>{{ $blog->tags->implode('name', ', ') }}</li>
                                        </ul>
                                    </div>
                                    <div class="health-points">
                                        <a href="/admin/blog" class="btn btn-primary">Go Back</a>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>

                    <div class="comment-list">
                        <h3 class="title">Discussions</h3>
                        <div class="comment-item depth-1 parent">
                            @foreach ($blog->comment as $comment)
                            <div class="comment-item-box">
                                    {{-- <div class="comment-author">
                                        <img class="img-fluid rounded-circle" src="assets/images/profiles/profile-6.png" alt="">
                                    </div> --}}
                                    <div class="comment-body">
                                        <cite class="name">{{ $comment->name }}</cite>
                                        <p class="time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                                        <div class="content">
                                            <p> {{ $comment->comment }}</p>
                                        </div>
                                        <a class="comment-reply-link btn btn-default" href="#">Reply</a>
                                    </div>
                                </div>
                            @endforeach                            
                        </div>
                    </div>                  

                    <div class="reply-holder">
                        <h4 class="title">Leave a comment</h4>
                        <div class="reply-content">
                            {{-- <div class="author">
                                <img src="assets/images/profiles/profile-3.png" alt="" />
                            </div> --}}
                            <div class="form-holder">
                                    <form class="module-inner" action="/admin/comment/store" method="POST">                            
                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <input type="hidden" name="_method" value="POST" />
                                            <input type="hidden" name="id" value="{{$blog->id}}" /> 
                                        </div>                            
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{ Form::label('name', "Name:") }}
                                                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                                            </div>
                        
                                            <div class="col-md-6">
                                                {{ Form::label('email', 'Email:') }}
                                                {{ Form::text('email', null, ['class' => 'form-control', 'required']) }}
                                            </div>
                        
                                            <div class="col-md-12">
                                                {{ Form::label('comment', "Comment:") }}
                                                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5', 'required']) }}
                        
                                                {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>                    
                   
                </section>
            </div>
           
        </div>
    </div>
</div>
@endsection