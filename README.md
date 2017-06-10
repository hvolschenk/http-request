# Hvolschenk\\HTTPRequest

A simple functional PHP library to work with the current http request

## Installation:

```
php composer.phar require hvolschenk\http-request
```

## Functions:

#### GET()

Returns the list of query string parameters. Returns an empty array if none are available.

```php
GET(void): array;
```

#### GETKey()

Returns the value of a single key in the list of query string parameters. Returns an empty string if
the key is not available.

```
GETKey(string $key): string;
```

#### headers()

Returns the list of HTTP request headers. Returns an empty array if none are available.

```
headers(void): array;
```

#### headersKey()

Returns the value of a single key in the list of HTTP request headers. Returns an empty string if
the key is not available.

```
headersKey(string $key): string;
```

#### POST()

Returns the POST body. Returns an empty array if it is not available.

```
POST(void): array;
```

#### POSTKey()

Returns the value of a single key in the POST body. Returns an empty string if the key is not
available.

```
POSTKey(string $key): string;
```
