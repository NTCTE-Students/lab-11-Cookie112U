<?php
print('<h2>Проверка номера кредитной карты</h2>');
$card_number = "1234 5678 9012 3456"; 
$pattern = "/\b\d{4} \d{4} \d{4} \d{4}\b/";
if (preg_match($pattern, $card_number)) {
    print("Кредитная карта '$card_number' валидна.");
} else {
    print("Кредитная карта '$card_number' не валидна.");
}
