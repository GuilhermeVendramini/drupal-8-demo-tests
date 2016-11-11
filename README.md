# drupal-8-demo-tests

Enable the module "custom_tests" and "simpletest".

# Running the test

Go to: admin/config/development/testing 

Runthe tes: "\Drupal\custom_tests\Tests\CustomControllerTest

# Running via command line

php core/scripts/run-tests.sh --browser --verbose --url http://yoursite --class "Drupal\just_synchronize_entity\Tests\SynchronizeEntityTest"
