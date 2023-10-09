<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_placeholdering",
 *   admin_label = @Translation("Test Placeholdering block"),
 * )
 */
class TestPlaceholdering extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'time' => [
        '#markup' => date('H:i:s'),
      ],
      '#cache' => [
        'max-age' => 0,
      ],
    ];

    return $build;
  }

}
