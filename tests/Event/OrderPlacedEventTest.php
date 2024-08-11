<?php

namespace App\Tests\Event;

use App\Entity\Order;
use App\Event\OrderPlacedEvent;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderPlacedEventTest extends KernelTestCase
{
    /**
     * @test
     */
    public function testOrderPlacedEvent()
    {
        $order = new Order(amount: 100);
        $event = new OrderPlacedEvent($order);
        $dispather = $this->getContainer()->get('event_dispatcher');
        $dispather->dispatch($event);
    }
}
