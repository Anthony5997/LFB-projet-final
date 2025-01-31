<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/display_keyword_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class DisplayKeywordViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v8/resources/display_keyword_view.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
DisplayKeywordViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/DisplayKeywordView:z�Aw
+googleads.googleapis.com/DisplayKeywordViewHcustomers/{customer_id}/displayKeywordViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v8.resourcesBDisplayKeywordViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
Cgoogle/ads/googleads/v8/services/display_keyword_view_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"j
GetDisplayKeywordViewRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/DisplayKeywordView2�
DisplayKeywordViewService�
GetDisplayKeywordView>.google.ads.googleads.v8.services.GetDisplayKeywordViewRequest5.google.ads.googleads.v8.resources.DisplayKeywordView"M���75/v8/{resource_name=customers/*/displayKeywordViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBDisplayKeywordViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

