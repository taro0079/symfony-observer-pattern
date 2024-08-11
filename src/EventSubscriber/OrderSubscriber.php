<?php

namespace App\EventSubscriber;

use App\Event\OrderPlacedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class OrderSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => [
                ['onKernelResponsePre', 10],
                ['onKernelResponsePost', -10],
            ],
            OrderPlacedEvent::class => 'onPlacedOrder',
        ];
    }

    public function onPlacedOrder(OrderPlacedEvent $event): void
    {
        $order = $event->getOrder();
        var_dump($order->getAmount());
    }
}
