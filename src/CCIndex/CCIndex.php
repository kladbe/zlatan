<?php
/**
* Standard controller layout.
*
* @package ZlatanCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $zl;
      $zl->data['title'] = "The Index Controller";
   }

}
