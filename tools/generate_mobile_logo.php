<?php

$size = 1024;
$image = imagecreatetruecolor($size, $size);
imagealphablending($image, true);
imagesavealpha($image, true);
imageantialias($image, true);

for ($y = 0; $y < $size; $y++) {
    $t = $y / ($size - 1);
    $r = (int) round(112 - (53 * $t));
    $g = (int) round(134 - (55 * $t));
    $b = (int) round(255 - (46 * $t));
    $color = imagecolorallocate($image, $r, $g, $b);
    imageline($image, 0, $y, $size, $y, $color);
}

$white = imagecolorallocate($image, 247, 253, 255);
$coral = imagecolorallocate($image, 255, 177, 155);
imagesetthickness($image, 82);

$stroke = function (array $points) use ($image): void {
    $width = 82;
    $color = imagecolorallocate($image, 247, 253, 255);
    for ($i = 1; $i < count($points); $i++) {
        [$x1, $y1] = $points[$i - 1];
        [$x2, $y2] = $points[$i];
        $distance = hypot($x2 - $x1, $y2 - $y1);
        for ($step = 0; $step <= $distance; $step += 10) {
            $t = $distance ? $step / $distance : 0;
            imagefilledellipse($image, (int) round($x1 + (($x2 - $x1) * $t)), (int) round($y1 + (($y2 - $y1) * $t)), $width, $width, $color);
        }
    }
};

$stroke([[305, 260], [305, 764]]);
$stroke([[310, 274], [520, 274], [640, 315], [670, 395], [630, 455], [515, 480], [310, 480]]);
$stroke([[310, 480], [540, 480], [665, 520], [700, 595], [660, 680], [535, 725], [310, 725]]);

imagesetthickness($image, 40);
imageline($image, 720, 270, 850, 140, $coral);
imageline($image, 720, 270, 890, 270, $coral);
imageline($image, 720, 270, 720, 105, $coral);
imagefilledellipse($image, 720, 270, 92, 92, $coral);
imageellipse($image, 720, 270, 92, 92, $white);

$output = __DIR__ . '/../../nabiul-bizzsmart-mobile/assets/images/logo.png';
imagepng($image, $output, 9);
imagedestroy($image);
echo $output . PHP_EOL;
