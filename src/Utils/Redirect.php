<?php

namespace  APP\Utils;

class Redirect
{
    public static function redirect(
        string|array $message,
        string $type = 'success',
        string $url = '../View/messsage.php'
    ){
      session_start();
      if(is_array($message)){
        $html = '';
        foreach($message as $msg){
          $html .= "<li>$msg</li>";
        }
        $_SESSION['msg_warning'] = $html;
      }else{
             if($type == 'success'){
                $_SESSION['mg_success'] = $message;
             }else{
                $_SESSION['mg_error'] = $message;
             }
      }
      header("location:$url");
    } 
}
