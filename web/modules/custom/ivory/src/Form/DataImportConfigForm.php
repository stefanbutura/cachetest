<?php

namespace Drupal\ivory\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Config form for the Data Import Form.
 */
class DataImportConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ivory_import.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ivory_data_import_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    $config = $this->config('ivory_import.settings');

    $form['enabled'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable data import by parties'),
      '#default_value' => $config->get('enabled'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ivory_import.settings')
      ->set('enabled', $form_state->getValue('enabled'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
