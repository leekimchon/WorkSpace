<?php
for ($i = 2; $i <= 100; $i++) {
    $sum = 0;
?>
<?php for ($j = 2; $j <= sqrt($i); $j++) : ?>
<tr></tr>
<?php
        if ($i % $j == 0) {
            $sum++;
        }
        ?>
<?php endfor;
    if ($sum == 0) {
        echo $i . ' la so nguyen to' . '<br>';
    }
}
?>