.PHONY: up up-d up-b up-r down exec composer composer-install composer-update test test-mysql test-postgres phpstan check-cs fix-cs rector setup

setup:
	@test -f .env || cp .env.dist .env

-include .env

PROJECT_NAME ?= doctrine-behaviors

DOCKER_COMPOSE = docker-compose
PHP_BASH = docker exec -it php_$(PROJECT_NAME) /bin/bash
DOCKER_EXEC = $(PHP_BASH) -c

# Docker Compose Commands
up: setup
	$(DOCKER_COMPOSE) up

up-d: setup
	$(DOCKER_COMPOSE) up -d

up-b: setup
	$(DOCKER_COMPOSE) up --build

up-r: setup
	$(DOCKER_COMPOSE) up --force-recreate

down: setup
	$(DOCKER_COMPOSE) down --remove-orphans

exec: setup
	$(DOCKER_EXEC) "echo -e '\033[32m'; /bin/bash"

# Composer Commands
composer: setup
	$(DOCKER_EXEC) "composer $(CMD)"

composer-install: CMD = install
composer-install: composer

composer-update: CMD = update
composer-update: composer

composer-i: composer-install
composer-u: composer-update

# Tests
test: setup
	$(DOCKER_EXEC) "vendor/bin/phpunit $(ARGS)"

test-mysql: setup
	$(DOCKER_COMPOSE) --profile mysql up -d
	$(DOCKER_EXEC) "DB_ENGINE=pdo_mysql DB_HOST=mysql DB_MEMORY=false DB_PASSWD=rootpass DB_SERVER_VERSION=8.0.0 vendor/bin/phpunit $(ARGS)"

test-postgres: setup
	$(DOCKER_COMPOSE) --profile postgres up -d
	$(DOCKER_EXEC) "DB_ENGINE=pdo_pgsql DB_HOST=postgres DB_MEMORY=false DB_PASSWD=rootpass DB_SERVER_VERSION=17.0.0 vendor/bin/phpunit $(ARGS)"

# Static analysis
phpstan: setup
	$(DOCKER_EXEC) "composer phpstan"

check-cs: setup
	$(DOCKER_EXEC) "composer check-cs"

fix-cs: setup
	$(DOCKER_EXEC) "composer fix-cs"

rector: setup
	$(DOCKER_EXEC) "vendor/bin/rector process --dry-run --ansi"

# Це скидає будь-які аргументи передані до цілей, роблячи їх не-цілями
%:
	@:
