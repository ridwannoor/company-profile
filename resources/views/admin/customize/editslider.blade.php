@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Slider</h3>
                        </div>
                        <div class="module-content collapse show" id="content-4">
                            <div class="module-content-inner pb-0">
                                <form class="user-form" method="POST" action="/admin/slider/update" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                       
                                    <input type="hidden" name="id" value="{{$slider->id}}" />  
                                    <input type="hidden" name="_method" value="PUT" /> 
    
                                    <fieldset class="fieldset mb-3">
                                      
                                       <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Title</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                                            </div>
                                        </div>
                                        <div class="form-group form-row">
                                            <label class="col-lg-2 col-md-3 col-12 control-label">Deskripsi</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5">{{ $slider->deskripsi }}</textarea>
                                                {{-- <input type="text" name="deskripsi" class="form-control" value="{{ $slider->deskripsi }}"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group form-row avatar">
                                                <figure class="figure col-lg-2 col-md-3 col-12">
                                                    <img class="rounded img-fluid" src="{{ asset('/storage/admin/slider/'.$slider->image)}}" alt="" />
                                                </figure>
                                                <div class="form-inline col-lg-10 col-md-9 col-12">
                                                    <input type="file" name="image" class="file-uploader float-left">
                                                </div>
                                            </div>
                                        
                                    </fieldset>
                                  
                                    <hr>
                                    <div class="form-group form-row">
                                        <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                            {{-- <a href="/admin/slider/store" class="btn btn-success">Simpan</a> --}}
                                           <a href="/admin/slider" class="btn btn-default">Kembali</a>
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
