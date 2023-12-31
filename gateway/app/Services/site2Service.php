<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class site2Service {
     use ConsumesExternalService;
     /*
     *@var string

     */

     public $baseUri;
     public $secret;

     public function __construct() {
          $this->baseUri = config('services.site2.base_uri');
          $this->secret = config('services.site2.secret');
     }


     /*
     *@return string
     */

     public function show() {
          return $this->performRequest('GET', 'api/users');
     }

     public function showUser($id) {
          return $this->performRequest('GET', "api/users/{$id}");
     }


     public function addUser($data) {
          return $this->performRequest('POST', 'api/users/', $data);
     }

     public function updateUser($data, $id) {
          return $this->performRequest('PATCH', "api/users/{$id}", $data);
     }

     public function deleteUser($id) {
          return $this->performRequest('DELETE', "api/users/{$id}");
     }
}