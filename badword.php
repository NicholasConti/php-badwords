<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
</head>
<body>
    <div> La frase è: <?php echo $_GET['frase'] ?> </div>
    <div> La frase è lunga: <?php echo strlen($_GET['frase']) ?> caratteri</div>
    <div> La frase censurata è: <?php echo str_replace($_GET['badword'],'***',$_GET['frase']) ?> </div>
    <div> La frase censurata è lunga: <?php echo strlen(str_replace($_GET['badword'],'***',$_GET['frase'])) ?> </div>

</body>
</html>
