# 專案介紹
本專案使用laravel框架進行開法,以使用者撰寫文章與設定標籤實現CRUD與多對多關係,具有以下幾樣功能
1. 使用者可撰寫文章並附上多個自行設定的標籤
2. 點擊標籤觀看被標註的文章
3. 點擊文章觀看被哪些標籤標註
4. 如有異動標籤或文章兩者會進行同步,如:刪除某個標籤被標註的文章也會少了這個標籤
# 工具需求
運行此專案需要下列幾項工具
1. [composer](https://getcomposer.org/download/)
2. [docker](https://www.docker.com/)
3. [laradock](http://laradock.io/)
# 環境建置
在安裝完上述工具後首先進入專案輸入

composer install 
