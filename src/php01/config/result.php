<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$syouhin = htmlspecialchars($_POST['syouhin'], ENT_QUOTES);
$kazu = htmlspecialchars($_POST['kazu'], ENT_QUOTES);

print "私の名前は、" . $name . "<br>";
print "ご希望の商品は、" . $syouhin . "<br>";
echo "注文数は、" . $kazu;

