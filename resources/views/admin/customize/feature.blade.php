@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
    <div class="container-fluid">
        <div class="row">
                <div class="module-wrapper col-12">
                        <section class="module">
                            <div class="module-inner">
                                <div class="module-heading">
                                    <h3 class="module-title">Basic</h3>
                                    <ul class="actions list-inline">
                                        <li><a class="collapse-module" data-toggle="collapse" href="#content-1" aria-expanded="false" aria-controls="content-1"><span aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
                                        <li><a class="close-module" href="#"><span aria-hidden="true" class="icon icon_close"></span></a></li>
                                    </ul>
                                    
                                </div>
                                
                                <div class="module-content collapse show" id="content-1">
                                    <div class="module-content-inner pb-0">
                                        <div id="example-basic">
                                            <h2>Step One</h2>
                                            <section>
                                                <h4 class="text-center">Step One</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat nulla metus, nec bibendum justo faucibus sed. Integer tincidunt semper turpis sit amet consectetur. Sed porttitor semper felis, nec scelerisque dui interdum a. Ut hendrerit sodales nisl.</p>
                                            </section>
                                            <h2>Step Three</h2>
                                            <section>
                                                <h4 class="text-center">Step Two</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat nulla metus, nec bibendum justo faucibus sed. Integer tincidunt semper turpis sit amet consectetur. Sed porttitor semper felis, nec scelerisque dui interdum a. Ut hendrerit sodales nisl.</p>
                                            </section>
                                            <h2>Step Four</h2>
                                            <section>
                                                <h4 class="text-center">Step Three</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat nulla metus, nec bibendum justo faucibus sed. Integer tincidunt semper turpis sit amet consectetur. Sed porttitor semper felis, nec scelerisque dui interdum a. Ut hendrerit sodales nisl.</p>
                                            </section>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </section>
                        
                    </div>
        </div>
    </div>
</div>
@endsection
