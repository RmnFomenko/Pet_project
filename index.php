<?php
require('vendor/autoload.php');

echo '<pre>';
var_dump($_SERVER["REQUEST_URI"] ?? 'Test');
echo '</pre>';