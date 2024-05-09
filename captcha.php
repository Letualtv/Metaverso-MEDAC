<?php

class Captcha
{
    protected $secretKey = '';
    protected $captchaVerificationEndpoint = 'https://hcaptcha.com/siteverify';

    public function checkCaptcha($response)
    {
        $responseData = json_decode($this->verifyCaptcha([
            'secret' => $this->secretKey,
            'response' => $response
        ]));

        return $responseData->success;
    }

    protected function verifyCaptcha($data)
    {
        $verificar = curl_init();
        curl_setopt($verificar, CURLOPT_URL, $this->captchaVerificationEndpoint);
        curl_setopt($verificar, CURLOPT_POST, true);
        curl_setopt($verificar, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verificar, CURLOPT_RETURNTRANSFER, true);

        return curl_exec($verificar);
    }
}