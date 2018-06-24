<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;


class HelloController extends ControllerBase {
 
 /* print current time when path is accessed*/
  public function content() {
  	 
   	$timestamp = \Drupal::time() ->getCurrentTime();
   	$request_time = format_date($timestamp, 'custom', 'h:i A');
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Current Time : @time', array('@time' => $request_time)),

    );
  }
  
}



