<?php
/**
* @file
* Contains \Drupal\intro\Form\IntroAdminForm.
*/

namespace Drupal\intro\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class IntroAdminForm extends ConfigFormBase {

    /**
    * {@inheritdoc}.
    */
    public function getFormId() {
        return 'intro_admin_form';
    }


    /**
    * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state, $extra = NULL) {

        $form = parent::buildForm($form, $form_state);

        // The configuration API provides a central place for modules to store configuration data.
        $config = $this->config('intro.settings');

        $form['who_we_are'] = array(
            '#type'          => 'textarea',
            '#title'         => $this->t('Qui sommes-nous'),
            '#default_value' => $config->get('intro.who_we_are')
        );

        $form['bio'] = array(
            '#type'          => 'textarea',
            '#title'         => $this->t('Nos prestations'),
            '#default_value' => $config->get('intro.bio')
        );

        return $form;
    }


    /**
    * {@inheritdoc}
    */
    public function validateForm(array &$form, FormStateInterface $form_state) {
    }


    /**
    * {@inheritdoc}
    */
    public function submitForm(array &$form, FormStateInterface $form_state) {

        $config = $this->config('intro.settings');

        $config->set('intro.who_we_are', $form_state->getValue('who_we_are'));
        $config->set('intro.bio', $form_state->getValue('bio'));

        $config->save();

        return parent::submitForm($form, $form_state);
    }


    /**
    * {@inheritdoc}
    */
    protected function getEditableConfigNames() {
        return [
            'intro.settings',
        ];
    }

}
