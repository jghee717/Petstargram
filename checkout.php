<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>어서오시개 | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" 어서오시개 | eCommerce Template">
	<meta name="keywords" content="어서오시개, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on 어서오시개 ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="./login.php">로그인</a> / <a href="./register">회원가입</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="./cart.php">쇼핑카트</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- 산책 같이해요u -->
				<ul class="main-menu">
					<li><a href="#">용품/사료</a>
						<ul class="sub-menu">
							<li><a href="./category.php">새 상품</a></li>
							<li><a href="#">중고 상품</a></li>
						</ul>
					</li>
					<li><a href="./board.php">강아지를 부탁해</a>
						<ul class="sub-menu">
							<li><a href="./board.php">동물병원/예방접종</a></li>
							<li><a href="./board.php">애견 카페</a></li>
							<li><a href="./board.php">애견 미용실</a></li>
					</ul>
					<li><a href="#">산책 같이해요</a></li>
					<li><a href="#">강아지 분양</a>
						<ul class="sub-menu">
							<li><a href="#">입양</a></li>
							<li><a href="#">분양</a></li>
						</ul>
					</li>
					<li><a href="#">펫시터 예약</a>
						<ul class="sub-menu">
							<li><a href="#">위탁 펫시터</a></li>
							<li><a href="#">방문 펫시터</a></li>
						</ul>
					</li>
					<li><a href="./dogstagram.php">도그스타그램</a></li>
					<li><a href="#">강아지 Q&A</a></li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.php">Product Page</a></li>
							<li><a href="./category.php">Category Page</a></li>
							<li><a href="./cart.php">Cart Page</a></li>
							<li><a href="./checkout.php">Checkout Page</a></li>
							<li><a href="./contact.php">Contact Page</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form">
						<div class="cf-title">배송 주소지</div>
						<div class="row">
							<div class="col-md-7">
								<p>*배송정보</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">기본 주소</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">다른 주소지</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<h4 class="p-title">상품명 <span>네츄럴코어 홀리스틱 베네 M32 멀티프로테인 7.2kg</span></h4></br>
								<h4 class="p-price">상품수량 <span>1개</span></h4><br>
								<input type="text" placeholder="Address">
								<input type="text" placeholder="Address line 2">
								<h5 class="p-stock">총결제금액 <span>103,000원</span></h5>
							</div>
						</div>
						<div class="cf-title">배달 정보</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>일반배송</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">0원</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>빠른배송</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">5000원</label>
									</div>
								</div>
							</div>
						</div>
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<div class="cf-title">결제방법</div>
						<ul class="payment-list">
						<li id="cardPayBox" class="type-selector-li">
                    <input class="type-selector-radio" type="radio" name="payType" id="payType1" value="CARD">
                    <label class="type-selector-label" for="payType1">
                        <span class="type-selector-label__text">신용/체크카드</span>
                    </label>
                </li>
				<li id="phonePayBox" class="type-selector-li">
                        <input class="type-selector-radio" type="radio" name="payType" id="payType6" value="PHONE">
                        <label class="type-selector-label" for="payType6">
                            <span class="type-selector-label__text">휴대폰</span>
                        </label>
                    </li>
					<li id="virtualAccountPayBox" class="type-selector-li">
                <input class="type-selector-radio" type="radio" name="payType" id="payType7" value="VIRTUALACCOUNT">
                <label class="type-selector-label" for="payType7">
                    <span class="type-selector-label__text">무통장입금(가상계좌)</span>
                </label>
            </li>
			<!-- 카드결제 시작 -->
			 <div id="payTypeContent" class="pay-box-contents">

                            <div class="cardPayBox pay-box-content">
                                <h3 class="title">신용카드</h3>

			<div class="card-payment pay-type-content"
				 data-controller="CardPayment"
				 data-controller-data='{
					 "cardHubMode" : true,
					  "installmentsConditions" : "50000",
					 "savedCardId" : "",
					 "hasCoupangGiftCardDeal": false,
					  "cardPaymentPriceLimit" : "100"
			  }'>
	<ul class="pay-type-sections">
		<li class="pay-type-section">
			<label for="cardTypeSelect" class="line-title">카드종류</label>
			<div class="line-data">
				<select name="cardCode" id="cardTypeSelect">
					<option value="" selected data-limitmsg="">선택</option>

                        <option value="BC"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">BC카드</option>

                        <option value="SHINHAN"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">신한카드</option>

                        <option value="KB"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">KB국민카드</option>

                        <option value="SAMSUNG"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="24">삼성카드</option>

                        <option value="HYUNDAI"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">현대카드</option>

                        <option value="LOTTE"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">롯데카드</option>

                        <option value="HANA_SK"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">하나카드</option>

                        <option value="NH"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">NH농협카드</option>

                        <option value="CITY"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">씨티카드</option>

                        <option value="WOORI"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">우리카드</option>

                        <option value="KakaoBank"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">카카오뱅크카드</option>

                        <option value="K bank"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">케이뱅크카드</option>

                        <option value="JEONBUK"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">전북은행카드</option>

                        <option value="COMMUNITY_CREDIT_COOPERATIVES"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">새마을금고카드</option>

                        <option value="ETC"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false" data-maxInstallmentMonth="12">기타(은행/증권)카드</option>

				</select>
				<span class="note-message">* Mac 환경에서도 신용카드 결제가 가능합니다.</span>
				<p class="validate-message"></p>
                <p class="pay-box__deactivated-payment-notice" id="cardPayTypeLimitMsg"></p>

			</div>
		</li>
	</ul>
