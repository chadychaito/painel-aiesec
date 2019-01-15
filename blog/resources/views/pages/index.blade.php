
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Conheça Sorocaba</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/aiesec-style.css"/>


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
				<div class="header-social">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>,
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
				<div class="user-panel">
					<a href="/login">Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
					<ul class="main-menu">
					<li><a href="#home">Home</a></li>
					<li><a href="#pnt">Pontos Atrativos</a></li>
					<li><a href="#projetos">Projetos</a></li>
					<li><a href="#ong">Ongs</a></li>
					<li><a href="#faq">FAQ</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	

	<!-- Hero section -->
	<section id="home" class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-1.png">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Algums fotos da AIESEC TRABS VOLUNTARIOS</span></h2>
					<h2 class="hs-title-2"><span>from the best chefs</span></h2>
					<h2 class="hs-title-3"><span>for all the foodies</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-2.png">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Healthy Recipes</span></h2>
					<h2 class="hs-title-2"><span>from the best chefs</span></h2>
					<h2 class="hs-title-3"><span>for all the foodies</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Recipes section -->
	<section id="pnt" class="recipes-section spad">
		<div class="container">
			<div class="section-title">
				<h2>PONTOS ATRATIVOS</h2>
			</div>
			<div class="row">
				@foreach($atrativos as $atrativo)
				<div class="col-lg-4">
					<div class="sp-blog-item">
						<div class="blog-thubm">
							<img src="storage/pontos/{{$atrativo->id}}.jpeg" alt="{{$atrativo->nome}}">
							<div class="blog-date">
								<span>{{$atrativo->nome}}</span>
							</div>
						</div>
						<div class="blog-text">
							<h5>{{$atrativo->endereco}}</h5>
							<p>{{$atrativo->descricao}} </p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Recipes section end -->

	<!-- Review section end -->
	<section class="review-section" id="projetos">
		<h1 class="text-center">Projetos</h1>
		<div class="container">
			<div class="row">
				@foreach($projetos as $projeto )
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="storage/projetos/{{$projeto->id}}.jpeg">
							<div class="review-date">
								<span>{{$projeto->nome}}</span>
							</div>
						</div>
						<div class="review-text">
							<p>{{$projeto->descricao}}</p>
							<h6>{{$projeto->cnpj}}</h6>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Review section end -->

	<!-- Recipes section -->
	<section class="recipes-page spad" id="ong">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="section-title">
						<h2>ONGS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($ongs as $ong)
				<div class="col-lg-4 col-md-6">
					<div class="recipe">
						<img src="storage/ongs/{{$ong->id}}.jpeg" alt="{{$ong->nome}}">
						<div class="recipe-info-warp">
							<div class="recipe-info">
								<h3>{{$ong->nome}}</h3>
								<div class="telefone">
									{{$ong->telefone}}
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Recipes section end -->

	<section id="faq"class="add-section spad pt-0">
		<div class="container">
			<div class="section-title">
				<h2>FAQ</h2>
			</div>
			<div class="faq-list">
				<div class="accordion" id="accordionExample">
					@foreach ($faqs as $faq)
					<div class="card">
						<div class="card-header" id="heading{{$faq->id}}">
							<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$faq->id}}" aria-expanded="true" aria-controls="collapse{{$faq->id}}">
								{{$faq->pergunta}}
							</button>
							</h5>
						</div>
						<div id="collapse{{$faq->id}}" class="collapse" aria-labelledby="heading{{$faq->id}}" data-parent="#accordionExample">
							<div class="card-body">
								{{$faq->resposta}}
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>		
		</div>					
	</section>


	<!-- Gallery section -->
	<div id="cont" class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/6.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/7.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/8.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->

	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
				    <li><a href="#home">Home</a></li>
					<li><a href="#pnt">Pontos Atrativos</a></li>
					<li><a href="#projetos">Projetos</a></li>
					<li><a href="#ong">Ongs</a></li>
					<li><a href="#faq">FAQ</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Edited by <a href="http://github.com/chadychaito" target="blank">Chady Chaito</a>.
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>