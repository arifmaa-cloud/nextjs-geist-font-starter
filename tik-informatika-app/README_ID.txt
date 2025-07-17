# Tik Informatika SMP - Aplikasi Informatika untuk SMP Kelas 7-9

## Deskripsi
Aplikasi manajemen pembelajaran Informatika untuk SMP (Kelas 7, 8, dan 9) berbasis Laravel dengan fitur lengkap termasuk manajemen data siswa, akademik, presensi, portofolio, dan integrasi WhatsApp.

## Fitur Utama

### 1. Manajemen Data Siswa
- Form data siswa 66 kolom sesuai standar Dapodik
- Upload dokumen KK dan Akte dengan validasi admin
- Export data siswa ke Excel dan PDF
- Sistem kunci/buka edit data siswa

### 2. Sistem Akademik
- Manajemen mata pelajaran Informatika per kelas
- Jadwal pembelajaran harian
- Upload materi dan tugas
- Sistem penilaian lengkap (tugas, UTS, UAS)
- Rekap nilai per semester

### 3. Sistem Presensi
- Presensi via RFID (reader.py)
- Form izin/sakit tanpa login
- QR Code untuk UID siswa
- Rekap kehadiran harian/mingguan

### 4. Portofolio Siswa
- Upload prestasi dan tugas khusus
- Validasi admin untuk portofolio
- Filter berdasarkan semester

### 5. Integrasi WhatsApp
- Notifikasi otomatis untuk tugas dan presensi
- Template pesan yang dapat dikustom
- Kirim ke siswa/orang tua

### 6. Dashboard
- Admin: Statistik lengkap
- Siswa: Tugas aktif dan status presensi

## Instalasi

### Persyaratan Sistem
- PHP 8.1 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Composer
- Laravel 10.x

### Langkah Instalasi

1. Clone repository:
```bash
git clone [repository-url]
cd tik-informatika-app
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Copy file environment:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Konfigurasi database di file .env

6. Jalankan migrasi:
```bash
php artisan migrate --seed
```

7. Install Voyager Admin:
```bash
php artisan voyager:install
```

8. Jalankan server:
```bash
php artisan serve
```

## Konfigurasi

### RFID Reader
- Hubungkan RFID reader ke port USB
- Jalankan script reader.py:
```bash
python3 reader.py
```

### WhatsApp API
- Daftar di FONNTE atau WABLAS
- Masukkan token API di file .env

## Struktur Database

### Tabel Utama:
- students: Data siswa 66 kolom
- subjects: Mata pelajaran
- schedules: Jadwal pelajaran
- assignments: Tugas dan deadline
- attendances: Presensi harian
- grades: Nilai siswa
- portfolios: Prestasi siswa
- whatsapp_templates: Template pesan WA
- whatsapp_logs: Log pengiriman WA

## API Endpoints

### Presensi RFID
- POST /api/attendance/rfid
- Body: {rfid_uid, subject_id}

### Data Siswa
- GET /api/students
- POST /api/students
- PUT /api/students/{id}
- DELETE /api/students/{id}

### Tugas
- GET /api/assignments
- POST /api/assignments
- PUT /api/assignments/{id}
- DELETE /api/assignments/{id}

## Lisensi
MIT License - Silakan digunakan dan dimodifikasi sesuai kebutuhan

## Kontak
Untuk pertanyaan atau bantuan, silakan hubungi admin aplikasi.
