.SILENT:
.PHONY: setup

## Colors
COLOR_RESET = \033[0m
COLOR_INFO = \033[32m
COLOR_COMMENT = \033[33m

## Show Help
help:
	printf "${COLOR_COMMENT}Usage:${COLOR_RESET}\n"
	printf " make [target]\n\n"
	printf "${COLOR_COMMENT}Available targets:${COLOR_RESET}\n"
	awk '/^[a-zA-Z\-\_0-9\.@]+:/ { \
		helpMessage = match(lastLine, /^## (.*)/); \
		if (helpMessage) { \
			helpCommand = substr($$1, 0, index($$1, ":")); \
			helpMessage = substr(lastLine, RSTART + 3, RLENGTH); \
			printf " ${COLOR_INFO}%-16s${COLOR_RESET} %s\n", helpCommand, helpMessage; \
		} \
	} \
	{ lastLine = $$0 }' $(MAKEFILE_LIST)

################
### Building ###
################

## Rebuild the whole server
build: build-composer build-npm build-key build-database

## Install all composer dependencies
build-composer:
	composer install

## Install all npm dependencies
build-npm:
	npm ci
	npm run build

## Generate the application encryption key
build-key:
	php artisan key:generate

## Remigrate the database, add seeded objects and create helper files
build-database:
	php artisan migrate:fresh --seed
	php artisan ide-helper:models -N

################
### Testing  ###
################

## Test the application
test: test-php-cs-fixer test-phpstan test-audit test-pest-coverage

## Test the application with php-cs-fixer
test-php-cs-fixer:
	./vendor/bin/php-cs-fixer fix

## Test the application with phpstan
test-phpstan:
	./vendor/bin/phpstan analyse --memory-limit=-1

## Test the application with coverage report
test-pest-coverage:
	php artisan test --coverage --min=100 -p --coverage-html public/coverage

## Test the application without coverage report
test-pest:
	php artisan test -p

## Test for security vulnerabilities
test-audit:
	composer audit
	npm audit

################
### Utility  ###
################

## Run the queue locally
queue:
	php artisan queue:listen --queue=default

## Publish all dependencies
publish:
	php artisan horizon:publish
	php artisan telescope:publish
