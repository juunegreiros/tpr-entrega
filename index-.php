<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ViaMaker</title>
	
	<link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
	<header>
		<img src="./images/circulos.png" alt="" class="bg-circles">
		<img src="./images/top-base.png" alt="" id="top-base" class="img--center">
		<img src="./images/logo.png" alt="" class="img--center logo--top">
		<h1 class="salvar-vida">Pronto para salvar uma vida?</h1>
		<img src="./images/seta.png" alt="" class="arrow-base">
	</header>
	<section id="path">
		<object type="image/svg+xml" data="./images/robo-trilha.svg" id="robot-path">
			Robot path
		</object>
		<div class="info-container" id="o-que-esperar">
			<img src="./images/lightcircle.png" alt="">
			<div class="content-block">				
				<div class="info-title">
					<h2>O que esperar do 3 TPR?</h2>
				</div>
				<div class="info-content">
					<p>O objetivo do torneio é preparar as equipes das escolas parceiras ViaMaker para participarem da Olimpíada Brasileira de Robótica (OBR).</p>
				</div>
			</div>
		</div>
		<div class="info-container" id="vamos-la">
			<img src="./images/lightcircleblue.png" alt="">
			<div class="content-block small">				
				<div class="info-title large">
					<h2>Vamos lá</h2>
				</div>
				<div class="info-content">
					<p>Neste desafio, os alunos devem construir e programar um robô de resgate totalmente autônomo que seja capaz de resgatar vítimas em um ambiente hostil e inabitável ao ser humano.</p>
				</div>
			</div>
		</div>
		<div class="info-container" id="cuidado">
			<img src="./images/cuidado.png" alt="">
			<div class="content-block without-bg">				
				<h2 class="title">Cuidado</h2>
				<p class="content"><span>Gap: </span>os gaps são descontinuidades onde o robô não consegue distinguir a trilha.</p>
			</div>
		</div>
		<div class="info-container" id="desafios">
			<img src="./images/desafios.png" alt="">
			<div class="content-block without-bg">
				<h2 class="title">Desafios</h2>
				<p class="content"><span>Obstáculos: </span>Os obstáculos são barreiras impossíveis de serem superadas e que, portanto, o robô deve desviar e conseguir encontrar a linha após ele.</p>
			</div>
		</div>
		<div class="info-container" id="quase-la">
			<img src="./images/quase-la.png" alt="">
			<div class="content-block without-bg">
				<h2 class="title">Quase lá</h2>
				<p class="content"><span>Redutores de velocidade: </span>Sinuosidades que atrapalham o caminho do robô.</p>
			</div>
		</div>
		<div class="info-container" id="mas-antes">
			<img src="./images/lightcirclesmall.png" alt="">
			<div class="content-block small">
				
				<div class="info-title large">
					<h2>Mas antes</h2>
				</div>
				<a href="/images/regras.pdf" download class="download-link btn">Confira nossas regras!</a>
			</div>
		</div>
		<div class="info-container show-content" id="final-resgate">
			<img src="./images/engrenagem.png" alt="">
			<div class="content-block front">
				
				<h2 class="text-center">O Grande Resgate</h2>
				<p class="text-center">Área segura onde cada vítima deve ser alocada.</p>
				
				<button type="button" class="btn btn-tpr" data-toggle="modal" data-target="#mentormodal">
					Clique aqui
				</button>
			</div>
		</div>
		<div class="modal fade" id="mentormodal" tabindex="-1" role="dialog" aria-labelledby="mentormodalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<img src="./images/close.png" alt="">
						</button>
						<div class="content">
							<img src="./images/marcelo-tas.png" alt="" class="mentor">
							<div class="info">
								<h2 class="title">
									Mentor <br>
									<span>Marcelo Tas</span>
								</h2>
								<p>Diretor, jornalista, apresentador de televisão, escritor, ator e roteirista brasileiro</p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="video-section">
		<img src="./images/line.png" alt="" class="divisor">
		<div class="video-container">
			<div class="video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/By3HeHmkg9Y?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen id="video"></iframe>
			</div>
			<div class="image">
				<img src="./images/video-image.png" alt="" class="video-thumb">
				<img src="./images/video-retangle.png" alt="" class="video-frame">
				<a role="button" class="video-play" id="play-video">
					<img src="./images/video.png" alt="" class="play">
				</a>
			</div>
			
		</div>
	</section>
	<section class="ranking">
		<div class="container">
			<h3 class="text-center ranking-title">Ranking | 2017</h3>
			<div class="row">
				<div class="col-sm-4 col-xs-12 rank">
					<img src="./images/tecnometa.png" alt="" class="rank2">
					<img src="./images/rank-border-second.png" alt="" class="frame2">
					<p class="team2">Tecnometa</p>
					<img src="./images/posit2.png" alt="" class="position2"></img>
					<div class="school2">
						<span class="points">440P</span>
						<span class="school">Colégio Meta II</span>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12 rank">
					<img src="./images/bazinga2.png" alt="" class="rank1">
					<img src="./images/rank-border-orange.png" alt="" class="frame1">
					<p class="team1">Bazinga 2</p>
					<img src="./images/posit1.png" alt="" class="position1"></img>
					<div class="school1">
						<span class="points">455P</span>
						<span class="school">Colégio Indaiatuba</span>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12 rank">
					<img src="./images/serbotic.png" alt="" class="rank3">
					<img src="./images/rank-border.png" alt="" class="frame3">
					<p class="team3">Ser Botic'S3</p>
					<img src="./images/posit3.png" alt="" class="position3"></img>
					<div class="school3">
						<span class="points">370P</span>
						<span class="school">SER Campinas</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="./images/gallery3.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="./images/gallery2.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="./images/gallery1.png" alt="">
				</div>
			</div>
			<img src="./images/arrow-left.png" alt="" class="btn-slider btn-prev">
			<img src="./images/arrow-right.png" alt="" class="btn-slider btn-next">
		</div>
	</section>
	<footer>
		<div class="container">
			<img src="./images/robo.png" alt="" class="robo-footer">
			<div class="logo-text">
				<img src="./images/viamaker-logo.png" alt="" class="viamaker-logo">
				<p class="footer-text">
					A VIAMAKER é uma empresa brasileira com atuação em todo território nacional e especializada em integrar novas tecnologias à educação. Através da robótica, dentro de nossa metodologia, fornecemos subsídios tecnológicos e psicopedagógicos para preparar o aluno para resolver problemas, de forma independente ou em equipe, e propomos, além de ser usuário, que ele seja também construtor de tecnologia, seja qual for a profissão que escolha.
				</p>
			</div>
			<span class="eaglex-copyright">Desenvolvido <img src="./images/eaglelogo.png" alt="" class="eaglex-logo"></span>
		</div>
	</footer>
	<script src="./scripts/jquery.min.js"></script>
	<script src="./scripts/bootstrap.bundle.min.js"></script>
	<script src="./scripts/swiper.min.js"></script>
	<script>
		$(function(){
			var swiper = new Swiper('.swiper-container', {
				slidesPerView: 3,
				spaceBetween: 0,
				slidesPerGroup: 1,
				loop: true,
				loopFillGroupWithBlank: true,
			});
			$('.btn-next').on('click',function(){
				swiper.slideNext();
			});
			$('.btn-prev').on('click',function(){
				swiper.slidePrev();
			});
			
			$('#play-video').on('click', function(){
				$('#video-section .video').css('opacity', '1');
				var src = $('#video-section .video iframe').attr('src');
				$('#video-section .video iframe').attr('src', src + '&autoplay=1');
				$('#video-section .image').css('opacity', '0');
				$('#video-section .image').css('display', 'none');
			})

			$(window).on('scroll', function(){
				if(scrollY > 400){
					$('#o-que-esperar').addClass('show-content');
				} else{
					$('#o-que-esperar').removeClass('show-content');
				}
				if(scrollY > 800){
					$('#vamos-la').addClass('show-content');
				} else{
					$('#vamos-la').removeClass('show-content');
				}
				if(scrollY > 1000){
					$('#cuidado').addClass('show-content');
				} else{
					$('#cuidado').removeClass('show-content');
				}
				if(scrollY > 1300){
					$('#desafios').addClass('show-content');
				} else{
					$('#desafios').removeClass('show-content');
				}
				if(scrollY > 1800){
					$('#quase-la').addClass('show-content');
				} else{
					$('#quase-la').removeClass('show-content');
				}
				if(scrollY > 2200){
					$('#mas-antes').addClass('show-content');
				} else{
					$('#mas-antes').removeClass('show-content');
				}
			});
		});
	</script>
</body>	
</html>