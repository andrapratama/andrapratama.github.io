# Bagaimana Website Ini Dibuat




## 1 Pengenalan

Saya membuat *website* ini sebagai dokumentasi atas apa yang saya kerjakan selama menjadi *programmer*. Mungkin tidak dalam waktu dekat apa yang saya pelajari dan lakukan di pekerjaan akan terangkum. Tapi perlahan-lahan saya akan mulai mendokumentasikannya, entah itu untuk pribadi, *sharing* dengan teman kerja atau pun orang umum.

## 2 Peralatan

Saya menggunakan Hugo, yaitu sebuah generator web statis yang dibuat menggunakan bahasa Go.

## 3 Tutorial

### 3.1 Membuat Direktori

```bash
hugo new site my_website
```

### 3.2 Pindah Lokasi ke Direktori

```bash
cd my_website
```

### 3.3 Inisiasi Git di dalam Direktori

```bash
git init
```

### 3.4 Clone Tema

*Clone* tema sebagai submodule
```bash
git submodule add https://github.com/theNewDynamic/gohugo-theme-ananke themes/ananke
```

### 3.5 Menambahkan Konfigurasi Tema

```bash
echo "theme = 'ananke'" >> config.toml
```

### 3.6 Menjalankan Website

```bash
echo "theme = 'ananke'" >> config.toml
```
