<?php
namespace Skel;

class Response extends \Symfony\Component\HttpFoundation\Response implements Interfaces\Response {
  public function prepareFromRequest(Interfaces\Request $request) {
    return $this->prepare($request);
  }
}

?>
