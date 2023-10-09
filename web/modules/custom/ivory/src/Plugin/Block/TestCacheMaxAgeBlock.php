<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_cache_max_age_block",
 *   admin_label = @Translation("Test cache max age block"),
 * )
 */
class TestCacheMaxAgeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'text' => [
        '#markup' => date('H:i:s'),
      ],
      '#cache' => [
      // 'max-age' => 0,
        'max-age' => 3600,
      ],
    ];

    return $build;
  }

}
