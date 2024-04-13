<?php

namespace Ixudra\Html;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ixudra\Html\FormBuilder
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
