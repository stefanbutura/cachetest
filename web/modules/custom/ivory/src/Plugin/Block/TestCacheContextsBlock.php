<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_cache_contexts_block",
 *   admin_label = @Translation("Test cache contexts block"),
 * )
 */
class TestCacheContextsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'text' => [
        '#markup' => 'Current URL is ' . \Drupal::request()->getRequestUri(),
      ],
      '#cache' => [
        'contexts' => ['url'],
      ],
    ];

    return $build;
  }

}
