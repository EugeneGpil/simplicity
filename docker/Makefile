init: build up perm init-back-env composer-install key-generate passport-keys db-migrate

build:
	docker compose build

up:
	docker compose up --detach --remove-orphans --force-recreate

back:
	docker compose exec --user=app php-fpm bash

front:
	docker compose exec --user=app node bash

down:
	docker compose down

perm:
	docker compose run php-fpm bash -cl \
		"/set_perm.sh app"

composer-install:
	docker compose run --user=app php-fpm bash -cl \
		"composer install"

init-back-env:
	@if [ -e $$(test ! -f ../back/.env || grep "^APP_KEY=" ../back/.env) ]; then\
  		echo "APP_KEY=" > ../back/.env.temp;\
	else\
		grep "^APP_KEY=" ../back/.env > ../back/.env.temp;\
	fi
	grep -v "^APP_KEY=" ../back/.env.docker > ../back/.env
	cat ../back/.env.temp >> ../back/.env
	echo "" >> ../back/.env
	rm ../back/.env.temp

key-generate:
	@if [ -e $$(test ! -f ../back/.env || egrep "^APP_KEY=.+" ../back/.env) ]; then\
		docker compose run --user=app php-fpm bash -cl \
			"php artisan key:generate";\
	else\
		echo "APP_KEY is already set. Skipped.";\
	fi

passport-keys:
	docker compose run --user=app php-fpm bash -cl \
		"php artisan passport:keys | true"

db-migrate:
	docker compose run --user=app php-fpm bash -cl \
		"php artisan migrate"
