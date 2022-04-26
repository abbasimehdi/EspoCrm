<?php

namespace Espo\Modules\Ticket\Interfaces;

interface ResponseInterface
{
    public function response(int $id): string;
}