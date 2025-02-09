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
namespace Kaltura\Client\Plugin\Widevine\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class WidevineFlavorAsset extends \Kaltura\Client\Type\FlavorAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidevineFlavorAsset';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->widevineDistributionStartDate))
			$this->widevineDistributionStartDate = (int)$xml->widevineDistributionStartDate;
		if(count($xml->widevineDistributionEndDate))
			$this->widevineDistributionEndDate = (int)$xml->widevineDistributionEndDate;
		if(count($xml->widevineAssetId))
			$this->widevineAssetId = (int)$xml->widevineAssetId;
	}
	/**
	 * License distribution window start date
	 * @var int
	 */
	public $widevineDistributionStartDate = null;

	/**
	 * License distribution window end date
	 * @var int
	 */
	public $widevineDistributionEndDate = null;

	/**
	 * Widevine unique asset id
	 * @var int
	 */
	public $widevineAssetId = null;

}
