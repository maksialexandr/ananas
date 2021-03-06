### ТЕСТОВОЕ ЗАДАНИЕ НА ДОЛЖНОСТЬ:PHP-ПРОГРАММИСТ
#### Сервис «Стена сообщений»
###### Верстка сервиса - в приложенном файле.

###### Требования к технологиям
* Тестовое задание должно быть выполнено на языке PHP c преминением фреймворка Laravel. 

###### Главная страница
* Содержит список всех сообщений. 
* Сортировка - снизу-вверх (последние добавленное сообщение - сверху). 
* У каждого сообщения, помимо текста, указано имя автора.
* Если пользователь авторизован, ему становится доступна форма отправки сообщения. 
* Сообщение не может быть пустым (или состоять только из пробелов). 
* При попытке отправки такого сообщения - пользователю выдается предупреждение “Сообщение не может быть пустым”. Данное сообщение должно находиться под полем.
* После успешной отправки, сообщение пользователя сразу появляется на “стене”.

###### Авторизация
* В случае неуспешной авторизации, пользователю выводится сообщение “Вход в систему с указанными данными невозможен”.
 
###### Регистрация
* Требования к email и паролю пользователя могут быть произвольными (на усмотрение программиста), либо вовсе отсутствовать. 
* В случае неуспешной регистрации, каждое некорректно заполненное поле должно быть снабжено сообщением об ошибке, которое выводится под полем.

###### Главное меню (сверху)
* Пункт “Стена” - ведет на главную страницу, показывается всегда;
* Пункты “Авторизация” и “Регистрация” показываются только неавторизованным пользователям.
* Блок справа показывается только авторизованному пользователю. 
* Содержит Имя пользователя и ссылку “Выход”, нажав на которую пользователь выходит из-под своей учетной записи.
