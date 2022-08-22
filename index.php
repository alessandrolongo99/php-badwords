<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis possimus aspernatur aut illo libero quia exercitationem vero? Aut quaerat enim laboriosam! Reiciendis quidem neque repellat expedita minus in rem excepturi';
?>

<body>
    <h1><?php echo $text?></h1>
    <h3><?php echo 'Il paragrafo e\' lungo: '.strlen($text).' caratteri'?></h3>
</body>

</html>