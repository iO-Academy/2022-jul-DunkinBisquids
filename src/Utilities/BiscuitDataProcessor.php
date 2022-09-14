<?php

namespace BisquidsTin\Utilities;

abstract class BiscuitDataProcessor
{
    public static function mostDunked(array $biscuits): string
    {
        if ($biscuits !== []) {

            usort($biscuits, function ($first, $second) {
                return $first->getDunk() < $second->getDunk();
            });

            return $biscuits[0]->getName();
        } else {
            return '';
        }
    }

    public static function mostFlunked(array $biscuits): string
    {
        if ($biscuits !== []) {

            usort($biscuits, function ($first, $second) {
                return $first->getFlunk() < $second->getFlunk();
            });

            return $biscuits[0]->getName();
        } else {
            return '';
        }
    }
}
