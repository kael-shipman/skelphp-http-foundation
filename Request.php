<?php
namespace Skel;

class Request extends \Symfony\Component\HttpFoundation\Request implements Interfaces\Request {
  public function getUri() {
    return new Uri(parent::getRequestUri());
  }
}
