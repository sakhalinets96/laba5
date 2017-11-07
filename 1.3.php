<html>
<head>
	<title>Case1</title>
</head>

<body>
	<form method="POST">
		Введите:<input type="text" name="ch">
	</form>
	
	<?php
		
		$ch=$_POST['ch'];
		
		switch ($ch) {
				case 1: 
					{
					print "Понедельник"; break;
					}
				case 2: 
					{
					print "Вторник"; break;
					}
				case 3: 
					{
					print "Среда"; break;
					}
				case 4: 
					{
					print "Четверг"; break;
					}
				case 5: 
					{
					print "Пятница"; break;
					}
				case 6: 
					{
					print "Суббота"; break;
					}
				case 7: 
					{
					print "Воскресенье"; break;
					}
	             
				default:
					{
					print "Ошибка!";
					}

			}
	?>
</body>

</html>