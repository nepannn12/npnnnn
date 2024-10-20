<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Landing Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Need<span class="text-warning">4</span>Cars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home-1.jpg" class="d-block w-100" alt="Sewa Mobil Impian Anda">
                <div class="carousel-caption">
                    <h5>Sewa Mobil Impian Anda</h5>
                    <p>Kami menyediakan berbagai jenis mobil untuk kebutuhan perjalanan Anda.</p>
                    <p><a href="#" class="btn btn-warning mt-3">Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/home-2.jpg" class="d-block w-100" alt="Pelayanan Terbaik">
                <div class="carousel-caption">
                    <h5>Pelayanan Terbaik</h5>
                    <p>Kami selalu berkomitmen memberikan layanan terbaik kepada pelanggan kami.</p>
                    <p><a href="#" class="btn btn-warning mt-3">Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/home-3.jpg" class="d-block w-100" alt="Kenyamanan dan Keamanan">
                <div class="carousel-caption">
                    <h5>Kenyamanan dan Keamanan</h5>
                    <p>Dengan layanan kami, perjalanan Anda akan menjadi lebih aman dan nyaman.</p>
                    <p><a href="#" class="btn btn-warning mt-3">Pelajari Lebih Lanjut</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>

    <!-- About Section -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Tentang Kami" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Kami Menyediakan Jasa Sewa Mobil dengan Kualitas Terbaik</h2>
                        <p>Kami adalah penyedia layanan rental mobil yang mengutamakan kenyamanan dan keamanan Anda selama berkendara.</p>
                        <a href="#" class="btn btn-warning">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="section-header text-center pb-5">
                <h2>Galeri Kami</h2>
                <p>Lihat berbagai mobil yang kami sediakan untuk kebutuhan perjalanan Anda.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/mobil1.jpg" class="img-fluid" alt="Mobil 1">
                            </div>
                            <h3 class="card-title">Sigra</h3>
                            <p class="lead">Daihatsu</p>
                            <p>Rp. 250,000/hari</p>
                            <button type="button" class="btn bg-warning text-dark">Sewa</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/mobil2.jpg" class="img-fluid" alt="Mobil 2">
                            </div>
                            <h3 class="card-title">Livina</h3>
                            <p class="lead">Nissan</p>
                            <p>Rp. 250,000/hari</p>
                            <button type="button" class="btn bg-warning text-dark">Sewa</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/mobil3.jpg" class="img-fluid" alt="Mobil 3">
                            </div>
                            <h3 class="card-title">Civic</h3>
                            <p class="lead">Honda</p>
                            <p>Rp. 350,000/hari</p>
                            <button type="button" class="btn bg-warning text-dark">Sewa</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/mobil3.jpg" class="img-fluid" alt="Mobil 3">
                            </div>
                            <h3 class="card-title">Brio</h3>
                            <p class="lead">Honda</p>
                            <p>Rp. 350,000/hari</p>
                            <button type="button" class="btn bg-warning text-dark">Sewa</button>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/mobil3.jpg" class="img-fluid" alt="Mobil 3">
                            </div>
                            <h3 class="card-title">XL7</h3>
                            <p class="lead">Toyota</p>
                            <p>Rp. 350,000/hari</p>
                            <button type="button" class="btn bg-warning text-dark">Sewa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header text-center pb-5">
                    <h2>Layanan Kami</h2>
                    <p>Kami menawarkan berbagai layanan rental mobil dengan kualitas yang terbaik.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Kualitas Terbaik</h3>
                            <p>Kami menjamin kualitas setiap mobil yang disewakan dalam kondisi prima.</p>
                            <button class="btn bg-warning text-dark">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-journal"></i>
                            <h3 class="card-title">Transaksi Mudah</h3>
                            <p>Proses penyewaan mobil dilakukan dengan cara yang mudah dan cepat.</p>
                            <button class="btn bg-warning text-dark">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-intersect"></i>
                            <h3 class="card-title">Harga Terjangkau</h3>
                            <p>Kami menawarkan harga yang kompetitif dan sesuai dengan kebutuhan Anda.</p>
                            <button class="btn bg-warning text-dark">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="section-header text-center pb-5">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4>Alamat Kantor:</h4>
                        <p>Jl. Raya Jakarta No. 123, Jakarta, Indonesia</p>
                        <h4>Telepon:</h4>
                        <p>+62 123-456-7890</p>
                        <h4>Email:</h4>
                        <p>info@need4cars.com</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Tulis Pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark py-4">
        <div class="container text-center">
            <p class="text-white mb-0">© 2024 Need4Cars. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
