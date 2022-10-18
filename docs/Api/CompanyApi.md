# Swagger\Client\CompanyApi

All URIs are relative to *https://dev.greentohome.at/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventory**](CompanyApi.md#addinventory) | **POST** /company/parcels/parcel | adds an inventory item
[**getParcelDetails**](CompanyApi.md#getparceldetails) | **GET** /company/parcels/parcel/{parcelId} | searches inventory

# **addInventory**
> \Swagger\Client\Model\CreatedParcel addInventory($body)

adds an inventory item

Adds an item to the system

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
$body = new \Swagger\Client\Model\Parcel(); // \Swagger\Client\Model\Parcel | Inventory item to add

try {
    $result = $apiInstance->addInventory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->addInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Parcel**](../Model/Parcel.md)| Inventory item to add | [optional]

### Return type

[**\Swagger\Client\Model\CreatedParcel**](../Model/CreatedParcel.md)

### Authorization

[clientId](../../README.md#clientId)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelDetails**
> \Swagger\Client\Model\ResolvedParcel getParcelDetails($parcel_id)

searches inventory

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
    $result = $apiInstance->getParcelDetails($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getParcelDetails: ', $e->getMessage(), PHP_EOL;
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

