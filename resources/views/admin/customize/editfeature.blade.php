@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">Features</h3>
                            {{-- <ul class="actions list-inline">
                                <li><a class="btn btn-xs btn-default" >Edit </a></li>
                                <li><a class="close-module" href="#"><span aria-hidden="true" class="icon icon_close"></span></a></li>
                            </ul> --}}
                        </div>
                        <div class="module-content collapse show" id="content-5">
                            <div class="module-content-inner pb-0">
                                
                                    {{-- <h4 class="has-divider">Elegant Icons</h4> --}}
                                    <div role="tabpanel">
                                            <form action="/admin/feature/update" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                <input type="hidden" name="id" value="{{$feature->id}}" />
                                                <input type="hidden" name="_method" value="PUT" />
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-theme-3" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" href="#section"
                                                    aria-controls="section" role="tab" data-toggle="tab"><span
                                                        class="fs1 icon" aria-hidden="true"
                                                        data-icon="&#x5a;"></span><br><span
                                                        class="d-none d-sm-inline-block hidden-sm">Section</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#section-1"
                                                    aria-controls="section-1" role="tab" data-toggle="tab"><span
                                                        class="fs1 icon" aria-hidden="true"
                                                        data-icon="&#x5a;"></span><br><span
                                                        class="d-none d-sm-inline-block hidden-sm">Section 1</span></a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#section-2"
                                                    aria-controls="section-2" role="tab" data-toggle="tab"><span
                                                        class="fs1 icon" aria-hidden="true"
                                                        data-icon="&#x5a;"></span><br><span
                                                        class="d-none d-sm-inline-block hidden-sm">Section 2</span></a>
                                            </li>
                                            <li class="nav-item last"><a class="nav-link" href="#section-3"
                                                    aria-controls="section-3" role="tab" data-toggle="tab"><span
                                                        class="fs1 icon" aria-hidden="true"
                                                        data-icon="&#x5a;"></span><br><span
                                                        class="d-none d-sm-inline-block hidden-sm">Section 3</span></a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="section">                                               
                                                <fieldset class="fieldset mb-3">
                                                    <div class="form-group form-row avatar">
                                                        <figure class="figure col-lg-2 col-md-3 col-4">
                                                            {{-- @foreach ($features as $feature) --}}
                                                            <img class="rounded img-fluid"
                                                                src="{{ asset('/storage/admin/feature/'.$feature->image)}}"
                                                                width="150px" height="150px" alt="" />
                                                            {{-- @endforeach --}}
                                                        </figure>
                                                    </div>

                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">Title
                                                            :</label>
                                                        <div class="col-sm-6">
                                                            {{-- @foreach ($features as $feature) --}}
                                                            {{-- <label for="title" class="col-form-label" id="title" name="title">{{ $feature->title }}</label>
                                                            --}}


                                                            {{-- @endforeach --}}
                                                            <input type="text" class="form-control" id="title"
                                                                name="title" value="{{ $feature->title }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi
                                                            :</label>
                                                        <div class="col-sm-6">
                                                            {{-- <label for="deskripsi" class="form-control" name="deskripsi" id="deskripsi" >{{ $feature->deskripsi }}</label>
                                                            --}}
                                                            {{-- <label for="deskripsi"
                                                        class="col-form-label">{{ $feature->deskripsi }}</label> --}}
                                                            <textarea class="form-control" name="deskripsi"
                                                                id="deskripsi" cols="30"
                                                                rows="10">{{ $feature->deskripsi }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">File
                                                            Upload</label>
                                                        <input type="file"  id="image" name="image"
                                                            class="file-uploader float-left">
                                                    </div>
                                                </fieldset>
                                                <div class="form-group form-row">
                                                    <div class="btn-group">
                                                        <input class="btn btn-primary" type="submit" name="submit"
                                                            value="Update">
                                                        <a href="" class="btn btn-warning">Back</a>
                                                    </div>
                                                </div>
                                          

                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="section-1">                                                
                                                <fieldset class="fieldset mb-3">
                                                    <div class="form-group form-row avatar">
                                                        <figure class="figure col-lg-2 col-md-3 col-4">
                                                                <img class="rounded img-fluid"
                                                                src="{{ asset('/storage/admin/feature/'.$feature->image1)}}"
                                                                width="150px" height="150px" alt="" />
                                                        </figure>
                                                    </div>

                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="title1"
                                                                name="title1" value="{{ $feature->title1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="deskripsi"
                                                            class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-6">
                                                            <textarea class="form-control" name="deskripsi1"
                                                                id="deskripsi1" cols="30"
                                                                rows="10">{{ $feature->deskripsi1 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="image1" class="col-sm-2 col-form-label">File
                                                            Upload</label>
                                                        <input type="file"  id="image1" name="image1"
                                                            class="file-uploader float-left">
                                                    </div>
                                                </fieldset>
                                                <div class="form-group form-row">
                                                    <div class="btn-group">
                                                        <input class="btn btn-primary" type="submit" name="submit"
                                                            value="Update">
                                                        <a href="" class="btn btn-warning">Back</a>
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="section-2">
                                                <fieldset class="fieldset mb-3">
                                                    <div class="form-group form-row avatar">
                                                        <figure class="figure col-lg-2 col-md-3 col-4">
                                                                <img class="rounded img-fluid"
                                                                src="{{ asset('/storage/admin/feature/'.$feature->image2)}}"
                                                                width="150px" height="150px" alt="" />
                                                        </figure>
                                                    </div>

                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="title2"
                                                                name="title2" value="{{ $feature->title2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="deskripsi"
                                                            class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-6">
                                                            <textarea class="form-control" name="deskripsi2"
                                                                id="deskripsi2" cols="30"
                                                                rows="10">{{ $feature->deskripsi2 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">File
                                                            Upload</label>
                                                        <input type="file"  id="image2" name="image2"
                                                            class="file-uploader float-left">
                                                    </div>
                                                </fieldset>
                                               
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="section-3">
                                                <fieldset class="fieldset mb-3">
                                                    <div class="form-group form-row avatar">
                                                        <figure class="figure col-lg-2 col-md-3 col-4">
                                                                <img class="rounded img-fluid"
                                                                src="{{ asset('/storage/admin/feature/'.$feature->image3)}}"
                                                                width="150px" height="150px" alt="" />
                                                        </figure>
                                                    </div>

                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="title3"
                                                                name="title3" value="{{ $feature->title3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="deskripsi"
                                                            class="col-sm-2 col-form-label">Deskripsi</label>
                                                        <div class="col-sm-6">
                                                            <textarea class="form-control" name="deskripsi3"
                                                                id="deskripsi3" cols="30"
                                                                rows="10">{{ $feature->deskripsi3 }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-row">
                                                        <label for="title" class="col-sm-2 col-form-label">File
                                                            Upload</label>
                                                        <input type="file" id="image3" name="image3"
                                                            class="file-uploader float-left">
                                                    </div>
                                                </fieldset>
                                               
                                            </div>

                                            
                                            {{-- @endforeach --}}
                                        </div>
                                            </form>
                                    </div>
                                    {{-- <div class="form-group form-row">
                                            <div class="btn-group">
                                                <input class="btn btn-primary" type="submit" name="submit"
                                                    value="Update">
                                                <a href="" class="btn btn-warning">Back</a>
                                            </div>
                                        </div> --}}

                            </div>

                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
