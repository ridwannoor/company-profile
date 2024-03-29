
                                    @extends('admin.layouts.app')

                                    @section('content-wrapper')
                                    <div id="content-wrapper" class="content-wrapper view view-account">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="module-wrapper masonry-item col-12">
                                                    <section class="module">
                                                        <div class="module-inner">
                                                            <div class="module-heading">
                                                                <h3 class="module-title">Shop</h3>
                                                            </div>
                                                            <div class="module-content collapse show" id="content-4">
                                                                <div class="module-content-inner pb-0">
                                                                    <form class="mb-3">
                                                                            <fieldset class="fieldset mb-3">
                                                                                    {{-- <h3 class="fieldset-title">Team</h3> --}}
                                                                                   <p><a href="/admin/shop/add" class="btn btn-primary">Tambah</a></p> 
                                                                                    <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th scope="col">#</th>
                                                                                                        <th scope="col">Name</th>
                                                                                                        <th scope="col">Deskripsi</th>
                                                                                                        <th scope="col">Harga</th>
                                                                                                        <th scope="col">Qty</th>
                                                                                                        <th scope="col">Image</th>
                                                                                                        <th scope="col">Action</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                @php
                                                                                                    $no = 1 ;
                                                                                                @endphp
                                                                                                <tbody>
                                                                                                    @foreach ($shop as $t)    
                                                                                                    <tr>
                                                                                                        <th scope="row">{{ $no++ }}</th>
                                                                                                        <td>{{ $t->name }}</td>
                                                                                                        <td>{{ $t->deskripsi }}</td>
                                                                                                        <td>{{ $t->harga }}</td>
                                                                                                        <td>{{ $t->qty }}</td>
                                                                                                        <td> <img class="rounded img-fluid" src="{{ asset('/storage/admin/shop/'.$t->image)}}" width="150px" alt="" /></td>
                                                                                                        <td>
                                                                                                            <div class="btn-group">
                                                                                                                <a href="/admin/shop/edit/{{$t->id}}" class="btn btn-warning">Edit</a>
                                                                                                                <a href="/admin/shop/destroy/{{$t->id}}" class="btn btn-danger">Hapus</a>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>  
                                                                                                    @endforeach                                                 
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    
                                                                                </fieldset>
                                    
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
                                   