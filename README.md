#Execute all tests

docker-compose exec web ./vendor/bin/phpunit --debug tests

#User

docker-compose exec web ./vendor/bin/phpunit tests/UserTest.php