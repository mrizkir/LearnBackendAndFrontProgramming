![logo_aptikom](https://user-images.githubusercontent.com/7402103/81349561-6df8f280-90ea-11ea-8e1f-8cac14d5ecbd.jpeg)
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
## illuminate/mail
Secara default layanan Email di Lumen belum diaktifkan, jadi perlu dilakukan secara manual
```bash
composer require illuminate/mail -vvv
```
## spatie/laravel-permission
Untuk mengelola pembagian jenis-jenis user (role) dan pengaturan permission masing-masing role.
```bash
composer require spatie/laravel-permission -vvv
```
## tymon/jwt-auth
Driver API untuk mekanisme login user.
```bash
composer require tymon/jwt-auth -vvv
```
# Instalasi Frontend
Sebelum instalasi di sisi frontend, pastikan tidak berada didalam folder `backend`; ketikan perintah berikut untuk keluar dari folder backend :
```bash
cd ..
```
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
## Membuat Project
Untuk membuat project misalnya diberi nama `frontend` ketikan perintah berikut :
```bash
vue create frontend
```
maka akan muncul tampilan sebagai berikut :
```bash
Vue CLI v4.3.1
? Please pick a preset: (Use arrow keys)
❯ default (babel, eslint)  
  Manually select features
```
Pilih default. Kemudian tekan enter. Output akhir instalasi ini :
```bash
...........
............
🎉  Successfully created project frontend.
👉  Get started with the following commands:

 $ cd frontend
 $ npm run serve
```
selanjutnya masuk ke dalam folder `frontend` :
```bash
cd frontend
```
## Vue-router
Paradigma pemrograman yang digunakan adalah SPA (Single Page Application), oleh karena itu digunakan vue-router untuk mewujudkannya. Lakukan instalasi :
```bash
vue add router
```
Saat instalasi akan ditanya :
```bash
? Use history mode for router? (Requires proper server setup for index fallback in production) Yes
```
Pilih yes.

## Vuex
Vuex digunakan untuk mengelola state, kalau istilah di PHP seperti SESSION.
```bash
vue add vuex
```
## Vuex-persistent
Vuex-persistent digunakan untuk menyimpan state supaya tetap ada. Biasanya disimpan di dalam local storage web browser.
```bash
npm install vuex-persistent
```
## Vuetify
Vuetify library terlengkap didunia vue, mempelajarinya membuat project VUE bisa lebih cepat.
```bash
vue add vuetify
```
# Pertanyaan
Pertanyaan bisa diajukan melalui issue tracker [github](https://github.com/mrizkir/LearnBackendAndFrontProgramming/issues)
