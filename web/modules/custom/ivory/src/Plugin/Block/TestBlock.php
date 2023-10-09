<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_block",
 *   admin_label = @Translation("Test block"),
 * )
 */
class TestBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'text' => [
        '#markup' => 'Hello',
      ],
      '#cache' => [
        'max-age' => 3600,
      ],
    ];

    return $build;
  }

}
