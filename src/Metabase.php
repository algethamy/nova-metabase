<?php

namespace Ncpd\Metabase;

use Firebase\JWT\JWT;
use Laravel\Nova\Card;

class Metabase extends Card
{
    public $width = 'full';

    public $iframeUrl;
    protected $dashboard_id;
    protected $market;

    public function __construct($dashboard_id, $params = [], $iframeHeight='300', $iframeOptions = [])
    {
        $iframeOptions = array_merge($iframeOptions, ['theme'=>'transparent', 'bordered'=>'false', 'titled'=>'false']);

        $METABASE_SITE_URL = config('nova-metabase.url');
        $METABASE_SECRET_KEY = config('nova-metabase.key');

        $payload = [
            "resource" => ["dashboard" => $dashboard_id],
            "params" => (object) $params,
            "exp" => round(microtime(true)) + (10 * 60) // 10 minute expiration
        ];

        $token = JWT::encode($payload, $METABASE_SECRET_KEY, 'HS256');

        $this->withMeta([
            'iframeUrl' => $METABASE_SITE_URL . "/embed/dashboard/" . $token . "#" . http_build_query($iframeOptions),
            'iframeHeight' => $iframeHeight
        ]);
    }

    public function component()
    {
        return 'metabase';
    }
}
