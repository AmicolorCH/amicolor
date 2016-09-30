<?php
/**
* @file
* Contains \Drupal\intro\Plugin\Block\IntroBlock.
*/

namespace Drupal\intro\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Intro' Block
*
* @Block(
*   id = "intro_block",
*   admin_label = @Translation("Intro block"),
* )
*/
class IntroBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        $config = \Drupal::config('intro.settings');

        $variables['who_we_are'] = $config->get('intro.who_we_are');
        $variables['bio']        = $config->get('intro.bio');

        return [
            '#theme'     => 'intro_block',
            '#variables' => $variables,
        ];
    }

}
