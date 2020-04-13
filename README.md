# 專案介紹
本專案使用laravel框架進行開法,以使用者撰寫文章與設定標籤的方式實現CRUD與多對多關係,具有以下幾樣功能
1. 使用者可撰寫文章並附上多個自行設定的標籤
2. 點擊標籤觀看被標註文章
3. 點擊文章觀看標註標籤
4. 如有異動標籤或文章,兩者會進行同步,如:刪除某個標籤被標註的文章也會同步刪除掉該標籤
# 需求工具
運行此專案需要先行下載下列工具
1. [composer](https://getcomposer.org/download/)
2. [docker](https://www.docker.com/)
# 環境建置
在安裝完上述工具後首先進入專案輸入以下指令,用來將vendor載入
```
composer install
```
載入完成後輸入以下指令生成```.env```檔
```
cp .env.example .env
```
接著使用laravel的指令設定key
```
php artisan key:generate
```
