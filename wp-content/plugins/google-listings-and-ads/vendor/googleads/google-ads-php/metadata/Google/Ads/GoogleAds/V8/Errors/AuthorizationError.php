<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/authorization_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class AuthorizationError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v8/errors/authorization_error.protogoogle.ads.googleads.v8.errors"�
AuthorizationErrorEnum"�
AuthorizationError
UNSPECIFIED 
UNKNOWN
USER_PERMISSION_DENIED$
 DEVELOPER_TOKEN_NOT_ON_ALLOWLIST
DEVELOPER_TOKEN_PROHIBITED
PROJECT_DISABLED
AUTHORIZATION_ERROR
ACTION_NOT_PERMITTED
INCOMPLETE_SIGNUP
CUSTOMER_NOT_ENABLED
MISSING_TOS	 
DEVELOPER_TOKEN_NOT_APPROVED
=
9INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION
SERVICE_ACCESS_DENIED"
ACCESS_DENIED_FOR_ACCOUNT_TYPEB�
"com.google.ads.googleads.v8.errorsBAuthorizationErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

