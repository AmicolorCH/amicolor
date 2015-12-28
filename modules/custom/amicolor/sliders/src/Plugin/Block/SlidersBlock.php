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

        $storage = \Drupal::entityManager()->getStorage('node');
        $nids = $storage->getQuery()
            ->condition('type', 'slider_homepage')
            ->condition('status', 1)
            ->execute();

        // var_dump($sliders[1]->get('field_hangs')->value);
        // var_dump($sliders[1]->field_hangs->value);
        // var_dump($sliders[1]->field_background_image->entity->url());

        $sliders = $storage->loadMultiple($nids);

        foreach ($sliders as $key => $slider) {
            $variables['sliders'][] = array(
                'hangs' => $slider->field_hangs->value,
                'image' => $slider->field_background_image->entity->url(),
            );
        }

        // var_dump($sliders[1]->get('field_background_image'));
        // var_dump($sliders[1]->get('field_background_image'));

        $config = \Drupal::config('sliders.settings');

        $variables['who_we_are'] = $config->get('sliders.who_we_are');
        $variables['bio']        = $config->get('sliders.bio');

        return [
            '#theme'     => 'sliders_block',
            '#variables' => $variables,
            '#attached'  => array(
                'library' =>  array(
                    'sliders/amicolor-sliders'
                ),
            ),
        ];
    }

}
