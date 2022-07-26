<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<title></title>
<!-- BootstrapのCSS読み込み -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- スタイルシート（slick） -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- スタイルシート -->
<link rel="stylesheet" href="style-about.css">
</head>
<body>
<!-- ヘッダーの設定 -->
<header class="block-header">
    <button type="button" class="header-button">
        <div class="h-menu">
            <input id="h-menu_checkbox" class="h-menuCheckbox" type="checkbox">
            <label class="h-menu_icon" for="h-menu_checkbox"><span class="hamburger-icon"></span></label>
            <label id="h-menu_black" class="h-menuCheckbox" for="h-menu_checkbox"></label>
            <div id="h-menu_content">
                <ul>
                    <li><a href="index.php">ホーム</a></li>
                    <li><a href="about.php">企業情報</a></li>
                    <li><p>サービス</p>
                        <div class="service_menu">
                            <a href="service-a.php" style="font-size: 12px;color:whitesmoke;">Web制作</a>
                            <a href="service-b.php" style="font-size: 12px;color:whitesmoke;">アプリ制作</a>
                            <a href="service-c.php" style="font-size: 12px;color:whitesmoke;">マーケティング</a>
                            <a href="service-d.php" style="font-size: 12px;color:whitesmoke;">ITスクール</a>
                            <a href="service-e.php" style="font-size: 12px;color:whitesmoke;">コンサルティング</a>
                            <a href="service-f.php" style="font-size: 12px;color:whitesmoke;">飲食業</a>
                        </div>
                    </li>
                    <li><a href="contact.php">お問い合わせ</a></li>
                </ul>
            </div>
        </div>
    </button>
    <div class="header-nav">
        <nav>
            <ul>
                <a href="index.php"><li><span>HOME</span>ホーム</li></a>
                <a href="about.php"><li><span>ABOUT</span>企業情報</li></a>
                <ul class="dropdwn">
                    <li><span>SERVICE</span>サービス
                        <ul class="dropdwn_menu">
                            <li><a href="service-a.php">Web制作</a></li>
                            <li><a href="service-b.php">アプリ制作</a></li>
                            <li><a href="service-c.php">マーケティング</a></li>
                            <li><a href="service-d.php">ITスクール</a></li>
                            <li><a href="service-e.php">コンサルティング</a></li>
                            <li><a href="service-f.php">飲食業</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="contact.php"><li><span>CONTACT</span>お問い合わせ</li></a>
            </ul>
        </nav>
    </div>
</header>
<div class="block-main">
    <div class="main-left">
        <div class="company-name">
            <h1>株式会社HK ONLINE</h1>
        </div>
        <div class="about-title">
            <h1>About</h1>
            <h2>企業情報</h2>
        </div>
    </div>
    <div class="main-right">
        <div class="profile">
            <h3>会社概要</h3>
            <p>profile</p>
        </div>
        <table class="tb-about">
            <tr>
                <th>会社名</th>
                <td>株式会社HK ONLINE</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>本社：テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力
                    <br>支社：テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力</td> 
            </tr>
            <tr>
                <th>代表</th>
                <td>栗田　博朗</td>
            </tr>
            <tr>
                <th>連絡先</th>
                <td>000-0000-0000</td>
            </tr>
            <tr>
                <th>設立</th>
                <td>2022-01-01</td>
            </tr>
            <tr>
                <th>事業内容</th>
                <td>
                テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力
                テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力
                </td>
            </tr>
            <tr>
                <th>各種免許/資格</th>
                <td>
                テキスト入力テキスト入力テキスト入力テキスト入力
                </td>
            </tr>
        </table>
        <div class="access">
            <h3>アクセス</h3>
            <p>access</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.5080834896794!2d139.7035433!3d35.6398517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b39aebf8833%3A0xcbc08d469038b41a!2z44CSMTUzLTAwNjEg5p2x5Lqs6YO955uu6buS5Yy65Lit55uu6buS77yS5LiB55uu77yZ4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1655036965843!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<footer class="block-footer">
        <div class="policy">
            <a href="#">個人情報保護方針及び当社が扱う個人情報について</a>
            <a href="#">情報セキュリティ基本方針</a>
        </div>
        <p>©HK-online ALL RIGHTS RESERVED</p>
    </footer>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JS（slick） -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="slick.js"></script>
</body>
</html>