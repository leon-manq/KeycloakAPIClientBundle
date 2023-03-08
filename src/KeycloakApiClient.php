<?php

namespace manQ\KeycloakApiClientBundle;

use Keycloak\Admin\KeycloakClient;

class KeycloakApiClient
{
    public KeycloakClient $Api;

    public function __construct(string $username, string $password, string $baseUrl)
    {
        $this->Api = KeycloakClient::factory([
            'realm' => 'master',
            'username' => $username,
            'password' => $password,
            'client_id' => 'admin-cli',
            'baseUri' => $baseUrl,
        ]);
    }
}