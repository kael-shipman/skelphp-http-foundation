<?php
namespace Skel;

class JsonResponse extends \Symfony\Component\HttpFoundation\JsonResponse implements Interfaces\Response {
  public function prepareFromRequest(Interfaces\Request $request) {
    return $this->prepare($request);
  }
}

?>

