# Hệ Thống Quản Lý Tài Khoản

## Giới Thiệu
Dự án **Hệ Thống Quản Lý Tài Khoản** là một ứng dụng web được phát triển bằng PHP và Laravel Framework, nhằm mục đích quản lý thông tin tài khoản người dùng một cách hiệu quả và an toàn. Ứng dụng cung cấp các chức năng cơ bản như đăng ký, đăng nhập, quản lý thông tin cá nhân, và phân quyền truy cập cho người dùng và quản trị viên.

Dự án này phù hợp cho các doanh nghiệp nhỏ, tổ chức, hoặc cá nhân muốn xây dựng một hệ thống quản lý người dùng đơn giản nhưng mạnh mẽ.

---

## Công Nghệ Sử Dụng
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP, Laravel Framework
- **Database**: MySQL
- **Authentication**: Laravel Auth (Xác thực người dùng)
- **Version Control**: Git
- **Tools**: Composer, Artisan CLI

---

## Tính Năng Chính
### 1. Đăng Ký Tài Khoản
- Người dùng có thể đăng ký tài khoản mới bằng cách điền thông tin cá nhân như tên, email, và mật khẩu.
- Mật khẩu được mã hóa bằng bcrypt để đảm bảo an toàn.

### 2. Đăng Nhập
- Người dùng có thể đăng nhập vào hệ thống bằng email và mật khẩu.
- Hệ thống hỗ trợ chức năng "Nhớ mật khẩu" để thuận tiện cho người dùng.

### 3. Quản Lý Thông Tin Cá Nhân
- Người dùng có thể xem và cập nhật thông tin cá nhân của mình, bao gồm tên, email, và mật khẩu.
- Hệ thống yêu cầu xác nhận mật khẩu hiện tại khi thay đổi thông tin quan trọng.

### 4. Phân Quyền Truy Cập
- Hệ thống phân quyền giữa hai loại người dùng:
  - **Người dùng thường**: Có quyền xem và cập nhật thông tin cá nhân.
  - **Quản trị viên**: Có quyền quản lý tất cả người dùng trong hệ thống (thêm, sửa, xóa).

### 5. Quản Lý Người Dùng (Admin)
- Quản trị viên có thể:
  - Xem danh sách tất cả người dùng.
  - Thêm người dùng mới.
  - Chỉnh sửa thông tin người dùng.
  - Xóa người dùng khỏi hệ thống.

---

## Hướng Dẫn Cài Đặt

### Yêu Cầu Hệ Thống
- PHP >= 7.4
- Composer
- MySQL
- Git

### Các Bước Cài Đặt

Các Bước Cài Đặt

## Clone repository:

git clone https://github.com/DamVietHung/High-level-Web.git
cd account-management-system

## Cài đặt các dependencies:

composer install

## Tạo tệp .env và cấu hình:

cp .env.example .env

## Mở tệp .env và cấu hình thông tin database.

## Tạo khóa ứng dụng:

php artisan key:generate

## Chạy migration và seed database:

php artisan migrate --seed

## Khởi động server:

php artisan serve

## Ứng dụng sẽ chạy trên http://127.0.0.1:8000

