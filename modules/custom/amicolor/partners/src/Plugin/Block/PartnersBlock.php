<?php
/**
* @file
* Contains \Drupal\partners\Plugin\Block\PartnersBlock.
*/

namespace Drupal\partners\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Partners' Block
*
* @Block(
*   id = "partners_block",
*   admin_label = @Translation("Partners block"),
* )
*/
class PartnersBlock extends BlockBase {
    /**
    * {@inheritdoc}
    */
    public function build() {
        $variables = array();

        $storage = \Drupal::entityManager()->getStorage('node');
        $nids = $storage->getQuery()
            ->condition('type', 'partners')
            ->condition('status', 1)
            ->execute();

        $partners = $storage->loadMultiple($nids);

        foreach ($partners as $key => $partner) {
            $variables['partners'][] = array(
                'image' => $partner->field_logo->entity->url(),
                'url'   => '$partner->field_lien',
            );
        }

        return [
            '#theme'     => 'partners_block',
            '#variables' => $variables,
            '#attached'  => array(
                'library' =>  array(
                    'partners/amicolor-partners'
                ),
            ),
        ];
    }

}
