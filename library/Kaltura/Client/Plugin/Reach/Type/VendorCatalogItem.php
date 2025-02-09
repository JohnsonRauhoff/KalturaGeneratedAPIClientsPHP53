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
namespace Kaltura\Client\Plugin\Reach\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class VendorCatalogItem extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCatalogItem';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->vendorPartnerId))
			$this->vendorPartnerId = (int)$xml->vendorPartnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->serviceType))
			$this->serviceType = (int)$xml->serviceType;
		if(count($xml->serviceFeature))
			$this->serviceFeature = (int)$xml->serviceFeature;
		if(count($xml->turnAroundTime))
			$this->turnAroundTime = (int)$xml->turnAroundTime;
		if(count($xml->pricing) && !empty($xml->pricing))
			$this->pricing = \Kaltura\Client\ParseUtils::unmarshalObject($xml->pricing, "KalturaVendorCatalogItemPricing");
	}
	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 */
	public $vendorPartnerId = null;

	/**
	 * 
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorCatalogItemStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceType
	 */
	public $serviceType = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Enum\VendorServiceTurnAroundTime
	 */
	public $turnAroundTime = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Reach\Type\VendorCatalogItemPricing
	 */
	public $pricing;

}
