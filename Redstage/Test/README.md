# setup unit tests

Rename or create a copy of file `phpunit.xml.dist` on `dev/test/unit` with name `phpunit.xml` 

In this file already exists a configuration of all unit tests on `app/code`. 
In your module put the files of tests on folder `Test`

# Setup integration tests

Rename or create a copy of file `phpunit.xml.dist` on `dev/test/integration` with name `phpunit.xml`

Rename or create a copy of file `install-config-mysql.php.dist` on `dev/test/integration/etc` with name `install-config-mysql.php`

Configure the credentials to access the database into `install-config-mysql.php`

create the database for tests. 

# Run tests using the CLI of magento:

`magento dev:tests:run <test>`

To list the available test types, enter

`magento dev:tests:run --help`

This gives you a list similar to the following:

`all, unit, integration, integration-all, static, static-all, integrity, legacy, default`

For example, to run integration tests, enter

`magento dev:tests:run integration`

# Run tests using PHPunit

To run tests you need run phpunit with a especific configuration file:

`vendor/bin/phpunit -c dev/tests/unit/phpunit.xml`

`vendor/bin/phpunit -c dev/tests/integration/phpunit.xml`


# Creating test suite

If you want run the test of your module just, you can create a `testsuite` on 
`phpunit.xml`

Magento already have a test suite to run all unit tests

```
<testsuite name="Magento Unit Tests">
    <directory suffix="Test.php">../../../app/code/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../dev/tools/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../dev/tools/*/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../lib/internal/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../lib/internal/*/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../setup/src/*/*/Test/Unit</directory>
    <directory suffix="Test.php">../../../vendor/*/module-*/Test/Unit</directory>
    <directory suffix="Test.php">../../../vendor/*/framework/Test/Unit</directory>
    <directory suffix="Test.php">../../../vendor/*/framework/*/Test/Unit</directory>
</testsuite>
```

To run it, you use param `--testsuite "Magento Unit Tests"`

`vendor/bin/phpunit -c dev/tests/unit/phpunit.xml --testsuite "Magento Unit Tests"`

You can create a testsuite for your module.

```
<testsuite name="RedStage">
    <directory suffix="Test.php">../../../app/code/Redstage/Test/Test/Unit</directory>
</testsuite>
```

Or use other file of configuration ex. `phpunit_redstage.xml`

