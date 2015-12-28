<?php
/**
* @file
* Contains \Drupal\layouts\Plugin\Block\HeaderBlock.
*/

namespace Drupal\layouts\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Layouts' Block
*
* @Block(
*   id = "layouts_header_block",
*   admin_label = @Translation("Layouts Header block"),
* )
*/
class HeaderBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        $variables['logo'] = file_create_url(drupal_get_path('theme', 'amicolor') . '/images/logo.png');

        return [
            '#theme'     => 'layouts_header_block',
            '#variables' => $variables,
        ];
    }

}
