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
          <li class="header-menu__li" id="detailed">こだわり</li>
          <li class="header-menu__li" id="menu">メニュー</li>
          <li class="header-menu__li" id="access">アクセス</li>
          <li class="header-menu__li" id="businessHours">営業時間</li>
          <li class="header-menu__li" id="company">運営会社</li>
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
    <div class="detailed">

      <h2 class="detailed-title">こだわり</h2>

      <div class="detailed-wrapper">
        <!-- 1 -->
        <div class="detailed-soup">
          <p class="detailed-soup__heading">スープ</p>
          <p class="detailed-soup__text">無添加で、新鮮な野菜や厳選された鶏ガラなどを長時間煮込み、脂肪分を抑えたヘルシーなスープです。濃厚さを保ちながらも、胃に優しく、満足感のある一杯を提供します。</p>
        </div>
        <!-- 2 -->
        <div class="detailed-noodles">
          <p class="detailed-noodles__heading">自家製麺</p>
          <p class="detailed-noodles__text">体に優しい全粒粉を使った自家製麺です。全粒粉ならではの豊かな風味とコシを楽しんでいただけます。化学調味料や保存料を一切使わず、健康志向の方にも安心してお召し上がりいただけます。</p>
        </div>
        <!-- 3 -->
        <div class="detailed-topping">
          <p class="detailed-topping__heading">トッピング</p>
          <p class="detailed-topping__text">当店の食材はすべて無添加です。特にメンマは独自の製法で臭みを徹底的に取り除き、風味豊かに仕上げています。シャキシャキとした食感と、やさしい甘みがスープと絶妙にマッチします。</p>
        </div>
        <!-- 4 -->
        <div class="detailed-comfortable">
          <p class="detailed-comfortable__heading">快適空間</p>
          <p class="detailed-comfortable__text">隣の席との間隔を広く取り、プライバシーを確保した半個室のようなカウンター席をご用意しています。これにより、リラックスしてお食事を楽しんでいただけます。</p>
        </div>

      </div>

    </div>

    <div class="custom-hr"></div>

    <!-- メニュー -->
    <div class="menu">

      <h2 class="menu-title">メニュー</h2>

      <div class="menu-detail">

        <details class="menu-detail__wrapper">
          <summary class="menu-detail__wrapper-title">醤油ラーメン</summary>
          <div class="menu-detail__wrapper-inner">
            <div class="menu-detail__wrapper-imageWrapper">
              
            </div>
            <p class="menu-detail__wrapper-text">使用している醤油は、長期熟成された天然醸造醤油で、深いコクと豊かな香りが特徴です。これにより、スープには独特の深みと風味が加わり、一口飲むごとに満足感が広がります。自家製麺とのコントラストをぜひご賞味ください。</p>
          </div>
        </details>

        <details class="menu-detail__wrapper">
          <summary class="menu-detail__wrapper-title">塩ラーメン</summary>
          <div class="menu-detail__wrapper-inner">
            <div class="menu-detail__wrapper-imageWrapper">
              
            </div>
            <p class="menu-detail__wrapper-text">青ヶ島のひんぎゃの塩を使用しており、自然の恵みをたっぷりと感じられる一杯です。ひんぎゃの塩は、火山の噴気と海水が融合したミネラル豊富な塩です。一度味わえば忘れられない、この特別な塩ラーメンをぜひお試しください。</p>
          </div>
        </details>

        <details class="menu-detail__wrapper">
          <summary class="menu-detail__wrapper-title">メンマ</summary>
          <div class="menu-detail__wrapper-inner">
            <div class="menu-detail__wrapper-imageWrapper">
              
            </div>
            <p class="menu-detail__wrapper-text">秘伝の調理法でじっくりと味付けされ、食感豊かで風味豊かな仕上がりになっています。一口食べれば、その独特の歯ごたえとコク深い味わいに魅了されることでしょう。</p>
          </div>
        </details>

        <details class="menu-detail__wrapper">
          <summary class="menu-detail__wrapper-title">チャーシュー丼</summary>
          <div class="menu-detail__wrapper-inner">
            <div class="menu-detail__wrapper-imageWrapper">
              
            </div>
            <p class="menu-detail__wrapper-text">手間暇かけて煮込まれた柔らかいチャーシューは、自家製の特製タレが絡みつき、ご飯との相性抜群で、箸が止まらなくなること間違いありません。また、ごはんには玄米を使用し、食物繊維やミネラルが豊富で、満足感のある食事を提供します。</p>
          </div>
        </details>

      </div>

    </div>

    <!-- アクセス・営業時間 -->
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

  <script src="./js/target.js"></script>

</body>
</html>