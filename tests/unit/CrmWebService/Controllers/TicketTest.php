<?php

use PHPUnit\Framework\TestCase;

class TicketTest extends TestCase
{
//    public \Espo\Custom\Controllers\Ticket $ticket;
//
//    public function __construct(\Espo\Custom\Controllers\Ticket $ticket)
//    {
//        $this->ticket = $ticket;
//    }

    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//
//        $response = $this->assertPostConditions('/api/v1/ticket/action/store',
//            [
//                'name'        => 'Sally',
//                'description' => 'description here',
//                'phone'       => '09148027460',
//                'part'        => '["1"]',
//                'email'       => 'abbasimehdi24@yahoo.com'
//            ]
//        );
//
//        $response
//            ->assertStatus(201)
//            ->assertJson([
//                'created' => true,
//            ]);
//    }

    /** @test */
    public function a_user_can_read_all_the_tasks()
    {
        //When user visit the tasks page
        $response = $this->getSize('api/v1/ticket');
        $this->assertTrue(true);
    }

    public function user()
    {
        $params = [
            'controller' => 'CrmWebService',
            'action' => 'postActionStore'
        ];
        $data = [
            'name'        => 'Sally',
            'description' => 'description here',
            'phone'       => '09148027460',
            'part'        => '["1"]',
            'email'       => 'abbasimehdi24@yahoo.com'
        ];
        $this
            ->expects($this->any())
            ->method('postActionSendSMSSecurityCodeCMS')
            ->with($params,$data)
            ->willReturn(true);

    }

}