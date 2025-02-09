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
namespace Kaltura\Client\Plugin\Metadata\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class MetadataBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(count($xml->metadataProfileIdEqual))
			$this->metadataProfileIdEqual = (int)$xml->metadataProfileIdEqual;
		if(count($xml->metadataProfileIdIn))
			$this->metadataProfileIdIn = (string)$xml->metadataProfileIdIn;
		if(count($xml->metadataProfileVersionEqual))
			$this->metadataProfileVersionEqual = (int)$xml->metadataProfileVersionEqual;
		if(count($xml->metadataProfileVersionGreaterThanOrEqual))
			$this->metadataProfileVersionGreaterThanOrEqual = (int)$xml->metadataProfileVersionGreaterThanOrEqual;
		if(count($xml->metadataProfileVersionLessThanOrEqual))
			$this->metadataProfileVersionLessThanOrEqual = (int)$xml->metadataProfileVersionLessThanOrEqual;
		if(count($xml->metadataObjectTypeEqual))
			$this->metadataObjectTypeEqual = (string)$xml->metadataObjectTypeEqual;
		if(count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(count($xml->versionEqual))
			$this->versionEqual = (int)$xml->versionEqual;
		if(count($xml->versionGreaterThanOrEqual))
			$this->versionGreaterThanOrEqual = (int)$xml->versionGreaterThanOrEqual;
		if(count($xml->versionLessThanOrEqual))
			$this->versionLessThanOrEqual = (int)$xml->versionLessThanOrEqual;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $metadataProfileIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileVersionEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileVersionGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $metadataProfileVersionLessThanOrEqual = null;

	/**
	 * When null, default is KalturaMetadataObjectType::ENTRY
	 * @var \Kaltura\Client\Plugin\Metadata\Enum\MetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $versionEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $versionGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $versionLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Metadata\Enum\MetadataStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

}
