# eZmaxinc/eZmax-SDK-php

This API expose all the functionnalities for the eZmax and eZsign application.

We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.

You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.

If you need helping understanding how to use this API, don't waste too much time looging for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.ezmax.ca/en/contact](https://www.ezmax.ca/en/contact)

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ezmaxinc/ezmax-sdk-php.git"
    }
  ],
  "require": {
    "ezmaxinc/ezmax-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/eZmaxinc/eZmax-SDK-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Authorization
$config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = eZmaxAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new eZmaxAPI\Client\Api\ActivesessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->objectActivesessionGetCurrentV1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivesessionApi->objectActivesessionGetCurrentV1: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://prod.api.appcluster01.ca-central-1.ezmax.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivesessionApi* | [**objectActivesessionGetCurrentV1**](docs/Api/ActivesessionApi.md#objectactivesessiongetcurrentv1) | **GET** /1/object/activesession/getCurrent | Get Current Activesession
*EzsignfolderApi* | [**objectEzsignfolderCreateObjectV1**](docs/Api/EzsignfolderApi.md#objectezsignfoldercreateobjectv1) | **POST** /1/object/ezsignfolder | Create a new Ezsignfolder
*EzsignfolderApi* | [**objectEzsignfolderDeleteObjectV1**](docs/Api/EzsignfolderApi.md#objectezsignfolderdeleteobjectv1) | **DELETE** /1/object/ezsignfolder/{pkiEzsignfolderID} | Delete an existing Ezsignfolder
*EzsignfolderApi* | [**objectEzsignfolderEditObjectV1**](docs/Api/EzsignfolderApi.md#objectezsignfoldereditobjectv1) | **PUT** /1/object/ezsignfolder/{pkiEzsignfolderID} | Modify an existing Ezsignfolder
*EzsignfolderApi* | [**objectEzsignfolderGetObjectGetChildrenV1**](docs/Api/EzsignfolderApi.md#objectezsignfoldergetobjectgetchildrenv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID}/getChildren | Retrieve an existing Ezsignfolder&#39;s children IDs
*EzsignfolderApi* | [**objectEzsignfolderGetObjectV1**](docs/Api/EzsignfolderApi.md#objectezsignfoldergetobjectv1) | **GET** /1/object/ezsignfolder/{pkiEzsignfolderID} | Retrieve an existing Ezsignfolder


## Documentation For Models

 - [GenericResponse](docs/Model/GenericResponse.md)
 - [GenericResponseError](docs/Model/GenericResponseError.md)
 - [GenericResponseObjDebug](docs/Model/GenericResponseObjDebug.md)
 - [GenericResponseObjDebugPayload](docs/Model/GenericResponseObjDebugPayload.md)
 - [GenericResponseObjSQLQuery](docs/Model/GenericResponseObjSQLQuery.md)
 - [ObjEzsignfolderCompoundRequest](docs/Model/ObjEzsignfolderCompoundRequest.md)
 - [ObjEzsignfolderRequest](docs/Model/ObjEzsignfolderRequest.md)
 - [ObjectActivesessionGetCurrentV1Response](docs/Model/ObjectActivesessionGetCurrentV1Response.md)
 - [ObjectActivesessionGetCurrentV1ResponseMPayload](docs/Model/ObjectActivesessionGetCurrentV1ResponseMPayload.md)
 - [ObjectEzsignfolderCreateObjectV1Request](docs/Model/ObjectEzsignfolderCreateObjectV1Request.md)
 - [ObjectEzsignfolderCreateObjectV1Response](docs/Model/ObjectEzsignfolderCreateObjectV1Response.md)
 - [ObjectEzsignfolderCreateObjectV1ResponseMPayload](docs/Model/ObjectEzsignfolderCreateObjectV1ResponseMPayload.md)
 - [ObjectEzsignfolderDeleteObjectV1Response](docs/Model/ObjectEzsignfolderDeleteObjectV1Response.md)
 - [ObjectEzsignfolderEditObjectV1Request](docs/Model/ObjectEzsignfolderEditObjectV1Request.md)
 - [ObjectEzsignfolderEditObjectV1Response](docs/Model/ObjectEzsignfolderEditObjectV1Response.md)
 - [ObjectEzsignfolderGetObjectV1Response](docs/Model/ObjectEzsignfolderGetObjectV1Response.md)


## Documentation For Authorization



## Authorization


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author

support-api@ezmax.ca

