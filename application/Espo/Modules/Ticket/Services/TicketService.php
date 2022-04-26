<?php

namespace Espo\Modules\Ticket\Services;

use Espo\Modules\Ticket\Repositories\Ticket;
use Matrix\Exception;

class TicketService
{
    public Ticket $ticketRepository;

    /**
     * @param Ticket $ticketRepository
     */
    public function __construct(Ticket $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    /**
     * @param object $request
     * @return string
     * @throws Exception
     */
    public function postActionStore(object $request): string
    {
       return $this->ticketRepository->postActionStore($request);
    }
}