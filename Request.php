<?php
namespace Skel;

class Request extends \Symfony\Component\HttpFoundation\Request implements Interfaces\Request {
  protected $user;
  
  public function getAuthenticatedUser() {
    if ($this->user == null) throw new RuntimeException('You must manually create an Authenticated User and associate it with the Request via setAuthenticatedUser');
    return $this->user;
  }

  public function getUri() {
    return new Uri(parent::getUri());
  }

  public function setAuthenticatedUser(Interfaces\User $user) {
    $this->user = $user;
  }
}
