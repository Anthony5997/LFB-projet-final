<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/keyword_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class KeywordView
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
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v8/resources/keyword_view.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordViewC
resource_name (	B,�A�A&
$googleads.googleapis.com/KeywordView:l�Ai
$googleads.googleapis.com/KeywordViewAcustomers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v8.resourcesBKeywordViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

