<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $api_url="http://www.mocky.io/v2/581335f71000004204abaf83";
    try {
        $options = [
            CURLOPT_RETURNTRANSFER=> true,
            CURLOPT_FAILONERROR=> true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ]
        ];
        $ch = curl_init($api_url);
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            throw new Exception($error_msg);
        }

    }catch (Exception $exception){
        return $exception->getMessage()."|".$exception->getTraceAsString();
    }
    $contacts = json_decode($result);
    return view('index', ['contacts' => $contacts->contacts]);
});
