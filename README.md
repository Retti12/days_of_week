# WildTracks API – Days of the Week (v1.4)

https://wildtracks.pro/api/days_of_the_week/

---

## Описание
Этот пример получает название дня недели через API и выводит его на разных языках.

### Поддерживаемые языки
- Chinese  
- Spanish  
- English  
- Hindi  
- Arab  
- Bengal  
- Portuguese  
- Russian  
- Japanese  
- Lahnda  
- Marathi  
- Telugu  
- Malay  
- Turkish  
- Korean  
- French  
- German  
- Vietnamese  
- Tamil  
- Urdu  
- Javanese  
- Italian  
- Persian  
- Gujaratis  

---

## Пример использования
```php
echo $data['English']['day']; // День недели по-английски
echo $data['Russian']['day']; // День недели по-русски
```

---

## Поля ответа
- **lang** – язык  
- **country** – страна  
- **code** – код страны  
- **day** – название дня недели  
- **transcription** – транскрипция  

---

## Пример ответа (сокращённый)
```json
{
  "English": {
    "lang": "English",
    "country": "United Kingdom",
    "code": "GB",
    "day": "Monday",
    "transcription": "ˈmʌndeɪ"
  },
  "Russian": {
    "lang": "Russian",
    "country": "Russia",
    "code": "RU",
    "day": "Понедельник",
    "transcription": "poneˈdʲelʲnʲɪk"
  }
}
```
