# leboncoin-du-pauvre
Projet scolaire symfony

# commandes d'installation avec Docker, composer, et symfony
1- docker-compose run --rm --no-deps app-server composer install

2- docker-compose up --build

3- docker-compose exec app-server php bin/console doctrine:migrations:migrate

4- docker-compose exec app-server php bin/console hautelook:fixtures:load