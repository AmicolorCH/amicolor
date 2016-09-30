<?php
/**
* @file
* Contains \Drupal\intro\Controller\AdminConfigController.
*/

namespace Drupal\intro\Controller;

/**
* AdminConfigController.
*/
class IntroAdminController {
    /**
    * Generates an example page.
    */
    public function admin() {
        $variables = array();
        $variables['form'] = \Drupal::formBuilder()->getForm('Drupal\intro\Form\IntroAdminForm');
        return [
            '#theme'     => 'intro_admin',
            '#variables' => $variables,
        ];
    }
}
