<?php
/**
* @file
* Contains \Drupal\layouts\Plugin\Block\HeaderBlock.
*/

namespace Drupal\layouts\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\Core\Menu\MenuTreeParameters;

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

        $parameters = new MenuTreeParameters();
        $parameters->setMaxDepth(1)->onlyEnabledLinks();
        $menu = \Drupal::menuTree()->load('main', $parameters);

        foreach ($menu as $key => $value) {
            $variables['menu'][$value->link->getWeight()] = array(
                'title' => $value->link->getTitle(),
                'url'   => $value->link->getUrlObject()->toString()
            );
        }
        ksort($variables['menu']);

        return [
            '#theme'     => 'layouts_header_block',
            '#variables' => $variables,
            '#attached'  => array(
                'library' =>  array(
                    'layouts/amicolor-layouts-header'
                ),
            ),
        ];
    }

}
