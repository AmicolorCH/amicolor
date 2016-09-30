<?php
/**
* @file
* Contains \Drupal\works\Plugin\Block\WorksBlock.
*/

namespace Drupal\works\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

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
            ->condition('type', 'works')
            ->condition('status', 1)
            ->sort('field_worked_at')
            ->execute();

        $works = $storage->loadMultiple($nids);

        foreach ($works as $key => $work) {
            $variables['works'][] = array(
                'title' => $work->title->value,
                'cover' => $work->field_cover_image->entity->url(),
                'url'   => Url::fromRoute('works.detail', ['node' => $work->nid->value]),
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
