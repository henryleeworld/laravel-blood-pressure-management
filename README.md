# Laravel 10 血壓管理

家庭血壓監測能真實地反映個體生活狀態下的血壓狀況，是高血壓管理中最重要的一個環節。通過準確測量血壓，書寫血壓日記，可及時監測高峰血壓值，客觀記錄血壓數值，可避免跟著感覺走，導致血壓控制不佳，還能幫助醫生精准調整用藥，提高診療的效率。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/8zPVid7.png)
> 觀察降壓療效的根本手段和方法

![](https://i.imgur.com/VDmqfkW.png)
> 詳細記錄每次測量血壓的日期、時間以及所有血壓讀數
