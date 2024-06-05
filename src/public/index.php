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

      <!-- アクセス -->
      <div class="access">
        <h3 class="access-title">アクセス</h3>
        <div class="access-detail">
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">住所</dt>
            <dd class="access-detail__dl-dd">東京都xx区xxxx町x丁目x番xx号</dd>
          </dl>
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">車でお越しの方</dt>
            <dd class="access-detail__dl-dd">国道○号を○○方面に見て、コンビニを左折したところです</dd>
          </dl>
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">電車でお越しの方</dt>
            <dd class="access-detail__dl-dd">最寄りは○○駅の○○線</dd>
          </dl>
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">徒歩でお越しの方</dt>
            <dd class="access-detail__dl-dd">最寄り駅より徒歩5分</dd>
          </dl>
        </div>
      </div>

      <!-- 営業時間 -->
      <div class="businessHours">
        <h3 class="businessHours-title">営業時間</h3>
        <div class="businessHours-detail">

          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">昼の部</dt>
            <dd class="access-detail__dl-dd">11:00 ~ 14:30（ラストオーダー14:00）</dd>
          </dl>
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">夜の部</dt>
            <dd class="access-detail__dl-dd">17:00 ~ 22:00ラストオーダー21:20）</dd>
          </dl>
          <dl class="access-detail__dl">
            <dt class="access-detail__dl-dt">定休日</dt>
            <dd class="access-detail__dl-dd">月・火（気まぐれで他の曜日も休む場合あり）</dd>
          </dl>

        </div>
      </div>

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
    <div class="footer-copyright">
    <small class="footer-copyright__name">&copy;2024 Ren Tsuchiya</small>
    </div>
  </footer>

</body>
</html>