<?php

final class PlatformSymbols
  extends Phobject {

  public static function getPlatformClientName() {
    return 'Arcanist';
  }

  public static function getPlatformServerName() {
    return 'Phorge';
  }

  public static function getProductNames() {
    return array(
      self::getPlatformClientName(),
      self::getPlatformServerName(),
    );
  }

}
