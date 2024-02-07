<?php

namespace RonyLicha\FilamentSortOrder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RonyLicha\FilamentSortOrder\FilamentSortOrder
 */
class FilamentSortOrder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RonyLicha\FilamentSortOrder\FilamentSortOrder::class;
    }
}
