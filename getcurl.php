<?php
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM'
    CURLPOT_RETURNTRANSFER => true,
    CURPLPOT_ENCONDING => ''
    CURPLPOT_MAXREDIRS => 10,
    CURPLPOT_TIMEOUT => 0.
    CURPLPOT_FOLLOWLOCATION => true,
    CURPLPOT_HTTP_VERSTION => CURL_HTTP_VERSION_1_1,
    CURPLPOT_CUSTOMRESQUEST => 'GET',
));

$reponse = curl_exec($curl);
curl_close($curl);

$response_array=
$json = json_decode($response, true);

$onscreen = '<table class="table" width="100%">
                <thead>
                  <th>KODE BARANG</th>
                  <th>NAMA BARANG</th>
                  <th>GROUP BARANG</th>
                  <th>HARGA JUAL</th>
                  <th>QUANTITY</th>
                </thead>
              ';

foreach ($response_array as $resp) {
  $onscreen .= '<tr>
                <td>' . $resp['Kode Barang'] . '</td>
                <td>' . $resp['Nama Barang'] . '</td>
                <td>' . $resp['Harga Jual'] . '</td>
                <td>' . $resp['Quantity'] . '</td>
                <td>' . $resp['Total Asset'] . '</td>
                </tr>';
}

$onscreen .= '</table>';

echo $onscreen;
?>


    

