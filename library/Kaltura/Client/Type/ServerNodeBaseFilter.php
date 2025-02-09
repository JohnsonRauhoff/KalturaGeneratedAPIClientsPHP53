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
abstract class ServerNodeBaseFilter extends \Kaltura\Client\Type\Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaServerNodeBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->heartbeatTimeGreaterThanOrEqual))
			$this->heartbeatTimeGreaterThanOrEqual = (int)$xml->heartbeatTimeGreaterThanOrEqual;
		if(count($xml->heartbeatTimeLessThanOrEqual))
			$this->heartbeatTimeLessThanOrEqual = (int)$xml->heartbeatTimeLessThanOrEqual;
		if(count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(count($xml->nameIn))
			$this->nameIn = (string)$xml->nameIn;
		if(count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(count($xml->hostNameLike))
			$this->hostNameLike = (string)$xml->hostNameLike;
		if(count($xml->hostNameMultiLikeOr))
			$this->hostNameMultiLikeOr = (string)$xml->hostNameMultiLikeOr;
		if(count($xml->hostNameMultiLikeAnd))
			$this->hostNameMultiLikeAnd = (string)$xml->hostNameMultiLikeAnd;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(count($xml->dcEqual))
			$this->dcEqual = (int)$xml->dcEqual;
		if(count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(count($xml->parentIdLike))
			$this->parentIdLike = (string)$xml->parentIdLike;
		if(count($xml->parentIdMultiLikeOr))
			$this->parentIdMultiLikeOr = (string)$xml->parentIdMultiLikeOr;
		if(count($xml->parentIdMultiLikeAnd))
			$this->parentIdMultiLikeAnd = (string)$xml->parentIdMultiLikeAnd;
		if(count($xml->environmentEqual))
			$this->environmentEqual = (string)$xml->environmentEqual;
		if(count($xml->environmentIn))
			$this->environmentIn = (string)$xml->environmentIn;
	}
	/**
	 * 
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $idIn = null;

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
	 * @var int
	 */
	public $heartbeatTimeGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $heartbeatTimeLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $nameIn = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 * @var string
	 */
	public $hostNameLike = null;

	/**
	 * 
	 * @var string
	 */
	public $hostNameMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $hostNameMultiLikeAnd = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ServerNodeStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ServerNodeType
	 */
	public $typeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdLike = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdMultiLikeAnd = null;

	/**
	 * 
	 * @var string
	 */
	public $environmentEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $environmentIn = null;

}
