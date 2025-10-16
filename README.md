# 🧩 API User Management

API ini dibuat menggunakan **Laravel 12** dan **PostgreSQL** (melalui Supabase) untuk mengelola data **User Management** secara terpusat dan berbasis REST API.

## Deploy

```bash
https://user-management-6jk6bsk83-rigilzs-projects.vercel.app/api/api/user_management

```

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

Jalan Program di Deploy : (opsional)
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

### Endpoint Utama Lokal

| Method   | Endpoint                         | Deskripsi                              |
| :------- | :------------------------------- | :------------------------------------- |
| `GET`    | `/api/user_management`           | Menampilkan semua user                 |
| `GET`    | `/api/user_management/{id_user}` | Menampilkan detail user berdasarkan ID |
| `POST`   | `/api/user_management`           | Menambahkan user baru                  |
| `PUT`    | `/api/user_management/{id_user}` | Memperbarui data user                  |
| `DELETE` | `/api/user_management/{id_user}` | Menghapus user                         |

### Endpoint Utama Deploy

| Method   | Endpoint                             | Deskripsi                              |
| :------- | :----------------------------------- | :------------------------------------- |
| `GET`    | `/api/api/user_management`           | Menampilkan semua user                 |
| `GET`    | `/api/api/user_management/{id_user}` | Menampilkan detail user berdasarkan ID |
| `POST`   | `/api/api/user_management`           | Menambahkan user baru                  |
| `PUT`    | `/api/api/user_management/{id_user}` | Memperbarui data user                  |
| `DELETE` | `/api/api/user_management/{id_user}` | Menghapus user                         |

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
