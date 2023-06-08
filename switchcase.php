<?php

if (isset($_POST['notunuz'])) {

echo "Notunuz :".$not=$_POST['not']; echo " ";

switch ($not) {
	    case '5':
		echo "Pekiyi";
		break;
	
	    case '4':
        echo "iyi";
        break;

        case '3':
        echo "ortalama";
        break;

        case '2':
        echo "geçtiniz";
        break;
        
        case '1':
        echo "kaldınız";
        break;

	    default:
		echo "tanımsız sonuç";
		break;
}
	
}
?>

<form action="" method="post">
	Notunuzu Girin <input type="number" max="5" name="not">
	<input type="submit" name="notunuz">
</form>
