@extends('Template/layoutRev')

@section('css')
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="navbar.css">
@stop

@section('content')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
        <h1>Project Exhibition</h1>
        <h2>Software Engineering Technology Study Program DTEDI SV UGM</h2>
        <div class="container d-flex justify-content-center">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Project
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Looking for something?">
                <div class="input-group-append">
                    <button class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
        <a href="#about" class="btn-get-started scrollto">All</a>
        <a href="#about" class="btn-get-started scrollto">Aplikasi</a>
        <a href="#about" class="btn-get-started scrollto">Game</a>
        <a href="#about" class="btn-get-started scrollto">Website</a>
        </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Event -->
  <section id="events" class="events">
      <div class="container my-5">

        <div class="section-title">
          <h2>--Events--</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <div class="mini-title mt-2 jarak">
                <hr class="vertical-line"/>
                <h4>Latest Events</h4>
            </div>

            <div class="btn-more mt-4">
                <h6>View more →</h6>
            </div>
        </div>

        <div class="row mt-2 justify-content-center">

            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>

        </div>

      </div>
    </section><!-- End Event Section -->

    <section>
        <div class="wrapper">
        <div class="container-lg box">
            <div class="row square">
            <div class="col-md-6 img-left">
                <!-- Ini Foto -->
                <!-- <img src="login.png" alt=""> -->
            </div>

            <div class="col-md-6 right">
                <div class="input-box">
                    <header>
                        Vote Event
                    </header>
                    <div class="input-field">
                        <p>
                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                        </p>
                    </div>
                    <div class="button">
                        <button type="submit" class="submit">Lets go!</button>    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>


    <!-- Project -->
    <section>
    <!-- <section id="events" class="events"> -->
      <div class="container my-5">

        <div class="section-title">
          <h2>--Projects--</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <div class="mini-title mt-2 jarak">
                    <hr class="vertical-line"/>
                <h4>Latest Projects</h4>
            </div>

            <div class="btn-more mt-4">
                <h6>View more →</h6>
            </div>
        </div>
        
        <div class="row mt-2 justify-content-center">
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center justify-content-lg-between p-4">
            <div class="mini-title mt-2 jarak">
                    <hr class="vertical-line"/>
                <h4>Popular Project</h4>
            </div>

            <div class="btn-more mt-4">
                <h6>View more →</h6>
            </div>
        </div>

        <div class="row mt-2 justify-content-center">
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="register.jpg" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title">Pameran Proyek PAD Mahasiswa TRPL 2021</h5>
                    <p class="card-text">24 Maret - 25 Maret 2023</p>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Projects Section -->

@stop

@section('js')
@stop