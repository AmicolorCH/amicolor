<?php
/**
* @file
* Contains \Drupal\works\Controller\WorksController.
*/

namespace Drupal\works\Controller;

use Drupal\Core\Url;

/**
* WorksController.
*/
class WorksController {

    /**
    * Generates an example page.
    */
    public function detail(\Drupal\node\NodeInterface $node, $delta = 0) {
        $variables = array();

        if( $node->getType() == 'works' ){

            $image = null;
            // Try to get the delta image by default
            if( isset($node->field_gallery[$delta]) ){
                $image = $node->field_gallery[$delta]->entity->url();

            // If the delta image not exist in the gallery, try to retrieve the first image
            }elseif( isset($node->field_gallery[0]) ){
                $image = $node->field_gallery[0]->entity->url();
                $delta = 0;
            }

            // Retrieve the previous image for link
            $prev = null;
            if( isset($node->field_gallery[$delta-1]) ){
                $prev = Url::fromRoute('works.detail', ['node' => $node->nid->value, 'delta'=>$delta-1]);
            }

            // Retrieve the next image for link
            $next = null;
            if( isset($node->field_gallery[$delta+1]) ){
                $next = Url::fromRoute('works.detail', ['node' => $node->nid->value, 'delta'=>$delta+1]);
            }

            $variables['work'] = array(
                'image' => $image,
                'prev'  => $prev,
                'next'  => $next,
            );

            $params = [
                '#theme'     => 'works_detail',
                '#variables' => $variables,
            ];
            // echo render($params);
            echo \Drupal::service('renderer')->render($params);
            die();
        }
    }
}
