<?php
 namespace MailPoetVendor\Doctrine\DBAL\Types; if (!defined('ABSPATH')) exit; use DateInterval; use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform; use Throwable; use function substr; class DateIntervalType extends \MailPoetVendor\Doctrine\DBAL\Types\Type { public const FORMAT = '%RP%YY%MM%DDT%HH%IM%SS'; public function getName() { return \MailPoetVendor\Doctrine\DBAL\Types\Types::DATEINTERVAL; } public function getSQLDeclaration(array $column, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { $column['length'] = 255; return $platform->getVarcharTypeDeclarationSQL($column); } public function convertToDatabaseValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { if ($value === null) { return null; } if ($value instanceof \DateInterval) { return $value->format(self::FORMAT); } throw \MailPoetVendor\Doctrine\DBAL\Types\ConversionException::conversionFailedInvalidType($value, $this->getName(), ['null', 'DateInterval']); } public function convertToPHPValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { if ($value === null || $value instanceof \DateInterval) { return $value; } $negative = \false; if (isset($value[0]) && ($value[0] === '+' || $value[0] === '-')) { $negative = $value[0] === '-'; $value = \substr($value, 1); } try { $interval = new \DateInterval($value); if ($negative) { $interval->invert = 1; } return $interval; } catch (\Throwable $exception) { throw \MailPoetVendor\Doctrine\DBAL\Types\ConversionException::conversionFailedFormat($value, $this->getName(), self::FORMAT, $exception); } } public function requiresSQLCommentHint(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return \true; } } 