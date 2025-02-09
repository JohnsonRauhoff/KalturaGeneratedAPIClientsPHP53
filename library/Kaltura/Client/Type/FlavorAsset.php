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
class FlavorAsset extends \Kaltura\Client\Type\Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->flavorParamsId))
			$this->flavorParamsId = (int)$xml->flavorParamsId;
		if(count($xml->width))
			$this->width = (int)$xml->width;
		if(count($xml->height))
			$this->height = (int)$xml->height;
		if(count($xml->bitrate))
			$this->bitrate = (int)$xml->bitrate;
		if(count($xml->frameRate))
			$this->frameRate = (float)$xml->frameRate;
		if(count($xml->isOriginal))
		{
			if(!empty($xml->isOriginal) && $xml->isOriginal != 'false')
				$this->isOriginal = true;
			else
				$this->isOriginal = false;
		}
		if(count($xml->isWeb))
		{
			if(!empty($xml->isWeb) && $xml->isWeb != 'false')
				$this->isWeb = true;
			else
				$this->isWeb = false;
		}
		if(count($xml->containerFormat))
			$this->containerFormat = (string)$xml->containerFormat;
		if(count($xml->videoCodecId))
			$this->videoCodecId = (string)$xml->videoCodecId;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->language))
			$this->language = (string)$xml->language;
		if(count($xml->label))
			$this->label = (string)$xml->label;
		if(count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
	}
	/**
	 * The Flavor Params used to create this Flavor Asset
	 * @var int
	 * @insertonly
	 */
	public $flavorParamsId = null;

	/**
	 * The width of the Flavor Asset
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height of the Flavor Asset
	 * @var int
	 * @readonly
	 */
	public $height = null;

	/**
	 * The overall bitrate (in KBits) of the Flavor Asset
	 * @var int
	 * @readonly
	 */
	public $bitrate = null;

	/**
	 * The frame rate (in FPS) of the Flavor Asset
	 * @var float
	 * @readonly
	 */
	public $frameRate = null;

	/**
	 * True if this Flavor Asset is the original source
	 * @var bool
	 * @readonly
	 */
	public $isOriginal = null;

	/**
	 * True if this Flavor Asset is playable in KDP
	 * @var bool
	 * @readonly
	 */
	public $isWeb = null;

	/**
	 * The container format
	 * @var string
	 * @readonly
	 */
	public $containerFormat = null;

	/**
	 * The video codec
	 * @var string
	 * @readonly
	 */
	public $videoCodecId = null;

	/**
	 * The status of the Flavor Asset
	 * @var \Kaltura\Client\Enum\FlavorAssetStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The language of the flavor asset
	 * @var \Kaltura\Client\Enum\Language
	 */
	public $language = null;

	/**
	 * The label of the flavor asset
	 * @var string
	 */
	public $label = null;

	/**
	 * Is default flavor asset of the entry (This field will be taken into account selectign which audio flavor will be selected as default)
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isDefault = null;

}
