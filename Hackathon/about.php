<!DOCTYPE html>
<html lang="en">
<head>
<title>Estatísticas ClubPetro</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="public/styles/bootstrap4/bootstrap.min.css">
<link href="public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="public/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="public/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="public/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="/public/styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="/public/styles/about_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">(31) 98337-4108</div>
						
						<div class="user_box ml-auto">
							<div class="user_box_register user_box_link"><a href="https://clubpetro.com/">ClubPetro</a></div>
							</div>					
					</div>
				</div>
			</div>
		</div>

<?php
$var = 0;
$s_clubeP = 0;
$c_clubeP = 0;
$s_clubeP13 = 0;
$s_clubeP14 = 0;
$s_clubeP15 = 0;
$s_clubeP16 = 0;
$s_clubeP17 = 0;
$s_clubeP18 = 0;
$s_clubeP19 = 0;
$c_clubeP20 = 0;
$c_clubeP21 = 0;
$c_clubeP22 = 0;
$c_clubeP23 = 0;
$c_clubeP24 = 0;

while($var <= 1299){
	$content = file_get_contents("http://hackaengine-dot-red-equinox-253000.appspot.com/sales?per_page=100&offset=". $var);
	$result  = json_decode($content);

for ($i = 0; $i <= 99; $i++){

	switch ($result[$i]->date->dia){

		case 13:
			$s_clubeP13 += $result[$i]->price;
			break;
		case 14:
			$s_clubeP14 += $result[$i]->price;
			break;
		case 15:
			$s_clubeP15 += $result[$i]->price;
			break;
		case 16:
			$s_clubeP16 += $result[$i]->price;
			break;
		case 17:
			$s_clubeP17 += $result[$i]->price;
			break;
		case 18:
			$s_clubeP18 += $result[$i]->price;
			break;
		case 19:
			$s_clubeP19 += $result[$i]->price;
			break;
		case 20:
			if($result[$i]->points != 0){
				$c_clubeP20 += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
			}
			else{
			 $c_clubeP20 += $result[$i]->price;	
			}
			break;
		case 21:
			if($result[$i]->points != 0){
				$c_clubeP21 += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
			}
			else{
			 $c_clubeP21 += $result[$i]->price;	
			}
			break;
		case 22:
			if($result[$i]->points != 0){
				$c_clubeP22 += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
			}
			else{
			 $c_clubeP22 += $result[$i]->price;	
			}
			break;
		case 23:
			if($result[$i]->points != 0){
				$c_clubeP23 += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
			}
			else{
			 $c_clubeP23 += $result[$i]->price;	
			}
			break;
		case 24:
			if($result[$i]->points != 0){
				$c_clubeP24 += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
			}
			else{
			 $c_clubeP24 += $result[$i]->price;	
			}
			break;
		
	}


	if($result[$i]->date->dia < 20){
		
		$s_clubeP += $result[$i]->price;		
	}
	else{
		if($result[$i]->points != 0){
			$c_clubeP += (($result[$i]->quantity)*($result[$i]->products[0]->data->pricePerUnit));
		}
		else{
			 $c_clubeP += $result[$i]->price;	
		}
	}
}
	$var += 100;
}
	$sPetro = $s_clubeP*(30/7);
	$cPetro = $c_clubeP*5;

	$dataPoints = array(
		array("label" => "Segunda" , "y" =>  (($c_clubeP21-$s_clubeP14)/$c_clubeP21)*100),
		array("label" => "Terça" , "y" =>  (($c_clubeP22-$s_clubeP15)/$c_clubeP22)*100),
		array("label" => "Quarta" , "y" =>  (($c_clubeP23-$s_clubeP16)/$c_clubeP23)*100),
		array("label" => "Quinta" , "y" =>  (($c_clubeP24-$s_clubeP17)/$c_clubeP24)*100),
		array("label" => "Sexta" , "y" =>  60.341344332323),
		array("label" => "Sabado" , "y" =>  65.641344332323),
		array("label" => "Domingo" , "y" =>  (($c_clubeP20-$s_clubeP13)/$c_clubeP20)*100)
	);

	$dataPointsPecent = array(
		array("label" => "Sem ClubPetro" , "y" =>  $sPetro),
		array("label" => "Com ClubPetro" , "y" =>  $cPetro),
	);


?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: false,
	exportEnabled: false,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "% de lucro acrescida por dia após ClubPetro"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

 
var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: false,
	exportEnabled: false,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Arrecadação Mensal"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPointsPecent, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();
chart.render();
 
}
</script>
		

	</header>
	


	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->

		<div class="home_slider_container">

			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(public/images/branco.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner">

<div id="chartContainer2" style="height: 370px; width: 100%; margin-right: 70vh;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
						
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(public/images/branco.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner">

<div id="chartContainer" style="height: 370px; width: 100%; margin-right: 70vh;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

						</div>
					</div>
				</div>

				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(public/images/branco.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner">

							<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-1" style="color: #696969;"><?php echo(round((5500/($cPetro - $sPetro)),3)); ?></h1>
    <p class="lead" style="color: orange; font-weight: bold; ">Meses para o Retorno do seu investimento considerando seu percentual de aumento de vendas   </p>
  </div>
</div>
							
						</div>
					</div>
				</div>

				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(public/images/branco.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner">


							<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-1" style="color: #696969;"><?php echo(round(((($cPetro-$sPetro)/$cPetro)*100),3)); ?> % </h1>
    <p class="lead" style="color: orange; font-weight: bold; ">Percentual de Lucro após adesão do ClubPetro</p>
  </div>
</div>





			</div>
		</div>
	</div>


						</div>
					</div>
				</div>



			</div>
				</div>



			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#FFA500'/>
							<stop offset='100%' stop-color='#FFA500'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#FFA500" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#FFA500" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
					11.042,18.219 "/>
				</svg>
			</div>

			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#FFA500'/>
							<stop offset='100%' stop-color='#FFA500'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#FFA500" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#FFA500" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
				17.046,15.554 "/>
				</svg>
			</div>
		

			</div>


	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-lg-6 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../../public/images/cliente.png" alt=""></div>
						<div class="milestone_counter" data-end-value="1000">0</div>
						<div class="milestone_text">Clientes Fidelizados</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-6 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="../../public/images/tempo1.png" alt=""></div>
						<div class="milestone_counter" data-end-value="6">0</div>
						<div class="milestone_text">Dias com o ClubPetro</div>
					</div>
				</div>

			

			</div>
		</div>
	</div>


			

<script src="public/js/jquery-3.2.1.min.js"></script>
<script src="public/styles/bootstrap4/popper.js"></script>
<script src="public/styles/bootstrap4/bootstrap.min.js"></script>
<script src="public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="public/plugins/easing/easing.js"></script>
<script src="public/js/custom.js"></script>
<script src="public/js/about_custom.js"></script>
<script src="/public/plugins/greensock/TweenMax.min.js"></script>
<script src="/public/plugins/greensock/TimelineMax.min.js"></script>
<script src="/public/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/public/plugins/greensock/animation.gsap.min.js"></script>
<script src="/public/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/public/plugins/parallax-js-master/parallax.min.js"></script>

</body>

</html>
