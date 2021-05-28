@extends('nomain')

@section('content')


 <section class="z-index-1 cta">
    <div class="container">
    	<div class="row flex-center">
            <div class="col-12">
            	<div class="card shadow h-100 py-5">
                	<div class="card-body text-center">
                  		<h1 class="fw-semi-bold mb-4">Tabel&nbsp;<span class="text-danger">Gejala</span> &nbsp;Penyakit</h1>
                	{{-- </div> --}}
					<div class="row">
						{{-- Tabel Gejala --}}
						<div class="col-md-12 col-md-offset-3">
							<div class="panel panel-default">	
								<div class="panel-body">	
									<form action="{{ url(action("Controller@prosesGejala")) }}" method="POST" class="form-horizontal" role="form">
										{{ csrf_field() }}
										@foreach($gejalas as $gejala)
											<div class="form-group">
												<label for="{{ $gejala->kode }}" class="col-md-9 control-label" style="text-align:left">{{ $gejala->nama }} ?</label>
												<input type="radio" name="{{ $gejala->kode }}" value="1">Ya
												<input type="radio" name="{{ $gejala->kode }}" value="0" style="margin-left: 10px" checked>Tidak
											</div>
										@endforeach

										<div class="form-group">
											<div class="col-md-12">
												<button type="submit" class="btn btn-primary btn-block">Diagnosa</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
            	</div>
        </div>
    </div><!-- end of .container-->
</section>


@endsection