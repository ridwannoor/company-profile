@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view view-account">
        <div class="container-fluid">
            <div class="row">
                <div class="module-wrapper masonry-item col-12">
                    <section class="module">
                        <div class="module-inner">
                            <div class="module-heading">
                                <h3 class="module-title">Users</h3>
                            </div>
                            <div class="module-content collapse show" id="content-4">
                                <div class="module-content-inner pb-0">
                                    <form class="user-form" method="POST" action="/admin/user/store" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />                                       
                                        {{-- <input type="hidden" name="id" value="{{$gen->id}}" />   --}}
                                        <input type="hidden" name="_method" value="POST" /> 
        
                                        <fieldset class="fieldset mb-3">                                          
                                           <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Name</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Email</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                                    {{-- <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea> --}}
                                                </div>
                                            </div>
                                            <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Password</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Confirm Password</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group form-row">
                                                <label class="col-lg-2 col-md-3 col-12 control-label">Role</label>
                                                <div class="col-lg-10 col-md-9 col-12">
                                                    <select class="form-control" id="name" name="name" class="form-control">
                                                        @foreach ($roles as $role)
                                                            <option>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <input type="text" id="name" name="name" class="form-control"> --}}
                                                </div>
                                            </div>
                                        </fieldset>
                                      
                                        <hr>
                                        <div class="form-group form-row">
                                            <div class="col-xl-10 col-lg-9 col-12 offset-lg-2 offset-md-3">
                                                {{-- <a href="/admin/user/store" class="btn btn-success">Simpan</a> --}}
                                               <a href="/admin/user" class="btn btn-default">Kembali</a>
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