# 🧩 API User Management

API ini dibuat menggunakan **Laravel 12** dan **PostgreSQL** (melalui Supabase) untuk mengelola data **User Management** secara terpusat dan berbasis REST API.

## 🚀 Cara Menjalankannya

### 1. Clone Repository

```bash
git clone https://github.com/rigilz48/laravel12_api_user.git
cd laravel12_api_user

```

### 2. Install Dependencies

```bash
composer install
```

### 3. Konfigurasi File Environment

Di dalam file .env terdapat **SESSION_DRIVER**

```
Jalan Program di Lokal :
SESSION_DRIVER=file

Jalan Program di Deploy
SESSION_DRIVER=database

```

### 4. Jalankan Server

```bash
composer run dev
```

Server akan berjalan di:

```
http://localhost:8000
```

## 📘 Dokumentasi tentang API

Gunakan **Postman** (karena saya menggunakan Postman) untuk menguji API.

### Endpoint Utama

| Method   | Endpoint               | Deskripsi                              |
| :------- | :--------------------- | :------------------------------------- |
| `GET`    | `/api/users`           | Menampilkan semua user                 |
| `GET`    | `/api/users/{id_user}` | Menampilkan detail user berdasarkan ID |
| `POST`   | `/api/users`           | Menambahkan user baru                  |
| `PUT`    | `/api/users/{id_user}` | Memperbarui data user                  |
| `DELETE` | `/api/users/{id_user}` | Menghapus user                         |

### Contoh Response

#### ✅ Berhasil

```json
{
  "success": true,
  "message": "Data user berhasil dihapus"
}
```

#### ❌ Gagal

```json
{
  "success": false,
  "message": "User tidak ditemukan"
}
```

## 🧱 Teknologi yang Digunakan

- **Laravel 12.x**
- **PostgreSQL (Supabase)**
- **PHP 8.3+**
- **Composer**

## 💡 Catatan Tambahan

- database PostgreSQL sudah di sediakan tanpa perlu config database.
- Pastikan koneksi internet stabil karena database diakses menggunakan internet.
