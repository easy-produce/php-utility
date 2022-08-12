<?php

namespace Es3\Utility;

class Aes
{
    /**
     * 加密
     * DES-ECB DES-CBC DES-CTR DES-OFB DES-CFB
     * $data, $method, $key, $options = 0,
     */
    public static function encode(string $data, string $method, string $aesKey, int $options = OPENSSL_RAW_DATA): string
    {
        return base64_encode(openssl_encrypt($data, $method, $aesKey, $options));
    }

    /**
     * 解密
     */
    public static function decode(string $data, string $method, string $aesKey, int $options = OPENSSL_RAW_DATA): string
    {
        return openssl_decrypt(base64_decode($data), $method, $aesKey, $options);
    }
}