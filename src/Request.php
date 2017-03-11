<?php
namespace Skel;

class Request extends \Symfony\Component\HttpFoundation\Request implements Interfaces\Request {
  protected $skelUri;

  public function getUri() {
    if (!$this->skelUri) $this->skelUri = new Uri($this->getFullRequestUrl());
    return $this->skelUri;
  }

  public function getFullRequestUrl() {
    return $this->getScheme().'://'.$this->getHost().':'.$this->getPort().$this->getRequestUri();
  }
}
