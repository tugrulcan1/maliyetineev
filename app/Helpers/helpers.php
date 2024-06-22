
<?php

if (!function_exists('convertToEmbedUrl')) {
    function convertToEmbedUrl($url)
    {
        $parsed_url = parse_url($url);

        if (isset($parsed_url['host'])) {
            if ($parsed_url['host'] === 'youtu.be') {
                return 'https://www.youtube.com/embed/' . ltrim($parsed_url['path'], '/');
            } elseif ($parsed_url['host'] === 'www.youtube.com' || $parsed_url['host'] === 'youtube.com') {
                parse_str($parsed_url['query'], $query);
                return isset($query['v']) ? 'https://www.youtube.com/embed/' . $query['v'] : $url;
            }
        }

        return $url;
    }
}
