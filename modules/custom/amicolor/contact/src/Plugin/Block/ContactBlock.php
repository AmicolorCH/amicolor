<?php

/**
* @file
* Contains \Drupal\contact\Plugin\Block\ContactBlock.
*/

namespace Drupal\contact\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Contact' Block
*
* @Block(
*   id = "contact_block",
*   admin_label = @Translation("Contact block"),
* )
*/
class ContactBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        $variables = array();

        $config = \Drupal::config('contact.settings');
        $variables['address']   = $config->get('contact.address');
        $variables['googlemap'] = $config->get('contact.googlemap');
        $variables['facebook']  = $config->get('contact.facebook');

        $variables['form'] = \Drupal::formBuilder()->getForm('Drupal\contact\Form\ContactForm');

        return [
            '#theme'     => 'contact_block',
            '#variables' => $variables,
        ];
    }

}
