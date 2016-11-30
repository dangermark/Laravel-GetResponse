<?php
return [
    /*
     * Api key
     */
    'apiKey' => env('GETRESP_API_KEY', 'null'),
    'apiUrl' => env('GETRESP_API_URL', 'https://api.getresponse.com/v3'),
    'timeout' => 8,

    /*
     * X-Domain header value if empty header will be not provided
     */
    'enterpriseDomain' => null,

    /*
     * X-APP-ID header value if empty header will be not provided
     */
    'appId' => null
];
