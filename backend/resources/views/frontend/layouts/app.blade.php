<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Kelas Center</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img style="height: 32px" src="{{ asset('assets/frontend/img/logo/logo-dark.png') }}" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Benefit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak Kami</a>
            </li>
          </ul>
          <div class="d-flex gap-2">
            <button class="btn btn-primary-kelas" type="submit">Ajukan Demo</button>
            <button class="btn btn-outline-kelas" type="submit">Masuk</button>
          </div>
        </div>
      </div>
    </nav>

    <section class="hero">
      <div class="px-4 py-5 text-center container">
        <div class="my-5">
          <h1 class="display-5 text-white">Tingkatkan Performa Bisnis Anda</h1>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white">Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-primary-kelas btn-lg px-4 gap-3 btn-sm-w-100">Ajukan Demo</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="partner">
      <div class="px-4 py-5 text-center bg-light">
        <div class="my-5 container">
          <h1 class="display-6">Telah Dipercaya oleh 10.000+ Profesional User dari</h1>
          <div class="scroll-container">
            <div class="scroll-wrapper">
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-ieg.png') }}" class="partner-logo" alt="IEG Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-iep.png') }}" class="partner-logo" alt="IEP Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-sctv.png') }}" class="partner-logo" alt="SCTV Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-emtek.png') }}" class="partner-logo" alt="EMTEK Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-sicepat.png') }}" class="partner-logo" alt="SICEPAT Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-cloudhost.png') }}" class="partner-logo" alt="Cloudhost Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-adirect.png') }}" class="partner-logo" alt="Adirect Logo" /></div>
              <div class="scroll-item"><img src="{{ asset('assets/frontend/img/partner/partner-volta.png') }}" class="partner-logo" alt="Volta Logo" /></div>
            </div>
          </div>
          <div class="scroll-indicators d-md-none">
            <span class="indicator active" data-index="0"></span>
            <span class="indicator" data-index="1"></span>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits">
      <div class="px-4 py-5 my-5 text-center container">
        <h1 class="display-5">Bagaimana Kelas Center Membantu Anda?</h1>
        <div class="col-lg-8 mx-auto">
          <p class="lead mb-4">Kami menghadirkan platform pembelajaran yang komprehensif untuk memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
          <div class="mt-5 mt-lg-2 d-flex gap-3 flex-nowrap overflow-auto justify-content-center button-container">
            @foreach($categoryBenefits as $category)
                <a href="#{{ $category->name }}" class="btn btn-outline-kelas">{{ $category->name }}</a>
            @endforeach
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row text-start benefit-section">
          <div class="col-md-6">
            <h4 class="fw-bold mb-3">Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)</h4>
            <div class="d-md-none mb-4">
              <div class="bg-light" style="height: 300px; width: 100%"></div>
            </div>
            <p class="lead mb-4">
              Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan
              produktivitas yang unggul dengan LMS kami!
            </p>

            <div class="mb-4">
              <div class="bg-light py-2">
                <div class="d-flex" style="line-height: 32px"><i class="bi bi-check-lg mx-2" style="font-size: 2rem"></i> Issued Certificate</div>
              </div>
              <p class="lead mb-4 mt-2">Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
              <div class="bg-light py-2">
                <div class="d-flex" style="line-height: 32px"><i class="bi bi-check-lg mx-2" style="font-size: 2rem"></i> Issued Certificate</div>
              </div>
              <p class="lead mb-4 mt-2">Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
              <div class="bg-light py-2">
                <div class="d-flex" style="line-height: 32px"><i class="bi bi-check-lg mx-2" style="font-size: 2rem"></i> Issued Certificate</div>
              </div>
              <p class="lead mb-4 mt-2">Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.</p>
            </div>
          </div>
          <div class="col-md-6 d-none d-md-block">
            <div class="bg-light" style="height: 400px; width: 100%"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="kenapa-kelas-center">
      <div class="py-5 my-5 text-center">
        <div class="container">
          <h1 class="display-5 fw-bold">Pilihan Paket Untuk Perusahaan di Kelas Center</h1>
          <div class="row text-start row-scroll">
            <div class="col-md-4 col-scroll col-10">
              <div class="card my-3 bg-light rounded-2">
                <div class="card-body card-kenapa">
                  <h5 class="my-2" style="text-align: left">
                    <i class="bi bi-lamp mr-2"></i>
                    <span class="ml-5">Starter</span>
                  </h5>
                  <p class="card-subtitle my-3">Kelebihan</p>
                  <div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                  </div>

                  <hr style="border-top: 2px dashed black" />

                  <div>
                    <div class="text-primary">Rp187.500</div>
                    <div><strong style="font-size: 1.5rem">Rp159.000</strong>/Bulan</div>
                    <button class="btn btn-tertiory-kelas">Pilih paket</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-scroll col-10">
              <div class="card my-3 bg-light rounded-2">
                <div class="card-body card-kenapa">
                  <h5 class="my-2" style="text-align: left">
                    <i class="bi bi-lamp mr-2"></i>
                    <span class="ml-5">Starter</span>
                  </h5>
                  <p class="card-subtitle my-3">Kelebihan</p>
                  <div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                  </div>

                  <hr style="border-top: 2px dashed black" />

                  <div>
                    <div class="text-primary">Rp187.500</div>
                    <div><strong style="font-size: 1.5rem">Rp159.000</strong>/Bulan</div>
                    <button class="btn btn-tertiory-kelas">Pilih paket</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-scroll col-10">
              <div class="card my-3 bg-light rounded-2">
                <div class="card-body card-kenapa">
                  <h5 class="my-2" style="text-align: left">
                    <i class="bi bi-lamp mr-2"></i>
                    <span class="ml-5">Starter</span>
                  </h5>
                  <p class="card-subtitle my-3">Kelebihan</p>
                  <div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> LMS + kelas by Kelas.Center</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> Up to 5 Users</div>
                    <div class="my-3"><i class="bi bi-check-circle-fill mr-2"></i> No charge per user</div>
                  </div>

                  <hr style="border-top: 2px dashed black" />

                  <div>
                    <div class="text-primary">Rp187.500</div>
                    <div><strong style="font-size: 1.5rem">Rp159.000</strong>/Bulan</div>
                    <button class="btn btn-tertiory-kelas">Pilih paket</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card d-flex align-items-center justify-content-between flex-column flex-md-row rounded-bottom-4 mt-3 bg-kenapa-kelas-center">
                <div class="card-body">
                  <div class="d-md-flex">
                    <div class="text-start text-white">
                      <h3 class="my-2" style="text-align: left">
                        <h3 class="my-2" style="text-align: left">
                          <i class="bi bi-building-fill mr-2"></i>
                          <span class="ml-5">Enterprise</span>
                        </h3>
                      </h3>
                    </div>
                    <div class="d-md-flex text-start text-white">
                      <div class="my-3 mx-md-3" style="margin-left: auto"><i class="bi bi-check-circle-fill mr-2"></i> >100 users</div>
                      <div class="my-3 mx-md-3"><i class="bi bi-check-circle-fill mr-2"></i> All Access Class</div>
                      <div class="my-3 mx-md-3"><i class="bi bi-check-circle-fill mr-2"></i> More Features</div>
                    </div>
                    <div class="text-md-end text-start" style="margin-left: auto">
                      <button class="btn btn-outline-kelas-2 my-2 btn-sm-w-100">Contact Us</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="learning">
      <div class="px-4 py-5 container">
        <h1 class="display-5 fw-bold text-center">Lebih dari 2000+ Learning Video</h1>
        <div class="col-lg-10 mx-auto">
          <p class="lead mb-4 text-center">
            Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan
            kualitas tinggi.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-4">
            <button id="btnKelasCom" type="button" class="btn btn-outline-kelas btn-lg px-4 gap-3">Kelas.com</button>
            <button id="btnKelasWork" type="button" class="btn btn-outline-kelas btn-lg px-4 gap-3">Kelas.work</button>
            <button id="btnBootcamp" type="button" class="btn btn-outline-kelas btn-lg px-4 gap-3">Bootcamp</button>
          </div>

          <div id="carouselKelasCom" class="carousel slide py-5 video-section" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-6 col-md-4 mt-3 mt-md-0">
                    <div class="card">
                      <div style="position: relative">
                        <img src="{{ asset('assets/frontend/img/thumbnail-video.png') }}" class="card-img-top" alt="..." />
                        <div class="position-absolute top-50 start-50 translate-middle">
                          <i class="bi bi-play-circle-fill text-white" style="font-size: 2rem"></i>
                        </div>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mt-3 mb-2 text-body-secondary">Pandji Pragiwaksono</h6>
                        <p class="text-body-secondary p-0 m-0">Presenter Televisi & Komika</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 mt-3 mt-md-0">
                    <div class="card">
                      <div style="position: relative">
                        <img src="{{ asset('assets/frontend/img/thumbnail-video.png') }}" class="card-img-top" alt="..." />
                        <div class="position-absolute top-50 start-50 translate-middle">
                          <i class="bi bi-play-circle-fill text-white" style="font-size: 2rem"></i>
                        </div>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h6 class="card-subtitle mt-3 mb-2 text-body-secondary">Pandji Pragiwaksono</h6>
                        <p class="text-body-secondary p-0 m-0">Presenter Televisi & Komika</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselKelasCom" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselKelasCom" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div id="carouselKelasWork" class="carousel slide py-5 d-none video-section" data-bs-ride="carousel"></div>
          <div id="carouselBootcamp" class="carousel slide py-5 d-none video-section" data-bs-ride="carousel"></div>
        </div>
      </div>
    </section>

    <section class="cta-container">
      <div class="px-4 py-5 text-center cta">
        <div class="py-5 container">
          <h1 class="display-5">Tingkatkan Kualitas Perusahaan Anda</h1>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-primary-kelas btn-lg px-4 gap-3 btn-sm-w-100">Ajukan Demo</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="bg-dark py-5">
        <div class="container">
          <div class="row text-white">
            <div class="col-md-3">
              <img class="d-block mb-3" src="{{ asset('assets/frontend/img/logo/logo-white.png') }}" style="width: 128px" alt="" />
              <span>&copy; 2021 Landify UI Kit. All rights reserved</span>
            </div>
            <div class="col-md-3 mt-5 mt-md-0">
              <h5 class="mb-3">Company</h5>
              <p>Tentang Kami</p>
              <p>Ajukan Demo</p>
              <p>Kelas.Work</p>
              <p>Kelas.Com</p>
            </div>
            <div class="col-md-3 mt-5 mt-md-0">
              <h5 class="mb-3">Kebijakan</h5>
              <p>Kebijakan Privasi</p>
              <p>Syarat & Ketentuan</p>
            </div>
            <div class="col-md-3 mt-5 mt-md-0">
              <h5 class="mb-3">Hubungi Kami</h5>
              <p><i class="bi bi-envelope"></i> <a href="mailto:nabilla.anggraini@kelas.com" class="text-white">Nabilla.Anggraini@kelas.com</a></p>
              <p><i class="bi bi-whatsapp"></i> +62 811 3366 763 (Nabilla Anggraini)</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

    <script>
      const scrollContainer = document.querySelector('.scroll-container');
      const indicators = document.querySelectorAll('.indicator');

      scrollContainer.addEventListener('scroll', () => {
        const scrollLeft = scrollContainer.scrollLeft;
        const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
        const scrollIndex = Math.round((scrollLeft / maxScrollLeft) * (indicators.length - 1));

        indicators.forEach((indicator, index) => {
          if (index === scrollIndex) {
            indicator.classList.add('active');
          } else {
            indicator.classList.remove('active');
          }
        });
      });

      indicators.forEach((indicator) => {
        indicator.addEventListener('click', (e) => {
          const index = parseInt(e.target.getAttribute('data-index'), 10);
          const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
          const scrollLeft = (index / (indicators.length - 1)) * maxScrollLeft;
          scrollContainer.scrollTo({
            left: scrollLeft,
            behavior: 'smooth',
          });
        });
      });

      document.getElementById('btnKelasCom').addEventListener('click', function () {
        document.getElementById('carouselKelasCom').classList.remove('d-none');
        document.getElementById('carouselKelasWork').classList.add('d-none');
        document.getElementById('carouselBootcamp').classList.add('d-none');
      });

      document.getElementById('btnKelasWork').addEventListener('click', function () {
        document.getElementById('carouselKelasCom').classList.add('d-none');
        document.getElementById('carouselKelasWork').classList.remove('d-none');
        document.getElementById('carouselBootcamp').classList.add('d-none');
      });

      document.getElementById('btnBootcamp').addEventListener('click', function () {
        document.getElementById('carouselKelasCom').classList.add('d-none');
        document.getElementById('carouselKelasWork').classList.add('d-none');
        document.getElementById('carouselBootcamp').classList.remove('d-none');
      });
    </script>
  </body>
</html>