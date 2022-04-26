<?php

namespace Espo\Modules\Ticket\Interfaces;

interface ExecuteQueryInterface
{
    public function executeQuery(object $result, object $request): void;
}