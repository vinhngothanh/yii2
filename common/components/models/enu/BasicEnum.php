<?php

namespace common\components\enu;

use ReflectionClass;

abstract class BasicEnum {

	public static $labels = [];
	private static $constCacheArray = NULL;

	public static function getConstants($object = false, $keyword = true) {  
//        if (self::$constCacheArray == NULL) {
		self::$constCacheArray = [];
//        }
		$calledClass = get_called_class();
		if (!array_key_exists($calledClass, self::$constCacheArray)) {
			$reflect = new ReflectionClass($calledClass);
			if ($object) {
				$constCacheArray = $reflect->getConstants();
				foreach ($constCacheArray as $key => $value) {
					$attr = [
					"id" => $value,
					"name" => static::$labels[$key],
					];

					if ($keyword) {
						self::$constCacheArray[$calledClass]["{$key}"] = $attr;
					} else {
						self::$constCacheArray[$calledClass][] = $attr;
					}
				}
			} else {
				self::$constCacheArray[$calledClass] = $reflect->getConstants();
			}
		}

		return self::$constCacheArray[$calledClass];
	}

	public static function isValidName($name, $strict = false) {
		$constants = self::getConstants();

		if ($strict) {
			return array_key_exists($name, $constants);
		}

		$keys = array_map('strtolower', array_keys($constants));
		return in_array(strtolower($name), $keys);
	}

	public static function isValidValue($value) {
		$values = array_values(self::getConstants());
		return in_array($value, $values, $strict = true);
	}

}
