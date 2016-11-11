<?php

namespace Drupal\custom_tests\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CustomController.
 *
 * @package Drupal\custom_tests\Controller
 */
class CustomController extends ControllerBase {

  /**
   * Getcontent.
   *
   * @return string
   *   Return Hello string.
   */
  public function GetContent() {
    //Static example message
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Powered by Drupal 8'),
    ];
  }

}
