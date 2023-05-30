<?php
for ($i = 0; $i <= 50; $i++) {
echo $i . "< />";
}

$namen = ["zakaria", "muhammed", "ghor", "vinu", "burak", "mehmet", "erencan", "gorav", "jaber", "omer"];
foreach ($namen as $naam) {
echo $naam . "< />";
}

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
$maandenCount = count($maanden);
for ($i = 0; $i < $maandenCount; $i++) {
echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.< />';
}

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
$maandNummer = 1;
foreach ($maanden as $maand)
{

    echo 'Maand ' . $maandNummer . ' is ' . $maand . '.< />';
$maandNummer++;
}

?>