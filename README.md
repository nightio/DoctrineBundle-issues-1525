# Reproduce of problem with new version of doctrine bundle (2.6.x)

Issue: https://github.com/doctrine/DoctrineBundle/issues/1525

The update (doctrine bundle) reduces performance a bit. 
But as I added dama/doctrine-test-bundle it turns out it uses
more than 4 times memory in version 2.6.x compared to 2.5.7

### Requirements:
* php >= 8.1
  > it could work on other versions, but it was not tested
* memory_limit => 128M
  > `php -i | grep "memory_limit"`
* composer

### How to reproduce
```
# run test.sh
./test.sh
```

#### steps inside test.sh:
* run tests on version 2.5.7 
  > in this case tests are executed to the end

* run tests on version 2.6.x
  > in this case, tests are being broken due to memory limit


#### Test files:
* tests/DoctrineTest.php
* src/Controller/TestController.php
* src/Entity/Test.php