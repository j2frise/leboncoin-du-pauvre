# leboncoin-du-pauvre
Projet scolaire symfony

# commandes
docker-compose run --rm --no-deps app-server composer install

docker run --rm -it -v $(pwd):/application -w /application node yarn install
docker run --rm -it -v $(pwd):/application -w /application node yarn encore dev

docker-compose up --build

docker-compose exec app-server php bin/console doctrine:migrations:migrate

docker-compose exec app-server php bin/console hautelook:fixtures:load