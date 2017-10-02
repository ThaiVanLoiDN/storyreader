## Story Reader
##Lần đầu khi pull source về

#Cài đặt composer cho máy tại đây: https://getcomposer.org/

#Dùng lệnh sau để sinh ra thư mục vendor
composer install

#Dùng lệnh để update thư mục vendor sau khi gõ lệnh "composer install" hoặc có update file composer.json
composer update

#Copy file .env.example thành một file là .env vì file .env là cấu hình database, mail,... nên mặc định là Laravel bỏ qua file này khi add, commit

#Sửa file .env. Lưu ý: Trong file .env không nên để dấu cách hoặc dấu tab, không có luôn cả dấu ngoặc.

APP_URL=http://localhost:8000 (thành địa chỉ mình muốn chạy)

DB_DATABASE=homestead (tên database)
DB_USERNAME=homestead (username, ví dụ root)
DB_PASSWORD=secret (mật khẩu, ví dụ rỗng, hoặc là root, tùy do mình để truy cập vào MySQL)

#Sinh ra key của source
php artisan key:generate

#Sinh ra table database:
php artisan migrate

#Sinh ra dữ liệu mẫu trong database
php artisan db:seed

#Tạo đường hầm giữa storage/app/public và public/storage
php artisan storage:link

#Copy tất cả file và thư mục trong /storage/app/public_example/ vào /storage/app/public/

#Chạy dự án: 
php artisan serve
(mặc định nó sẽ chạy cổng 8000 tại địa chỉ http://localhost:8000, nếu muốn đổi cổng thì php artisan serve --port=1234 và chạy cổng 1234)

--------------

##Các lần tiếp theo, khi nào có lỗi thì mới chạy

composer dump-autoload

php artisan migrate

php artisan db:seed

copy all file of the folder /storage/app/public_example/... -> /storage/app/public/...

-------------------------
