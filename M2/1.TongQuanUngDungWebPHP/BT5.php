<?php
// echo '&nbsp' . '&nbsp' . '&nbsp' . '<br>';
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo '<br>';
}
echo '<br>';
for ($i = 5; $i >= 1; $i--) {
    for ($j = $i; $j >= 1; $j--) {
        echo ' * ';
    }
    echo '<br>';
}
echo '<br>';
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo ' * ';
    }
    echo '<br>';
}