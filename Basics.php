
TEST CARD: 4929420573595709


****** TENDRAS QUE CAMBIAR: CURLOPT_URL , Authorization: Bearer  y locale ************

^^ 
POR ORDEN I FUNCIONES: CREACION TOKEN, CREAR CUSTOMERS, MOSTRAR CUSTOMER, REALIZAR PAGO,  MOSTRAR TRAJETAS, MOSTRAR PAGO

<?php
$curl = curl_init();
$amount = 0;
$currency = "EUR";

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode(array(
"amount" => $amount,
"currency" => $currency,
"capture_mode" => "manual",
"customer" => array(
"name" => "MikeQ GordoQ",
"email" => "MikeQ@GordoQ.com"
),
)),
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
'Accept: application/json',
'Revolut-Api-Version: 2023-09-01',
'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
),
));

$response = curl_exec($curl);
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$token = $arrayFromJson["token"];
echo $ID = $arrayFromJson["id"];
?>
<script>!function(e,o,t){var n={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},r={sandbox:"https://sandbox-merchant.revolut.com/upsell/embed.js",prod:"https://merchant.revolut.com/upsell/embed.js",dev:"https://merchant.revolut.codes/upsell/embed.js"},l=function(e){var n=function(e){var t=o.createElement("script");return t.id="revolut-checkout",t.src=e,t.async=!0,o.head.appendChild(t),t}(e);return new Promise((function(e,r){n.onload=function(){return e()},n.onerror=function(){o.head.removeChild(n),r(new Error(t+" failed to load"))}}))},u=function(){if(window.RevolutCheckout===i||!window.RevolutCheckout)throw new Error(t+" failed to load")},c={},d={},i=function o(r,d){return c[d=d||"prod"]?Promise.resolve(c[d](r)):l(n[d]).then((function(){return u(),c[d]=window.RevolutCheckout,e[t]=o,c[d](r)}))};i.payments=function(o){var r=o.mode||"prod",d={locale:o.locale||"auto",publicToken:o.publicToken||null};return c[r]?Promise.resolve(c[r].payments(d)):l(n[r]).then((function(){return u(),c[r]=window.RevolutCheckout,e[t]=i,c[r].payments(d)}))},i.upsell=function(e){var o=e.mode||"prod",n={locale:e.locale||"auto",publicToken:e.publicToken||null};return d[o]?Promise.resolve(d[o](n)):l(r[o]).then((function(){if(!window.RevolutUpsell)throw new Error(t+" failed to load");return d[o]=window.RevolutUpsell,delete window.RevolutUpsell,d[o](n)}))},e[t]=i}(window,document,"RevolutCheckout");</script>
<hr>
<form>
<div>
<label>Card</label>
<div name="card"></div>
</div>
<button>Submit</button>
</form>
<script>
RevolutCheckout("<?php echo $token?>", "sandbox").then(function (instance) {
var form = document.querySelector("form");
var card = instance.createCardField({
target: document.querySelector("[name=card]"),
onSuccess() {
window.alert("Thank you!");
},
onError(message) {
window.alert(message);
},
locale: "es"
});
form.addEventListener("submit", function (event) {
event.preventDefault();
var data = new FormData(form);
card.submit({
savePaymentMethodFor: "merchant",
name: "MikeQ GordoQ",
email: "MikeQ@GordoQ.com",

});
});
})
</script>


<?php

$ORDER_ID =  "65b55493-e54d-a94e-b46d-f2527f64d299";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders/'.$ORDER_ID,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Revolut-Api-Version: 2023-09-01',
    'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
  ),
));
echo $response = curl_exec($curl);
echo "<hr>";
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$umbral = 3;
if (count($arrayFromJson) > $umbral) {
$updated_at_order_payments  = $arrayFromJson["payments"][0]["updated_at"];
$updated_at_order_payments  = date('Y-m-d', strtotime($updated_at_order_payments ));
$Customer_id = $arrayFromJson["customer"]["id"];
$Customer_email = $arrayFromJson["customer"]["email"];
echo "EL CUSTOMER ID: ".$Customer_id."<br>";
echo "EL CUSTOMER EMAIL: ".$Customer_email."<br>";
} else {
echo "ERROR.";
}

