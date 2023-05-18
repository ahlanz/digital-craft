<!DOCTYPE html>
<html lang="en">

<head>
    <?= $title_meta ?>
    <?= $this->include('homepage_partial/head-css') ?>
</head>

<body>
    <?= $this->include('homepage_partial/navbar') ?>
    <main role="main">
        <div class="wrapper">

            <div class="breadcrumb-wrap">
                <div class="container py-3">
                    <div class="row d-flex justify-content-md-between justify-content-sm-center">
                        <div class="col-md-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item mr-1 font-weight-bold"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item ml-1 font-weight-bold active" aria-current="page">
                                        Pustaka
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-ghost grey-dark font-weight-bold">
                                <i class="las la-share-alt"></i>
                                <span>Berbagi</span>
                            </button>
                            <button class="btn btn-ghost grey-dark like-button font-weight-bold">
                                <i class="las la-hand-holding-heart"></i>
                                <span>150 suka</span>
                            </button>
                            <button class="btn btn-ghost grey-dark font-weight-bold">
                                <i class="las la-bookmark"></i>
                                <span><span>Simpan untuk kemudian</span></span>
                            </button>

                            <!---->
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row d-flex justify-content-center align-items-stretch">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="box-icon bg-penjelasan text-info d-flex align-items-center justify-content-center">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <div class="content mt-3">
                                    <h4 class="title font-weight-bold">Phone</h4>
                                    <p class="text-muted">
                                        Mulai bekerja dengan aman yang dapat memberikan segalanya
                                    </p>
                                    <a href="tel:+387 252-25-331" class="text-primary">+62812455689</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="box-icon bg-warning-alt text-warning d-flex align-items-center justify-content-center">
                                    <i class="las la-envelope-open"></i>
                                </div>
                                <div class="content mt-3">
                                    <h4 class="title font-weight-bold">Email</h4>
                                    <p class="text-muted">
                                        Mulai bekerja dengan aman yang dapat memberikan segalanya
                                    </p>
                                    <a href="mailto:aslab.kolab@gmail.com" class="text-primary">aslab.kolab@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                    <!-- <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="box-icon bg-danger-alt text-danger d-flex align-items-center justify-content-center">
                                    <i class="las la-map-signs"></i>
                                </div>
                                <div class="content mt-3">
                                    <h4 class="title font-weight-bold">Lokasi</h4>
                                    <p class="text-muted">
                                        Mulai bekerja dengan aman yang dapat memberikan segalanya
                                    </p>
                                    <a href="#" class="text-primary">Lihat peta</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--end col-->
                    <!-- <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="box-icon bg-success-alt text-success d-flex align-items-center justify-content-center">
                                    <i class="las la-street-view"></i>
                                </div>
                                <div class="content mt-3">
                                    <h4 class="title font-weight-bold">Lihat jalanan</h4>
                                    <p class="text-muted">
                                        Mulai bekerja dengan aman yang dapat memberikan segalanya
                                    </p>
                                    <a href="#" class="text-primary">Lihat Peta</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--end col-->
                </div>
                <!--end row-->
            </div>

            <div class="container">
                <div class="row my-6">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body py-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title mb-0">Kirim pesan ke whatsapp</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3">
                                <form id="contact-form" class="mt-4" method="post" action="<?php echo base_url('whatsapp/send_message'); ?>" role="form">
                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Nama Lengkap *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="isi nama lengkap anda *" required="required" data-error="Firstname is required." />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">No hp yang ingin dihubungi. *</label>
                                                    <input id="form_name" type="number" name="no_hp" class="form-control" placeholder="contoh : +62 *" required="required" data-error="Firstname is required." />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Nama Belakang *</label>
                                                    <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">Email *</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="tolong isikan email anda *" required="required" data-error="Valid email is required." />
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Mohon Tentukan Kebutuhan Anda *</label>
                                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                        <option value=""></option>
                                                        <option value="Request quotation">permintaan kutipan</option>
                                                        <option value="Request order status">Permintaan Status</option>
                                                        <option value="Request copy of an invoice">Meminta salinan faktur</option>
                                                        <option value="Other">Lainnya</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Surat *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="tuliskan pesan anda *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-search btn-send text-white" value="Kirim" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-muted mt-3">
                                                    <strong>*</strong> kolom ini harus diisi.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div id="faq-accordion" class="mb-5">
                            <div class="card mb-2 mb-md-3">
                                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 mr-2">Bagaimana saya menghubungi dukungan?</h6>
                                        <i class="las la-arrow-right icon"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                                    <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Jika Anda membutuhkan bantuan dengan produk, silakan hubungi pemilik toko dengan mengunjungi profil toko mereka dan mengirim pesan kepada mereka. Untuk hal lainnya (lisensi, pembayaran, dll), silakan kunjungi Pusat Bantuan kami.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2 mb-md-3">
                                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 mr-2">Bagaimana cara unzip file produk?</h6>
                                        <i class="las la-arrow-right icon"></i>
                                    </div>
                                </a>
                                <div class="collapse show" id="accordion-2" data-parent="#faq-accordion">
                                    <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    PC: Untuk mengekstrak satu file atau folder, klik dua kali
                                    Mengkompresi folder untuk membuka. Kemudian, tarik file atau folder dari
                                    folder yang dikompres ke lokasi baru. Untuk mengekstrak seluruh
                                    isi folder yang dikompresi, klik kanan folder, klik
                                    Keluarkan Semua, dan kemudian ikuti instruksi. Mac: klik ganda
                                    file.zip, lalu cari folder produk atau file produk.
                                    Jika Anda terus mengalami masalah, periksa file bantuan ini untuk informasi lebih lanjut
                                    dengan tips.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2 mb-md-3">
                                <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 mr-2">
                                            Apa yang terjadi ketika dukungan saya berakhir?
                                        </h6>
                                        <i class="las la-arrow-right icon"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
                                    <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Cicero terkenal berorasi melawan lawan politiknya, Lucius Sergius Catilina. Kadang-kadang Oration pertama melawan Catiline dijadikan sebagai contoh spesimen.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2 mb-md-3">
                                <a href="#accordion-4" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4 collapsed">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 mr-2">Pilihan pembayaran apa yang kami miliki?</h6>
                                        <i class="las la-arrow-right icon"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="accordion-4" data-parent="#faq-accordion">
                                    <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Cicero terkenal berorasi melawan lawan politiknya, Lucius Sergius Catilina. Kadang-kadang Oration pertama melawan Catiline diambil sebagai contoh spesimen: "Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet?" (Berapa lama lagi, O Catiline, kamu akan menyalahgunakan kesabaran kami? Dan sampai kapan kegilaanmu itu akan mengejek kami?)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <?= $this->include('homepage_partial/footer') ?>

    <?= $this->include('homepage_partial/foot-js') ?>

    <!-- endbuild -->

</body>

</html>