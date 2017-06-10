<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>COLOR SAVE</title>
		<link rel="stylesheet" href="CSS/styles.css">
	</head>
	<?PHP
		require( "Connect.php" ) ;

		$Query = $Connect->query( "SELECT * FROM COLORS" ) ;

		foreach( $Query as $Color )
		{
			//echo $Color[ "COLOR RED" ] ;

			//echo $Color[ "COLOR BLUE" ] ;
		}
	?>
	<style>
		.Fondo_Rojo{ background: <?PHP echo $Color[ "COLOR RED" ] ; ?>}

		.Fondo_Azul{ background: <?PHP echo $Color[ "COLOR BLUE" ] ; ?> }

		.Texto{ background: gray; }
	</style>
	<body>

		<textarea class="Texto" rows="8" cols="80"></textarea>

		<button id="Rojo" type="button"></button>
		<button id="Azul" type="button"></button>

		<script src="JS/jquery-3.2.1.min.js"></script>

		<script>
			$(document).ready( function( )
			{
				$( "#Rojo" ).click( function( )
				{
					$( ".Texto" ).addClass( "Fondo_Rojo" ) ;
					$( ".Texto" ).removeClass( "Fondo_Azul" ) ;
				});

				$( "#Azul" ).click( function( )
				{
					$( ".Texto" ).addClass( "Fondo_Azul" ) ;
					$( ".Texto" ).removeClass( "Fondo_Rojo" ) ;
				});
			});
		</script>

	</body>
</html>
