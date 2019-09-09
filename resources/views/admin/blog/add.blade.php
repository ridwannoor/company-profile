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
                            <h3 class="module-title">Add Posts</h3>
                            <ul class="actions list-inline">
                                <li>
                                    <a class="collapse-module btn btn-xs btn-default" href="/admin/blog"
                                        aria-expanded="false" aria-controls="content-2">Go Back</a>
                                </li>
                            </ul>

                        </div>
                        <div class="module-content collapse show" id="content-1">
                            <div class="module-content-inner pb-0">
                                <form class="mb-5" action="/admin/blog/store" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="_method" value="POST" />
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea id="summernote-editor" rows="10" name="content" class="form-control"></textarea>
                                    </div>
                                     
                                    <div class="form-group">
                                        <label for="Categorie">Category</label>
                                        <select class="form-control" id="categorie_id" name="categorie_id" required>
                                            @foreach ($categories as $c)
                                            <option value="{{$c->id}}">{{ $c->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>                                  

                                    <div class="form-group">
                                        <label for="tag_id">Tags</label>
                                        <select class="chosen" name="tags[]" style="width: 100%;" multiple>
                                            @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image" class="file-uploader form-group">                                      
                                    </div>
                                    
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
