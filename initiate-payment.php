<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$amount = $_GET['amount'];

$jayParsedAry = [
    "merchantId" => 'PGTESTPAYUAT',
    "merchantTransactionId" => "MT7850590068188104",
    "merchantUserId" => 'MUID223',
    "amount" => ($amount * 100),
    "redirectUrl" => 'https://fluffyn.in/mini/payment-redirect.php',
    "redirectMode" => "GET",
    "callbackUrl" => 'https://fluffyn.in/mini/payment-callback.php',
    "paymentInstrument" => [
        "type" => "PAY_PAGE"
    ]
];

$encode = json_encode($jayParsedAry);
$encoded = base64_encode($encode);
$key = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // KEY
$key_index = 1; // KEY_INDEX
$string = $encoded . "/pg/v1/pay" . $key;
$sha256 = hash("sha256", $string);
$final_x_header = $sha256 . '###' . $key_index;

// $url = "https://api.phonepe.com/apis/hermes/pg/v1/pay"; <PRODUCTION URL>

$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <TESTING URL>

$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: " . $final_x_header,
);

$data = json_encode(['request' => $encoded]);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

curl_close($curl);

$response = json_decode($resp);

header('Location:' . $response->data->instrumentResponse->redirectInfo->url);

?>