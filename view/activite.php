<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Equip A Officielle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
		function myFunction() {
		    var x = document.getElementById("demo");
		    x.style.fontSize = "25px";           
		    x.style.color = "red"; 
		}

		function changestyle(){
			var fontstyle = document.getElementById("myid");
			fontstyle.style.fontSize = "22px";
			fontstyle.style.color = "blue";
		}

		function allalert(){
			var cake = "<?php echo 'this is php' ?>";
			window.alert(cake);
		}

		function call_php(){
			var runnable = 
			"<?php
			echo 'this is a PHP code';
			?>";
			window.alert(runnable);
		}
	</script>
 </head>
<body>
 
 <div class="container"  id="section-activites" data-target="#section-activites">
	<section>
		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-10">
				<!-- ===================  SOME CODE COMES HERE ===================== -->
					<div class="page-header">
					<h3>Activités :<small> Tout connaitre sur nos principales activités</small></h3>

						<p><small  id="myid">Maftouh</small>, your name will change the color, if i <span onclick="allalert()" >clic here</span></p>
						
					</div>
<div class="first">
	<div class="second"></div>
	<div class="second"></div>
	<div class="second"></div>
	<div class="second"></div>
	<div class="second"></div>
	<div class="second"></div>
</div>
					
				</div>
			<div class="col-sm-1"></div>
		</div>





	</section>
</div>

</body>
</html>
