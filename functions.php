    <?php

    // find Open Vacancy pdf file
    function findPdf ($fetchUrl){
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

                return $pdf;
                
            }
            
        }

    }    

    ?>