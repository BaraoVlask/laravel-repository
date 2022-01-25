<?php

namespace Prettus\Repository\Events;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RepositoryEntityCreated
 *
 * @package Prettus\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "creating";

}
