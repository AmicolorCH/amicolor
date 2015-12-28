<?php
/**
* @file
* Contains \Drupal\homepage\Controller\HomepageController.
*/

namespace Drupal\homepage\Controller;

/**
* HomepageController.
*/
class HomepageController {

    /**
    * Generates an example page.
    */
    public function front() {
        $variables = array();

        $variables['intro_block'] = \Drupal::service('plugin.manager.block')
          ->createInstance('intro_block', array())
          ->build();

        $variables['contact_block'] = \Drupal::service('plugin.manager.block')
          ->createInstance('contact_block', array())
          ->build();

        return [
            '#theme'     => 'homepage_front',
            '#variables' => $variables,
        ];
    }
}
