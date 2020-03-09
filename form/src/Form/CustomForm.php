<?php
namespace Drupal\form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Our simple form class.
 */
class CustomForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'drupalup_simple_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Enter Your Name Please'),
    ];
    $form['phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Enter Phone Your number Please'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];
    return $form;
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Name=> '.$form_state->getValue('name').' Mobile Number=> '.$form_state->getValue('phone'));
    return [
      '#type' => 'markup',
      '#markup' => $form_state,
    ];
  }
}
