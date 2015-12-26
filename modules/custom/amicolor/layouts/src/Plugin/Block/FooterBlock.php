<?php
/**
* @file
* Contains \Drupal\layouts\Plugin\Block\FooterBlock.
*/

namespace Drupal\layouts\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Layouts' Block
*
* @Block(
*   id = "layouts_footer_block",
*   admin_label = @Translation("Layouts Footer block"),
* )
*/
class FooterBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        return [
            '#theme'     => 'layouts_footer_block',
            '#variables' => $variables,
        ];
    }

}
