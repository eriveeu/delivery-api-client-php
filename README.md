# ERIVE.delivery API Client (PHP)

ERIVE.delivery (formerly GREEN TO HOME) API


## Installation & Usage

### Requirements

PHP >= 7.4
Tested in 8.1

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/eriveeu/delivery-api-client-php.git"
    }
  ],
  "require": {
    "eriveeu/delivery-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
}
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once dirname(__DIR__) . '/vendor/autoload.php';
}



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

## API Endpoints

All URIs are relative to *https://dev.greentohome.at/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CompanyApi* | [**deleteParcelById**](docs/Api/CompanyApi.md#deleteparcelbyid) | **DELETE** /company/parcels/parcel/{parcelId} | delete Parcel
*CompanyApi* | [**getParcelById**](docs/Api/CompanyApi.md#getparcelbyid) | **GET** /company/parcels/parcel/{parcelId} | returns Parcel details by id
*CompanyApi* | [**submitParcel**](docs/Api/CompanyApi.md#submitparcel) | **POST** /company/parcels/parcel | submit new Parcel
*CompanyApi* | [**updateParcelById**](docs/Api/CompanyApi.md#updateparcelbyid) | **PATCH** /company/parcels/parcel/{parcelId} | update Parcel status

## Models

- [Address](docs/Model/Address.md)
- [CreatedParcel](docs/Model/CreatedParcel.md)
- [Customer](docs/Model/Customer.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelHistory](docs/Model/ParcelHistory.md)
- [ParcelStatus](docs/Model/ParcelStatus.md)
- [ResolvedAddress](docs/Model/ResolvedAddress.md)
- [ResolvedParcel](docs/Model/ResolvedParcel.md)

## Authorization

Authentication schemes defined for the API:
### clientId

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@erive.eu

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
