# Pertemuan 3 - Formulir HTML dan CSS Dasar 

## Baseline

- Menggunakan hasil P2 sebagai dasar pengembangan P3.
- Menyalin `index.html` dan `img/foto-profil.jpg` ke `pertemuan-03/`

## Implementasi Formulir

- Elemen form yang digunakan: [text,email,tel,number,radio,checkbox,date,textarea,submit,
- Atribut validasi yang digunakan:required,type="email",minlength,maxlenght,pattern,min,max
- Pengujian GET dan POSTHasil tes GET:Data formulir berhasil dikirim dan muncul di URL sebagai query string.Contoh:?nama= Amalia&email=2622500013@mahasiswa.atmaluhur.ac.id URL encoding yang ditemukan:Spasi berubah menjadi %20 atau +,contoh: Amalia%20Halwa. simbol @ menjadi %40Hasil tes POST: Data formulir berhasil dikirim, data TIDAK muncul di URL, melainkan dikirim melalui body request sehingga lebih aman
- CSS DasarSelector elemen: p,ol,h2,label,input,formSelector class: .form-groupSelector ID:#about,#contactProperti CSS dasar yang digunakan:margin,padding,border,border-bottom,background-color,color,font-family
- Pengujian dan Debugging Error yang ditemukan: validasi email tidak beerfungsi pada awalnyaPenyebab error: Lupa menambahkan atribut required dan type="email"Perbaikan yang dilakukan: Menambahkan atribut required ke semua input wajib dan memastikan tipe emailHasil tes ulang: Formulir berhasil divalidasi oleh browser dan semua data terkirim dengan benar

GitHub Pages 
URL: https://github.com/amliiyy/2622500013-PWD-SI1J-2627O.git]
