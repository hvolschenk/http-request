<?php
  namespace Hvolschenk\HTTPRequest;
  use function Hvolschenk\Utilities\Arrays\itemByKey;

  function GET(): array {
    return $_GET ?? [];
  }

  function GETKey(string $key): string {
    return itemByKey(GET())($key);
  }

  function headers(): array {
    return apache_request_headers() ?? [];
  }

  function headersKey(string $key): string {
    return itemByKey(headers())($key);
  }

  function POST(): array {
    return $_POST ?? [];
  }

  function POSTKey(string $key): string {
    return itemByKey(POST())($key);
  }
