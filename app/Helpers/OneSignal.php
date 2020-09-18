<?php

namespace App\Helpers;

class OneSignal {
  public static function sendAllUser($params){
    $headings     = array(
      "en" => $params['title']
    );
    $content      = array(
      "en" => $params['content']
    );
    $fields = array(
        'app_id' => "0916f9b7-bf41-4b9f-a21d-ac14068d7dd7",
        'included_segments' => array(
            'All'
        ),
        'headings' => $headings,
        'contents' => $content
    );
    
    $fields = json_encode($fields);    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic NmI2ODJhYmUtNmVkNS00OGY0LWJjZGQtNTY3MjgxMzAxYTA4'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_exec($ch);
    curl_close($ch);
  }

  public static function sendSpecificUser($params){
    $headings      = array(
      "en" => $params['title']
    );
    $content      = array(
      "en" => $params['content']
    );
    $fields = array(
        'app_id' => "0916f9b7-bf41-4b9f-a21d-ac14068d7dd7",
        'include_player_ids' => array(
          $params['userId']
        ),
        'headings' => $headings,
        'contents' => $content
    );
    
    $fields = json_encode($fields);    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic NmI2ODJhYmUtNmVkNS00OGY0LWJjZGQtNTY3MjgxMzAxYTA4'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_exec($ch);
    curl_close($ch);
  }
}