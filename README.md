# TP8DPBO2425C2

# 1. Penjelasan Database / Tabel
Database menggunakan dua tabel utama, yaitu department dan lecturers.
## Tabel department ##
Digunakan untuk menyimpan data departemen/jurusan.
Berisi kolom:
- id → identitas unik departemen
- name → nama departemen
- building → gedung tempat departemen berada
  
## Tabel lecturers ##
Digunakan untuk mnyimpan data dosen.
Berisi kolom:
- id → identitas unik dosen
- name → nama dosen
- nidn → nomor induk dosen
- phone → nomor telepon
- join_date → tanggal bergabung
- department_id → relasi ke tabel department

## Hubungan antar tabel ##
Satu department dapat memiliki banyak lecturers (one to many),
sedangkan satu lecturer hanya dapat dimiliki oleh satu department.

# 2. Penjelasan Desain Program (MVC)
Program ini menggunakan arsitektur Model–View–Controller (MVC) untuk memisahkan logika aplikasi dan tampilan.

## Model ##
Model bertugas mengelola data dan berkomunikasi dengan database.
Semua proses CRUD dilakukan di bagian ini.

## View ##
View adalah bagian tampilan yang menampilkan data ke pengguna.
View hanya berisi HTML + Bootstrap untuk menampilkan form dan tabel.

## Controller ##
Controller menjadi penghubung antara user, view, dan model.
Controller menerima request dari user, memproses logika, memanggil model, lalu mengirim data ke view.


# 3. Penjelasan Alur Program
- User membuka halaman melalui URL
URL akan menentukan controller apa yang dipanggil dan fungsi mana yang dijalankan.
- Router membaca request
Router mengenali controller (misal: Department) dan action (misal: index, create, edit, delete).
- Controller memproses permintaan
Controller mengambil data dari model atau mengirim data ke model untuk disimpan/diupdate/dihapus.
- Model berinteraksi dengan database
Model menjalankan perintah untuk mengambil, menambah, mengubah, atau menghapus data.
- Controller mengirim data ke View
Controller memberikan data ke view untuk ditampilkan.
- View menampilkan tampilan kepada user
View menampilkan tabel, form, tombol edit atau delete sesuai data yang diterima.
- User melakukan CRUD
  - Tambah data → data dikirim ke controller → disimpan lewat model
  - Edit data → controller memuat data lama → model memperbarui
  - Delete data → controller meminta model menghapus
  - Tabel otomatis terupdate setelah aksi dilakukan
