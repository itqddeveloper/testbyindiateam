<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache; if (!defined('ABSPATH')) exit; use function time; use function uniqid; class Lock { public $value; public $time; public function __construct($value, $time = null) { $this->value = $value; $this->time = $time ?: \time(); } public static function createLockRead() { return new self(\uniqid(\time(), \true)); } } 