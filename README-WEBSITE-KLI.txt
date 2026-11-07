PT KAYU LAPIS INDONESIA — WEBSITE PROJECT
========================================

CARA MENJALANKAN UNTUK PREVIEW
1. Extract ZIP.
2. Buka folder Squadfree di VS Code.
3. Untuk melihat tampilan, gunakan Live Server pada index.html.

CATATAN PENTING FORM PESAN
- Form mengirim pesan melalui POST HTML ke FormSubmit di dalam iframe tersembunyi. Cara ini tidak memakai fetch/CORS dan menjaga pengunjung tetap di halaman.
- Pengiriman pertama memerlukan aktivasi/konfirmasi email penerima dari FormSubmit. Buka email masuk (periksa juga Spam) dan klik tautan aktivasi sebelum pengiriman dapat diterima.
- Kolom Email pengunjung digunakan sebagai Reply-To agar perusahaan dapat membalas langsung ke pengirim.

AUDIO
- Audio ambience relaksasi orisinal: perpaduan suara aliran air yang lembut dan lapisan ambient hangat, tersimpan di assets/audio/suara-sungai.wav.
- Audio baru diputar setelah pengunjung menekan tombol SUARA SUNGAI.
- Volume pemutaran awal diatur 92%; tombol dapat digunakan untuk menyalakan dan mematikan suara.

DESAIN DAN INTERAKSI
- Tata letak responsif untuk desktop, tablet, dan ponsel.
- Navigasi bagian, tombol produk, filter kategori, slider, dan lightbox berjalan di dalam website.
- Tautan menuju website resmi perusahaan telah dihilangkan; aset gambar yang sebelumnya mengambil dari domain tersebut diganti dengan aset lokal yang tersedia di folder assets/img.
- Formulir memiliki validasi isian, status proses, dan notifikasi berhasil/gagal.
- Tombol interaktif memiliki fokus keyboard yang terlihat.
- Garis dekoratif pendek di samping label hero dihapus.

STRUKTUR FILE UTAMA
- index.html
- assets/css/main.css
- assets/js/main.js
- assets/audio/suara-sungai.wav
- forms/contact.php

Catatan: data profil dan angka perusahaan mengikuti materi/dokumen internal yang diberikan untuk proyek akademik. Pastikan kembali dengan dokumen perusahaan sebelum digunakan sebagai kanal komunikasi publik.


PEMBARUAN VISUAL
- Tampilan disederhanakan ke arah corporate/editorial dengan warna hijau gelap, netral, dan aksen kayu.
- Foto dokumentasi proses produksi PT KLI menggunakan foto Humas Pemerintah Provinsi Jawa Tengah dari berita kunjungan ke PT KLI tanggal 29 Januari 2019.
- Sumber foto: https://humas.jatengprov.go.id/detail_berita_gubernur?id=2137
- Foto eksternal memerlukan koneksi internet saat website dibuka.


VIDEO PRODUKSI PLYWOOD
- Section Video Plywood sudah tersedia pada navigasi dan halaman.
- Pemutar video membaca file lokal: assets/video/profil-kli.mp4.
- Letakkan video dokumentasi perusahaan dengan nama profil-kli.mp4 di folder Squadfree/assets/video/.
- Poster video menggunakan dokumentasi foto produksi yang tersedia; file video MP4 belum disertakan karena belum diterima.


PEMBARUAN HERO
- Hero section kini menggunakan slideshow/carousel otomatis dengan 3 gambar resolusi besar.
- Gambar hero memakai aset lokal:
  1) assets/img/hero-bg.jpg
  2) assets/img/cta-bg.jpg
  3) assets/img/POHON POHON.jpg
- Slide berpindah otomatis sekitar setiap 4,2 detik dan tetap bisa dipakai di Live Server.
- Jika ingin mengganti gambar hero, cukup timpa file-file tersebut dengan foto HD lain memakai nama file yang sama.


PEMBARUAN FOTO DAN PROFIL
- Hero slideshow menggunakan tiga foto dokumentasi PT Kayu Lapis Indonesia yang sama dengan dokumentasi foto pada halaman profil/media.
- Label nomor urut seperti 01 /, 02 /, dan seterusnya dihapus dari heading section.
- Empat kartu pada profil diberi judul "Fokus Pengelolaan Perusahaan". Bagian ini bukan pernyataan visi-misi formal.
- Catatan data yang terpotong/tidak memiliki rujukan pada tampilan statistik dihapus.
- Preloader berbentuk lingkaran berputar dihapus agar tidak muncul sebagai ikon berputar saat halaman dibuka.
