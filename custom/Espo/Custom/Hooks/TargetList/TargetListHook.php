<?php
namespace Espo\Custom\Hooks\TargetList;

use Espo\ORM\Entity;

class TargetListHook
{

    /**
     * @param Entity $targetList
     * @param array $options
     * @param array $data
     * @return void
     */
    public function afterOptOut(array $data): void
    {
        $targetId = $data['targetId'];
        $targetType = $data['targetType'];
        $link = $data['link'];
        var_dump($targetId, $link, $targetType);
    }
}