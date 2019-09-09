@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
    <div class="container-fluid">
        <div class="row">
            <div class="module-wrapper masonry-item col-12">
                <section class="module">
                    <div class="module-inner">
                        <div class="module-heading">
                            <h3 class="module-title">General</h3>
                        </div>
                        <div class="module-content collapse show" id="content-4">
                            <div class="module-content-inner pb-0">
                                <form class="mb-3">
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <label class="control-label col-12">Logo</label>
                                            <img class="rounded img-fluid" @foreach ($gens as $gen)
                                                src="{{ asset('/storage/admin/general/'.$gen->logo)}}" alt="" />
                                            @endforeach
                                            {{-- <img class="rounded img-fluid" src="#" alt="" /> --}}
                                            
                                            {{-- <label for="image">Gambar berukuran : 1366 x 248</label> --}}
                                        </figure>
                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                            <p class="help-block">Image Size : 1366 x 248</p>
                                        </div>
                                    </div>
                                    <div class="form-group form-row avatar">
                                        <figure class="figure col-lg-2 col-md-3 col-12">
                                            <label class="control-label col-12">Image</label>
                                            <img class="rounded img-fluid"
                                                {{-- src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" /> --}}
                                                 src="{{ asset('/storage/admin/general/'.$gen->image)}}" alt="" />
                                        </figure>
                                        <div class="form-inline col-lg-10 col-md-9 col-12">
                                                <p class="help-block">Image Size : 1366 x 248</p>
                                            </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Name Site</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <label name="name" class="form-control">{{ $gen->name }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2 col-md-3 col-12 control-label">Address</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <label type="text" name="alamat"
                                                class="form-control">{{ $gen->alamat }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Phone</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <label type="text" name="phone"
                                                class="form-control">{{ $gen->phone }}</label>
                                            {{-- <p class="help-block">This is the phone </p> --}}
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <label class="col-lg-2  col-md-3 col-12 control-label">Email</label>
                                        <div class="col-lg-10 col-md-9 col-12">
                                            <label type="email" name="email"
                                                class="form-control">{{ $gen->email }}</label>
                                            <p class="help-block">This is the email </p>
                                        </div>
                                    </div>
                                    
                                    </fieldset>

                                    <fieldset class="fieldset mb-3">
                                        <h3 class="fieldset-title">Sosial Media</h3>
                                        <hr>

                                        <div class="form-group form-row">
                                            <label class="col-lg-2  col-md-3 col-12 control-label">Twitter</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <label type="text" class="form-control"
                                                    name="twitter">{{ $gen->twitter }}</label>
                                                <p class="help-block">Your twitter username</p>
                                            </div>
                                        </div>

                                        <div class="form-group form-row">
                                            <label class="col-lg-2  col-md-3 col-12 control-label">Linkedin</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <label type="text" class="form-control"
                                                    name="linkedin">{{ $gen->linkedin }}
                                                </label>
                                                <p class="help-block">eg. https://www.linkedin.com/in/yourname</p>
                                            </div>
                                        </div>

                                        <div class="form-group form-row">
                                            <label class="col-lg-2  col-md-3 col-12 control-label">Facebook</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <label type="url" class="form-control"
                                                    name="facebook">{{ $gen->facebook }}
                                                </label>
                                                <p class="help-block">Your facebook username</p>
                                            </div>
                                        </div>

                                        <div class="form-group form-row">
                                            <label class="col-lg-2  col-md-3 col-12 control-label">Instagram</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <label type="url" class="form-control"
                                                    name="instagram">{{ $gen->instagram }}</label>
                                                <p class="help-block">Your instagram username</p>
                                            </div>
                                        </div>

                                        <div class="form-group form-row">
                                            <label class="col-lg-2  col-md-3 col-12 control-label">Whatsapp</label>
                                            <div class="col-lg-10 col-md-9 col-12">
                                                <label type="text" class="form-control"
                                                    name="whatsapp">{{ $gen->whatsapp }}</label>
                                                <p class="help-block">https://wa.me/62xxxxxxxxxx</p>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <hr>
                                    <div class="form-group form-row">
                                        <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                            <a href="/admin/general/edit/{{ $gen->id }}" class="btn btn-primary">Edit
                                                General</a>
                                            {{-- <input class="btn btn-primary" type="submit" name="submit" value="Edit General"> --}}
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
