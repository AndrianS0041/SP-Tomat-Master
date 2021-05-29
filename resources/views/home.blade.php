@extends('main')

@section('content')

    <section class="py-0" id="header">
        <div class="bg-holder d-none d-md-block" style="background-image:url(img/illustrations/hero-header.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder d-md-none" style="background-image:url(img/illustrations/hero-bg.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center min-vh-75 min-vh-lg-100">
            <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6"> Sistem Pakar Diagnosis Penyakit Pada Tanaman Tomat</h1>
              <p class="mb-4 fs-1">Sistem Pakar Diagnosis Penyakit Pada Tanaman Tomat metode Forward Chaining</p>
              <a href="/konsultasi" role="button"><button class="btn btn-lg btn-success"> Diagnosa Sekarang</button></a>
            </div>
          </div>
        </div>

    </section>
    <section class="py-5" id="Opportuanities">
        <div class="bg-holder d-none d-sm-block" style="background-image:url(img/illustrations/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Tujuan</h5>
              <p class="mb-5">Sistem pakar ini dibuat dengan menggunakan metode forward chaining, dibuat dengan tujuan untuk membantu petani tomat dalam menentukan penyakit yang dialami oleh tanaman tomat.</p>
            </div>
          </div>
          <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="row">
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="img/icons/farmer.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Petani Sukses</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">Dengan mengetahui jenis penyakit secara langsung bisa membantu petani menjadi petani yang sukses.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="img/icons/growth.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Meningkatkan Hasil Panen</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">Dengan solusi yang diberikan dan dapat digunakan untuk merawat tanaman tomat diharapkan bisa meningkatkan hasil panen yang banyak.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-6">
                    <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="img/icons/planting.svg" height="60" alt="" />
                      <div class="card-body">
                        <h6 class="fw-bold fs-1 heading-color">Mengurangi Zat Kimia dalam Pertanian Tomat</h6>
                        <p class="mt-3 mb-md-0 mb-lg-2">Dengan solusi yang diberikan dapat memperkecil penggunaan obat berbahan kimia dalam mengatasi penyakit atau hama tanaman tomat.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="py-5" id="invest">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-9 mb-3">
              <div class="row">
                <div class="col-lg-9 mb-3">
                  <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Pakar</h5>
                  <p class="mb-5">Data yang diambil berdasarkan hasil dari wawancara dengan ahli pakar tanaman tomat</p>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="card text-white"><img class="card-img" src="img/gallery/tomat.png" alt="..." />
                    <div class="card-img-overlay d-flex flex-column justify-content-center px-5 px-md-3 px-lg-5 bg-dark-gradient">
                      <h6 class="text-success pt-2 fs-1 fs-md-2 fs-lg-3 w-xxl-50">Petani</h6>
                      <hr class="text-white" style="height:0.12rem;width:5rem" />
                      <div class="pt-lg-3">
                        <h6 class="fw-bold text-white fs-1 fs-md-2 fs-lg-3 w-xxl-50">Dr. Widodo</h6>
                        <p class="w-xxl-75">Ketua kelompok tani Desa Wuru, Kec Rongkop, Kab Gunung Kidul</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
    </section>

    <section class="py-8" id="tentang">
        <div class="bg-holder" style="background-image:url(img/illustrations/footer-bg.png);background-position:center;background-size:cover;"></div>
        <div class="container-lg">
          <div class="row flex-center">
            <div class="col-12 col-lg-10 col-xl-12">
              <div class="bg-holder" style="background-image:url(img/illustrations/testimonial-bg.png);background-position:top left;background-size:120px 83px;"></div>
              <!--/.bg-holder-->
              <h6 class="fs-3 fs-lg-4 fw-bold lh-sm">Developed by <br/></h6>
            </div>
            <div class="carousel slide pt-3" id="carouselExampleDark" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100 mx-3 mx-sm-5 mx-md-4 my-md-7 m-lg-7 mt-7">
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="img/gallery/tomat.png" width="50" alt="" style="border-radius: 50%;" />
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Andrian Suhartanto</h5>
                              <p class="fw-normal text-black">20.22.2386</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="img/gallery/tomat.png" width="50" alt="" style="border-radius: 50%;"/>
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Farah Nur Maulidia</h5>
                              <p class="fw-normal text-black">20.22.2390 </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0">
                      <div class="card h-100 shadow">
                        <div class="card-body my-3">
                          <div class="align-items-xl-center d-block d-xl-flex px-3"><img class="img-fluid me-3 me-md-2 me-lg-3" src="img/gallery/tomat.png" width="50" alt="" style="border-radius: 50%;"/>
                            <div class="flex-1 align-items-center pt-2">
                              <h5 class="mb-0 fw-bold text-success">Fawwaz Hasanu</h5>
                              <p class="fw-normal text-black">20.22.2392</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row flex-center py-5">
            <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="40" /><span class="text-theme font-monospace fs-3 ps-2">SiTomat</span></a></div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 text-dark my-2 text-center text-md-end">&copy; 2021 Made with &nbsp;<svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#76C279" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="text-dark" href="https://themewagon.com/" target="_blank">20.22.2386 || 20.22.2390 || 20.22.2392 </a></p>
            </div>
          </div>

          </div>
        </div>
      </section>


      {{-- <section class="py-0" id="contact">
        <div class="bg-holder" style="background-image:url(img/illustrations/footer-bg.png);background-position:center;background-size:cover;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row justify-content-lg-between min-vh-75" style="padding-top:21rem">
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">COMPANY </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">About Us</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Team</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Careers</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Contact</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">INVEST </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Features</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">How it works</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Pricing</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Login</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h6 class="mb-3 text-1000 fw-semi-bold">LEGAL </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Privacy</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Terms</a></li>
                <li class="mb-3"><a class="text-700 text-decoration-none" href="#!">Security</a></li>
              </ul>
            </div>
            
          </div>
          <hr class="text-300 mb-0" />
          <div class="row flex-center py-5">
            <div class="col-12 col-sm-8 col-md-6 text-center text-md-start"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="40" /><span class="text-theme font-monospace fs-3 ps-2">SiTomat</span></a></div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 text-dark my-2 text-center text-md-end">&copy; 2021 Made with &nbsp;<svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#76C279" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="text-dark" href="https://themewagon.com/" target="_blank">20.22.2386 || 20.22.2390 || 20.22.2392 </a></p>
            </div>
          </div>
        </div>
      </section> --}}

{{-- </div> --}}


 @endsection