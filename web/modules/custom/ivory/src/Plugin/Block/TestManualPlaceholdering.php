<?php

namespace Drupal\ivory\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Security\TrustedCallbackInterface;

/**
 * Provides a block to display the page title.
 *
 * @Block(
 *   id = "test_manual_placeholdering",
 *   admin_label = @Translation("Test Manual Placeholdering block"),
 * )
 */
class TestManualPlaceholdering extends BlockBase implements TrustedCallbackInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      'time' => [
        '#lazy_builder' => [static::class . '::getTime', []],
        '#create_placeholder' => TRUE,
      ],
    ];

    return $build;
  }

  /**
   *
   */
  public static function getTime() {
    return [
      '#markup' => date('H:i:s'),
    ];
  }

  /**
   *
   */
  public static function trustedCallbacks() {
    return ['getTime'];
  }

}
