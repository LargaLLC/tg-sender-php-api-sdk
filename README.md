# PHP API SDK для проекта fire_smoke_detector
Разрабатывалось и тестировалось на PHP7.2
Ссылка на приватный репозиторий fire_smoke_detector: https://github.com/LargaLLC/fire_smoke_detector

## Документация по API
Документация по api: http://81.24.123.68:8002/
Для полноценного доступа к документации необходимо запросить авторизационные данные у разработчика/администратора биллинга


## Установка
```sh
git clone https://github.com/alexlugovsk/optima-billing
```
Или просто скопируйте api.php и config.php файлы в свой проект, в целом этого достаточно.

## Использование
В файле ``index.php`` удобно представлены ссылки на все тесты(они же примеры работы с SDK), если запустить этот проект на сервере, то будет интерактивная страница с кликабельными ссылками.

В файле ``config.php`` необходимо указать ключевые параметры для работы c API (``$API_HOST`` и ``$API_KEY``), которые можно запросить у разработчика.

Все файлы с префиксом ``test`` являются тестами и одновременно примерами использования SDK.

Файл ``api.php`` - ключевой файл SDK, содержащий функции, которые сами формируют необходимый запрос на сервер API и возвращают результат.