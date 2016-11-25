# drupal-8-demo-tests

Enable the module "custom_tests" and "simpletest".

# Running the test

Go to: admin/config/development/testing 

Run the test: "\Drupal\custom_tests\Tests\CustomControllerTest

# Running via command line

php core/scripts/run-tests.sh --browser --verbose --url http://yoursite --class "Drupal\custom_tests\Tests\CustomControllerTest"

More details

https://www.drupal.org/docs/7/testing/running-tests-through-command-line
