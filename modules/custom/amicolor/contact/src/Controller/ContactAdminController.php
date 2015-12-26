<?php
/**
* @file
* Contains \Drupal\contact\Controller\AdminConfigController.
*/

namespace Drupal\contact\Controller;

/**
* AdminConfigController.
*/
class ContactAdminController {
    /**
    * Generates an example page.
    */
    public function admin() {
        $variables = array();
        $variables['form'] = \Drupal::formBuilder()->getForm('Drupal\contact\Form\ContactAdminForm');
        return [
            '#theme'     => 'contact_admin',
            '#variables' => $variables,
        ];
    }
}
