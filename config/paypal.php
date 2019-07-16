<?php
    return [
        'client_id' => 'AfFw2v0c-jkWsrOvsfKQ_KScae_nHcTWOWB5z934kwA68mIrKqUW7SH2sxO8iD7qTJxDAGYuNZDpKImz',
        'secret' => 'ELLTIGrBJisGcoeCMqW-72ihya7ueqblDDtpmA87bGiT0ZNvHjQby1siA7AiIy8gfUJ7DqN5r569fuTt',
        'settings' => [
            'http.CURLOPT_CONNECTTIMEOUT' => 30,
            'mode' => 'sandbox',//live
            'log.LogEnabled' => true,
            'log.FileName' => storage_path().'/logs/paypal.php',
            'log.LogLevel' => 'INFO',


        ]
    ]

?>