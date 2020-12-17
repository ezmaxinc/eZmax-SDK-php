<?php
/**
 * FieldEEzsignfolderStep
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eZmax API Definition
 *
 * This API expose all the functionnalities for the eZmax and eZsign application.  We provide SDKs for customers. They are generated using OpenAPI codegen, we encourage customers to use them as we also provide samples for them.  You can choose to build your own implementation manually or can use any compatible OpenAPI 3.0 generator like Swagger Codegen, OpenAPI codegen or any commercial generators.  If you need helping understanding how to use this API, don't waste too much time looking for it. Contact support-api@ezmax.ca, we're here to help. We are developpers so we know programmers don't like bad documentation. If you don't find what you need in the documentation, let us know, we'll improve it and put you rapidly up on track.
 *
 * The version of the OpenAPI document: 1.0.20
 * Contact: support-api@ezmax.ca
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI\Model;
use \eZmaxAPI\ObjectSerializer;

/**
 * FieldEEzsignfolderStep Class Doc Comment
 *
 * @category Class
 * @description The signature step of the Ezsignfolder.
 * @package  eZmaxAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldEEzsignfolderStep
{
    /**
     * Possible values of this enum
     */
    const UNSENT = 'Unsent';
    const SENT = 'Sent';
    const PARTIALLY_SIGNED = 'PartiallySigned';
    const EXPIRED = 'Expired';
    const SIGNED = 'Signed';
    const COMPLETED = 'Completed';
    const ARCHIVED = 'Archived';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSENT,
            self::SENT,
            self::PARTIALLY_SIGNED,
            self::EXPIRED,
            self::SIGNED,
            self::COMPLETED,
            self::ARCHIVED,
        ];
    }
}


