# Technical Testing PT SEKAWAN MEDIA

## Kasus Pembuatan Aplikasi Pengajuan Kendaraan Di Perusahaan Tambang Nikel

## Daftar Username - Password

**Role Admin**  
__kuan@gmail.com - 12345678__

**Role Approval / User**  
* __wmaaf02@gmail.com - 12345678__ 

* __silung@gmail.com - 12345678__

* __poraja@gmail.com - 12345678__

* __hezbi@gmail.com - 12345678__

* __kurnia@gmail.com - 12345678__

* __awan@gmail.com - 12345678__

* __siti@gmail.com - 12345678__

## Database Version

* Server: 127.0.0.1 via TCP/IP
* Server type: MariaDB
* Server version: 10.4.20-MariaDB - mariadb.org * binary distribution
* Protocol version: 10
* User: root@localhost

## PHP Version
* PHP version: 8.0.9

## Framework
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

* Laravel Version 10

## Panduan Penggunaan Aplikasi

1. Lakukan Login terlebih dahulu dengan username dan password yang telah disediakan
1. Jika login menggunakan role approval, beberapa aksi yang bisa dilakukan antara lain : Melihat halaman Dashboard, mengizinkan atau menolak pengajuan kendaraan, melihat kendaraan yang ada
1. Jika login dengan role admin, aksi yang bisa dilakukan adalah mengajukan pengajuan kendaraan, menambah kendaraan, melihat dashboard, dan melihat kendaraan

### Prosedur Melakukan approval
1. Login Sebagai user dengan role Approval
1. Masuk kebagian page approve
1. Setelah masuk, akan ditampilkan beberapa pengajuan yang bisa dilakukan approval dengan memilih menu dropdown approval 

Ada syarat untuk melakukan approval, yaitu user dengan approval priority pertama harus melakukan approval / rejected terlebih dahulu. Jika tidak, maka proses approval gagal

### Prosedur Menambahkan Pengajuan Kendaraan
1. Login Sebagai user dengan role Admin
1. Masuk kebagian page Tambah Pengajuan
1. Setelah masuk, Silahkan isi formnya, yaitu mengisi nama, tanggal pesan, tanggal kembali, Kendaraan, driver, nama approval pertama dan nama approval kedua
1. Semua form harus diisi
1. Tekan Submit

### Prosedur Menambahkan Kendaraan
1. Login Sebagai user dengan role Admin
1. Masuk kebagian page Tambah Pengajuan
1. Setelah masuk, Silahkan isi formnya, yaitu mengisi nama kendaraan, Jenis Kendataan, dan no polisi kendaraan
1. Semua form harus diisi
1. Tekan Submit, jika sudah selesai

Ada syarat untuk melakukan approval, yaitu user dengan approval priority pertama harus melakukan approval / rejected terlebih dahulu. Jika tidak, maka proses approval gagal

## Lain - Lain
<a href="https://drive.google.com/file/d/1_EXVrSocvyhRThgwwAzL-Igqvbu1a3N6/view?usp=share_link">Physical Data Model</a>

<a href="https://drive.google.com/file/d/1O0rtM459SyLwRtmd6blG21olHF_eMYBe/view?usp=share_link">Activity Diagram</a>

##
