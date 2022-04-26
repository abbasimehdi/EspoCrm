<?php

namespace Espo\Modules\Ticket\Interfaces;

interface PostActionStoreInterface
{
    public function postActionStore(object $request): string;
}