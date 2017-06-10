<?PHP

$Connect = new mysqli( "localhost", "root", "", "THEME COLOR" ) ;

if( $Connect )
{
	echo "CONNECT OK!! ;)" ;
}
else
{
		echo "PROBLEMS TO CONNECT =(" ;
}

?>
