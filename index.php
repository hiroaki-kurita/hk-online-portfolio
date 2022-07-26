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
    <link rel="stylesheet" href="style.css">
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
            <h2>HK ONLINEがお客様と共に伴走し<br>多角的に事業拡大をサポートします</h2>
            <p>
                HP制作、アプリ制作をはじめとするさまざまな分野でお客様の事業をサポートし、共に事業拡大を目指します。
            </p>
        </div>
        <div class="main-right">
            <div class="slider">
                <ul class="slider-image">
                    <li><a href="service-a.php"><img src="img/apply.jpg" alt=""></a></li>
                    <li><a href="service-b.php"><img src="img/fellow.jpg" alt=""></a></li>
                    <li><a href="service-c.php"><img src="img/native.jpg" alt=""></a></li>
                    <li><a href="service-d.php"><img src="img/seo.jpg" alt=""></a></li>
                    <li><a href="service-e.php"><img src="img/school.jpg" alt=""></a></li>
                    <li><a href="service-f.php"><img src="img/contact.jpg" alt=""></a></li>
                </ul>
                <div class="slider-sub">
                    <a href="service-a.php" class="text-box">
                        <h3>Web制作</h3>
                        <p>お客様の要望に沿ったLPやHPの作成や保守運用も承っています。</p>
                    </a>
                    <a href="service-b.php" class="text-box">
                        <h3>アプリ制作</h3>
                        <p>簡易的なアプリから大型のプロジェクト案件まで、幅広く対応しております。</p>
                    </a>
                    <a href="service-c.php" class="text-box">
                        <h3>マーケティング広告</h3>
                        <p>お客様の事業に応じた適切な広告運用をサポートさせていただきます。</p>
                    </a>
                    <a href="service-d.php" class="text-box">
                        <h3>ITスクール</h3>
                        <p>多種多様な言語を学ぶ場と実績豊富な講師陣をご用意しています。</p>
                    </a>
                    <a href="service-e.php" class="text-box">
                        <h3>経営コンサルティング</h3>
                        <p>経営状況に応じた適切なアドバイスを行い、共に事業を作っていきます。</p>
                    </a>
                    <a href="service-f.php" class="text-box">
                        <h3>飲食業</h3>
                        <p>飲食を通して、人と人の交流を活発にするため、目黒区にカフェの運営をしております。</p>
                    </a>
                </div>
            </div>
            <div class="item-bar">
                <div class="item-first">
                    <div class="application-development">
                        <a href="service-a.php">
                            <img src="img/iphone.png" alt="iphoneロゴ">
                            <h3>Web制作</h3>
                            <p>お客様の要望に沿ったLPやHPの作成や保守運用も承っています。</p>
                        </a>
                    </div>
                    <div class="it-school">
                        <a href="service-b.php">
                            <img src="img/div.png" alt="iphoneロゴ">
                            <h3>アプリ制作</h3>
                            <p>簡易的なアプリから大型のプロジェクト案件まで、幅広く対応しております。</p>
                        </a>
                    </div>
                    <div class="native-application-development">
                        <a href="service-c.php">
                            <img src="img/iphone02.png" alt="iphoneロゴ">
                            <h3>マーケティング広告</h3>
                            <p>お客様の事業に応じた適切な広告運用をサポートさせていただきます。</p>
                        </a>
                    </div>
                </div>
                <div class="item-second">
                    <div class="bpo">
                        <a href="service-d.php">
                            <img src="img/pc.png" alt="iphoneロゴ">
                            <h3>ITスクール</h3>
                            <p>多種多様な言語を学ぶ場と実績豊富な講師陣をご用意しています。</p>
                        </a>
                    </div>
                    <div class="seo">
                        <a href="service-e.php">
                            <img src="img/graph.png" alt="iphoneロゴ">
                            <h3>経営コンサルティング</h3>
                            <p>経営状況に応じた適切なアドバイスを行い、共に事業を作っていきます。</p>
                        </a>
                    </div>
                    <div class="food">
                        <a href="service-f.php">
                            <img src="img/cooking.png" alt="iphoneロゴ">
                            <h3>飲食業</h3>
                            <p>飲食を通して、人と人の交流を活発にするため、目黒区にカフェの運営をしております。</p>
                        </a>
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