?>







<?php
$curl = curl_init();
$amount = 7777;
$currency = "EUR";
$ID_CUSTOMER = '';
$NAME_CUSTOMER = '';
$EMAIL_CUSTOMER = '';
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode(array(
"amount" => $amount,
"currency" => $currency,
"capture_mode" => "manual",
"customer" => array(
"name" => $NAME_CUSTOMER,
"email" => $EMAIL_CUSTOMER,
"id" => $ID_CUSTOMER
),
)),
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
'Accept: application/json',
'Revolut-Api-Version: 2023-09-01',
'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
),
));

$response = curl_exec($curl);
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$token = $arrayFromJson["token"];
echo $ID = $arrayFromJson["id"];
?>
<script>!function(e,o,t){var n={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},r={sandbox:"https://sandbox-merchant.revolut.com/upsell/embed.js",prod:"https://merchant.revolut.com/upsell/embed.js",dev:"https://merchant.revolut.codes/upsell/embed.js"},l=function(e){var n=function(e){var t=o.createElement("script");return t.id="revolut-checkout",t.src=e,t.async=!0,o.head.appendChild(t),t}(e);return new Promise((function(e,r){n.onload=function(){return e()},n.onerror=function(){o.head.removeChild(n),r(new Error(t+" failed to load"))}}))},u=function(){if(window.RevolutCheckout===i||!window.RevolutCheckout)throw new Error(t+" failed to load")},c={},d={},i=function o(r,d){return c[d=d||"prod"]?Promise.resolve(c[d](r)):l(n[d]).then((function(){return u(),c[d]=window.RevolutCheckout,e[t]=o,c[d](r)}))};i.payments=function(o){var r=o.mode||"prod",d={locale:o.locale||"auto",publicToken:o.publicToken||null};return c[r]?Promise.resolve(c[r].payments(d)):l(n[r]).then((function(){return u(),c[r]=window.RevolutCheckout,e[t]=i,c[r].payments(d)}))},i.upsell=function(e){var o=e.mode||"prod",n={locale:e.locale||"auto",publicToken:e.publicToken||null};return d[o]?Promise.resolve(d[o](n)):l(r[o]).then((function(){if(!window.RevolutUpsell)throw new Error(t+" failed to load");return d[o]=window.RevolutUpsell,delete window.RevolutUpsell,d[o](n)}))},e[t]=i}(window,document,"RevolutCheckout");</script>
<hr>
<form>
<div>
<label>Card</label>
<div name="card"></div>
</div>
<button>Submit</button>
</form>
<script>
RevolutCheckout("<?php echo $token?>", "sandbox").then(function (instance) {
var form = document.querySelector("form");
var card = instance.createCardField({
target: document.querySelector("[name=card]"),
onSuccess() {
window.alert("Thank you!");
},
onError(message) {
window.alert(message);
},
locale: "es"
});
form.addEventListener("submit", function (event) {
event.preventDefault();
var data = new FormData(form);
card.submit({
name: "MikeQ GordoQ",
email: "MikeQ@GordoQ.com",

});
});
})
</script>











///LUEGO BUSCA EL ID  Y EL AMOUNT DEL PAGO PARA REALIZARLO


<?php
$ID = '';
$amount = 7777; // Asigna el valor que desees

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/1.0/orders/'.$ID.'/capture',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode(array(
    "amount" => $amount
  )),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Accept: application/json',
    'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>


// REEMBOLSO BUSCA EL ID Y EL AMOUNT DEL PAGO PARA REALIZARLO



<?php
$ID = '';
$amount = 7777; // Asigna el valor que desees
$Response = 'Refund for damaged goods';
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/1.0/orders/' . $ID . '/refund',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode(array(
        "amount" => $amount,
        "description" => $Response
    )),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer <yourSecretApiKey>'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>




//  INCIAR PAGO EN EL CONTRARIO Y GUARDAR EL ID

(SI ES SU PRIMER PAGO)
<?php
$curl = curl_init();
$amount = 1111;
$currency = "USD";
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode(array(
"amount" => $amount,
"currency" => $currency,
"customer" => array(
"name" => "MikeQA GordoQA",
"email" => "MikeQA@GordoQA.com"
),
)),
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
'Accept: application/json',
'Revolut-Api-Version: 2023-09-01',
'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
),
));