</div>
<!-- 카드결제 끝 -->
<!-- 핸드폰결제 -->
<div class="phonePayBox pay-box-content">
                                <h3 class="title">휴대폰</h3>

<div class="cellphone-payment pay-type-content"
	 data-controller="CellphonePayment"
	 data-controller-data='{
    }'>
    <ul class="pay-type-sections">
        <li class="pay-type-section last-section" data-pay-type-section="cellphone">
            <label for="cellphoneTelecom" class="payment-cellphone__line-title">통신사 종류</label>
            <div class="payment-cellphone__line-data">
                <select name="cellphoneTelecom" id="cellphoneTelecom" class="payment-cellphone__select">
                    <option value="" selected>선택</option>

                        <option value="SKT"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">SKT</option>

                        <option value="KT"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">KT</option>

                        <option value="LG"
                            data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">LG</option>

                </select>
                <p class="payment-cellphone__validate-message">통신사 정보를 추가해주세요</p>
                <p class="payment-cellphone__validate-message--invalid limit-pay-price-message">50만원 초과 결제 시, 휴대폰 결제가 불가합니다.</p>
            </div>
            <p class="pay-box__deactivated-payment-notice" id="phonePayTypeLimitMsg"></p>

        </li>
    </ul>
</div>
</div>
<!-- 핸드폰결제 끝 -->
<!-- 무통장입금 -->
<div class="virtualAccountPayBox pay-box-content selected-pay-type">
                            <h3 class="title">무통장입금(가상계좌)</h3>

<div class="virtual-account-payment pay-type-content"
     data-controller="vaPayment"
     data-controller-data='{
        "savedBankKcpCode" : ""
    }'>
    <p class="validate-message"></p>
    <ul class="pay-type-sections">
        <li class="deposit-bank-wrap pay-type-section">
            <label for="depositBank" class="line-title">입금은행</label>
            <div class="line-data">
                <select id="depositBank" class="" name="depositBank">
                    <option value="" selected="" data-limitmsg="">선택</option>
                            <option value="NH"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">농협은행</option>
                            <option value="KB"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">국민은행</option>
                            <option value="SHINHAN"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">신한은행</option>
                            <option value="WOORI"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">우리은행</option>
                            <option value="HANA"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">KEB하나은행</option>
                            <option value="IBK"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">기업은행</option>
                            <option value="DAEGU"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">대구은행</option>
                            <option value="BUSAN"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">부산은행</option>
                            <option value="POST_OFFICE"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">우체국</option>
                            <option value="KYONGNAM"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">경남은행</option>
                            <option value="KWANGJU"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">광주은행</option>
                            <option value="SC"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">SC제일은행</option>
                            <option value="SUHYUB"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">수협은행</option>
                            <option value="CITI"
                                data-limitmsg="" data-messagecolor="" data-paymentdisabled="false">씨티은행</option>
                </select>
                <p class="validate-message"></p>
                <p class="pay-box__deactivated-payment-notice" id="virtualAccountPayTypeLimitMsg"></p>
            </div>
        </li>
        <li class="pay-type-explain">
            <p class="cash-receipt-explain">* 현금으로 결제한 모든 금액은 우리은행과 채무지급보증계약을 체결하여 고객님의 안전거래를 보장하고 있습니다.</p>
        </li>
    </ul>
</div>
<dl class="virtual-account-payment-explain">
    <dt>무통장입금 시 유의사항</dt>
    <dd>입금완료 후 상품품절로 인해 자동취소된 상품은 환불 처리해 드립니다.</dd>
    <dd>무통장입금 결제 시 부분취소가 불가하며 전체취소 후 다시 주문하시기 바랍니다.</dd>
    <dd>은행 이체 수수료가 발생될 수 있습니다. 입금시 수수료를 확인해주세요.</dd>
</dl>
                        </div>
<!-- 무통장입금 끝 -->
</div>
</div>
						</ul>

						</div>
				</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>장바구니</h3>
						<ul class="product-list">
							<li>
								<div class="pl-thumb"><img src="img/cart/1.jpg" alt=""></div>
								<h6>냠냠간식</h6>
								<p>23,000원</p>
							</li>
							<li>
								<div class="pl-thumb"><img src="img/cart/2.jpg" alt=""></div>
								<h6>냠냠사료</h6>
								<p>46,000원</p>
							</li>
						</ul>
						<ul class="price-list">
							<li>Total<span>69,000원</span></li>
							<li>Shipping<span>0원</span></li>
							<li class="total">Total<span>69,000원</span></li>
						</ul>
					</div>
				</div>
				</form>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
