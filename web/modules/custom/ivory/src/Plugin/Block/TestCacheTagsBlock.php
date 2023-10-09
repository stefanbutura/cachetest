<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_cache_tags_block",
 *   admin_label = @Translation("Test cache tags block"),
 * )
 */
class TestCacheTagsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'text' => [
        '#markup' => date('H:i:s'),
      ],
      '#cache' => [
        'tags' => ['testing', 'fdsa'],
      ],
    ];

    return $build;
  }

}
