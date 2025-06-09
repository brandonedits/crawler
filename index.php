<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>crawler</title>
</head>
<body>
   
<?php

    include 'functions.php'; 

    $pdf = findPdf("https://ngmnpublic.azurewebsites.us/open-vacancies/");

?>

<a href="<?php echo $pdf; ?>" target="_blank"><?php echo $pdf; ?></a>

</body>
</html>