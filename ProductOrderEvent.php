<?php
namespace Plugin\ProductOrder;

use Eccube\Event\EventArgs;

class ProductOrderEvent {
  private $app;

  public function __construct($app) {
    $this->app = $app;
  }

  public function onFormInitializeProduct(EventArgs $event) {
    $request = $event->getRequest();

    $request->query->set('disp_number', $request->query->get('disp_number', 30));
    $request->query->set('orderby', $request->query->get('orderby', 2));
  }
}