$response = curl_exec($curl);
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$token = $arrayFromJson["token"];
echo $ID = $arrayFromJson["id"];
?>
<script>!function(e,o,t){var n={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},r={sandbox:"https://sandbox-merchant.revolut.com/upsell/embed.js",prod:"https://merchant.revolut.com/upsell/embed.js",dev:"https://merchant.revolut.codes/upsell/embed.js"},l=function(e){var n=function(e){var t=o.createElement("script");return t.id="revolut-checkout",t.src=e,t.async=!0,o.head.appendChild(t),t}(e);return new Promise((function(e,r){n.onload=function(){return e()},n.onerror=function(){o.head.removeChild(n),r(new Error(t+" failed to load"))}}))},u=function(){if(window.RevolutCheckout===i||!window.RevolutCheckout)throw new Error(t+" failed to load")},c={},d={},i=function o(r,d){return c[d=d||"prod"]?Promise.resolve(c[d](r)):l(n[d]).then((function(){return u(),c[d]=window.RevolutCheckout,e[t]=o,c[d](r)}))};i.payments=function(o){var r=o.mode||"prod",d={locale:o.locale||"auto",publicToken:o.publicToken||null};return c[r]?Promise.resolve(c[r].payments(d)):l(n[r]).then((function(){return u(),c[r]=window.RevolutCheckout,e[t]=i,c[r].payments(d)}))},i.upsell=function(e){var o=e.mode||"prod",n={locale:e.locale||"auto",publicToken:e.publicToken||null};return d[o]?Promise.resolve(d[o](n)):l(r[o]).then((function(){if(!window.RevolutUpsell)throw new Error(t+" failed to load");return d[o]=window.RevolutUpsell,delete window.RevolutUpsell,d[o](n)}))},e[t]=i}(window,document,"RevolutCheckout");</script>
<hr>
<form>
<div>
<label>Card</label>
<div name="card"></div>
</div>
<button>Submit</button>
</form>
<script>
RevolutCheckout("<?php echo $token?>", "sandbox").then(function (instance) {
var form = document.querySelector("form");
var card = instance.createCardField({
target: document.querySelector("[name=card]"),
onSuccess() {
window.alert("Thank you!");
},
onError(message) {
window.alert(message);
},
locale: "es"
});
form.addEventListener("submit", function (event) {
event.preventDefault();
var data = new FormData(form);
card.submit({
savePaymentMethodFor: "merchant",
name: "MikeQA GordoQA",
email: "MikeQA@GordoQA.com",
});
});
})
</script>


(SI NO ES SU PRIMER PAGO)

<?php
$curl = curl_init();
$amount = 1111;
$currency = "USD";
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode(array(
"amount" => $amount,
"currency" => $currency,
"customer" => array(
"id" => "9ee4e4b2-9c63-4cfc-980f-ba33e73eefcd",
"name" => "MikeQ GordoQ",
"email" => "MikeQ@GordoQ.com"

),
)),
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json',
'Accept: application/json',
'Revolut-Api-Version: 2023-09-01',
'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
),
));

