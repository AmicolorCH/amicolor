<?php
/**
* @file
* Contains \Drupal\contact\Form\ContactForm.
*/

namespace Drupal\contact\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactForm extends FormBase {

    /**
    * {@inheritdoc}.
    */
    public function getFormId() {
        return 'contact_form';
    }


    /**
    * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state, $extra = NULL) {

        $form['#action'] = '#contact';

        $form['step_1'] = array(
            '#prefix'        => '<div class="row">',
            '#suffix'        => '</div>',
        );

        $form['step_1']['lastname'] = array(
            '#type'          => 'textfield',
            '#default_value' => '',
            '#required'      => true,
            '#prefix'        => '<div class="col-md-6"><div class="form-group"><div class="label" for="lastname">'.$this->t('Nom').'</div>',
            '#suffix'        => '</div></div>',
        );

        $form['step_1']['firstname'] = array(
            '#type'          => 'textfield',
            '#default_value' => '',
            '#required'      => true,
            '#prefix'        => '<div class="col-md-6"><div class="form-group">
                <div class="label" for="firstname">'.$this->t('Prénom').'</div>',
            '#suffix'        => '</div></div>',
        );

        $form['step_2'] = array(
            '#prefix'        => '<div class="row">',
            '#suffix'        => '</div>',
        );

        $form['step_2']['email'] = array(
            '#type'          => 'email',
            '#default_value' => '',
            '#prefix'        => '<div class="col-md-6"><div class="form-group">
                <div class="label" for="email">'.$this->t('Email').'</div>',
            '#suffix'        => '</div></div>',
        );

        $form['step_2']['phone'] = array(
            '#type'          => 'textfield',
            '#default_value' => '',
            '#prefix'        => '<div class="col-md-6"><div class="form-group">
                <div class="label" for="phone">'.$this->t('Téléphone').'</div>',
            '#suffix'        => '</div></div>',
        );


        $form['step_3'] = array(
            '#prefix'        => '<div class="row">',
            '#suffix'        => '</div>',
        );
        $form['step_3']['message'] = array(
            '#type'          => 'textarea',
            '#default_value' => '',
            '#prefix'        => '<div class="col-md-12"><div class="form-group"><div class="label" for="phone">'.$this->t('Message').'</div>',
            '#suffix'        => '</div></div>',
        );

        $form['actions']['submit'] = array(
            '#type'        => 'submit',
            '#value'       => $this->t('Envoyer'),
            '#button_type' => 'primary',
        );

        return $form;
    }


    /**
    * {@inheritdoc}
    */
    public function validateForm(array &$form, FormStateInterface $form_state) {

        if ( empty($form_state->getValue('email')) AND empty($form_state->getValue('phone')) ) {
            $form_state->setErrorByName('email', $this->t('Le champ Email ou le champ Téléphone doivent être rempli.'));
        }
    }


    /**
    * {@inheritdoc}
    */
    public function submitForm(array &$form, FormStateInterface $form_state) {

        $config = \Drupal::config('contact.settings');
        // $to = $config->get('contact.mail');
        $to = 'wenger.kev@gmail.com';

        $params['from']      = 'contact@amicolor.ch';
        $params['lastname']  = $form_state->getValue('lastname');
        $params['firstname'] = $form_state->getValue('firstname');
        $params['email']     = $form_state->getValue('email');
        $params['phone']     = $form_state->getValue('phone');
        $params['message']   = $form_state->getValue('message');

        \Drupal::service('plugin.manager.mail')->mail('contact', 'contact_us', $to, 'fr', $params, $params['email']);

        // return parent::submitForm($form, $form_state);
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
