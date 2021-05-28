@extends('nomain')

@section('content')

<section class="z-index-1 cta">
    <div class="container">
    	<div class="row flex-center">
            <div class="col-12">
            	<div class="card shadow h-100 py-5">
                	<div class="card-body text-center">
						<h1><center>Hasil</center></h1>
                  		<h1 class="fw-semi-bold mb-4">Diagnosa Penyakit Dan Solusi</h1>
					<div class="row">
						{{-- Solusi --}}
						<div class="col-md-12 col-md-offset-3 box">
							<div class="panel panel-default">
								<div class="panel-body">	
									<table class="table table-hover">
										<tbody>
											<tr>
												<td><b>Nama Penyakit / Hama </b></td>
												@if( ! empty($data))
													<td>: {{$data->nama}}</td>
												@else
													<td>: Penyakit Tidak Bisa Didiagnosa</td>
												@endif
											</tr>
											<tr>
												<td colspan="2"><b>Solusi</b> </td>
											</tr>
												
												@if( ! empty($data))

													@foreach($data->solusis as $solusi)
													<tr>
														<td colspan="2"> - {{$solusi->nama}}</td>
													@endforeach
													</tr>
												@else
													<tr>
														<td>- Tidak Ada Solusi</td>
													</tr>
												@endif
										</tbody>
									</table>
								</div>
							</div>
							<a href="/konsultasi" class="button btn btn-primary">Diagnosa Lagi</a>
						</div>
					</div>
            	</div>
        </div>
    </div><!-- end of .container-->
</section>


@endsection