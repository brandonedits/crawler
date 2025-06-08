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
    
    // find Open Vacancy pdf file
    $fetchUrl = "https://ngmnpublic.azurewebsites.us/open-vacancies/";
    $urlContent = file_get_contents($fetchUrl);

    $dom = new DOMDocument();
    @$dom->loadHTML($urlContent);
    $xpath = new DOMXPATH($dom);
    $href = $xpath->evaluate("/html/body//a"); // get all links on the page

    foreach ($href as $link){
        $url = $link->getAttribute('href');
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // get anchor tag text
        $linkTitle = $link->nodeValue;
        
        if($linkTitle == 'Download Open Vacancy Report'){
            $pdf = $url;

            echo $pdf;
        }
        
    }

    ?>

</body>
</html>