# SIPAYROLL - Sistem Informasi Penggajian Namira Mart

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

Sistem Informasi Penggajian (SIPAYROLL) adalah aplikasi berbasis web yang dirancang untuk membantu **Namira Mart** dalam mengelola data karyawan, absensi, jabatan, serta perhitungan gaji secara efisien dan akurat. Aplikasi ini memiliki antarmuka yang modern, responsif, dan mudah digunakan (user-friendly).

## 🌟 Fitur Utama

### 1. Dashboard Interaktif

- Ringkasan data total pengguna, karyawan, jabatan, dll.
- Navigasi sidebar yang persisten dan responsif.

### 2. Manajemen Data Master

- **Data Pengguna (Users):**
    - Manajemen akun login (Admin, Kasir, Owner, Staff Gudang, Driver).
    - Visualisasi Role dengan _Badge_ warna pastel.
    - Tabel modern dengan fitur _zebra striping_ dan penomoran otomatis.
- **Data Karyawan:** Pencatatan biodata lengkap karyawan.
- **Data Jabatan:** Pengaturan gaji pokok, tunjangan, lembur, dan potongan.
- **Data Kehadiran:** Rekap absensi jam masuk dan keluar.

### 3. Penggajian (Payroll)

- Perhitungan gaji otomatis berdasarkan jabatan dan kehadiran.
- Manajemen bonus dan potongan.

### 4. Laporan & Cetak

- Laporan penggajian bulanan.
- Fitur filter berdasarkan bulan/tahun.
- **Fitur Cetak (Print):** Cetak laporan langsung dari aplikasi.

### 5. Antarmuka Modern (UI/UX)

- **Breadcrumbs:** Navigasi jejak halaman (misal: `Dashboard > Data Master > Data Pengguna`).
- **Modern Tables:** Desain tabel yang bersih tanpa garis vertikal berlebih.
- **Responsive:** Tampilan menyesuaikan layar desktop maupun perangkat yang lebih kecil.

---

## 🛠️ Teknologi yang Digunakan

- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade Templates
- **Styling:** Tailwind CSS
- **Database:** MySQL
- **Authentication:** Laravel Breeze

---

## 📸 Tangkapan Layar (Screenshots)

_(Anda bisa mengupload gambar hasil project ke folder `public/screenshots` atau hosting gambar, lalu link di sini)_

|                 Dashboard                  |               Data Pengguna                |
| :----------------------------------------: | :----------------------------------------: |
| ![Dashboard](link_gambar_dashboard_disini) | ![Data Pengguna](link_gambar_users_disini) |

|            Laporan & Cetak             |             Mobile View              |
| :------------------------------------: | :----------------------------------: |
| ![Laporan](link_gambar_laporan_disini) | ![Mobile](link_gambar_mobile_disini) |

---

## 🚀 Cara Instalasi (Localhost)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer Anda:

### Prasyarat

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

### Langkah Instalasi

1.  **Clone Repositori**

    ```bash
    git clone [https://github.com/username-anda/namira-mart-payroll.git](https://github.com/username-anda/namira-mart-payroll.git)
    cd namira-mart-payroll
    ```

2.  **Install Dependencies (PHP & Node)**

    ```bash
    composer install
    npm install
    ```

3.  **Setup Environment**
    Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

    Buka file `.env` dan sesuaikan konfigurasi database Anda:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=namira_payroll
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate App Key**

    ```bash
    php artisan key:generate
    ```

5.  **Migrasi Database** (Pastikan database sudah dibuat di phpMyAdmin/MySQL)

    ```bash
    php artisan migrate
    ```

    _(Opsional: Jika ada seeder)_

    ```bash
    php artisan db:seed
    ```

6.  **Build Assets**

    ```bash
    npm run build
    ```

7.  **Jalankan Aplikasi**

    ```bash
    php artisan serve
    ```

    Buka browser dan akses: `http://localhost:8000`

---

## 📂 Struktur Menu

- **Dashboard**
- **Data Master**
    - Data Pengguna
    - Data Karyawan
    - Data Jabatan
    - Data Kehadiran
- **Gaji (Kelola Gaji)**
- **Laporan**

---

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan buat _Pull Request_ atau laporkan _Issues_ jika menemukan bug.

1.  Fork Project ini
2.  Buat Feature Branch (`git checkout -b fitur-keren`)
3.  Commit perubahan (`git commit -m 'Menambahkan fitur keren'`)
4.  Push ke Branch (`git push origin fitur-keren`)
5.  Open Pull Request

---

## 📝 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
