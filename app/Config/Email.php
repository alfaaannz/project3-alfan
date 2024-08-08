<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail = 'muhammadalfan2304@gmail.com';
    public string $fromName = 'muhamadalfan';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';

    public string $protocol = 'smtp'; // Menggunakan SMTP

    public string $mailPath = ''; // Kosongkan jika menggunakan SMTP

    public string $SMTPHost = 'live.smtp.mailtrap.io'; // Host SMTP Anda
    public string $SMTPUser = 'api';       // Username SMTP Anda
    public string $SMTPPass = '481d846e8593f2537137ada6c4c76e92';           // Password SMTP Anda
    public int $SMTPPort = 587;                                 // Port SMTP
    public string $SMTPCrypto = 'tls';                           // Enkripsi SMTP

    public bool $wordWrap = true;
    public int $wrapChars = 76;
    public string $mailType = 'html'; // Menggunakan HTML
    public string $charset = 'UTF-8';
    public bool $validate = true;

    public int $priority = 3;
    public string $CRLF = "\r\n";
    public string $newline = "\r\n";

    public bool $BCCBatchMode = false;
    public int $BCCBatchSize = 200;
    public bool $DSN = false;
}
