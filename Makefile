.PHONY: help

help:
	@grep -hE '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) \
	| sort \
	| awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help

prepare: ## load dependencies
	docker-compose run -T php /usr/bin/composer install

test: prepare ## run test
	docker-compose run -T php php vendor/bin/phpunit --configuration phpunit.xml
