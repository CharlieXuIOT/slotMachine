<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buy</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fronted/style.css" rel="stylesheet">
    <link href="css/fronted/top.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Slot Machine</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="game">遊戲介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy" id="navBuy" style="display:none">購點 / 儲值</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">客服中心</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" id="navLogin" style="display:none">登入會員</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register" id="navRegister" style="display:none">註冊帳號</a>
                    </li>

                    {{-- 登入成功才會顯示的下拉式選單 --}}
                    <li class="nav-item dropdown" id="navAccount" style="display:none">
                        <a class="nav-link dropdown-toggle" href=".dropdown-menu" id="navbardrop"
                            data-toggle="dropdown">
                            使用者帳號
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="update">更改個人資料</a>
                            <a class="dropdown-item" href="#" id="navLogout">登出</a>
                        </div>
                    </li>
                    {{-- 登入成功才會顯示的下拉式選單 --}}

                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="position:relative">
        {{-- <h2 class="mt-4 mb-3">購點儲值</h2> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">首頁</a>
            </li>
            <li class="breadcrumb-item active">購點儲值</li>
        </ol>
        <div>
            <p>儲值方法</p>
        </div>
    
        <nav class="navbar navbar-expand-lg">
            <div>
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#jkopay" data-toggle="tab"><img src="img\fronted\buy\jkopay.png" alt=""></a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#visa" data-toggle="tab"><img src="img\fronted\buy\visa.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#atm" data-toggle="tab" ><img src="img\fronted\buy\ATM.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cht" data-toggle="tab"><img src="img\fronted\buy\CHT.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#farpass" data-toggle="tab"><img src="img\fronted\buy\FarPass.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#taiwanmobile" data-toggle="tab"><img src="img\fronted\buy\TaiwanMobile.png" alt=""></a>
                </li>
            </ul>
        </div>
        </nav>
    
        {{-- 用js更改敘述內容 --}}
    
        <div class="tab-content">
            {{-- 街口支付 --}}
            <div id="jkopay" class="tab-pane fade show active">
                <form action="" >
                    <div>街口支付</div>
                    <div>
                        <p id="buyDesc">使用街口支付App掃描網頁內付款QRCode碼，並以「街口帳戶」餘額付款或連結「銀行帳戶」付款</p>
                    </div>
    
                    <div>
                        <div style="width:50%;float:left">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th style="text-align: center">價格</th>
                                    <th style="text-align: center">點數</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="radio" name="price" id="jko100"><label for="jko100">NT$ 100</label></td>
                                    <td><label for="jko100">貝殼幣 × 140</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko250"><label for="jko250">NT$ 250</label></td>
                                    <td><label for="jko250">貝殼幣 × 350</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko500"><label for="jko500">NT$ 500</label></td>
                                    <td><label for="jko500">貝殼幣 × 700</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko1000"><label for="jko1000">NT$ 1000</label></td>
                                    <td><label for="jko1000">貝殼幣 × 1400</label></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="jko2500"><label for="jko2500">NT$ 2500</label></td>
                                    <td><label for="jko2500">貝殼幣 × 3500</label></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
    
                        <div style="width:50%;float:left">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="2">確認購買內容</th>
                                </tr>
                                 </thead>
                                 <tbody>
                                <tr>
                                    <td>商品</td>
                                    <td>貝殼幣 × 140</td>
                                </tr>
                                <tr>
                                    <td>價格</td>
                                    <td>NT$ 100</td>
                                </tr>
                                <tr>
                                    <td>付費方式</td>
                                    <td>街口支付</td>
                                </tr>
                                <tr>
                                <td colspan="2">
                                
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="agree" onclick="asd()">
                                        <label class="form-check-label" for="agree">
                                            我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                                        </label>
                                    </div>  
                                <button class="btn btn-primary btn-lg btn-block " disabled>同意</button>
                                </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- <div style="width:50%;float:left">
                            <img src="img\fronted\buy\jkoQR.png" alt="">
                        </div> --}}
                    </div>
                </form>
            </div>
    
    
            {{-- VISA --}}
            <div id="visa" class="tab-pane fade">
                <div>
                    <div>
                        <p id="buyDesc">使用VISA或MASTER 3D驗證信用卡，享受最便利又安全的儲值體驗。</p>
                    </div>
    
                    <div style="width: 100%; flex: 0 1 auto;">
                        <div style="width:50%;float:left">
                            <table id="buyPlan">
                                <tr>
                                    <th>價格</th>
                                    <th>點數</th>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="">NT$ 100</td>
                                    <td>貝殼幣 × 140</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="">NT$ 250</td>
                                    <td>貝殼幣 × 350</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="">NT$ 500</td>
                                    <td>貝殼幣 × 700</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="">NT$ 1000</td>
                                    <td>貝殼幣 × 1400</td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="price" id="">NT$ 2500</td>
                                    <td>貝殼幣 × 3500</td>
                                </tr>
                            </table>
                        </div>
    
                        <div style="width:50%;float:left">
                            <table>
                                <tr>
                                    <th>新增信用卡</th>
                                </tr>
                                <tr>
                                    <td>商品</td>
                                    <td>貝殼幣 × 140</td>
                                </tr>
                                <tr>
                                    <td>價格</td>
                                    <td>NT$ 100</td>
                                </tr>
                                <tr>
                                    <td>付費方式</td>
                                    <td>街口支付</td>
                                </tr>
                            </table>
                            <input type="checkbox" id="agree">
                            <label for="agree">
                                我同意會員系統服務合約、個人資料隱私權保護政策未滿20歲之消費者，
                                應由法定代理人閱讀並同意上述合約後，方得使用本儲值服務。
                            </label>
                            <br>
                            <button id="zxcv">同意</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>




    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <footer class="py-1 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Slot Machine 2019</p><br>
            {{-- <p class="m-0 text-center"><a href="#" class="text-white">Back to top</a></p> --}}
        </div>
    </footer>
    <script>
    function asd(){
        $("#zxcv").button('toggle')
    }
        
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js">
    {{-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/fronted/top.js"></script>

</body>

</html>