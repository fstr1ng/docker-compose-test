# docker-compose-test
Тестовое задание для вакансии https://spb.hh.ru/vacancy/38206793

Запустить контейнеры:
docker-compose up --build

Выполнить скрипт для парсинга адресов:
bash ip-parse.sh

Результат будет выведен на stdout и в /tmp/nginx-proxy-ips.

Веб-страница будет доступна на localhost и с внешних устроств (напр. в локальной сети хоста).
В docker-compose.yml можно задать хостнейм для странички (домен).
На странице всегда отображается ip-адрес докер-контейнера с проксирующим nginx, поскольку именно он отправляет запросы к php/apache.
В логе самого nginx сохраняются реальные адреса клиентов.
