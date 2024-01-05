@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __("UMUM") }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title bg-light rounded h-100 p-5">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Sektor Pengurusan </h5>
                            <h1 class="display-6 mb-4">Kami sedia Membantu animated</h1>
                            <a href="appointment.html" class="btn btn-primary py-3 px-5">Temu Janji</a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-1.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Perancangan</h4>
                                <p class="text-primary mb-0">En. Yusup Bin Harbi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-2.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Pembangunan Murid</h4>
                                <p class="text-primary mb-0">Belum Diisi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-3.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Pembelajaran</h4>
                                <p class="text-primary mb-0">Cik Nafisah Binti Rosli</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-4.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Pengurusan Sekolah</h4>
                                <p class="text-primary mb-0">Encik Law Siong Lee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-5.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Psikologi Dan Kaunseling</h4>
                                <p class="text-primary mb-0">Puan Iesha Rina Bawang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-5.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Pentaksiran Dan Perperiksaan</h4>
                                <p class="text-primary mb-0">Encik Larkhiba bin Zaidi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative rounded-top" style="z-index: 1;">
                                <img class="img-fluid rounded-top w-100" src="img/team-5.jpg" alt="">
                                <div
                                    class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i
                                            class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                <h4 class="mb-2">Sektor Pengurusan</h4>
                                <p class="text-primary mb-0">Encik Mohd Saufi bin Usop</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
            <div class="container">
                <div class="bg-primary p-5">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
    </section>
@endsection