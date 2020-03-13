<?php
namespace Drupal\formcontroller\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * MyMod controller.
 */

class FormController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
    $database = \Drupal::database();
    $query = $database->select('formdata2','u')
    ->fields('u', ['name', 'gender', 'phone', 'email', 'city', 'address']);
    $rows = $query->execute();
    $result = array();
    if($rows)
    {
      while($row = $rows->fetchAssoc())
      {
        //0 - Male, 1 - Female, 2 - Other
        switch($row['gender'])     
        {
          case 0:
            $gender = 'MALE';
            break;
          case 1:
            $gender = 'FEMALE';
            break;
          case 2:
            $gender = 'Other';
            break;
        }
        $arr = array($row['name'], $gender, $row['phone'], $row['email'], $row['city'], $row['address']);
        array_push($result, $arr);
      }
    }
    //Do something with your variables here.
    $myData = $result;

    return array(
      //Your theme hook name
      '#theme' => 'formcontroller_theme_hook',      
      //Your variables
      '#variable1' => $myData,
    );
    
  }

}