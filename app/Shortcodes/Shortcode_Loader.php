<?php
namespace Yeti\WPDispensarySync\Shortcodes;
use Yeti\WPDispensarySync\Plugin;

class Shortcode_Loader extends Plugin {

  /**
   * @var array Shortcode class name to register
   * @since 0.3.0
   */
  protected $shortcodes;

  public function __construct() {

    $this->shortcodes = array(
      Hello_Shortcode::class,
      CurrentYear_Shortcode::class
    );

    foreach( $this->shortcodes as $shortcodeClass ) {
      if( class_exists( $shortcodeClass ) ) new $shortcodeClass();
    }

  }

}
