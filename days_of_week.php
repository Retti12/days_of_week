<?php
// Получаем текущий день недели (1 = Monday ... 7 = Sunday)
$dayOfWeek = date('N');

// Пример: можно задать вручную для теста
// $dayOfWeek = 0; // Sunday
// $dayOfWeek = 1; // Monday
// $dayOfWeek = 2; // Tuesday

$token = 'YOUR_TOKEN_HERE'; // <-- сюда вставляй свой токен локально

// Формируем URL
$url = 'https://wildtracks.pro/api/days_of_the_week/' . $token . '/' . $dayOfWeek;

// Инициализация cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Выполняем запрос
$response = curl_exec($ch);

// Проверяем ошибки
if (curl_errno($ch)) {
    die('cURL error: ' . curl_error($ch));
}
curl_close($ch);

// Декодируем JSON
$data = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON: ' . json_last_error_msg());
}

// Вывод дня недели на английском
echo $data['English']['day'];

// Дополнительно доступны:
// echo $data['English']['lang'];          // Язык
// echo $data['English']['country'];       // Страна
// echo $data['English']['code'];          // Код страны
// echo $data['English']['transcription']; // Транскрипция
?>