<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @namespace
 */
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class MediaEntry extends \Kaltura\Client\Type\PlayableEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaEntry';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(count($xml->conversionQuality))
			$this->conversionQuality = (string)$xml->conversionQuality;
		if(count($xml->sourceType))
			$this->sourceType = (string)$xml->sourceType;
		if(count($xml->searchProviderType))
			$this->searchProviderType = (int)$xml->searchProviderType;
		if(count($xml->searchProviderId))
			$this->searchProviderId = (string)$xml->searchProviderId;
		if(count($xml->creditUserName))
			$this->creditUserName = (string)$xml->creditUserName;
		if(count($xml->creditUrl))
			$this->creditUrl = (string)$xml->creditUrl;
		if(count($xml->mediaDate))
			$this->mediaDate = (int)$xml->mediaDate;
		if(count($xml->dataUrl))
			$this->dataUrl = (string)$xml->dataUrl;
		if(count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(count($xml->isTrimDisabled))
			$this->isTrimDisabled = (int)$xml->isTrimDisabled;
		if(count($xml->streams))
		{
			if(empty($xml->streams))
				$this->streams = array();
			else
				$this->streams = \Kaltura\Client\ParseUtils::unmarshalArray($xml->streams, "KalturaStreamContainer");
		}
	}
	/**
	 * The media type of the entry
	 * @var \Kaltura\Client\Enum\MediaType
	 * @insertonly
	 */
	public $mediaType = null;

	/**
	 * Override the default conversion quality
	 * @var string
	 * @insertonly
	 */
	public $conversionQuality = null;

	/**
	 * The source type of the entry
	 * @var \Kaltura\Client\Enum\SourceType
	 * @insertonly
	 */
	public $sourceType = null;

	/**
	 * The search provider type used to import this entry
	 * @var \Kaltura\Client\Enum\SearchProviderType
	 * @insertonly
	 */
	public $searchProviderType = null;

	/**
	 * The ID of the media in the importing site
	 * @var string
	 * @insertonly
	 */
	public $searchProviderId = null;

	/**
	 * The user name used for credits
	 * @var string
	 */
	public $creditUserName = null;

	/**
	 * The URL for credits
	 * @var string
	 */
	public $creditUrl = null;

	/**
	 * The media date extracted from EXIF data (For images) as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $mediaDate = null;

	/**
	 * The URL used for playback. This is not the download URL.
	 * @var string
	 * @readonly
	 */
	public $dataUrl = null;

	/**
	 * Comma separated flavor params ids that exists for this media entry
	 * @var string
	 * @readonly
	 */
	public $flavorParamsIds = null;

	/**
	 * True if trim action is disabled for this entry
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 * @readonly
	 */
	public $isTrimDisabled = null;

	/**
	 * Array of streams that exists on the entry
	 * @var array<KalturaStreamContainer>
	 */
	public $streams;

}
