# samknows test

I tested it on PHP 7.3.29

## to run the command:

installation:
```$xslt
git@github.com:cezbil/samknows.git
```
```$xslt
composer install
```
## To start the command:
it takes argumetn at --input you should change it to the path where your input file lives
```$xslt
php bin/console app:analyse-metric --input="/var/www/html/Resources/Fixtures/inputs/1.json"
```
to run the tests
```$xslt
php ./vendor/bin/phpunit
```
## what to expect

Command will run and output result in the console
also creating new file in the outputs folder.

tests will create 2 files as they will run 2 inputs 

## Todo - if I had more time
- [ ] could do with moving some logic from command to a service,
but it is not too fat I thought it could wait