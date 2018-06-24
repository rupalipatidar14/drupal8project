<?php
/**
 * @file
 * Contains \Drupal\hello\Plugin\Block\CompanyBlock.
 */
namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides company block.
 *
 * @Block(
 *   id = "company_block",
 *   admin_label = @Translation("Company"),
 *   category = @Translation("Blocks")
 * )
 */
class CompanyBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'Welcome to our company',
    );
  }
}

 