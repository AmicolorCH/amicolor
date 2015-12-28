<?php
/**
* @file
* Contains \Drupal\works\Plugin\Block\WorksBlock.
*/

namespace Drupal\works\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Works' Block
*
* @Block(
*   id = "works_block",
*   admin_label = @Translation("Works block"),
* )
*/
class WorksBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        $storage = \Drupal::entityManager()->getStorage('node');
        $nids = $storage->getQuery()
            ->condition('type', 'slider_homepage')
            ->condition('status', 1)
            ->execute();

        $works = $storage->loadMultiple($nids);

        foreach ($works as $key => $slider) {
            $variables['works'][] = array(
                'hangs' => $slider->field_hangs->value,
                'image' => $slider->field_background_image->entity->url(),
            );
        }

        return [
            '#theme'     => 'works_block',
            '#variables' => $variables,
            '#attached'  => array(
                'library' =>  array(
                    'works/amicolor-works'
                ),
            ),
        ];
    }

}
