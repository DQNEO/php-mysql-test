.PHONY: vendor clean

test:
	./local-test.sh

vendor:
	composer install

clean:
	rm -rf composer.lock vendor
