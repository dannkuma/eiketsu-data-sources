<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * 信頼するプロキシのリスト
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // 全プロキシを信頼

    /**
     * リクエストヘッダから信頼するヘッダを設定
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR
                         | Request::HEADER_X_FORWARDED_HOST
                         | Request::HEADER_X_FORWARDED_PORT
                         | Request::HEADER_X_FORWARDED_PROTO
                         | Request::HEADER_X_FORWARDED_AWS_ELB;
}
