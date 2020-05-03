# Pendahuluan 
Pembelajaran menggunakan Lumen sebagai backend dan VUE+Vuetify sebagai Frontend.
# Requirements
Proses pembelajaran ini membutuhkan beberapa hal yang perlu dipersiapkan oleh peserta ada yang bersifat wajib dan opsional, yaitu :
* PHP >= 7.2.5 [wajib]
* Composer 1.9.1 [wajib]
* NPM 6.14.4 [wajib]
* MySQL / Maria DB [wajib]
* PHPMyAdmin, atau HeidiSQL, atau Navicat, dan lain-lain [opsional] 
* Editor bebas, tetapi direkomendasikan Visual Studio Code (VS Code). Bila  VS Code yang digunakan, installkan extension Laravel Blade Snippets, Vetur, vuetify-vscode.[opsional]
* git 2.24.1 [opsional]

Install satu per satu, pastikan telah berjalan dengan baik di command line. Untuk memastikan silahkan bukan command prompt-nya ketikan perintah berikut :

php : 
```bash
php --version
```
composer :
```bash
composer --version
```
npm :
```bash
npm --version
```
mysql :
```bash
mysql --version
```
git :
```bash
git --version
```
Bila tidak ingin repot-repot menginstall satu per satu bisa menggunakan [Laragon](https://laragon.org/download/). Selanjutnya silahkan lakukan instalasi terlebih dahulu, sebelum proses pembelajaran dimulai, sehingga saat proses pembelajaran langsung ke materi.

# Instalasi Backend
## Lumen
[Lumen](https://lumen.laravel.com) merupakan micro framework yang didedikasikan sebagai framework untuk membuat web service berbasis pada laravel framework.
```bash
composer create-project --prefer-dist laravel/lumen backend -vvv
```
Selanjutnya masuk ke dalam folder `backend` untuk melakukan instalasi library-library yang dibutuhkan :
```bash
cd backend
```
## flipbox/lumen-generator
Lumen generator digunakan untuk memunculkan kembali generator code laravel yang tidak ada di lumen.
```
composer require flipbox/lumen-generator -vvv
```
## fruitcake/laravel-cors
Untuk Mengakifkan CORS (Cross Origin Resource Sharing) di Lumen
```bash
composer require fruitcake/laravel-cors -vvv
```
## guzzlehttp/guzzle
Library untuk mengakses web service dari sumber lain.
```bash
composer require guzzlehttp/guzzle -vvv
```
# Instalasi Frontend
Silahkan lakukan instalasi terlebih dahulu, sebelum proses pembelajaran dimulai, sehingga saat proses pembelajaran langsung ke materi.
## VUE.js
[VUE](https://vuejs.org) framework javascript untuk membangun sebuah frontend yang elegan dan cepat.
```bash
npm install vue
```
## VUE.cli
Cara mudah untuk membangun aplikasi diatas VUE menggunakan [VUE.cli](https://cli.vuejs.org/)
```bash
npm install -g @vue/cli
```
