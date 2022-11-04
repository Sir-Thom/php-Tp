<?php
echo 'Canard hash: ' . password_hash('manger', PASSWORD_DEFAULT). "<br>";
echo 'Joe hash: ' . password_hash('Bloe', PASSWORD_DEFAULT). "<br>";
echo 'Ken hash: ' . password_hash('kababoum', PASSWORD_DEFAULT). "<br>";
echo 'Jane hash: ' . password_hash('babaje', PASSWORD_DEFAULT). "<br>";
echo 'Bob hash: ' . password_hash('saucisse', PASSWORD_DEFAULT). "<br>";
?>