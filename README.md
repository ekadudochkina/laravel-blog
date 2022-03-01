# О проекте
Проект размещен на Timeweb.ru <br>
http://cc61624.tmweb.ru

## Запуск
Запуск проекта осуществляется: <br>
создаем файл .env на базе .env.example <br>
composer install<br>
npm install <br>
php artisan key:generate (создаем ключ) <br>
php artisan migrate (запускаем миграции) <br>
php artisan db:seed (запускаем сиды) <br>
php artisan serve (запускаем локальный сервер) <br>
php artisan queue:work --daemon (для работы очередей)

## Добавление коментариев

Добавление комментариев происходит с использованием очередей Laravel. Порядок действий:

1. Валидация комментария
2. Добавление записи в очередь
3. Ответ пользователю со статусом 200
4. Очередь обрабатывает сообщение
5. Очередь спит 600 секунд
6. Очередь сохраняет комментарий в БД

Запуск очереди на Timeweb.ru осуществляется при помощи nohup, чтобы отцепить процесс от терминала.

## Добавление лайков
Чтобы нельзя было добавить лайк несколько раз, я решила использовтаь небольшой хеш, который вынесен в метод ```Like::createHash(Request $request)```.
В данный момент в состав хеша входят IP адрес пользователя и заголовок User-Agent. Это позволяет ограничить накрутку лайков в ручную и при помощи роботов.
Перед добавлением лайков, происходит поиск по записи с идентичным хешем, и лайк добавлятся только в том случае, если пользователь еще не оставлял лайк к данной статье.

## Блокировки БД
Чтобы избежать блокировки, просмотры, лайки и комментарии вынесены в отдельные таблицы.
Новые добавляется при помощи INSERT, а количество определяется при помощи COUNT.
Если делать UPDATE, то записи будут блокироваться при 1млн запросов в секунду.

COUNT работает медленнее чем SELECT, но в будущем будет возможность вынести подсчет просмотров в отдельный фоновый процесс, 
снизив таким образом блокировки еще сильнее. Такой подход лучше работает с репликацией. Я не стала этого делать сейчас, чтобы "не городить огород".

По этой же причине для таблицы лайков использованы раздельные индексы вместо составных, так как чем больше индексов, тем медленнее запись.

## API

Для организации API я создала базовый класс ```BaseApiController```, который хранит в себе информацию о протоколе общения. 
На данный момент реализовала методы для ответа с ошибкой и обычного ответа через API. Данный класс необходим в случае, если протокол будет меняться в будущем (к примеру мы захотим какую-то определенную структуру ответа).

Изначально я хотела добавить также метод для ответа с ошибками валидации, 
так как Laravel использует достаточно странный код ошибки HTTP (422 вместо классического для REST кода 400). 
В итоге, я решила, что не стоит этого делать, так как лишний код, неотносящийся на прямую к бизнес требованиям будет усложнять восприятие.

В качестве клиента Javascript я решила использовать <b>Axios</b> + <b>JQuery</b>, так как это один из классических инструментов Laravel.
Промисы использованны в классической манере, чтобы код легче читался.

В более крупном проекте, я бы наверно использовала React и async/await стиль.

## XSS и CSRF
Я решила не усложнять проект передачей CSRF токена через API. Так как у нас в проекте нет никаких действий с авторизованным пользователем.

Так как в проекте используется шаблонизатор Blade, XSS инъекции работать не будут. 
Однако следует учесть, что при безответственной передаче пользовательского ввода в Javascript можно создать возможность XSS атаки.
