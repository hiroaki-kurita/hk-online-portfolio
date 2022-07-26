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
    <link rel="stylesheet" href="style-service.css">
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
<!-- メインエリア -->
<div class="block-main">
    <div class="main-left">
        <h1>株式会社HK ONLINE</h1>
        <div class="contact-title">
            <h1>Service</h1>
            <h2>マーケティング</h2>
        </div>
    </div>
    <div class="main-right">
        <div class="service-first">
            <a href="service-a.php"><h4>Web制作</h4></a>
            <a href="service-b.php"><h4>アプリ制作</h4></a>
            <a href="service-c.php"><h4>マーケティング</h4></a>
        </div>
        <div class="service-second">
            <a href="service-d.php"><h4>ITスクール</h4></a>
            <a href="service-e.php"><h4>コンサルティング</h4></a>
            <a href="service-f.php"><h4>飲食業</h4></a>
        </div>
        <div class="service-image">
            <img src="img/iphone.png" alt="">
        </div>
        <h3>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 </h3>
        <div class="check-content">
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
            <div class="check">
                <img src="img/check.jpg" alt="">
                <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
            </div>
        </div>
        <div class="service-flow">
            <div class="service-title">
                <h3>制作ワークフロー</h3>
                <p>flow</p>
            </div>
            <div class="flow1">
                <div class="flow-number">
                    <h4>POINT<br>1</h4>
                </div>
                <div class="flow-detail">
                    <h4>要件定義</h4>
                    <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
                </div>
            </div>
            <div class="flow2">
                <div class="flow-number">
                    <h4>POINT<br>2</h4>
                </div>
                <div class="flow-detail">
                    <h4>環境分析</h4>
                    <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
                </div>
            </div>
            <div class="flow3">
                <div class="flow-number">
                    <h4>POINT<br>3</h4>
                </div>
                <div class="flow-detail">
                    <h4>ポジショニング設定</h4>
                    <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
                </div>
            </div>
            <div class="flow4">
                <div class="flow-number">
                    <h4>POINT<br>4</h4>
                </div>
                <div class="flow-detail">
                    <h4>STP分析</h4>
                    <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
                </div>
            </div>
            <div class="flow5">
                <div class="flow-number">
                    <h4>POINT<br>5</h4>
                </div>
                <div class="flow-detail">
                    <h4>3C分析</h4>
                    <p>テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力テキスト入力 テキスト入力テキスト入力テキスト入力</p>
                </div>
            </div>
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