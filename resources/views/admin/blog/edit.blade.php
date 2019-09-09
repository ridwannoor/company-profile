@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
    <div class="container-fluid">
        <h2 class="view-title">Posts</h2>
        <div id="masonry" class="row">
            <div class="module-wrapper masonry-item col-lg-12 col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Edit Posts</h3>
                            <ul class="actions list-inline">
                                <li>
                                    <a class="collapse-module btn btn-xs btn-default" href="/admin/blog"
                                        aria-expanded="false" aria-controls="content-2">Go Back</a>
                                </li>
                            </ul>

                        </div>
                        <div class="module-content collapse show" id="content-1">
                            <div class="module-content-inner pb-0">
                                <form action="/admin/blog/update" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="_method" value="PUT" />
                                        <input type="hidden" name="id" value="{{$blogs->id}}" /> 
                                    </div>
                                  
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <img class="rounded img-fluid" src="{{ asset('/storage/admin/blog/'.$blogs->image)}}" alt="" />
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                        
                                        </figure>
                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                            <input type="file" name="image" class="file-uploader float-left">
                                            {{-- <button type="submit" class="btn btn-sm btn-default-alt float-left">Update Logo</button> --}}
                                        </div>
                                    </div>                                        
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            value="{{ $blogs->title }}">
                                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" id="summernote-editor" rows="10" class="form-control">{{ $blogs->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Categorie">Category</label>
                                        <select class="form-control" data-init-plugin="select2" name="categorie_id">                                            
                                            <option value="{{$blogs->categorie_id}}">{{$blogs->categorie->title}}</option>
                                            @foreach ($categories as $d)
                                            @if ($blogs->categorie_id != $d->id){
                                            <option value="{{$d->id}}">{{$d->title}}</option>
                                            }
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    @php
                                    if(isset($blogs)) {
                                    $tag = $blogs->tags->pluck('id')->all();
                                    } else {
                                    $tag = null;
                                    }
                                    @endphp
                                
                                        {{-- <select class="chosen" data-init-plugin="select2" name="tag_id[]" style="width: 100%;" multiple>                                             --}}
                                            {{-- @foreach ($blogs->tags as $t) --}}
                                            {!! Form::select('tags[]', $tags, $tag, ['class' => 'form-control chosen', 'required', 'multiple']) !!}                                              
                                            {{-- {!! Form::select('tags[]', $tags, null,   ['class' => 'form-control chosen', 'multiple'  ]) !!} --}}
                                            {{-- {{ Form::select('tags[]', $tags, null, ['class' => 'form-control chosen', 'multiple' => 'multiple']) }} --}}
			
                                        
                                            {{-- @endforeach       --}}
                                            {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                                            {{-- @foreach ($tags as $t)
                                                <option value="{{$t->id}}">{{ $t->name  }}</option>
                                            @endforeach   --}}
                                        
                                   
                                    {{-- @endforeach --}}
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
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
