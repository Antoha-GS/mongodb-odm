<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Types;

/**
 * The Int type.
 *
 */
class IntType extends Type
{
    public function convertToDatabaseValue($value)
    {
        return $value !== null ? (int) $value : null;
    }

    public function convertToPHPValue($value)
    {
        return $value !== null ? (int) $value : null;
    }

    public function closureToMongo()
    {
        return '$return = (int) $value;';
    }

    public function closureToPHP()
    {
        return '$return = (int) $value;';
    }
}
