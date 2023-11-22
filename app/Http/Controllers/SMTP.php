<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMTP extends Controller
{
    public function index() {
        $settings = $this->getSettings();
        return view("smtp.index")->with(["settings" => $settings]);
    }

    public function update(Request $request) {
        $settings = $this->getSettings();
        foreach($settings as $s) {
            $this->putPermanentEnv($s, $request[$s]);
        }
        return redirect()->back();
    }

    public function putPermanentEnv($key, $value)
    {
    $path = app()->environmentFilePath();

    $escaped = preg_quote('='.env($key), '/');

    file_put_contents($path, preg_replace(
        "/^{$key}{$escaped}/m",
        "{$key}={$value}",
        file_get_contents($path)
    ));
    }

    public function getSettings() {
        $arr = [
            "MAIL_DRIVER",
            "MAIL_HOST",
            "MAIL_PORT",
            "MAIL_USERNAME",
            "MAIL_PASSWORD",
            "MAIL_ENCRYPTION",
            "MAIL_FROM_ADDRESS",
            "MAIL_FROM_NAME"
        ];
        return $arr;
    }
}
