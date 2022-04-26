<?php

namespace Espo\Custom\Controllers;

use Espo\Core\{
    Api\Request,
};
use \Espo\Core\Templates\Controllers\Base;
use Espo\Modules\Ticket\Services\TicketService;
use Matrix\Exception;

class Ticket extends Base
{

    public TicketService $ticketService;

    /**
     * @param TicketService $ticketService
     */
    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    /**
     * @param Request $request
     * @return string
     * @throws Exception
     */
    public function postActionStore(Request $request): string
    {
        return $this->ticketService->postActionStore($request);
    }
}
