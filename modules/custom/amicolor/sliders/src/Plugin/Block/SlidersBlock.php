<?php
/**
* @file
* Contains \Drupal\sliders\Plugin\Block\SlidersBlock.
*/

namespace Drupal\sliders\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Sliders' Block
*
* @Block(
*   id = "sliders_block",
*   admin_label = @Translation("Sliders block"),
* )
*/
class SlidersBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        $config = \Drupal::config('sliders.settings');

        $variables['who_we_are'] = $config->get('sliders.who_we_are');
        $variables['bio']        = $config->get('sliders.bio');

        return [
            '#theme'     => 'sliders_block',
            '#variables' => $variables,
        ];
    }

}
