# Erive\Delivery\CompanyApi

All URIs are relative to https://dev.greentohome.at/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteParcelById()**](CompanyApi.md#deleteParcelById) | **DELETE** /company/parcels/parcel/{parcelId} | delete Parcel |
| [**getParcelById()**](CompanyApi.md#getParcelById) | **GET** /company/parcels/parcel/{parcelId} | returns Parcel details by id |
| [**submitParcel()**](CompanyApi.md#submitParcel) | **POST** /company/parcels/parcel | submit new Parcel |
| [**updateParcelById()**](CompanyApi.md#updateParcelById) | **PATCH** /company/parcels/parcel/{parcelId} | update Parcel status |


## `deleteParcelById()`

```php
deleteParcelById($parcel_id)
```

delete Parcel

Delete Parcel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new Erive\Delivery\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Parcel ID

try {
    $apiInstance->deleteParcelById($parcel_id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteParcelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel_id** | **string**| Parcel ID | |

### Return type

void (empty response body)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParcelById()`

```php
getParcelById($parcel_id): \Erive\Delivery\Model\ResolvedParcel
```

returns Parcel details by id

Get parcel details including status and status history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new Erive\Delivery\Api\CompanyApi(
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

[**\Erive\Delivery\Model\ResolvedParcel**](../Model/ResolvedParcel.md)

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
submitParcel($parcel): \Erive\Delivery\Model\CreatedParcel
```

submit new Parcel

Submits Parcel to GTH platform

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new Erive\Delivery\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel = new \Erive\Delivery\Model\Parcel(); // \Erive\Delivery\Model\Parcel | Parcel to submit

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
| **parcel** | [**\Erive\Delivery\Model\Parcel**](../Model/Parcel.md)| Parcel to submit | [optional] |

### Return type

[**\Erive\Delivery\Model\CreatedParcel**](../Model/CreatedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateParcelById()`

```php
updateParcelById($parcel_id, $parcel_status): \Erive\Delivery\Model\ResolvedParcel
```

update Parcel status

Update Parcel Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: clientId
$config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Erive\Delivery\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');


$apiInstance = new Erive\Delivery\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = 'parcel_id_example'; // string | Parcel ID
$parcel_status = new \Erive\Delivery\Model\ParcelStatus(); // \Erive\Delivery\Model\ParcelStatus | Parcel to be updated

try {
    $result = $apiInstance->updateParcelById($parcel_id, $parcel_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateParcelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parcel_id** | **string**| Parcel ID | |
| **parcel_status** | [**\Erive\Delivery\Model\ParcelStatus**](../Model/ParcelStatus.md)| Parcel to be updated | [optional] |

### Return type

[**\Erive\Delivery\Model\ResolvedParcel**](../Model/ResolvedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
