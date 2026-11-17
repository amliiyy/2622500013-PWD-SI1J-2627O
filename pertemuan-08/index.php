<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pribadi Amalia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="website">

        <!-- HEADER -->
        <header class="header">
            <div class="logo">A.</div>
            <div>
                <h1>Amalia's Personal Blog</h1>
                <p>Catatan kecil tentang cerita dan hobi saya</p>
            </div>
        </header>

        <div class="main-layout">

            <!-- NAVIGASI -->
            <nav class="sidebar">
                <h2>Navigasi</h2>

                <ul>
                    <li><a href="#" class="nav-link active" data-page="beranda">Beranda</a></li>

                    <li><a href="#" class="nav-link" data-page="profile">Profile</a></li>

                    <li><a href="#" class="nav-link" data-page="pendaftaran">Pendaftaran</a></li>
                </ul>
            </nav>

            <!-- KONTEN -->
            <main class="content">
                <!-- HALAMAN BERANDA -->
                <section id="beranda" class="page active">

                    <h2>Selamat Datang di Blog Pribadi Saya!</h2>

                    <p>
                        Halo! Perkenalkan, saya Amalia Halwa.
                        Selamat datang di website pribadi saya.
                        Di sini saya akan berbagi cerita, kegiatan,
                        pengalaman, dan berbagai hobi yang saya sukai.
                    </p>

                    <h3>Tentang Kegiatan Saya</h3>

                    <p>
                        Saya senang mengisi waktu luang dengan
                        melakukan kegiatan positif, belajar hal baru,
                        dan mengembangkan kreativitas.
                    </p>

                    <h3>Hobi Saya</h3>

                    <div class="hobby">

                        <h4>📚 1. Membaca Buku</h4>
                        <p>
                            Saya suka membaca buku karena dapat
                            menambah wawasan dan pengetahuan.
                        </p>


                        <h4>🎵 2. Mendengarkan Musik</h4>
                        <p>
                            Mendengarkan musik merupakan salah satu
                            kegiatan favorit saya untuk mengisi waktu luang.
                        </p>

                        <h4>📷 3. Fotografi</h4>
                        <p>
                            Saya suka mengambil foto pemandangan,
                            objek menarik, dan mengabadikan momen.
                        </p>

                        <h4>🌿 4. Traveling</h4>
                        <p>
                            Saya senang mengunjungi tempat baru,
                            menikmati keindahan alam, dan mendapatkan
                            pengalaman baru.
                        </p>


                    </div>

                </section>

                <!-- PROFILE -->
                <section id="profile" class="page">
                    <h2>Profile Saya</h2>

                    <img src="img/foto-profil.jpg" alt="Foto Amalia" class="foto">

                    <h3>Amalia Halwa</h3>

                    <p>Mahasiswa Program Studi Sistem Informasi.</p>

                    <h3>Biodata</h3>

                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>Amalia Halwa</td>
                        </tr>

                        <tr>
                            <td>Program Studi</td>
                            <td>Sistem Informasi</td>
                        </tr>

                        <tr>
                            <td>Hobi</td>
                            <td>Membaca dan Desain</td>
                        </tr>

                        <tr>
                            <td>Cita-cita</td>
                            <td>Menjadi orang sukses</td>
                        </tr>
                    </table>
                </section>

                <!-- PENDAFTARAN -->
                <section id="pendaftaran" class="page">
                    <h2>Formulir Pendaftaran</h2>

                    <form id="formPendaftaran">

                        <label>Nama Lengkap</label>
                        <input type="text" id="nama" placeholder="Masukkan nama" required>

                        <label>Email</label>
                        <input type="email" id="email" placeholder="Masukkan email" required>

                        <label>Tanggal Lahir</label>
                        <input type="date" required>

                        <label>Jenis Kelamin</label>
                        <select required>
                            <option value="">Pilih jenis kelamin</option>
                            <option>Perempuan</option>
                            <option>Laki-laki</option>
                        </select>

                        <label>Pesan</label>
                        <textarea rows="4" placeholder="Tuliskan pesan"></textarea>

                        <button type="submit">Daftar</button>

                        <p id="pesanHasil"></p>

                    </form>
                </section>

            </main>
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            © 2622500013_Amalia Halwa_SI1J_UTS Pemrograman Web Dasar
        </footer>

    </div>

    <script src="script.js"></script>

</body>

</html>