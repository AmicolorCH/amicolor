<?php
/**
* @file
* Contains \Drupal\admin_config\Controller\AdminConfigController.
*/

namespace Drupal\admin_config\Controller;

/**
* AdminConfigController.
*/
class AdminConfigController {
    /**
    * Generates an example page.
    */
    public function demo() {
        return array(
            '#markup' => t('Hello World!'),
        );
    }
}
