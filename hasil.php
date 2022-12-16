<!-- 

Author      : Arjuna Efenus De Silalahi 
Application : Calculator

-->


<?php


$result = 0;

if($_SERVER['REQUEST_METHOD']=== "POST")
{
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
	if($operasi == "/")
    {
    	$result = $bil1 / $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
    }
    elseif($operasi == "*")
    {
    	$result = $bil1 * $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
        

    
    }
    elseif($operasi == "-")
    {
    	$result = $bil1 - $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");

    
    }
    elseif($operasi == "+")
    {
    	$result = $bil1 + $bil2;
        header("location:index.php?bil1=$bil1&bil2=$bil2&hasil=$result");
    }
    else
    {
    	echo "Jenis operasi tidak di temukan";
    }
}
else
{
    ;   
}





?>