$response = curl_exec($curl);
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$token = $arrayFromJson["token"];
echo $ID = $arrayFromJson["id"];
?>
<script>!function(e,o,t){var n={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},r={sandbox:"https://sandbox-merchant.revolut.com/upsell/embed.js",prod:"https://merchant.revolut.com/upsell/embed.js",dev:"https://merchant.revolut.codes/upsell/embed.js"},l=function(e){var n=function(e){var t=o.createElement("script");return t.id="revolut-checkout",t.src=e,t.async=!0,o.head.appendChild(t),t}(e);return new Promise((function(e,r){n.onload=function(){return e()},n.onerror=function(){o.head.removeChild(n),r(new Error(t+" failed to load"))}}))},u=function(){if(window.RevolutCheckout===i||!window.RevolutCheckout)throw new Error(t+" failed to load")},c={},d={},i=function o(r,d){return c[d=d||"prod"]?Promise.resolve(c[d](r)):l(n[d]).then((function(){return u(),c[d]=window.RevolutCheckout,e[t]=o,c[d](r)}))};i.payments=function(o){var r=o.mode||"prod",d={locale:o.locale||"auto",publicToken:o.publicToken||null};return c[r]?Promise.resolve(c[r].payments(d)):l(n[r]).then((function(){return u(),c[r]=window.RevolutCheckout,e[t]=i,c[r].payments(d)}))},i.upsell=function(e){var o=e.mode||"prod",n={locale:e.locale||"auto",publicToken:e.publicToken||null};return d[o]?Promise.resolve(d[o](n)):l(r[o]).then((function(){if(!window.RevolutUpsell)throw new Error(t+" failed to load");return d[o]=window.RevolutUpsell,delete window.RevolutUpsell,d[o](n)}))},e[t]=i}(window,document,"RevolutCheckout");</script>
<hr>
<form>
<div>
<label>Card</label>
<div name="card"></div>
</div>
<button>Submit</button>
</form>
<script>
RevolutCheckout("<?php echo $token?>", "sandbox").then(function (instance) {
var form = document.querySelector("form");
var card = instance.createCardField({
target: document.querySelector("[name=card]"),
onSuccess() {
window.alert("Thank you!");
},
onError(message) {
window.alert(message);
},
locale: "es"
});
form.addEventListener("submit", function (event) {
event.preventDefault();
var data = new FormData(form);
card.submit({
name: "MikeQ GordoQ",

});
});
})
</script>





<?php



$ID_CUSTOMER = 'b0760c86-d1d8-464c-bdce-516fa8659179';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/1.0/customers/'.$ID_CUSTOMER.'/payment-methods',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
echo "<hr>";

$arrayFromJson = json_decode($response, true);

$tarjeta1 = [];
$tarjeta2 = [];
$tarjeta3 = [];
$tarjeta4 = [];


$op = 0;
foreach ($arrayFromJson as $item) {
if (isset($item["id"])) {
if($op === 0){  $tarjeta1[] = ["id" => $item["id"],"last4" => $item["method_details"]["last4"],"expiry_month" => $item["method_details"]["expiry_month"],"expiry_year" => $item["method_details"]["expiry_year"],];}
if($op === 1){  $tarjeta2[] = ["id" => $item["id"],"last4" => $item["method_details"]["last4"],"expiry_month" => $item["method_details"]["expiry_month"],"expiry_year" => $item["method_details"]["expiry_year"],];}
if($op === 2){  $tarjeta3[] = ["id" => $item["id"],"last4" => $item["method_details"]["last4"],"expiry_month" => $item["method_details"]["expiry_month"],"expiry_year" => $item["method_details"]["expiry_year"],];}
if($op === 3){  $tarjeta4[] = ["id" => $item["id"],"last4" => $item["method_details"]["last4"],"expiry_month" => $item["method_details"]["expiry_month"],"expiry_year" => $item["method_details"]["expiry_year"],];}
$op++;
}
}


if($op > 0  ){
foreach ($tarjeta1 as $item) {
$ID_tarjeta1 = $item['id'];
$last4_tarjeta1= $item['last4'];
$expiry_month_tarjeta1 = $item['expiry_month'];
$expiry_year_tarjeta1 = $item['expiry_year'];
}
echo $ID_tarjeta1 ;
echo "<br>";
echo $last4_tarjeta1 ;
echo "<br>";
echo $expiry_month_tarjeta1 ;
echo "<br>";
echo $expiry_year_tarjeta1 ;
echo "<hr>";
}

if($op > 1  ){
foreach ($tarjeta2 as $item) {
$ID_tarjeta2 = $item['id'];
$last4_tarjeta2= $item['last4'];
$expiry_month_tarjeta2 = $item['expiry_month'];
$expiry_year_tarjeta2 = $item['expiry_year'];
}
echo $ID_tarjeta2 ;
echo "<br>";
echo $last4_tarjeta2 ;
echo "<br>";
echo $expiry_month_tarjeta2 ;
echo "<br>";
echo $expiry_year_tarjeta2 ;
echo "<hr>";
}

