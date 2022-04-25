<?php
namespace Espo\Custom\Hooks\Meeting;

use Espo\ORM\Entity;

class TicketHook
{

    public static int $order = 5;

    /**
     * @return void
     */
    public function afterSave(): void
    {
        $GLOBALS['log']->warning('_____________________AfterSave in Ticket section');
    }

}
