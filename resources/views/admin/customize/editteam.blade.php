@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Team</h3>
                        </div>
                        <div class="module-content collapse show" id="content-4">
                            <div class="module-content-inner pb-0">
                                <form class="user-form" method="POST" action="/admin/team/update" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                       
                                    <input type="hidden" name="id" value="{{$team->id}}" />  
                                    <input type="hidden" name="_method" value="PUT" /> 
    
                                    <fieldset class="fieldset mb-3">
                                      
                                       <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Name</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <input type="text" name="name" class="form-control" value="{{ $team->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Title</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" name="title" id="title" class="form-control" value="{{ $team->title }}">
                                                {{-- <textarea name="title" id="title" cols="30" rows="5" class="form-control"></textarea> --}}
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Facebook</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $team->facebook }}">
                                                {{-- <textarea name="title" id="title" cols="30" rows="5" class="form-control"></textarea> --}}
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Twitter</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $team->twitter }}">
                                                {{-- <textarea name="title" id="title" cols="30" rows="5" class="form-control"></textarea> --}}
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Instagram</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $team->instagram }}">
                                                    {{-- <textarea name="title" id="title" cols="30" rows="5" class="form-control"></textarea> --}}
                                                </div>
                                            </div>
                                        <div class="form-group form-row avatar">
                                                <figure class="figure col-lg-2 col-md-3 col-12">
                                                        {{-- <label for="file">{{ $team->image }} </label> --}}
                                                </figure>
                                                <div class="form-inline col-lg-10 col-md-9 col-12">
                                                    <input type="file" name="image" class="file-uploader float-left">
                                                    <label for="file">{{ $team->image }} </label>
                                                </div>
                                            </div>
                                        
                                    </fieldset>
                                  
                                    <hr>
                                    <div class="form-group form-row">
                                        <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                            {{-- <a href="/admin/team/store" class="btn btn-success">Simpan</a> --}}
                                           <a href="/admin/team" class="btn btn-default">Kembali</a>
                                            <input class="btn btn-success" type="submit" name="submit" value="Simpan">
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
