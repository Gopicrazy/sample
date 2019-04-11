<html>
<head>
</head>
<body>
<?php
    $a=3;
	$b=3;
	$c=3;
	if($a==$b && $b==$c)
	{
        echo "your value".($a+$b+$c)*3;
	}
    elseif($a==$b or$a==$c and $b==$a or$b==$c and $c==$a or$c==$b )
    {
        echo"your value".($a+$b+$c)*2;
    }
    elseif($a!=$b && $b!=$c)
    {
        echo"your value".($a+$b+$c);
    }
    else
	{	
    	echo"plz try another no";
    }
?>
</body>
</html>	