if($op > 2  ){
foreach ($tarjeta3 as $item) {
$ID_tarjeta3 = $item['id'];
$last4_tarjeta3 = $item['last4'];
$expiry_month_tarjeta3 = $item['expiry_month'];
$expiry_year_tarjeta3 = $item['expiry_year'];
}
echo $ID_tarjeta3 ;
echo "<br>";
echo $last4_tarjeta3 ;
echo "<br>";
echo $expiry_month_tarjeta3 ;
echo "<br>";
echo $expiry_year_tarjeta3 ;
echo "<hr>";
}

if($op === 3  ){
foreach ($tarjeta4 as $item) {
$ID_tarjeta4 = $item['id'];
$last4_tarjeta4 = $item['last4'];
$expiry_month_tarjeta4 = $item['expiry_month'];
$expiry_year_tarjeta4 = $item['expiry_year'];
}
echo $ID_tarjeta4 ;
echo "<br>";
echo $last4_tarjeta4 ;
echo "<br>";
echo $expiry_month_tarjeta4 ;
echo "<br>";
echo $expiry_year_tarjeta4 ;
echo "<hr>";
}



?>
<?php

$ORDER_ID =  "65b5533c-8035-a0f3-ab5e-ffef8620482d";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sandbox-merchant.revolut.com/api/orders/'.$ORDER_ID,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Revolut-Api-Version: 2023-09-01',
    'Authorization: Bearer sk_tFOc5pnRp9NP.............................................'
  ),
));

echo $response = curl_exec($curl);
echo "<hr>";
curl_close($curl);
$arrayFromJson = json_decode($response, true);
$umbral = 3;
if (count($arrayFromJson) > $umbral) {
$state = $arrayFromJson["state"];
$created_at_order = $arrayFromJson["created_at"];
$created_at_order = date('Y-m-d', strtotime($created_at_order));
$updated_at_order = $arrayFromJson["updated_at"];
$updated_at_order = date('Y-m-d', strtotime($updated_at_order));
$amount = $arrayFromJson["amount"] / 100;
$currency = $arrayFromJson["currency"];
$ID_payments = $arrayFromJson["payments"][0]['id'];
$Currency_payments = $arrayFromJson["payments"][0]['currency'];
$Amount_payments = $arrayFromJson["payments"][0]['currency'];
$State_payments = $arrayFromJson["payments"][0]['state'];
$created_at_order_payments = $arrayFromJson["payments"][0]["created_at"];
$created_at_order_payments  = date('Y-m-d', strtotime($created_at_order_payments ));
$updated_at_order_payments  = $arrayFromJson["payments"][0]["updated_at"];
$updated_at_order_payments  = date('Y-m-d', strtotime($updated_at_order_payments ));
$settled_amount = $arrayFromJson["payments"][0]["settled_amount"] / 100;


$Customer_id = $arrayFromJson["customer"]["id"];
$Customer_email = $arrayFromJson["customer"]["email"];

if($state === 'completed' ){
echo "<hr>ÉXITO EN LA TRANSACCION <br>";
echo "LA ORDEN SE HA CREADO: ".$created_at_order."<br>";
echo "LA ORDEN SE HA ACTUALIZADO: ".$updated_at_order."<br>";
echo "EL DINERO TOTAL: ".$amount."<br>";
echo "LA MONEDA ES: ".$currency."<br>";
echo "LA ID DEL PAYMENT ES: ".$ID_payments."<br>";
echo "LA MONEDA DEL PAYMENT ES: ".$Currency_payments."<br>";
echo "EL DINERO DEL PAYMENT ES: ".$Amount_payments."<br>";
echo "EL ESTADO DEL PAYMENT ES: ".$State_payments."<br>";
echo "LA ORDEN SE HA CREADO: ".$created_at_order_payments."<br>";
echo "LA ORDEN SE HA ACTUALIZADO: ".$updated_at_order_payments."<br>";
echo "EL DINERO NETO ES: ".$settled_amount."<br>";
echo "EL CUSTOMER ID: ".$Customer_id."<br>";
echo "EL CUSTOMER EMAIL: ".$Customer_email."<br>";
}else{
echo "NO ESTA COMPLETA LA TRANSACCION";
}

} else {

    echo "ERROR.";
}

?>
