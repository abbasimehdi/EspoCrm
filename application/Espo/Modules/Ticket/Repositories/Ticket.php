<?php

namespace Espo\Modules\Ticket\Repositories;

use Espo\Core\Templates\Controllers\Base;
use Espo\Modules\Ticket\Interfaces\ExecuteQueryInterface;
use Espo\Modules\Ticket\Interfaces\InsertDataInterface;
use Espo\Modules\Ticket\Interfaces\PostActionStoreInterface;
use Espo\Modules\Ticket\Interfaces\ResponseInterface;
use Espo\Modules\Ticket\Traits\pdoConnection;
use Matrix\Exception;

class Ticket extends Base implements
    PostActionStoreInterface,
    InsertDataInterface,
    ResponseInterface,
    ExecuteQueryInterface
{

    use pdoConnection;

    public int $id;

    /**
     * generate dynamically id
     */
    public function __construct()
    {
        $this->id = time();
    }

    /**
     * @throws Exception
     */
    public function postActionStore(object $request): string
    {
        try {
            $this->connectToDatabase($request);

            return $this->response($this->id);
        } catch (Exception $exception) {
            throw new Exception($exception);
        }
    }

    /**
     * @return string
     */
    public function insertData(): string
    {
        return "INSERT INTO ticket (id, name, description, email, phone, part) VALUES (:id, :name , :description, :email, :phone, :part)";
    }

    /**
     * @param int $id
     * @return string
     */
    public function response(int $id): string
    {
        return 'The publisher id ' . $id . ' was inserted';
    }

    /**
     * @param object $result
     * @param object $request
     * @return void
     */
    public function executeQuery(object $result, object $request): void
    {
        $result->bindParam(':id', $this->id);
        $result->bindParam(':name', $request->getParsedBody()->name);
        $result->bindParam(':description', $request->getParsedBody()->description);
        $result->bindParam(':email', $request->getParsedBody()->email);
        $result->bindParam(':phone', $request->getParsedBody()->phone);
        $result->bindParam(':part', $request->getParsedBody()->part);
        $result->execute();
    }
}
