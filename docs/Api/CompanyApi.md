# GreenToHome\CompanyApi

All URIs are relative to https://dev.greentohome.at/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getParcelById()**](CompanyApi.md#getParcelById) | **GET** /company/parcels/parcel/{parcelId} | returns Parcel details by id |
| [**submitParcel()**](CompanyApi.md#submitParcel) | **POST** /company/parcels/parcel | submit new Parcel |


## `getParcelById()`

```php
getParcelById($parcel_id): \GreenToHome\Model\ResolvedParcel
```

returns Parcel details by id

Get parcel details including status and status history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = GreenToHome\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GreenToHome\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new GreenToHome\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Parcel ID

try {
    $result = $apiInstance->getParcelById($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getParcelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel_id** | **string**| Parcel ID | |

### Return type

[**\GreenToHome\Model\ResolvedParcel**](../Model/ResolvedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitParcel()`

```php
submitParcel($parcel): \GreenToHome\Model\CreatedParcel
```

submit new Parcel

Submits Parcel to GTH platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = GreenToHome\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = GreenToHome\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new GreenToHome\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel = new \GreenToHome\Model\Parcel(); // \GreenToHome\Model\Parcel | Parcel to submit

try {
    $result = $apiInstance->submitParcel($parcel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->submitParcel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel** | [**\GreenToHome\Model\Parcel**](../Model/Parcel.md)| Parcel to submit | [optional] |

### Return type

[**\GreenToHome\Model\CreatedParcel**](../Model/CreatedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
