<?php
require 'vendor/autoload.php';

  class  WeatherController {

// 'http://www.gismeteo.ua/city/daily/5093/'
    public function actionIndex() {
      $client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://www.virendrachandak.com/techtalk/php-isset-vs-empty-vs-is_null/', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();
      require_once(ROOT.'/views/weather.php');
      return true;
    }
  }

?>
