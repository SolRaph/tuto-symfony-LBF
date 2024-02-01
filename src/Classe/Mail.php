<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = '041b3b1c623ba6f40e6a443453ed78c8';
    private $api_key_secret = '1f25559526e38357845bab3e473613a5';

    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_key_secret,true,['version' => 'v3.1']);
    $body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "quentin.jl92@gmail.com",
                'Name' => "La Boutique Française"
            ],
            'To' => [
                [
                    'Email' => $to_email,
                    'Name' => $to_name
                ]
            ],
            'TemplateID' => 5645716,
            'TemplateLanguage' => true, 
            'Subject' => $subject,
            'Variables' => [
                'content' => $content,
            ]
        ]
        ] 
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$response->success();
    }
}