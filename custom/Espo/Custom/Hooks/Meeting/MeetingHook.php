<?php
namespace Espo\Custom\Hooks\Meeting;

use Espo\ORM\Entity;

class MeetingHook
{

    public static $order = 5;

    public function afterSave(Entity $entity, array $options): void
    {
        $GLOBALS['log']->warning('_____________________AfterSave in Meetting');
    }

}
