<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Halaman satu -->
    <div class="container-pdf page-one">
        <?php include('./view/header.php'); ?>

        <section class="main">
            <div class="title">
                <h1>POTENSI <span>W.I.S.E</span></h1>
            </div>

            <div class="grey-box first">
                <p><b>POTENSI WISE</b> adalah metode Observasi dan Analisa Karakter dan Potensi Manusia berdasarkan
                    Struktur Wajah, Pola Interaksi mulai dari postur dan cara dia bergerak, cara berinteraksi, dinamika,
                    Suara mulai dari volume, intonasi, ritme, pitch, cara pengucapan, dan kalimat yang digunakan serta
                    pola emosi yang tampak di wajahnya karena menggunakan beberapa bagian dari manusia maka agar lebih
                    mudah di singkat menjadi <b>WISE</b>.
                </p>
            </div>

            <div class="wise-content-container">
                <div class="small-circle"></div>
                <div class="line-circle"></div>
                <div class="line-square"></div>
                <div class="wise">
                    <p>W.I.S.E</p>
                </div>

                <div class="lightblue-box">
                    <div class="content">
                        <table class="five-list-content">
                            <tr>
                                <td class="letter"><b>W</b></td>
                                <td class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M16 12l-6 6V6z" fill="rgba(188,73,114,1)" />
                                    </svg></td>
                                <td class="five-text">Wajah</td>
                            </tr>
                            <tr>
                                <td class="letter"><b>I</b></td>
                                <td class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M16 12l-6 6V6z" fill="rgba(188,73,114,1)" />
                                    </svg></td>
                                <td class="five-text i-letter">Interaksi (Pola Interaksi), Postur, Bahasa Tubuh, Cara
                                    Bergerak, Cara Bicara, Kalimat yang digunakan</td>
                            </tr>
                            <tr>
                                <td class="letter"><b>S</b></td>
                                <td class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M16 12l-6 6V6z" fill="rgba(188,73,114,1)" />
                                    </svg></td>
                                <td class="five-text">Suara (Volume, Intonasi, Irama, Jeda)</td>
                            </tr>
                            <tr>
                                <td class="letter"><b>E</b></td>
                                <td class="arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="24" height="24">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path d="M16 12l-6 6V6z" fill="rgba(188,73,114,1)" />
                                    </svg></td>
                                <td class="five-text">Emosi yang ditampilkan</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="grey-box second">
                <p>Sejak dahulu kala, para ahli telah tertarik dengan pengetahuan tentang manusia, khususnya karakter
                    manusia. Lalu tahun berganti tahun, abad berganti, pengetahuan tentang manusia pun berubah menjadi
                    lebih detil, lebih beragam. Guna memudahkan untuk menganalisa maka Potensi W.I.S.E menggunakan
                    beberapa teori karakter yang telah populer dan valid yang kemudian dimodifikasi dan disesuaikan agar
                    dapat mudah terhubung dengan metode W.I.S.E.<br><br>
                    Laporan ini menganalisa gaya perilaku; gaya perilaku merupakan sebuah potensi dengan kecenderungan
                    tertentu dalam berbagai aktifitas kemudian dikelompokan agar dapat dilihat sebagai Gaya Perilaku dan
                    Potensi Potensi yang tertera di dalam laporan ini adalah bagian dari kecenderungan Perilaku yang
                    dianalisa secara visual (terlihat), sehingga pada kenyataannya bisa saja terjadi kondisi kenyataan
                    lebih
                    tinggi atau lebih rendah dari Potensi yang tertera di dalam laporan.
                </p>
            </div>

            <section class="quadrant-container">
                <div class="hor-parameter berbicara">
                    <p>BERBICARA - TERBUKA</p>
                </div>

                <div class="hor-parameter mengamati">
                    <p>MENGAMATI - PENDIAM</p>
                </div>

                <div class="ver-parameter tugas">
                    <p>TUGAS</p>
                </div>

                <div class="ver-parameter hubungan">
                    <p>HUBUNGAN MANUSIA</p>
                </div>

                <div class="arrow-left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="68" height="68">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M16 12l-6 6V6z" fill="rgba(217,134,66,1)" />
                    </svg>
                </div>
                <div class="arrow-square-left"></div>
                <div class="arrow-left-text">
                    <p>Emosi Tidak Diperlihatkan</p>
                </div>

                <div class="arrow-right">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="68" height="68">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M16 12l-6 6V6z" fill="rgba(57,121,174,1)" />
                    </svg>
                </div>
                <div class="arrow-square-right"></div>
                <div class="arrow-right-text">
                    <p>Emosi Terlihat</p>
                </div>

                <div class="quadrant">
                    <div class="quadrant-box green">
                        <div class="sub-quadrant-text">
                            <p><b>Otoritas / Kontrol</b></p>
                        </div>
                        <h2>Direktur</h2>
                        <p>Tidak suka dimanfaatkan</p>
                    </div>
                    <div class="quadrant-box red">
                        <div class="sub-quadrant-text">
                            <p><b>Lingkungan Sosial / Disukai</b></p>
                        </div>
                        <h2>Sosialita</h2>
                        <p>Tidak suka ditolak</p>
                    </div>
                    <div class="quadrant-box yellow">
                        <div class="sub-quadrant-text">
                            <p><b>Organisasi</b></p>
                        </div>
                        <h2>Pemikir</h2>
                        <p>Tidak suka kritik</p>
                    </div>
                    <div class="quadrant-box blue">
                        <div class="sub-quadrant-text">
                            <p><b>Keamanan / Harmoni</b></p>
                        </div>
                        <h2>Pendamai</h2>
                        <p>Konflik / Perubahan</p>
                    </div>
                </div>
            </section>
        </section>

        <?php include('./view/footer.php'); ?>
    </div>
    <!-- Halaman satu -->

    <!-- Halaman dua -->
    <div class="container-pdf page-two">
        <section class="main">
            <section class="self-info-chart">
                <div class="self-info">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>(User Name)</td>
                        </tr>
                        <tr>
                            <td>Tanggal Analisa</td>
                            <td>:</td>
                            <td>Sep-22</td>
                        </tr>
                        <tr>
                            <td>Jenis Analisa</td>
                            <td>:</td>
                            <td>Perilaku & Potensi</td>
                        </tr>
                    </table>
                </div>
                <div class="chart">
                    <div id="piechart" style="
                        height: 175px;
                        width: 300px;
                    "></div>
                </div>
            </section>

            <div class="name-advance-profile">
                <div class="name">
                    <p>(User Name)</p>
                </div>
                <div class=advance-profile"">
                    <p>Potensi WISE Advance Profile</p>
                </div>
            </div>

            <section class="statistic">
                <div class="rating">
                    <div class="rating-type">
                        <div class="rating-box blue-low">
                            <h3>R<br>e<br>n<br>d<br>a<br>h</h3>
                        </div>
                        <div class="rating-box blue-medium">
                            <h3>S<br>e<br>d<br>a<br>n<br>g</h3>
                        </div>
                        <div class="rating-box blue-moderat">
                            <h3>M<br>o<br>d<br>e<br>r<br>a<br>t</h3>
                        </div>
                        <div class="rating-box blue-high">
                            <h3>T<br>i<br>n<br>g<br>g<br>i</h3>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <p>Potensi yang terlihat, potensi dapat menjadi kompetensi bila sudah dikembangkan</p>
                </div>
                <div class="rating-type inverse">
                    <div class="rating-box red-low">
                        <h3>R<br>e<br>n<br>d<br>a<br>h</h3>
                    </div>
                    <div class="rating-box red-medium">
                        <h3>S<br>e<br>d<br>a<br>n<br>g</h3>
                    </div>
                    <div class="rating-box red-moderat">
                        <h3>M<br>o<br>d<br>e<br>r<br>a<br>t</h3>
                    </div>
                    <div class="rating-box red-high">
                        <h3>T<br>i<br>n<br>g<br>g<br>i</h3>
                    </div>
                </div>
            </section>

            <section class="statistic-type">
                <div class="blue-statistic-list">
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Pekerja Keras</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Pencari Peluang</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Kreatif</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Mampu Handle Konflik</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Mampu Bicara Dengan Orang Tua</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Menyukai Tantangan</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Mampu Menjaga Hubungan</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Mampu Pengaruhi Orang Lain</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Mampu Motivasi Diri Sendiri</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Tidak Enakan</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Dapat Bekerja Sendiri</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Memiliki Visi Jauh Kedepan</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Penuh Pertimbangan</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Pekerja Dinamis Bergerak</p>
                        </div>
                    </div>
                    <div class="blue-statistic">
                        <div class="number-of-rating">
                            <div class="rating-box blue-low"></div>
                            <div class="rating-box blue-medium"></div>
                            <div class="rating-box blue-moderat"></div>
                            <div class="rating-box blue-high"></div>
                        </div>
                        <div class="statistic-type-list blue-type-list">
                            <p>Sensitif Terhadap Kritik</p>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                <div class="red-statistic-list">
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Potensi Kepemimpinan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Dominan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Cepat Bertindak</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kemampuan Merencana</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kemampuan Melaksanakan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Sistimatis</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kemampuan Menghadapi Tekanan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Multi Tasking</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Orientasi Kepada Tugas</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Menerima Perubahan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Tekad</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kompetitif</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Ketekunan / Keuletan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kemampuan Memutuskan</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
                    <div class="red-statistic">
                        <div class="statistic-type-list red-type-list">
                            <p>Kritis</p>
                        </div>
                        <div class="number-of-rating">
                            <div class="rating-box red-low"></div>
                            <div class="rating-box red-medium"></div>
                            <div class="rating-box red-moderat"></div>
                            <div class="rating-box red-high"></div>
                        </div>
                    </div>
            </section>

            <section class="communication-potential">
                <div class="communication-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="chart-title">
                        <h3>Communication Potential</h3>
                    </div>
                    <div class="chart"></div>
                    <div class="chart-rating">
                        <div class="rating-box low">
                            <p>Rendah</p>
                        </div>
                        <div class="rating-box medium">
                            <p>Sedang</p>
                        </div>
                        <div class="rating-box high">
                            <p>Tinggi</p>
                        </div>
                        <div class="rating-box highest">
                            <p>S. Tinggi</p>
                        </div>
                    </div>
                </div>
                <div class="chart-info">
                    <div class="text blue">
                        <h4>Writen Communication</h4>
                        <p>Menyampaikan ide secara tertulis dengan jelas dan benar dalam hal penyusunan informasi,
                            struktur,
                            tata bahasa, dan terminologi, serta sesuai dengan sasaran / penerima informasi tersebut.</p>
                    </div>
                    <div class="text orange">
                        <h4>Oral Communication</h4>
                        <p>Kemampuan untuk menjelaskan secara Verbal, kepada orang lain, baik secara perorangan atau
                            kelompok.</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman dua -->

    <!-- Halaman tiga -->
    <div class="container-pdf page-three">
        <section class="main">
            <section class="task-acc-potential">
                <div class="chart-title">
                    <h3>Task Accomplishment Potential</h3>
                </div>

                <div class="task-acc-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="chart-rating">
                        <div class="rating-box highest">
                            <p>S. Tinggi</p>
                        </div>
                        <div class="rating-box high">
                            <p>Tinggi</p>
                        </div>
                        <div class="rating-box medium">
                            <p>Sedang</p>
                        </div>
                        <div class="rating-box low">
                            <p>Rendah</p>
                        </div>
                    </div>
                    <div class="chart"></div>
                </div>
            </section>

            <section class="task-acc-potential-info">
                <div class="chart-info-box red">
                    <h4>PROCESSING</h4>
                    <p>Kemampuan seseorang untuk mengembangkan dan menjalankan proses pekerjaan / tugas. Kemampuan ini
                        berkaitan dengan menganalisa secara login bagaimana mengembangkan satu penyelesaian persoalan
                        menjadi efisien dan efektif.</p>
                </div>
                <div class="chart-info-box yellow">
                    <h4>ENERGY</h4>
                    <p>Kemampuan menjaga energi yang tetap tinggi atas suatu kegiatan.</p>
                </div>
                <div class="chart-info-box orange">
                    <h4>WORKSTANDARD</h4>
                    <p>Menetapkan standard hasil tugas yang tinggi, baik buat diri sendiri maupun orang lain. Tidak puas
                        dengan hasil yang rata-rata.</p>
                </div>
                <div class="chart-info-box lightblue">
                    <h4>FOLLOW UP</h4>
                    <p>Kemampuan menjalankan proses untuk memonitor atau memantau hasil atas tugas yang diberikan atau
                        di
                        delegasikan.</p>
                </div>
                <div class="chart-info-box darkgreen">
                    <h4>INFORMATION MONITORING</h4>
                    <p>Kemampuan untuk membuat dan menjalankan prosedur untuk memperoleh dan mengkaji informasi yang
                        penting
                        dalam rangka mengelola tugas dan kegiatan sehari-hari.</p>
                </div>
                <div class="chart-info-box darkblue">
                    <h4>ATTENTION TO DETAIL</h4>
                    <p>Kemampuan menyelesaikan tugas secara keseluruhan dengan memperhatikan dan mempertimbangkan segala
                        aspek, walaupun sekecil apapun informasinya.</p>
                </div>
                <div class="chart-info-box purple">
                    <h4>INNITIATIVE</h4>
                    <p>Secara aktif mencoba terlibat dalam usaha mencapai hasil, mampu mengerjakan / melakukan tugas
                        dengan
                        baik tanpa pengawasan yang ketat. Berusaha mencapai hasil melampaui target.</p>
                </div>
                <div class="chart-info-box lightgreen">
                    <h4>TECHNICAL ABILITY</h4>
                    <p>Mencapai tingkat yang memuaskan dalam hal keterampilan teknis yang dibutuhkan</p>
                </div>
            </section>

            <section class="explanation">
                <div class="grey-box third">
                    <p>Andika adalah individu yang mudah bergaul dan berusaha keras untuk membangun hubungan positif
                        baik di
                        sekolah maupun di rumah. Dia seorang yang cenderung mandiri, agak sulit untuk mengubah pendirian
                        Andika
                        setelah dia membuat keputusannya, karena setiap keputusan telah dipertimbangkannya secara
                        matang.
                        Andika
                        tidak suka konflik dalam kelompok. ia akan membiarkan orang lain melakukan apa yang mereka
                        inginkan.
                        Dia
                        tidak rotatif kecuali menurutnya hal itu diperlukan, sehingga terkadang dia sulit untuk berterus
                        terang
                        bila akan berdampak kepada retaknya suatu hubungan. Andika dapat menjadi seorang pemimpin yang
                        baik
                        bila
                        batasannya diberikan dengan jelas, mampu membuat orang sekitarnya nyaman, memiliki sikap positif
                        dan
                        antusias. Andika menginspirasi orang lain, namun dia cenderung merasa frustasi bila sesuatu
                        tidak
                        berjalan sebagaimana mestinya.</p>
                </div>
                <div class="grey-box third">
                    <p>Untuk belajar agar optimal, Andika sosok pembelajar yang kreatif dan cenderung cepat bosan
                        sehingga
                        perlu pembatasan dan tenggat waktu yang jelas dan karena Andika adalah sosok yang sangat bagus
                        bila
                        berinteraksi dengan orang, sehingga perlu ada seseorang yang menemani saat belajar untuk
                        mendapatkan
                        hasil optimal. </p>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman tiga -->

    <!-- Halaman empat -->
    <div class="container-pdf page-four">
        <section class="main">
            <section class="more-explanation">
                <div class="grey-box">
                    <h4>Kekuatan Andika :</h4>
                    <ul>
                        <li>Kemampuan memelihara hubungan</li>
                        <li>Stabil dan dapat diandalkan</li>
                        <li>Kemampuan memimpin dengan membangun hubungan</li>
                        <li>Komitmen yang kuat</li>
                        <li>Optimis, Antusias</li>
                    </ul>
                    <br>
                    <h4>Kelemahan Andika :</h4>
                    <ul>
                        <li>Sensitif terhadap kritik</li>
                        <li>Membuat skala prioritas belajar dan main</li>
                        <li>Dapat menginternalisasi secara berlebihan (tertutup) atau memperlambat pengambilan keputusan
                        </li>
                        <li>Ketika dalam tekanan cenderung melakukan sesuatu sesuai prosedur</li>
                    </ul>
                    <br>
                    <h4>Bagaimana Mengoptimalkan Andika :</h4>
                    <ul>
                        <li>memberikan pujian dan penghargaan</li>
                        <li>Berikan forum untuk ekspresi ide-ide</li>
                        <li>Aktivitas kelompok atau organisasi</li>
                        <li>Target dan batasan yang jelas</li>
                    </ul>
                    <br>
                    <h4>Dalam Mengatasi Konflik atau Tekanan</h4>
                    <p>Dalam menghadapi konflik Andika mencoba menghindar, namun bila harus menghadapinya, Andika akan
                        menjadi lebih persuasif dalam menyelesaikan konflik. Dalam menghadapi tekanan, Andika akan
                        cenderung
                        menghadapinya sesuai dengan prosedur atau petunjuk yang ada.</p>
                </div>
            </section>

            <section class="adapt-potential">
                <div class="bar-chart blue">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart6"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-blue">
                    <h3>51%</h3>
                </div>

                <div class="bar-chart orange">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart7"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-orange">
                    <h3>57%</h3>
                </div>

                <div class="bar-chart red">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart8"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-red">
                    <h3>60%</h3>
                </div>

                <div class="adapt-potential-chart">
                    <div class="chart-title">
                        <h3>ADAPTABILITY POTENTIAL</h3>
                    </div>
                    <div class="chart-list">
                        <div class="chart-item">
                            <div class="chart"></div>
                            <div class="chart-name">
                                <div class="square blue"></div>
                                <p>Adaptability</p>
                            </div>
                        </div>
                        <div class="chart-item">
                            <div class="chart"></div>
                            <div class="chart-name">
                                <div class="square orange"></div>
                                <p>Stress Tolerance</p>
                            </div>
                        </div>
                        <div class="chart-item">
                            <div class="chart"></div>
                            <div class="chart-name">
                                <div class="square red"></div>
                                <p>Tenacity</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adapt-potential-info">
                    <div class="box-info blue">
                        <h4>ADAPTABILITY</h4>
                        <p>Kemampuan untuk menyesuaikan diri secara efektif pada secara efektif pada lingkungan, tugas,
                            dan
                            orang-orang</p>
                    </div>
                    <div class="box-info orange">
                        <h4>STRESS TOLLERANCE</h4>
                        <p>Mempertahankan kondisi yang stabil ketika berhadapan dengan tekanan dan perlawanan dari
                            sekitar
                        </p>
                    </div>
                    <div class="box-info red">
                        <h4>TENACITY</h4>
                        <p>Bertahan pada posisi dan rencara tertentu sampai sasaran yang diharapkan tercapai atau sampai
                            pada alasan tertentu tidak mungkin tercapai</p>
                    </div>
                </div>
                <div class="chart-rating">
                    <div class="rating-box highest">
                        <p>S. Tinggi</p>
                    </div>
                    <div class="rating-box high">
                        <p>Tinggi</p>
                    </div>
                    <div class="rating-box medium">
                        <p>Sedang</p>
                    </div>
                    <div class="rating-box low">
                        <p>Rendah</p>
                    </div>
                </div>
                <div class="number-of-rating">
                    <div class="number zero">
                        <p>0</p>
                    </div>
                    <div class="number low">
                        <p>25</p>
                    </div>
                    <div class="number medium">
                        <p>50</p>
                    </div>
                    <div class="number high">
                        <p>75</p>
                    </div>
                    <div class="number highest">
                        <p>100</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman empat -->

    <!-- Halaman lima -->
    <div class="container-pdf page-five">
        <section class="main">
            <section class="more-explanation">
                <div class="grey-box">
                    <h4>Stimulasi untuk Mengoptimalkan Kecerdasan</h4>
                    <ul>
                        <li>Mengikut sertakan dalam pemecahan masalah dan mencari solusi dalam aktivitas sehari-hari
                        </li>
                        <li>Bergabung dalam organisasi, perkumpulan</li>
                        <li>Aktivitas gerak baik indoor (dalam ruang) maupun outdoor (luar ruang)</li>
                        <li>Aktivitas Silaturahim atau mengunjungi sahabat</li>
                    </ul>
                    <br>
                    <h4>Tipikal Pekerjaan yang Sesuai</h4>
                    <ul>
                        <li>Pekerjaan yang berhubungan dengan manusia</li>
                        <li>Pekerjaan yang berhubungan dengan pemecahan masalah dan solusi</li>
                        <li>Pekerjaan dengan banyak berinteraksi dan komunikasi dan memberikan layanan</li>
                        <li>Pekerjaan yang berhubungan dengan kreativitas dan inovasi</li>
                    </ul>
                </div>
            </section>

            <section class="self-lead-potential">
                <div class="chart-title">
                    <h3>Leadership Potential</h3>
                </div>

                <div class="self-lead-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="chart-rating">
                        <div class="rating-box highest">
                            <p>S. Tinggi</p>
                        </div>
                        <div class="rating-box high">
                            <p>Tinggi</p>
                        </div>
                        <div class="rating-box medium">
                            <p>Sedang</p>
                        </div>
                        <div class="rating-box low">
                            <p>Rendah</p>
                        </div>
                    </div>
                    <div class="chart">
                    </div>
                </div>
            </section>

            <section class="self-lead-potential-info">
                <div class="chart-info-box-list first">
                    <div class="chart-info-box lightbrown">
                        <h4>INDIVIDUAL LEADERSHIP</h4>
                        <p>Kemampuan menggunakan gaya interpersonal dan cara yang sesuai untuk mengispirasi dan memandu
                            orang lain mencapai sasaran.</p>
                    </div>
                    <div class="chart-info-box brown">
                        <h4>MANAGERIAL LEADERSHIP</h4>
                        <p>Kemampuan memandu dan membantu bawahan dalam mencapai sasaran kerja. Menggunakan gaya dan
                            cara yang tepat / sesuai.</p>
                    </div>
                    <div class="chart-info-box purple">
                        <h4>RISK TAKING</h4>
                        <p>Memulai melakukan tindakan untuk memperoleh manfaat yang direncanakan dengan memahami dan
                            mempertimbangkan resiko.</p>
                    </div>
                </div>

                <div class="chart-info-box-list second">
                    <div class="chart-info-box red">
                        <h4>STRATEGIC LEADERSHIP</h4>
                        <p>Menciptakan dan mencapai target yang ditetapkan melalui dirinya dan orang-orang di sekitarnya
                            menggunakan pengaruhnya.</p>
                    </div>
                    <div class="chart-info-box skyblue">
                        <h4>CHOACHING</h4>
                        <p>Kemampuan untuk mengembangkan keterampilan dan kecapekan kerja bawahan. Secara teratur
                            memberi masukan atau feedback dan membantu bawahan mencapai sasaran.</p>
                    </div>
                    <div class="chart-info-box darkblue">
                        <h4>ORGANIZATIONAL AWARENESS</h4>
                        <p>Peka terhadap organisasi, cepat memahami situasi yang berubah, Mengidentifikasi masalah dan
                            peluang-peluang serta keterkaitannya dengan organisasi.</p>
                    </div>
                </div>

                <div class="chart-info-box-list second">
                    <div class="chart-info-box darkgreen">
                        <h4>JUDGEMENT</h4>
                        <p>Kemampuan membuat keputusan berdasarkan informasi yang dapat dia percaya dan asumsi-asumsi
                            yang logis.</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman lima -->

    <!-- Halaman enam -->
    <div class="container-pdf page-six">
        <section class="main">
            <section class="creativity-potential">
                <div class="bar-chart">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                </div>

                <div class="chart-rating">
                    <div class="rating-box low">
                        <p>Rendah</p>
                    </div>
                    <div class="rating-box medium">
                        <p>Sedang</p>
                    </div>
                    <div class="rating-box high">
                        <p>Tinggi</p>
                    </div>
                    <div class="rating-box highest">
                        <p>S. Tinggi</p>
                    </div>
                </div>

                <div class="creativity-potential-image">
                    <img src="/assets/lamp.jpg" alt="lamp" title="lamp">
                </div>

                <div class="creativity-potential-chart">
                    <div class="chart-title">
                        <h3>Creativity Potential</h3>
                    </div>
                    <div class="chart"></div>
                </div>
            </section>

            <section class="creativity-potential-info">
                <div class="chart-info-box-list">
                    <div class="chart-info-box red">
                        <h4>ANALYSIS</h4>
                        <p>Kemampuan memperoleh informasi dan menggunakan keterkaitan informasi dari berbagai sumber
                            yang
                            berbeda. Mengidentifikasi sebab-akibat</p>
                    </div>
                    <div class="chart-info-box purple">
                        <h4>CREATING</h4>
                        <p>Kemampuan seseorang untuk menemukan cara-cara baru dalam menyelesaikan tugas dan mencapai
                            sasaran, mengembangkan cara-cara baru, atau mengembangkan usaha / upaya baru</p>
                    </div>
                    <div class="chart-info-box lightbrown">
                        <h4>LEARNING ABILITY</h4>
                        <p>Kemampuan menerima dan menerapkan informasi baru yang berhubungan dengan tugas.</p>
                    </div>
                    <div class="chart-info-box darkbrown">
                        <h4>INNOVATION</h4>
                        <p>Kemampuan membuat solusi yang kreatifitas tugas / aktivitas. Mencoba berbagai cara yang
                            berbeda
                            dan baru dalam berhadapan dengan berbagai masalah.</p>
                    </div>
                </div>
            </section>

            <section class="teamwork-potential">
                <div class="bar-chart">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart5"></canvas>
                        </div>
                    </div>
                </div>

                <div class="chart-rating">
                    <div class="rating-box low">
                        <p>Rendah</p>
                    </div>
                    <div class="rating-box medium">
                        <p>Sedang</p>
                    </div>
                    <div class="rating-box high">
                        <p>Tinggi</p>
                    </div>
                    <div class="rating-box highest">
                        <p>S. Tinggi</p>
                    </div>
                </div>

                <div class="teamwork-potential-chart">
                    <div class="chart-title">
                        <h3>Teamwork Potential</h3>
                    </div>
                    <div class="chart"></div>
                </div>
            </section>

            <section class="teamwork-potential-info">
                <div class="chart-info-box-list">
                    <div class="chart-info-box lightblue">
                        <h4>TEAM PLAYER</h4>
                        <p>Belajar dengan baik dalam team atau kelompok untuk mencapai sasaran organisasi. Menyediakan
                            waktu
                            untuk membantu rekan kerja, pelanggan, dan orang lain mencapai sasaran mereka.</p>
                    </div>
                    <div class="chart-info-box skyblue">
                        <h4>INFLUENCING</h4>
                        <p>Kemampuan mempengaruhi orang lain untuk melakukan tindakan / proses tertentu untuk mencapai
                            keinginan (membangkitkan semangat, membujuk, dll).</p>
                    </div>
                    <div class="chart-info-box blue">
                        <h4>PERSUASIVENESS</h4>
                        <p>Kemampuan menggunakan cara dan gaya yang tepat dalam berkomunikasi untuk mendapatkan
                            persetujuan
                            akan gagasan, rencana, kegiatan yang disampaikannya.</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman enam -->

    <!-- Halaman tujuh edit -->
    <div class="container-pdf page-seven-edit">
        <section class="main">
            <div class="dealing-potential">
                <div class="dealing-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart13"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="chart-rating">
                        <div class="rating-box low">
                            <p>Rendah</p>
                        </div>
                        <div class="rating-box medium">
                            <p>Sedang</p>
                        </div>
                        <div class="rating-box high">
                            <p>Tinggi</p>
                        </div>
                        <div class="rating-box highest">
                            <p>S. Tinggi</p>
                        </div>
                    </div>

                    <div class="dealing-potential-chart">
                        <div class="chart-title">
                            <h3>Dealing with People Potential</h3>
                        </div>
                        <div class="chart"></div>
                    </div>
                </div>

                <div class="dealing-potential-info">
                    <div class="chart-info-box-list">
                        <div class="chart-info-box">
                            <h4>SAFETY</h4>
                            <p>Memahami standard keselamatan. Membantu menjaga kondisi yang aman buat diri sendiri dan
                                juga orang lain.</p>
                        </div>
                        <div class="chart-info-box">
                            <h4>PLANNING & ORGANIZING</h4>
                            <p>Kemampuan mengembangkan tindakan baik bagi dirinya maupun orang lain. Mengalokasikan
                                sumber daya dan personel atau tenaga kerja yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dealing-potential-info-additional">
                <div class="chart-info-box-list">
                    <div class="chart-info-box first">
                        <h4>NEGOTIATION</h4>
                        <p>Menggali dan mengembangkan berbagai alternatif dan posisi yang bertujuan untuk mendapatkan
                            persetujuan dan dukungan berbagai pihak.</p>
                    </div>
                    <div class="chart-info-box">
                        <h4>DIRECTING</h4>
                        <p>Kemampuan memberi perintah kepada orang lain, terutama anggota timnya, biasanya berhubungan
                            dengan mengarahkan dan memberi perintah agar orang lain mengerjakan tugas tertentu dan
                            membuat orang lain tersebut tetap berada dalam jalur yang benar.</p>
                    </div>
                </div>
            </div>

            <div class="handling-customer-potential">
                <div class="handling-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart14"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="chart-rating">
                        <div class="rating-box low">
                            <p>Rendah</p>
                        </div>
                        <div class="rating-box medium">
                            <p>Sedang</p>
                        </div>
                        <div class="rating-box high">
                            <p>Tinggi</p>
                        </div>
                        <div class="rating-box highest">
                            <p>S. Tinggi</p>
                        </div>
                    </div>

                    <div class="handling-potential-chart">
                        <div class="chart-title handling">
                            <h3>Handling Pressure Potential</h3>
                        </div>
                        <div class="chart"></div>
                    </div>
                </div>

                <div class="customer-potential-chart">
                    <div class="bar-chart">
                        <div class="chartCard">
                            <div class="chartBox">
                                <canvas id="myChart15"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="customer-potential-chart">
                        <div class="chart-title">
                            <h3>Customer Care Potential</h3>
                        </div>
                        <div class="chart"></div>
                    </div>
                </div>
            </div>

            <section class="handling-customer-potential-info">
                <div class="chart-info-box-list first">
                    <div class="chart-info-box red">
                        <h4>RESILLIENCE</h4>
                        <p>Mempertahankan keefektifan kinerja walaupun berhadapan dengan ketidak senangan ataupun
                            penolakan.</p>
                    </div>
                    <div class="chart-info-box lightbrown">
                        <h4>DETAILING</h4>
                        <p>Kemampuan seseorang untuk mendapatkan, memetakan, memilah-milah dan mengorganisir informasi
                            atau data secara detail dalam menjalankan proses atau tugas. Kemampuan ini membutuhkan
                            kemampuan berpikir analitis, identidikasi persoalan kritikal, dan aspek penting dari issue
                            atau proyek yang kompleks.</p>
                    </div>
                    <div class="chart-info-box skyblue">
                        <h4>IMAGE & IMPACT</h4>
                        <p>Kemampuan untuk mendapatkan perhatian dan penghormatan atau respek. Memancarkan rasa percaya
                            diri dan membuat kesan yang baik dari orang lain.</p>
                    </div>
                </div>

                <div class="chart-info-box-list second">
                    <div class="chart-info-box brown">
                        <h4>PERSISTING</h4>
                        <p>Kemampuan seseorang untuk bertahan pada kondisi tertentu yang menantang. Biasanya hal ini
                            ditunjukkan dengan daya tahan dan sifat tabah yang tinggi. Tidak mudah menyerah.</p>
                    </div>
                    <div class="chart-info-box lightblue">
                        <h4>CUSTOMER SERVICE</h4>
                        <p>Kemampuan untuk melayani pelanggan. Memberikan prioritas yang tinggi akan kepuasan pelanggan.
                            Mengantisipasi & menyediakan solusi atas kebutuhan pelanggan.</p>
                    </div>
                    <div class="chart-info-box darkblue">
                        <h4>INTEGRITY</h4>
                        <p>Kemampuan menjaga standar yang normal akan etika, peraturan, dan kebijakan organisasi yang
                            berhubungan dengan kerja.</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman tujuh -->

    <!-- Halaman delapan -->
    <div class="container-pdf page-seven">
        <section class="main">
            <div class="quadrant-employee">
                <div class="bar-chart lightbrown">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart9"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-lightbrown">
                    <h3>51%</h3>
                </div>

                <div class="bar-chart red">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart10"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-red">
                    <h3>60%</h3>
                </div>

                <div class="bar-chart lightblue">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart11"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-lightblue">
                    <h3>50%</h3>
                </div>

                <div class="bar-chart yellow">
                    <div class="chartCard">
                        <div class="chartBox">
                            <canvas id="myChart12"></canvas>
                        </div>
                    </div>
                </div>
                <div class="precentage-yellow">
                    <h3>30%</h3>
                </div>

                <div class="quadrant-line"></div>

                <div class="quadrant-chart">
                    <div class="circle-chart-list">
                        <div class="top-circle-chart-item">
                            <div class="circle-chart-item executives">
                                <div class="circle-chart"></div>
                                <div class="circle lightbrown"></div>
                            </div>
                            <div class="circle-chart-item self-employee">
                                <div class="circle-chart"></div>
                                <div class="circle red"></div>
                            </div>
                        </div>

                        <div class="bottom-circle-chart-item">
                            <div class="circle-chart-item business-owner">
                                <div class="circle-chart"></div>
                                <div class="circle lightblue"></div>
                            </div>
                            <div class="circle-chart-item investor">
                                <div class="circle-chart"></div>
                                <div class="circle yellow"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quadrant-chart-info executives">
                    <div class="quadrant-chart-info-title lightbrown">
                        <h3>EXECUTIVES</h3>
                    </div>
                    <div class="quadrant-chart-info-box executives">
                        <h4>EXECUTIVES</h4>
                        <p>Kencenderungan Potensi Bergabung kepada satu Perusahaan / Organisasi sebagai Karyawan
                            atau
                            Pekerjaan yang bersifat struktural, organisasional, dengan aturan yang jelas, sistem
                            kerja,
                            job description dan jenjang karir yang berkesinambungan.</p>
                    </div>
                </div>

                <div class="quadrant-chart-info self-employee">
                    <div class="quadrant-chart-info-title red">
                        <h3>SELF EMPLOYED</h3>
                    </div>
                    <div class="quadrant-chart-info-box self-employee">
                        <h4>SELF EMPLOYED</h4>
                        <p>Kencenderungan Potensi untuk dapat memberikan pendapatan atau pekerjaan bagi diri sendiri
                            (Karyawan Independen).</p>
                    </div>
                </div>
                <div class="quadrant-chart-info business-owner">
                    <div class="quadrant-chart-info-title lightblue">
                        <h3>BUSINESS OWNER</h3>
                    </div>
                    <div class="quadrant-chart-info-box business-owner">
                        <h4>BUSINESS OWNER</h4>
                        <p>Kencenderungan Potensi memiliki usaha dilakukan sendiri, baik dibangun sendiri maupun
                            franchise.</p>
                    </div>
                </div>
                <div class="quadrant-chart-info investor">
                    <div class="quadrant-chart-info-title yellow">
                        <h3>INVESTOR</h3>
                    </div>
                    <div class="quadrant-chart-info-box investor">
                        <h4>INVESTOR</h4>
                        <p>Kencenderungan Potensi menanamkan uangnya di usaha dimiliki orang lain, Investasi Aset,
                            dan
                            Portofolio.</p>
                    </div>
                </div>
            </div>

            <section class="page-info-container">
                <div class="page-info">
                    <h3>KECENDERUNGAN POTENSI<br>
                        <span>KUADRAN</span> TIPE KERJA
                    </h3>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman delapan -->

    <!-- Halaman sembilan -->
    <div class="container-pdf page-eight">
        <section class="main">
            <section class="explanation">
                <div class="lightbrown-box">
                    <p>Daftar di bawah ini bukanlah daftar yang sangat lengkap, akan tetapi daftar di bawah ini akan
                        menunjukkan
                        gambaran dasar karir yang mendekati kecenderungan potensi yang ada di dalam diri Anda. Jika Anda
                        memiliki pilihan karir lain yang tidak disebutkan di sini namun menawarkan pola yang serupa,
                        kesempatan
                        Anda untuk sukses akan semakin bertambah. Soroti pilihan karir yang sesuai dengan minat dan
                        preferensi
                        Anda untuk mewujudkan kesuksesan.</p>
                </div>
            </section>

            <section class="explanation-list">
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Bisnis/Manajemen/Promosi/Penjualan</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Convention Planner (orang yang mengkoordinasi segala aspek dari kegiatan pertemuan
                                seperti:
                                menyiapkan lokasi, transportasi, dan hal-hal lain yang berkaitan dengan pertemuan
                                profesional).</li>
                            <li>Customer Service Manager (mengelola staff customer service, memastikan kepuasan
                                pelanggan).
                            </li>
                            <li>Human Resources Specialist (orang yang bertugas merekrut, melakukan wawancara, dan
                                menempatkan karyawan sesuai dengan lingkungan kerja).</li>
                            <li>Agen Asuransi</li>
                            <li>Pelobi</li>
                            <li>Eksekutif Pemasaran (bagian manajerial tinggi perusahaan yang bertugas membuat rencana
                                untuk
                                mempromosikan suatu produk atau jasa khususnya pemasaran melalui media elektronik).</li>
                            <li>Manajer Pelayanan Administrasi (orang yang merencanakan, mengarahkan, dan mengkoordinasi
                                layanan administratif seperti: manajemen ardip dan informasi, penyaluran surat,
                                perencanaan
                                pemeliharaan fasilitas, dan layanan pendukung lain).</li>
                            <li>Bankir Swasta</li>
                            <li>Pengelila Seni Pertunjukan</li>
                            <li>Ahli Humas (hubungan masyarakat)</li>
                            <li>Real Estate Agent (agent perumahan sebagai perantara penjual dengan pembeli rumah).</li>
                            <li>Sales-person (pramuniaga khususnya untuk produk yang kongkrit/berwujud).</li>
                            <li>Sales Representative (menjual produk, barang atau jasa secara ritel kepada pembeli).
                            </li>
                            <li>Administration Leader/Staff</li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Pendidikan</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Aministrator Sekolah</li>
                            <li>Bimbingan Konseling</li>
                            <li>Guru, Pengajar, atau Dosen (khususnya pengajar prasekolah, sekolah dasar, ekonomi rumah
                                tangga, pendidikan luar biasa, dan dosen pendidikan tinggu dalam beberap bidang
                                tertentu).
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Ilmu Kesehatan</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Dental Hyangienist (orang yang memiliki spesialisasi dalam perawatan gigi).</li>
                            <li>Dokter Gigi</li>
                            <li>Penata Diet</li>
                            <li>Ahli Fisiologi Olahraga (belajar perubahan fungsi organ tubuh karena latihan
                                fisik/olahraga).</li>
                            <li>Perawat Rumah Sakit.</li>
                            <li>Administrator Rumah Sakit</li>
                            <li>Perawat</li>
                            <li>Instruktur Keperawatan</li>
                            <li>Dokter Anak</li>
                            <li>Apoteker</li>
                            <li>Dokter Layanan Primer (setara dengan dokter spesialis)</li>
                            <li>Dokter Keluarga</li>
                            <li>Asisten Dokter</li>
                            <li>Public Health Educator
                                (penyuluhan dan mempromosikan gaya hidup sehat ke masyarakat)
                            </li>
                            <li>Speech Pathologist (menangani anak-anak yang mengalami gangguan dan keterlambatan untuk
                                berbicara)</li>
                            <li>Ahli Terapi (semua ahli terapi, khususnya terapi fisik, radiasi, pernafasan, berbicara)
                            </li>
                            <li>Dokter Hewan / Asisten Dokter Hewan</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman sembilan -->

    <!-- Halaman sepuluh -->
    <div class="container-pdf page-nine">
        <section class="main">
            <section class="explanation">
                <div class="lightbrown-box">
                    <p>Daftar di bawah ini bukanlah daftar yang sangat lengkap, akan tetapi daftar di bawah ini akan
                        menunjukkan
                        gambaran dasar karir yang mendekati kecenderungan potensi yang ada di dalam diri Anda. Jika Anda
                        memiliki pilihan karir lain yang tidak disebutkan di sini namun menawarkan pola yang serupa,
                        kesempatan
                        Anda untuk sukses akan semakin bertambah. Soroti pilihan karir yang sesuai dengan minat dan
                        preferensi
                        Anda untuk mewujudkan kesuksesan.</p>
                </div>
            </section>

            <section class="explanation-list">
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Hukum/Perhotelan/Bisnis Kecil</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Manager / Supervisor Banquet Hotel</li>
                            <li>Pengacara (dalam bidang tertentu seperti: anak-anak, perlindungan kondumen, rumah
                                tangga,
                                dan kesehatan)</li>
                            <li>Paralegal (membantu pengacara dalam pekerjaannya. Paralegal bukanlah pengacara maupun
                                petugas pengadilan. Di Indonesia, paralegal tidak diizinkan untuk berpraktik hukum
                                sendirian)</li>
                            <li>Pemilik Ritel (Pedangang)</li>
                            <li>Manajer Ritel</li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Pelayanan Masyarakat</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Pemimpin Advokasi (orang yang membuat suatu usaha sistematis dan terorganisir untuk
                                mempengaruhi dan mendesak terjadinya kebijakan publik secara bertahap)</li>
                            <li>Childcare Center Director (direktur pelaksana di Institusi penitipan anak-anak)</li>
                            <li>Community Welfare Worker (profesional yang membantu individu, keluarga, atau kelompok
                                dengan
                                bantuan sosial, emosional, atau finansial untuk meningkatkan kualitas pendidikan di
                                tengah
                                perubahan lingkungan sosial)</li>
                            <li>Konselor (khususnya dalam bidang: karir, kesejahteraan anak-anak, keluarga, dan
                                penyalahgunaan obat-obatan)</li>
                            <li>Fundraiser (menggalang dana untuk kegiatan sosial)</li>
                            <li>Pemuka Agama (misalnya imam, ulama, pendeta, guru agama, dan pemuka agama lainnya)</li>
                            <li>Pekerja Sosial (bekerja sebagai profesional yang bertujuan memfasilitasi kesejahteraan
                                seseorang, keluarga, komunitas, ataupun kelompok tertentu)</li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Kreatif/Pekerja Lain</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Pedagang Barak Antik</li>
                            <li>Pemilik Katering</li>
                            <li>Ahli Kecantikan</li>
                            <li>Notulis Pengadilan</li>
                            <li>Desktop Publisher (membuat media cetak dengan keterampilan tata letak, tipografi, dan
                                desain
                                menggunakan aplikasi komputer)</li>
                            <li>Perancang Busana</li>
                            <li>Pramugara/Pramugari</li>
                            <li>Penata Rambut</li>
                            <li>Desainer Interior</li>
                            <li>Pemilik Toko Perhiasan</li>
                            <li>Pustakawan</li>
                            <li>Landscape Designer (bidang desain yang mempelajari pengaturan ruang di alam terbuka)
                            </li>
                            <li>Konservator Museum (orang yang bertanggung jawab atas pemeliharaan, pemugaran, dan
                                perbaikan
                                benda-benda museum)</li>
                            <li>Personal Trainer (pelatih fitness atau kebugaran tubuh)</li>
                            <li>Tour & Travel Agent</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman sepuluh -->

    <!-- Halaman sebelas -->
    <div class="container-pdf page-ten">
        <section class="main">
            <section class="explanation">
                <div class="lightbrown-box">
                    <p>Daftar di bawah ini bukanlah daftar yang sangat lengkap, akan tetapi daftar di bawah ini akan
                        menunjukkan
                        gambaran dasar karir yang mendekati kecenderungan potensi yang ada di dalam diri Anda. Jika Anda
                        memiliki pilihan karir lain yang tidak disebutkan di sini namun menawarkan pola yang serupa,
                        kesempatan
                        Anda untuk sukses akan semakin bertambah. Soroti pilihan karir yang sesuai dengan minat dan
                        preferensi
                        Anda untuk mewujudkan kesuksesan.</p>
                </div>
            </section>

            <section class="explanation-list">
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Teknik</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Technical Support</li>
                            <li>Sales Engineer (menjual peralatan teknik, industri, pabrikan, equipment, mesin, alat
                                berat)
                            </li>
                            <li>Project Engineer</li>
                            <li>Production Engineer (bertanggung jawab dalam proses pabrikan pembuatan produk)</li>
                            <li>Technical Sales Support (mendampingi Sales dalam menjelaskan produk)</li>
                            <li>Maintenance Support</li>
                            <li>Service Advisor (Customer Service Bengkel ATPM)</li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Teknologi</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Talent Acquisition</li>
                            <li>Marketing Campaign</li>
                            <li>Manajer Sistem Informasi</li>
                            <li>Manajer Sistem Informasi (bertanggung jawab mengatur implementasi kerja dari programmer,
                                systems analyst, support specialist, karyawan lainnya yang bekerja berhubungan dengan
                                komputer)</li>
                            <li>Talent Acquisition (Membangun strategi dalam membuat perusahaan menjadi menarik bagi
                                kandidat berkualitas)</li>
                            <li>Content Creator</li>
                            <li>Daily Vlogger</li>
                            <li>Travel Vlogger</li>
                        </ul>
                    </div>
                </div>
                <div class="explanation-box">
                    <div class="explanation-title">
                        <h3>Politik, Organisasi</h3>
                    </div>
                    <div class="explanation-content">
                        <ul>
                            <li>Politikus</li>
                            <li>Diplomat</li>
                            <li>Organisatoris</li>
                            <li>NGO Activist</li>
                            <li>Social Preneur (membangun usaha dengan fokus membantu oranglain / komunitas)</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman sebelas -->

    <!-- Halaman dua belas -->
    <div class="container-pdf page-eleven">
        <section class="main">
            <div class="pola-kepribadian">
                <div class="analitis-tegas">
                    <div class="text">
                        <p>Efisien, Analitis, Terorganisir, Faktual, Sadar akan Konsekuensi Tindakan Mereka, Praktis dan
                            Inovatif</p>
                    </div>
                    <div class="title">
                        <h3>Analitis & Tegas</h3>
                    </div>
                </div>

                <div class="sangat-analitis text">
                    <p>Mendasari keputusan berdasar data, fakta dan analisa, percaya kepada ketepatan dan akurasi nilai
                        yang terstruktur, standar dan keteraturan, melihat nilai dari sebuah aturan</p>
                </div>
                <div class="title-pemikir">
                    <h3>Pe<span>M</span>ikir</h3>
                </div>
                <div class="sangat-analitis title">
                    <h3>Sangat Analitis</h3>
                </div>

                <div class="mendukung-analitis text">
                    <p>Menyeimbangkan dan menghargai data dan diplomasi, memperhatikan aturan. Focus pada tujuan,
                        ketidaksukaan pada keraguan dan ketidak jelasan</p>
                </div>
                <div class="mendukung-analitis title">
                    <h3>Mendukung & Analitis</h3>
                </div>

                <div class="sangat-mendukung title">
                    <h3>Mendukung & Analitis</h3>
                </div>
                <div class="sangat-mendukung text">
                    <p>Sangat sabar dan menyukai stabilitas dan sesuatu yang terstruktur, bukan pengambil resiko,
                        bekerja
                        dengan kecepatan yang stabil, suka beroperasi dengan kecepatan yang stabil bahkan bisa cepat</p>
                </div>
                <div class="title-sangat-mendukung">
                    <h3>Pendamai</h3>
                </div>

                <div class="mendukung-mempengaruhi title">
                    <h3>Mendukung & Mempengaruhi</h3>
                </div>
                <div class="mendukung-mempengaruhi text">
                    <p>Mendukung dan persuasif, pemain tim yang baik, senantiasa menciptakan niat baik dan memberikan
                        layanan pelanggan yang baik</p>
                </div>

                <div class="sangat-mempengaruhi title">
                    <h3>Sangat Mempengaruhi</h3>
                </div>
                <div class="sangat-mempengaruhi text">
                    <p>Sangat ramah dan persuasif, sangat berorientasi pada membangun hubungan, sosok yang cukup
                        optimis,
                        keterampilan komunikasi yang kuat, tidak menyukai rutinitas menyukai variasi</p>
                </div>
                <div class="title-sangat-mempengaruhi">
                    <h3>Sosialita</h3>
                </div>

                <div class="tegas-mempengaruhi title">
                    <h3>Tegas & Mempengaruhi</h3>
                </div>
                <div class="tegas-mempengaruhi text">
                    <p>Tegas dan persuasif, mungkin suka menggunakan konsep baru, sering kali menjadi penggerak dan
                        penyemangat, bisa sangat ramah dengan energi tinggi dan berupaya untuk mengajak orang untuk
                        bergabung</p>
                </div>

                <div class="sangat-tegas title">
                    <h3>Sangat Tegas</h3>
                </div>
                <div class="sangat-tegas text">
                    <p>Tegas, berfokus pada hasil, keputusan cepat, akan mencari tantangan, bisa agresif dan tidak
                        sabar,
                        keinginan untuk memimpin</p>
                </div>
                <div class="title-sangat-tegas">
                    <h3>Direktur</h3>
                </div>

                <!-- <div class="m-or-d">
                    <p>M/D</p>
                </div>
                <div class="m">
                    <p>M</p>
                </div>
                <div class="p-or-m">
                    <p>P/M</p>
                </div>
                <div class="p">
                    <p>P</p>
                </div>
                <div class="s-or-p">
                    <p>S/P</p>
                </div>
                <div class="s">
                    <p>S</p>
                </div>
                <div class="d-or-s">
                    <p>D/S</p>
                </div>
                <div class="d">
                    <p>D</p>
                </div> -->

                <!-- <div class="d-m-star">
                    <p>DM*</p>
                </div>
                <div class="s-p-star">
                    <p>SP*</p>
                </div>
                <div class="m-d-star">
                    <p>MD*</p>
                </div>
                <div class="p-s-star">
                    <p>PS*</p>
                </div>
                <div class="m-d">
                    <p>MD</p>
                </div>
                <div class="s-p">
                    <p>SP</p>
                </div>
                <div class="m-p">
                    <p>MP</p>
                </div>
                <div class="s-d">
                    <p>SD</p>
                </div>
                <div class="m-p-star">
                    <p>MP*</p>
                </div>
                <div class="s-d-star">
                    <p>SD*</p>
                </div>
                <div class="p-m-star">
                    <p>PM*</p>
                </div>
                <div class="d-s-star">
                    <p>DS*</p>
                </div>
                <div class="p-m">
                    <p>PM</p>
                </div>
                <div class="d-s">
                    <p>DS</p>
                </div>
                <div class="p-s">
                    <p>PS</p>
                </div>
                <div class="d-m">
                    <p>DM</p>
                </div> -->

                <!-- <div class="d-m-star-s">
                    <p>DM*S</p>
                </div>
                <div class="s-p-star-d">
                    <p>SP*D</p>
                </div>
                <div class="m-d-star-p">
                    <p>MD*P</p>
                </div>
                <div class="s-p-d">
                    <p>SPD</p>
                </div>
                <div class="m-d-p">
                    <p>MDP</p>
                </div>
                <div class="s-d-p">
                    <p>SDP</p>
                </div>
                <div class="m-p-d">
                    <p>MPD</p>
                </div>
                <div class="s-d-star-p">
                    <p>SD*P</p>
                </div>
                <div class="m-p-star-d">
                    <p>MP*D</p>
                </div>
                <div class="d-s-star-m">
                    <p>DS*M</p>
                </div>
                <div class="p-m-star-s">
                    <p>PM*S</p>
                </div>
                <div class="d-s-m">
                    <p>DSM</p>
                </div>
                <div class="p-m-s">
                    <p>PMS</p>
                </div>
                <div class="d-m-s">
                    <p>DMS</p>
                </div>
                <div class="p-s-m">
                    <p>PSM</p>
                </div>
                <div class="p-s-star-m">
                    <p>PS*M</p>
                </div> -->

                <!-- <div class="d-m-p">
                    <p>DMP</p>
                </div>
                <div class="s-p-m">
                    <p>SPM</p>
                </div>
                <div class="m-d-s">
                    <p>MDS</p>
                </div>
                <div class="s-m-p">
                    <p>SMP</p>
                </div>
                <div class="m-s-d">
                    <p>MSD</p>
                </div>
                <div class="s-m-d">
                    <p>SMD</p>
                </div>
                <div class="s-d-m">
                    <p>SDM</p>
                </div>
                <div class="m-s-p">
                    <p>MSP</p>
                </div>
                <div class="d-s-p">
                    <p>DSP</p>
                </div>
                <div class="m-p-s">
                    <p>MPS</p>
                </div>
                <div class="d-p-s">
                    <p>DPS</p>
                </div>
                <div class="p-m-d">
                    <p>PMD</p>
                </div>
                <div class="d-p-m">
                    <p>DPM</p>
                </div>
                <div class="p-d-m">
                    <p>PDM</p>
                </div>
                <div class="p-d-s">
                    <p>PDS</p>
                </div>
                <div class="p-s-d">
                    <p>PSD</p>
                </div> -->

                <!-- <div class="p-d">
                    <p>PD</p>
                </div>
                <div class="s-m">
                    <p>SM</p>
                </div>
                <div class="d-p">
                    <p>DP</p>
                </div>
                <div class="m-s">
                    <p>MS</p>
                </div> -->

                <div class="image-chart">
                    <img src="../assets/chart-page-11 (2).png" alt="chart" title="chart">
                </div>
            </div>

            <section class="bfv-analysis">
                <div class="bfv-analysis-title">
                    <h3>BFV Analysis</h3>
                </div>
                <div class="bfv-analysis-content">
                    <p>FIVE Mapping membagi kelompok kepribadian menjadi 50 cluster, yang memberikan penjelasan secara
                        umum untuk kecenderungan kepribadian yang dimiliki oleh yang bersangkutan. BFV analysis
                        memberikan penjelasan tentang bagian dari dalam diri seseorang yang mungkin tidak tercakup dalam
                        penjelasan kepribadian.</p>
                </div>
                <div class="bfv-analysis-table">
                    <table>
                        <tr>
                            <td>Berhati Ramah</td>
                            <td>Orientasi Hubungan</td>
                            <td>Bagus Sosial</td>
                            <td>People Person</td>
                            <td>Ramah</td>
                            <td>Logical</td>
                            <td>Baik Hati</td>
                            <td width="35px"></td>
                            <td>Imaginer</td>
                            <td width="35px"></td>
                            <td>Dinamis</td>
                            <td>Bagus dalam Jalin Hubungan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Mudah Diajak Kerjasama</td>
                            <td colspan="5">Melihat pengaruh terhadap orang lain sebelum memutuskan</td>
                            <td></td>
                            <td>Career Driven</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Konsentrasi Tinggi</td>
                            <td colspan="2">Orang yang menyenangkan</td>
                            <td colspan="3"></td>
                            <td colspan="2"></td>
                            <td>Standar Tinggi</td>
                            <td></td>
                            <td>Orientasi pada hubungan</td>
                        </tr>
                        <tr>
                            <td>Estetika Tinggi</td>
                            <td></td>
                            <td colspan="2">Tidak suka konflik</td>
                            <td colspan="2"></td>
                            <td colspan="3"></td>
                            <td colspan="2"> Emosi mudah tersulut</td>
                            <td>Dapat buat orang lain nyaman</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="3"></td>
                            <td colspan="3">Kompetitif dalam hal nilai</td>
                            <td colspan="3">Dalam keluarga emosi mudah tersulut</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pemalu pada awal interaksi</td>
                            <td colspan="2"></td>
                            <td colspan="3">Bagus dalam menyatukan sesuatu</td>
                            <td colspan="3">Bagus seni fotografi atau sejenis</td>
                            <td colspan="2"></td>
                            <td>Cenderung keras kepala</td>
                        </tr>
                        <tr>
                            <td>Bagus dalam melayani</td>
                            <td>Rasa ingin tahu besar</td>
                            <td>Tahu banyak informasi</td>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td>Melihat peluang</td>
                            <td>Responsif</td>
                            <td colspan="2">Orientasi pada keluarga</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="3">Permisif kepada teman</td>
                            <td>Detil</td>
                            <td colspan="2">Cenderung santai</td>
                            <td></td>
                            <td colspan="2">Menyembunyikan perasaan</td>
                            <td>Menyukai ke pokok persoalan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Permisif dalam beberapa hal</td>
                            <td colspan="2">Senang memberi</td>
                            <td>Tidak enakan</td>
                            <td colspan="2">Bagus dalam mengkritisi</td>
                            <td colspan="2"></td>
                            <td colspan="2">Bagus dalam Linguistik</td>
                            <td>Cenderung banyak bicara</td>
                        </tr>
                        <tr>
                            <td>Royal</td>
                            <td>Kritis</td>
                            <td>Baik hati</td>
                            <td colspan="2">Menyukai tantangan</td>
                            <td colspan="3">Potensi sebagai pemimpin</td>
                            <td>Mandiri</td>
                            <td></td>
                            <td>Dominan</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="2">Tekun</td>
                            <td rowspan="2">Senang bepergian</td>
                            <td rowspan="2">Dewasa</td>
                            <td colspan="3" rowspan="2"></td>
                            <td>Multiple inteligence</td>
                            <td>Interpersonal</td>
                            <td colspan="2">Kinestetik</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Intrapersonal</td>
                            <td>Linguistik</td>
                            <td colspan="2">Spasial</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="grey-box">
                    <p>Beberapa poin-poin di atas merupakan poin-poin yang perlu di cermati, karena penggabungan dari
                        beberapa poin penjelasan di atas ini memiliki kecenderungan dapat mempengaruhi hubungan dalam
                        berinteraksi, atau mempengaruhi dalam proses pencapaian hasil kerja ataupun dalam proses
                        pembelajaran. Namun bila dapat dikendalikan secara bijak maka bagian-bagian ini dapat menjadi
                        stimulasi positif bagi siswa/siswi yang bersangkutan.</p>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman dua belas -->

    <!-- Halaman tiga belas -->
    <div class="container-pdf page-twelve">
        <section class="main">
            <section class="al-quran-potential">
                <div class="al-quran-potential-title">
                    <h3>POTENSI HAPALAN AL-QUR'AN</h3>
                </div>
                <div class="al-quran-potential-content">
                    <p>Potensi Hapalan Al-Qur'an adalah potensi yang diambil dengan membandingkan potensi yang dimiliki
                        Penghapal Al-Qur'an yang dianalisa secara mendalam dengan metode ... . Penghapal Al-Qur'an ini
                        telah menyelesaikan 30 juz hapalannya dalam waktu 6 tahun. Se,akim banyak kesamaan dengan
                        penghapal Al-Qur'an tersebut insya Allah akan semakin mudah dalam dalam menghapal, namun bila
                        potensi yang tidak dimiliki itu dilatih, maka sangat berpotensi untuk dapat lebih mudah dalam
                        proses menghadapi Al-Qur'an.</p>
                </div>

                <div class="al-quran-potential-table first-table">
                    <table>
                        <tr>
                            <td width="45px"></td>
                            <td>Standar Tinggi</td>
                            <td>Konsentrasi Tinggi</td>
                            <td>Kompetitif dalam nilai</td>
                            <td>Emosi mudah Tersulut (Int)</td>
                            <td>Orientasi Keluarga</td>
                            <td>Over React</td>
                            <td width="45px">Detil</td>
                            <td>Bertutur Tajam</td>
                        </tr>
                        <tr>
                            <td>Potensi Hafidz</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Potensi Amalia</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <div class="al-quran-potential-table second-table">
                    <table>
                        <tr>
                            <td width="45px"></td>
                            <td>Kritis</td>
                            <td>Warm Heart</td>
                            <td>Senang Tantangan</td>
                            <td>Mandiri</td>
                            <td width="45">Ulet</td>
                            <td>Tekun</td>
                            <td width="45">Kecerdasan Spasial</td>
                            <td>Tutur Kata Tersusun</td>
                        </tr>
                        <tr>
                            <td>Potensi Hafidz</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Potensi Amalia</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <section class="al-quran-potential-table-info">
                    <div class="table-info">
                        <p>Ada 2 point yang tidak dimiliki atau tidak sama dengan potensi pada Hafidz yaitu emosi mudah
                            tersulut dan bertutur kata tajam. Ini akan menjadi tantangan dalam proses menghapal
                            Al-Qur'an.
                            Namun dengan latihan secara terus menerus untuk meningkatkan potensi tersebut insya Allah
                            proses
                            menghadapi menjadi lebih mudah</p>
                    </div>
                </section>

                <div class="more-table-info">
                    <div class="table-info-box odd">
                        <h4>STANDAR TINGGI</h4>
                        <p>Standar pribadi seseorang dalam menentukan dan mengevaluasi tujuannya serta dalam
                            menghasilkan sesuatu. Hal ini sering terlihat dalam aktivitas keseharian misalkan
                            pekerjaan rumah dan lain-lain</p>
                    </div>
                    <div class="table-info-box even">
                        <h4>KONSENTRASI TINGGI</h4>
                        <p>Kemampuan seseorang dalam memusatkan perhatian pada suatu hal tertentu dalam waktu tertentu
                        </p>
                    </div>
                    <div class="table-info-box odd">
                        <h4>KOMPETITIF DALAM NILAI</h4>
                        <p>Keinginan untuk bersaing dalam diri seseorang. Biasanya mudah terlihat dalam pencapaian di
                            dalam kelas atau perlombaan yang diikuti</p>
                    </div>
                    <div class="table-info-box even">
                        <h4>EMOSI MUDAH TERSULUT (INT)</h4>
                        <p>Kecenderungan mudah marah, kecenderungan mudah tersinggung hingga menyakiti perasaan orang
                            lain melalui tindakan maupun ucapan</p>
                    </div>
                    <div class="table-info-box odd">
                        <h4>ORIENTASI KELUARGA</h4>
                        <p>Kemampuan berempati, ramah dan menjaga sikap terhadap keluarga atau orang terdekat</p>
                    </div>
                    <div class="table-info-box even">
                        <h4>OVER REACT</h4>
                        <p>Respon seseorang terhadap sesuatu hal secara berlebihan biasanya didominasi dengan ekspresi
                            emosi yang berlebihan</p>
                    </div>
                    <div class="table-info-box odd">
                        <h4>DETIL</h4>
                        <p>Kemampuan seseorang memperhatikan suatu hal kecil, hal terperinci termasuk dalam mengingat
                            hal kecil</p>
                    </div>
                    <div class="table-info-box even">
                        <h4>BERTUTUR TAJAM</h4>
                        <p>Kecenderungan seseorang dalam mengeluarkan perkataan yang dapat membuat orang lain
                            tersinggung atau sakit hati</p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <!-- Halaman tiga belas -->

    <!-- Halaman empat belas -->
    <div class="container-pdf page-thirteen">
        <section class="main">
            <div class="more-table-info">
                <div class="table-info-box odd">
                    <h4>KRITIS</h4>
                    <p>Kemampuan seseorang dalam menganalisis maupun memecahkan sesuatu permasalahan dengan
                        mempertanyakan banyak hal untuk mengeksplorasi diri</p>
                </div>
                <div class="table-info-box even">
                    <h4>WARM HEART</h4>
                    <p>Kemampuan seseorang dalam menempatkan dirinya di berbagai situasi yang dapat membuat orang lain
                        nyaman dan mempunyai empati yang tinggi</p>
                </div>
                <div class="table-info-box odd">
                    <h4>SENANG TANTANGAN</h4>
                    <p>Kemampuan seseorang dalam mengeksplorasi hal-hal baru, mencari tahu hal-hal baru yang ingin
                        diketahuinya</p>
                </div>
                <div class="table-info-box even">
                    <h4>MANDIRI</h4>
                    <p>Kemampuan seseorang untuk dapat menyelesaikan atau mengembangkan dirinya dengan daya upaya
                        sendiri dan berusaha untuk tidak tergantung kepada orang lain</p>
                </div>
                <div class="table-info-box odd">
                    <h4>ULET</h4>
                    <p>Bertahan pada posisi dan rencana tertentu sampai sasaran yang diharapkan tercapai atau sampai
                        pada alasan tertentu tidak mungkin tercapai</p>
                </div>
                <div class="table-info-box even">
                    <h4>TEKUN</h4>
                    <p>Kemampuan seseorang untuk bertahan pada kondisi tertentu yang menantang. Biasanya hal ini
                        ditunjukkan dengan daya tahan dan sifat tabah yang tinggi. Tidak mudah</p>
                </div>
                <div class="table-info-box odd">
                    <h4>KECERDASAN SPASIAL</h4>
                    <p><b>Kecerdasan</b> yang mencakup kemampuan berpikir dalam gambar, serta kemampuan untuk menyerap,
                        mengubah dan menciptakan kembali berbagai macam aspek dunia visual-<b>spasial</b></p>
                </div>
                <div class="table-info-box even">
                    <h4>TUTUR KATA RAPI</h4>
                    <p>Kemampuan seseorang untuk bertutur secara tersusun dan rapi, mudah untuk dipahami dan dilakukan
                        dalam aktivitas berkomunikasi dengan orang lain</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Halaman empat belas -->

    <script src="script.js"></script>
</body>

</html>