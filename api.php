<?php
function getProducts() {
    $url = 'https://myapprack.com/expirysaver/Home/api/product/select';
    $cookie = '85acb34e88db40b04f8dacca06f4eafc';
    $key = 'KeyfR1DL2MTtlgCIz29NNo1pgHAPI7UO.';

    // Data to send in the POST request
    $data = [
        'key' => $key
    ];

    // HTTP context options
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => [
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: PHPSESSID=' . $cookie,
            ],
            'content' => http_build_query($data),  // Encode data as URL-encoded form
        ],
    ];

    // Create the context for the request
    $context  = stream_context_create($options);

    // Send the POST request and get the response
    $response = @file_get_contents($url, false, $context);

    if ($response === FALSE) {
        return 'Error: Unable to fetch data';
    }

    // Return the response from the request
    return  json_decode($response, true);
}
?>