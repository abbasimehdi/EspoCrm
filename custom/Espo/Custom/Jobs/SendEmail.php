<?php

namespace Espo\Custom\Jobs;

use Espo\Core\Api\Auth;
use Espo\Core\Job\JobDataLess;
use Espo\Entities\User;

class SendEmail implements JobDataLess
{

    protected User $user;

    /**
     * Pass dependencies through the constructor using DI.
     */
    public function __construct()
    {
         // Do nothing
    }

    /**
     * @return void
     */
    public function run(): void
    {
        var_dump(Auth::class);
    }
}