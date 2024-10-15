# kruegge82\DHLTrack\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**placeholderSeeWADLAndTestsuiteGet()**](DefaultApi.md#placeholderSeeWADLAndTestsuiteGet) | **GET** /Placeholder, see WADL and Testsuite |  |


## `placeholderSeeWADLAndTestsuiteGet()`

```php
placeholderSeeWADLAndTestsuiteGet()
```



SOAP UI

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new kruegge82\DHLTrack\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->placeholderSeeWADLAndTestsuiteGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->placeholderSeeWADLAndTestsuiteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
