# 專案介紹
本專案使用laravel框架進行開發,以使用者撰寫文章與設定標籤的方式實現CRUD與多對多關係,本專案具有以下幾樣功能
1. 使用者撰寫文章可附上多個自行設定的標籤
2. 點擊標籤可觀看到標註標籤的文章
3. 點擊文章可觀看到被標註的標籤
4. 如有異動標籤或文章,兩者會進行同步如:刪除或修改某個標籤,有標註該標籤的文章都會受影響
# 需求工具
運行此專案需要先行下載下列工具
1. [composer](https://getcomposer.org/download/)
2. [docker](https://www.docker.com/)
# 環境建置
在安裝完上述工具後首先進入專案打開終端機輸入以下指令,用來將運行需要的套件下載
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
[參考資料](https://medium.com/aydenlin/clone-a-laravel-project-from-remote-6bf656fd842a)
# 運行專案
執行完上面的指令接著要下載[laradock](https://laradock.io/)用來運行專案<br>
首先進入專案打開終端機輸入以下指令從github上下載laradock
```
git clone https://github.com/Laradock/laradock.git
```
接著輸入以下指令,生成```.env```
```
cd laradock
cp env-example .env
```
再來用docker運行專案
```
docker-compose up -d nginx mysql phpmyadmin redis workspace 
```
於瀏覽器下輸入文章首頁網址檢測有沒有成功運行
```
http://127.0.0.1/post
```
最後還需要建構資料庫<br><br>
首先修改先前建立的```.env```改成以下設定
```
DB_HOST=127.0.0.1
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret
```
再來輸入以下指令生成資料表
```
php artisan migrate
```
再修改```.env```的```DB_HOST=mysql```就大功告成囉！！！

# 生成測試資料

本專案有設定seeds預設隨機生成20篇文章與30個標籤並且隨機生成文章與標籤之間的關聯<br>
運行方式如下在```DB_HOST=127.0.0.1```時在終端機上輸入下面指令就會自動生成
```
php artisan DB:seed  
```
如果要修改生成數量修改以下兩支檔案
```
專案名稱/database/seeds/PostTableSeeder.php
專案名稱/database/seeds/TagTableSeeder.php
```
