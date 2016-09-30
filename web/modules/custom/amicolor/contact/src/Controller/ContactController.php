<?php
/**
* @file
* Contains \Drupal\contact\Controller\ContactController.
*/

namespace Drupal\contact\Controller;

/**
* AdminConfigController.
*/
class ContactController {
    /**
    * Generates an example page.
    */
    public function send() {
        echo 'test';
        die();
        // return array(
        //     '#markup' => t('Hello World! ContactController'),
        // );
    }

    /**
    * Generates an example page.
    */
    public function custom() {
        $variables = array();
        // Drupal::moduleHandler()->invoke($block, 'views_block__blog_block_1', $args = array());
        $variables['block_output'] = \Drupal::service('plugin.manager.block')
          ->createInstance('contact_block', array())
          ->build();
          // 
        //   $variables['block_intro'] = \Drupal::service('plugin.manager.block')
        //     ->createInstance('intro_block', array())
        //     ->build();

        return [
            '#theme'     => 'custom_page',
            '#variables' => $variables,
        ];
    }
}
