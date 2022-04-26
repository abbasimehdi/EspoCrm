<?php

namespace Espo\Modules\Ticket\Traits;

trait pdoConnection
{

    /**
     * @param $request
     * @return void
     */
    public function connectToDatabase($request): void
    {

        $pdo = $this->getEntityManager()->getPDO();
        $result = $pdo->prepare($this->insertData());
        $this->executeQuery($result, $request);
    }
}
