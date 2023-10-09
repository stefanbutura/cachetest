<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_cache_keys_block",
 *   admin_label = @Translation("Test cache keys block"),
 * )
 */
class TestCacheKeysBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#cache' => [
        'max-age' => 0,
      ],
      'uncacheable' => [
        '#markup' => 'This date is not cached:' . date('H:i:s') . '<br>',
      ],
      'cacheable' => [
        '#markup' => 'This date is cached:' . date('H:i:s'),
        '#cache' => [
          'keys' => ['my_cacheable_key'],
        ],
      ],
    ];

    return $build;
  }

}
