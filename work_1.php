<?php
print('<h2>Проверка корректности даты (ДД.ММ.ГГГГ)</h2>');
$date = "31.12.2025"; 
$pattern = "/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[0-2])\.(\d{4})$/";
if (preg_match($pattern, $date)) {
    print("Дата '$date' корректная.");
} else {
    print("Дата '$date' некорректная.");
}
