<?php

namespace Drupal\custom_tests\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the custom_tests module.
 * @group Custom
 */
class CustomControllerTest extends WebTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = array('custom_tests');

  /*
   * CMS name
   */
  private $cms;


  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    //Set default value to CMS
    $this->cms = 'Drupal 8';

    // Create and log in user.
    $user = $this->drupalCreateUser(array('administer site configuration'));
    $this->drupalLogin($user);
  }

  /**
   * Tests custom_tests functionality.
   */
  public function testCustomController() {
    // Access the URL
    $this->drupalGet('/custom-tests/powered');
    $this->assertResponse(200, 'The Powered page is available.');
    $this->assertText('Powered by ' . $this->cms, 'Drupal is the correct!');

    $this->drupalLogout();
  }

}
