<?php
include_once dirname(__FILE__) . '/src/class/signExt/FileExt.php';
//include_once dirname(__FILE__) . '/src/class/signExt/SignFile.php';
//include_once dirname(__FILE__) . '/src/class/signExt/SignZip.php';

/*$hexas = [null, "0000", "0A0c", "0BC0", "0RTE", "0cd0", "001", "0A0c0D0e"];
foreach ($hexas as $hexa) {
    $errorHexa = (empty($hexa) || !(!empty($hexa) && ctype_xdigit($hexa)));
    $errorOctet = !$errorHexa && (strlen($hexa)%2 == 0);
    var_dump([$hexa, $errorHexa ? "true" : "false", $errorOctet ? "true" : "false"]);
}*/


try {
    $test = new SignFile();
    foreach ($test->getListSign() as $value) {
        if(SignZip::isExtZip($value["ext"])) {
            var_dump($value);
            echo "<br/>";
        }
    }
} catch (Error $th) {
    echo $th;
}
