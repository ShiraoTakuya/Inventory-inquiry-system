# Inventory-inquiry-system

在庫問い合わせシステムです。

会員登録は不要です。自分の名前と連絡先を入力すればログインできます。

商品を選択、希望数量を入力後に問い合わせボタンを押すと管理者に問い合わせメールが送信されます。

問い合わせ元の方にも問い合わせ受領連絡が届きます。

# 実行例

ログイン画面

![demo](https://raw.githubusercontent.com/ShiraoTakuya/Inventory-inquiry-system/main/cap1.PNG)

商品一覧画面

![demo](https://raw.githubusercontent.com/ShiraoTakuya/Inventory-inquiry-system/main/cap2.PNG)

問い合わせ後画面

![demo](https://raw.githubusercontent.com/ShiraoTakuya/Inventory-inquiry-system/main/cap3.PNG)

以下のリンクにアクセスすると動作確認できます
* http://genuine.php.xdomain.jp/purchase/index.html
  
# Usage

* 各ファイルを適切にサーバーにおいてください。
* mail.txtには管理者のメールアドレスを入力してください。
* SET.INIの中身はダミーデータなので適切に変更してください。
 
# Note
 
* 以下のシステム構成です
 
![system_diagram](https://raw.githubusercontent.com/ShiraoTakuya/Inventory-inquiry-system/main/system_diagram.png)

商品情報はデータベースに入っています。データベースに入っている分だけ画面に表示されます。

# Author
  
* ShiraoTakuya
