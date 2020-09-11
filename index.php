<?php 
	require_once("fonction.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FILE-ELEC</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		
<header>{
          size: 1250px;
          height: 320px;
            background-color: white, gray;
            background-size:1520px 320px;
            				}
.twi{
	float: left;
}

#insta {
	text-align: right;
	margin-top: 0px;
}
footer{

	width:1000px;
	height:50px;
	background-color:#33FF99;
	
	}
}

		img:hover{
			transform: scale(1.4);


		}
		body{
                      background: radial-gradient(white, gray, blue);
                  }
        </head>

    <body>
       

        table{
        	color: gold
        }
        p{color: gold;
        }



	</style>
</head>

<body>
	<header>
		<!--div class="twi"><img src="images/twitt.jpg" width="45" height="45"> <h1>@HUSS123</h1></div-->


		<!--div id="insta"><img src="images/insta.jpg" width="45" height="45"><h1>huss_123</h1></div-->
		 
	<center>
		<marquee><h1>BIENVENUE SUR NOTRE SITE  </h1></marquee>
		<!--<img src=images/irislogo.png width="300" height="150" style="position:absolute;top:0px;marker-mid: :1000px;"-->

		<a href="index.PHP?page=1"><img src ="images/accueil2.jpg" width="100" height="75"> </a>
		<a href="index.PHP?page=2"><img src ="images/connexion.jpg" width="100" height="75"> </a>
		<a href="index.php?page=3"><img src="images/inscription.jpg" width="100" height="75"></a>
		<a href="index.php?page=4"><img src="images/boutique.jpg" width="100" height="75"></a>
		<a href="index.php?page=5"><img src="images/professeur.jpg" width="100" height="75"></a>
		<a href="index.php?page=6"><img src="images/argent.jpg" width="100" height="75"></a>
		</body></html>
		</br></br>
	</header>

	<?php
			if (isset($_GET["page"]))
				{
					$page=$_GET["page"];
				}	
			else  
				{
					$page=0;
				}

			switch ($page)
			{
				case 1: require_once('accueil.php');break;
				case 2 : require_once('connexion.php');break;
				case 3 : require_once('inscription.php');break;
				case 4 : require_once('boutique.php');break;
				case 5 : require_once('professeur.php');break;
				case 6 : require_once('argent.php');break;
				default : require_once('accueil.php');break;
			}

		?>
		
	


</body>

</html>