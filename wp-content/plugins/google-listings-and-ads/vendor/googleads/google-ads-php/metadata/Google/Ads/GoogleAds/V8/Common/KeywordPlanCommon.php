<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/keyword_plan_common.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Common;

class KeywordPlanCommon
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
�
*google/ads/googleads/v8/enums/device.protogoogle.ads.googleads.v8.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v8.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
1google/ads/googleads/v8/enums/month_of_year.protogoogle.ads.googleads.v8.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
!com.google.ads.googleads.v8.enumsBMonthOfYearProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
*google/ads/googleads/v8/common/dates.protogoogle.ads.googleads.v8.commongoogle/api/annotations.proto"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange8
start (2).google.ads.googleads.v8.common.YearMonth6
end (2).google.ads.googleads.v8.common.YearMonth"d
	YearMonth
year (I
month (2:.google.ads.googleads.v8.enums.MonthOfYearEnum.MonthOfYearB�
"com.google.ads.googleads.v8.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
Fgoogle/ads/googleads/v8/enums/keyword_plan_aggregate_metric_type.protogoogle.ads.googleads.v8.enums"p
"KeywordPlanAggregateMetricTypeEnum"J
KeywordPlanAggregateMetricType
UNSPECIFIED 
UNKNOWN

DEVICEB�
!com.google.ads.googleads.v8.enumsB#KeywordPlanAggregateMetricTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Bgoogle/ads/googleads/v8/enums/keyword_plan_competition_level.protogoogle.ads.googleads.v8.enums"}
KeywordPlanCompetitionLevelEnum"Z
KeywordPlanCompetitionLevel
UNSPECIFIED 
UNKNOWN
LOW

MEDIUM
HIGHB�
!com.google.ads.googleads.v8.enumsB KeywordPlanCompetitionLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Cgoogle/ads/googleads/v8/enums/keyword_plan_concept_group_type.protogoogle.ads.googleads.v8.enums"�
KeywordPlanConceptGroupTypeEnum"g
KeywordPlanConceptGroupType
UNSPECIFIED 
UNKNOWN	
BRAND
OTHER_BRANDS
	NON_BRANDB�
!com.google.ads.googleads.v8.enumsB KeywordPlanConceptGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/common/keyword_plan_common.protogoogle.ads.googleads.v8.common*google/ads/googleads/v8/enums/device.protoFgoogle/ads/googleads/v8/enums/keyword_plan_aggregate_metric_type.protoBgoogle/ads/googleads/v8/enums/keyword_plan_competition_level.protoCgoogle/ads/googleads/v8/enums/keyword_plan_concept_group_type.proto1google/ads/googleads/v8/enums/month_of_year.protogoogle/api/annotations.proto"�
KeywordPlanHistoricalMetrics!
avg_monthly_searches (H �S
monthly_search_volumes (23.google.ads.googleads.v8.common.MonthlySearchVolumeo
competition (2Z.google.ads.googleads.v8.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel
competition_index (H�\'
low_top_of_page_bid_micros	 (H�(
high_top_of_page_bid_micros
 (H�B
_avg_monthly_searchesB
_competition_indexB
_low_top_of_page_bid_microsB
_high_top_of_page_bid_micros"~
HistoricalMetricsOptionsM
year_month_range (2..google.ads.googleads.v8.common.YearMonthRangeH �B
_year_month_range"�
MonthlySearchVolume
year (H �I
month (2:.google.ads.googleads.v8.enums.MonthOfYearEnum.MonthOfYear
monthly_searches (H�B
_yearB
_monthly_searches"�
KeywordPlanAggregateMetrics�
aggregate_metric_types (2`.google.ads.googleads.v8.enums.KeywordPlanAggregateMetricTypeEnum.KeywordPlanAggregateMetricType"w
!KeywordPlanAggregateMetricResultsR
device_searches (29.google.ads.googleads.v8.common.KeywordPlanDeviceSearches"�
KeywordPlanDeviceSearches@
device (20.google.ads.googleads.v8.enums.DeviceEnum.Device
search_count (H �B
_search_count"V
KeywordAnnotations@
concepts (2..google.ads.googleads.v8.common.KeywordConcept"c
KeywordConcept
name (	C
concept_group (2,.google.ads.googleads.v8.common.ConceptGroup"�
ConceptGroup
name (	h
type (2Z.google.ads.googleads.v8.enums.KeywordPlanConceptGroupTypeEnum.KeywordPlanConceptGroupTypeB�
"com.google.ads.googleads.v8.commonBKeywordPlanCommonProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

