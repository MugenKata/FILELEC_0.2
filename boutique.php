<!DOCTYPE html>
<html>
<head>
	<title>FILELEC </title>
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

<ul>
    <li><a href="boutique.php?page=1">Voiture</a></li>
    <li><a href="boutique.php?page=2">Camion</a></li>
    <li><a href="boutique.php?page=3">Bus</a></li>
    <li><a href="boutique.php?page=4">Accesoires automobile</a></li>
</ul>

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
				case 1: require_once('Voiture.php');break;
				case 2 : require_once('Camion.php');break;
				case 3 : require_once('Bus.php');break;
				case 4 : require_once('Accesoires.php');break;
				default : require_once('boutique.php');break;
			}