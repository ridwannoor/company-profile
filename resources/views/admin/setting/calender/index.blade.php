@extends('admin.layouts.app')

@section('content-wrapper')
<div id="content-wrapper" class="content-wrapper view">
		<div class="container-fluid">
			{{-- <h2 class="view-title">FullCalendar</h2> --}}
			<div class="row">           
				<div class="module-wrapper col-12">  
					<section class="module module-headings">
						<div class="module-inner">
							<div class="module-heading">
								<h3 class="module-title">Calendar</h3>
								{{-- <ul class="actions list-inline">
									
									<li><a class="collapse-module" data-toggle="collapse" href="#content-1" aria-expanded="false" aria-controls="content-1"><span aria-hidden="true" class="icon arrow_carrot-up"></span></a></li>
									<li><a class="close-module" href="#"><span aria-hidden="true" class="icon icon_close"></span></a></li>
								</ul> --}}
							</div>
							<div class="module-content collapse show" id="content-1">
								<div class="module-content-inner">
									<div id="calendar"></div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
@endsection