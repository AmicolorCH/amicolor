<?php
/**
* @file
* Contains \Drupal\contact\Form\ContactAdminForm.
*/

namespace Drupal\contact\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactAdminForm extends ConfigFormBase {

    /**
    * {@inheritdoc}.
    */
    public function getFormId() {
        return 'contact_admin_form';
    }


    /**
    * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state, $extra = NULL) {

        $form = parent::buildForm($form, $form_state);

        // The configuration API provides a central place for modules to store configuration data.
        $config = $this->config('contact.settings');

        // $elements = drupal_map_assoc(array('pre', 'code'));
        // $form['contact_wrapping_element'] = array(
        //     '#type'          => 'select',
        //     '#title'         => $this->t('Select wrapping element'),
        //     '#default_value' => $config->get('element'),
        //     '#options'       => $elements,
        // );

        $form['address'] = array(
            '#type'          => 'textarea',
            '#title'         => $this->t('Bloc d\'adresse'),
            '#default_value' => $config->get('contact.address')
        );

        $form['mail'] = array(
            '#type'          => 'textfield',
            '#title'         => $this->t('Réception des mails de contact'),
            '#default_value' => $config->get('contact.mail')
        );


        $form['googlemap'] = array(
            '#type'          => 'textfield',
            '#title'         => $this->t('Lien Google Map'),
            '#default_value' => $config->get('contact.googlemap')
        );

        $form['facebook'] = array(
            '#type'          => 'textfield',
            '#title'         => $this->t('Lien Facebook'),
            '#default_value' => $config->get('contact.facebook')
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

        $config = $this->config('contact.settings');

        $config->set('contact.address', $form_state->getValue('address'));
        $config->set('contact.mail', $form_state->getValue('mail'));
        $config->set('contact.googlemap', $form_state->getValue('googlemap'));
        $config->set('contact.facebook', $form_state->getValue('facebook'));

        $config->save();

        return parent::submitForm($form, $form_state);
    }


    /**
    * {@inheritdoc}
    */
    protected function getEditableConfigNames() {
        return [
            'contact.settings',
        ];
    }

}
