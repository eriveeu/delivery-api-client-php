# Swagger\Client\CompanyApi

All URIs are relative to *https://dev.greentohome.at/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getParcelById**](CompanyApi.md#getparcelbyid) | **GET** /company/parcels/parcel/{parcelId} | returns Parcel details by id
[**submitParcel**](CompanyApi.md#submitparcel) | **POST** /company/parcels/parcel | submit new Parcel

# **getParcelById**
> \Swagger\Client\Model\ResolvedParcel getParcelById($parcel_id)

returns Parcel details by id

Get parcel details including status and status history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = "parcel_id_example"; // string | Parcel ID

try {
    $result = $apiInstance->getParcelById($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getParcelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| Parcel ID |

### Return type

[**\Swagger\Client\Model\ResolvedParcel**](../Model/ResolvedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitParcel**
> \Swagger\Client\Model\CreatedParcel submitParcel($body)

submit new Parcel

Submits Parcel to GTH platform

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: clientId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Parcel(); // \Swagger\Client\Model\Parcel | Parcel to submit

try {
    $result = $apiInstance->submitParcel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->submitParcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Parcel**](../Model/Parcel.md)| Parcel to submit | [optional]

### Return type

[**\Swagger\Client\Model\CreatedParcel**](../Model/CreatedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

