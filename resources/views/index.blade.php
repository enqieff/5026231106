<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Alfamart</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/huruf-A.png" />
        <!-- Bootstrap icons-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
            rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
            rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="/">Alfamart</a>
                <a class="btn btn-primary" href="#signup">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative" >
                <div class="row justify-content-center" >
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Ingin Berlangganan Alfamart?</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class="form-subscribe" id="contactForm"
                                data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <div class="row">
                                    <div class="col">
                                        <input
                                            class="form-control form-control-lg"
                                            id="emailAddress" type="email"
                                            placeholder="Email Address"
                                            data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white"
                                            data-sb-feedback="emailAddress:required">Email
                                            Address is required.</div>
                                        <div class="invalid-feedback text-white"
                                            data-sb-feedback="emailAddress:email">Email
                                            Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto"><button
                                            class="btn btn-primary btn-lg disabled"
                                            id="submitButton"
                                            type="submit">Submit</button></div>
                                </div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission
                                            successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white"
                                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div
                                        class="text-center text-danger mb-3">Error
                                        sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img"
                        style="background-image: url('assets/img/img_misi4.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Misi Kami</h2>
                        <p class="lead mb-0">Memberikan kepuasan kepada
                            pelanggan/konsumen dengan berfokus pada produk dan
                            pelayanan yang berkualitas unggul.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img"
                        style="background-image: url('assets/img/img_misi3.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Misi Kami</h2>
                        <p class="lead mb-0">Selalu menjadi yang terbaik dalam
                            segala hal yang dilakukan dan selalu menegakkan
                            tingkah laku/etika bisnis yang tinggi.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img"
                        style="background-image: url('assets/img/img_misi2.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Misi Kami</h2>
                        <p class="lead mb-0">Ikut berpartisipasi dalam membangun
                            negara dengan menumbuh-kembangkan jiwa wiraswasta
                            dan kemitraan usaha.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img"
                        style="background-image: url('assets/img/img_misi1.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Misi Kami</h2>
                        <p class="lead mb-0">Membangun organisasi global yang
                            terpercaya, sehat dan terus bertumbuh dan bermanfaat
                            bagi pelanggan, pemasok, karyawan, pemegang saham
                            dan masyarakat pada umumnya.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Nilai-Nilai Perusahaan</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3"
                                src="assets/img/img-nilai-integritas.png"
                                alt="..." />
                            <h5>Integritas yang Tinggi</h5>
                            <p class="font-weight-light mb-0">Jujur, disiplin,
                                dan konsisten dalam bekerja berlandaskan etika
                                serta bertanggung jawab terhadap pekerjaan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3"
                                src="assets/img/img-nilai-inovasi.png"
                                alt="..." />
                            <h5>Inovasi Untuk Kemajuan yang Lebih Baik</h5>
                            <p class="font-weight-light mb-0">Kreatif dalam
                                bekerja, berkomitmen untuk melakukan perbaikan
                                cara kerja secara terus menerus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3"
                                src="assets/img/img-nilai-kualitas.png"
                                alt="..." />
                            <h5>Kualitas dan Produktivitas yang Tertinggi</h5>
                            <p class="font-weight-light mb-0">Mampu menjalankan
                                tugas serta fokus pada pencapaian hasil kerja
                                yang lebih baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Terhubung Bersama Kami</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form id="contactForm"
                            class="needs-validation bg-white p-4 rounded shadow"
                            novalidate>
                            <div class="mb-3">
                                <label for="name"
                                    class="form-label">Nama</label>
                                <input type="text" class="form-control"
                                    id="name" placeholder="Masukkan nama Anda"
                                    required>
                                <div class="invalid-feedback">
                                    Nama wajib diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email"
                                    class="form-label">Email</label>
                                <input type="email" class="form-control"
                                    id="email" placeholder="Masukkan email Anda"
                                    required>
                                <div class="invalid-feedback">
                                    Masukkan email yang valid.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject"
                                    class="form-label">Subjek</label>
                                <input type="text" class="form-control"
                                    id="subject" placeholder="Subjek pesan"
                                    required>
                                <div class="invalid-feedback">
                                    Subjek wajib diisi.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message"
                                    class="form-label">Pesan</label>
                                <textarea class="form-control" id="message"
                                    rows="4" placeholder="Tulis pesan Anda"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Pesan tidak boleh kosong.
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-primary">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script>
    // Bootstrap form validation
    (() => {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
    </script>

        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a
                                    href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a
                                    href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of
                                    Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy
                                    Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy;  2024 PT Sumber Alfaria Trijaya, Tbks.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i
                                        class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i
                                        class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script
            src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>