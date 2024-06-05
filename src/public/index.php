<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  
  <!-- ヘッダー -->
  <header class="header">

    <!-- メニューバー -->
    <div class="header-menu">
      <!-- 左のアイコン -->
      <!-- display: inline-blockを、cssで後でやる！！ -->
      <a href="#" class="header-menu__iconTopLink">
        <span class="heあader-menu__icon"></span>
      </a>
      <!-- 右のナビゲーション -->
      <nav class="header-menu__nav">
        <ul class="header-menu__ul">
          <li class="header-menu__li">こだわり</li>
          <li class="header-menu__li">メニュー</li>
          <li class="header-menu__li">アクセス</li>
          <li class="header-menu__li">営業時間</li>
          <li class="header-menu__li">運営会社</li>
        </ul>
      </nav>

    </div>

    <!-- トップ画像 -->
    <div class="header-catching">
      <div class="header-catching__inner">
        <h1 class="header-catching__title">ラーメン屋名</h1>
        <p class="header-catching__text">
          <span class="header-catching__text-thatFirst">1.無添加で健康に良い！</span>
          <span class="header-catching__text-that">2.お一人様・女性も入りやすい！</span>
          <span class="header-catching__text-thatEnd">3.満足したいならここ！</span>
        </p>
      </div>
    </div>

  </header>
  <!-- メイン -->
  <main class="main">

    <!-- こだわり -->
    <!-- グリッドを使いたいね・CSSはcliph-pathを使いたい -->
    <div class="detailed">

    </div>

    <!-- メニュー -->
    <!-- ヒロコードであった、HTML&CSSで開閉させるやつ -->
    <div class="menu">

    </div>

    <!-- アクセス・営業時間 -->
    <!-- アクセスと営業時間はまとめて、横並びでいいのでは、レスポンシブで縦並びに -->
    <div class="location">

    </div>

    <!-- 運営会社 -->
    <div class="company">

      <h4 class="company-title">運営会社</h4>
      
      <!-- 会社情報テーブル -->
      <table border="1" class="company-table">
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            会社名
          </th>
          <td class="company-table__tr-td">
            株式会社○○○○○○
          </td>
        </tr>
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            代表
          </th>
          <td class="company-table__tr-td">
            ✕✕✕　✕✕
          </td>
        </tr>
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            TEL
          </th>
          <td class="company-table__tr-td">
            03-xxxx-xxxx
          </td>
        </tr>
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            住所
          </th>
          <td class="company-table__tr-td postal-address">
            <span class="comany-postal">〒 xxx-xxxx</span>
            <span class="comany-address">東京都xx区xxxx町x丁目x番xx号</span>
          </td>
        </tr>
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            設立
          </th>
          <td class="company-table__tr-td">
            20xx年 xx月 xx日
          </td>
        </tr>
        <tr class="company-table__tr">
          <th class="company-table__tr-th">
            資本金
          </th>
          <td class="company-table__tr-td">
            2,000万円
          </td>
        </tr>
      </table>

    </div>

  </main>
  <!-- フッター -->
  <footer class="footer">

  </footer>

</body>
</html>