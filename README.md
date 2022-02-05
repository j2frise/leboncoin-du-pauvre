# leboncoin-du-pauvre
Projet scolaire symfony

# commandes d'installation avec Docker, composer, et symfony
1- docker-compose run --rm --no-deps app-server composer install

2- docker run --rm -it -v $(pwd):/application -w /application node yarn install

3- docker run --rm -it -v $(pwd):/application -w /application node yarn encore dev

4- docker-compose up --build

5- docker-compose exec app-server php bin/console doctrine:migrations:migrate

6- docker-compose exec app-server php bin/console hautelook:fixtures:load