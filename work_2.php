<?php
print('<h2>Поиск HTML-тегов в тексте</h2>');
$html = "<p>Привет, <strong>мир</strong>!</p>";
$pattern = "/<[^>]+>/";
preg_match_all($pattern, $html, $tags);
print('Найдены HTML-теги: ' . implode(', ', $tags[0]));
