@extends('nomain')

@section('content')

<section class="py-8" id="Opportuanities">
    <div class="bg-holder d-none d-sm-block" style="background-image:url(img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;"></div>

        <div class="container">
        	<div class="row">
            	<div class="col-lg-9 mx-auto text-center mb-3">
              		<h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Kamus Istilah Penyakit</h5>
            	</div>
        	</div>
        <div class="row flex-center h-100">
            <div class="col-xl-10">
            	<div class="row">
					@foreach($data as $d)
						<div class="col-md-6 mb-6">
							<div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
								<div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="img/icons/farmer.svg" height="60" alt="" />
									<div class="card-body">
										<h6 class="fw-bold fs-1 heading-color">{{ $d->nama }}</h6>
										<img src="{{ $d->gambar }}" height="50%" width="50%" alt="">
										<p class="mt-3 mb-md-0 mb-lg-2">{{ $d->desk }}</p>
									</div>
								</div>
							</div>
						</div>
                	@endforeach
            	</div>
            </div>
        </div>
    </div>
</section>


@endsection