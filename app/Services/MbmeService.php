<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class MbmeService
{
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->username = 'Ivms';
        $this->password = 'CdIiiIeJl';
    }

    /**
     * Generate Access Token
     */
    public function generateToken()
    {
        $response = Http::asForm()->post("https://qty.mbme.org:8080/v2/mbme/oauth/token", [
            'username' => $this->username,
            'password' => $this->password,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception("Failed to generate MBME token: " . $response->body());
    }
}
