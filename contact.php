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
<link rel="stylesheet" href="style-contact.css">
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
                            <a href="service-c.php" style="font-size: 12px;color:whitesmoke;">マーケティング広告</a>
                            <a href="service-d.php" style="font-size: 12px;color:whitesmoke;">ITスクール</a>
                            <a href="service-e.php" style="font-size: 12px;color:whitesmoke;">経営コンサルティング</a>
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
                            <li><a href="service-c.php">マーケティング広告</a></li>
                            <li><a href="service-d.php">ITスクール</a></li>
                            <li><a href="service-e.php">経営コンサルティング</a></li>
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
        <div class="contact-title">
            <h1>Contact</h1>
            <h2>お問い合わせ</h2>
        </div>
    </div>
    <div class="main-right">
        <div class="wpcf7-form">
            <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
                <h1 class="contact-title">お問い合わせ 内容入力</h1>
                <p class="contact-title">お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
                <div>
                    <div class="name">
                        <label>お名前<span>必須</span></label>
                        <input type="text" name="name" placeholder="例）山田太郎" value="">
                    </div>
                    <div class="furigana">
                        <label>ふりがな<span>必須</span></label>
                        <input type="text" name="furigana" placeholder="例）やまだたろう" value="">
                    </div>
                    <div class="mail">
                        <label>メールアドレス<span>必須</span></label>
                        <input type="text" name="email" placeholder="例）guest@example.com" value="">
                    </div>
                    <div class="phone">
                        <label>電話番号<span>必須</span></label>
                        <input type="text" name="tel" placeholder="例）0000000000" value="">
                    </div>
                    <div class="sex">
                        <label>性別<span>必須</span></label>
                        <input type="radio" name="sex" value="男性" checked> 男性
                        <input type="radio" name="sex" value="女性"> 女性
                    </div>
                    <div>
                        <label>お問い合わせ項目<span>必須</span></label>
                        <select name="item">
                            <option value="">お問い合わせ項目を選択してください</option>
                            <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                            <option value="ご意見・ご感想">ご意見・ご感想</option>
                        </select>
                    </div>
                    <div class="contact-text">
                        <label>お問い合わせ内容<span>必須</span></label>
                        <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                    </div>
                </div>
            </form>
            <button type="submit">確認画面へ</button>
            <p>を押した後は、画面が切り替わるまでしばらくお待ちください。</p>
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