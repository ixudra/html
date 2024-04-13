<?php

namespace Ixudra\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ixudra\Html\HtmlBuilder
 */
class HtmlFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'html';
    }
}
