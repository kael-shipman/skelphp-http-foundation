<?php
namespace Skel;

class Request extends \Symfony\Component\HttpFoundation\Request implements Interfaces\Request {
  public function getUri() {
    return new Uri($this->getFullRequestUrl());
  }

  public function getFullRequestUrl() {
    return $this->getScheme().'://'.$this->getHost().':'.$this->getPort().$this->getRequestUri();
  }
}
