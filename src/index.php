<?php
  namespace Hvolschenk\HTTPRequest;
  use function Hvolschenk\Utilities\Arrays\itemByKey;

  function GET(): callable {
    return itemByKey($_GET ?? []);
  }

  function POST(): callable {
    return itemByKey($_POST ?? []);
  }

  function headers(): callable {
    return itemByKey(apache_request_headers() ?? []);
  }
