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
abstract class CategoryBaseFilter extends \Kaltura\Client\Type\RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryBaseFilter';
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
		if(count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
		if(count($xml->depthEqual))
			$this->depthEqual = (int)$xml->depthEqual;
		if(count($xml->fullNameEqual))
			$this->fullNameEqual = (string)$xml->fullNameEqual;
		if(count($xml->fullNameStartsWith))
			$this->fullNameStartsWith = (string)$xml->fullNameStartsWith;
		if(count($xml->fullNameIn))
			$this->fullNameIn = (string)$xml->fullNameIn;
		if(count($xml->fullIdsEqual))
			$this->fullIdsEqual = (string)$xml->fullIdsEqual;
		if(count($xml->fullIdsStartsWith))
			$this->fullIdsStartsWith = (string)$xml->fullIdsStartsWith;
		if(count($xml->fullIdsMatchOr))
			$this->fullIdsMatchOr = (string)$xml->fullIdsMatchOr;
		if(count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(count($xml->appearInListEqual))
			$this->appearInListEqual = (int)$xml->appearInListEqual;
		if(count($xml->privacyEqual))
			$this->privacyEqual = (int)$xml->privacyEqual;
		if(count($xml->privacyIn))
			$this->privacyIn = (string)$xml->privacyIn;
		if(count($xml->inheritanceTypeEqual))
			$this->inheritanceTypeEqual = (int)$xml->inheritanceTypeEqual;
		if(count($xml->inheritanceTypeIn))
			$this->inheritanceTypeIn = (string)$xml->inheritanceTypeIn;
		if(count($xml->referenceIdEqual))
			$this->referenceIdEqual = (string)$xml->referenceIdEqual;
		if(count($xml->referenceIdEmpty))
			$this->referenceIdEmpty = (int)$xml->referenceIdEmpty;
		if(count($xml->contributionPolicyEqual))
			$this->contributionPolicyEqual = (int)$xml->contributionPolicyEqual;
		if(count($xml->membersCountGreaterThanOrEqual))
			$this->membersCountGreaterThanOrEqual = (int)$xml->membersCountGreaterThanOrEqual;
		if(count($xml->membersCountLessThanOrEqual))
			$this->membersCountLessThanOrEqual = (int)$xml->membersCountLessThanOrEqual;
		if(count($xml->pendingMembersCountGreaterThanOrEqual))
			$this->pendingMembersCountGreaterThanOrEqual = (int)$xml->pendingMembersCountGreaterThanOrEqual;
		if(count($xml->pendingMembersCountLessThanOrEqual))
			$this->pendingMembersCountLessThanOrEqual = (int)$xml->pendingMembersCountLessThanOrEqual;
		if(count($xml->privacyContextEqual))
			$this->privacyContextEqual = (string)$xml->privacyContextEqual;
		if(count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(count($xml->inheritedParentIdEqual))
			$this->inheritedParentIdEqual = (int)$xml->inheritedParentIdEqual;
		if(count($xml->inheritedParentIdIn))
			$this->inheritedParentIdIn = (string)$xml->inheritedParentIdIn;
		if(count($xml->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$xml->partnerSortValueGreaterThanOrEqual;
		if(count($xml->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$xml->partnerSortValueLessThanOrEqual;
		if(count($xml->aggregationCategoriesMultiLikeOr))
			$this->aggregationCategoriesMultiLikeOr = (string)$xml->aggregationCategoriesMultiLikeOr;
		if(count($xml->aggregationCategoriesMultiLikeAnd))
			$this->aggregationCategoriesMultiLikeAnd = (string)$xml->aggregationCategoriesMultiLikeAnd;
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
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $depthEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fullNameEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fullNameStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $fullNameIn = null;

	/**
	 * 
	 * @var string
	 */
	public $fullIdsEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $fullIdsStartsWith = null;

	/**
	 * 
	 * @var string
	 */
	public $fullIdsMatchOr = null;

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
	 * @var \Kaltura\Client\Enum\AppearInListType
	 */
	public $appearInListEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\PrivacyType
	 */
	public $privacyEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $privacyIn = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\InheritanceType
	 */
	public $inheritanceTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $inheritanceTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $referenceIdEmpty = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\ContributionPolicyType
	 */
	public $contributionPolicyEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $membersCountGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $membersCountLessThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $pendingMembersCountGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $pendingMembersCountLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $privacyContextEqual = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\CategoryStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 * @var int
	 */
	public $inheritedParentIdEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $inheritedParentIdIn = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValueGreaterThanOrEqual = null;

	/**
	 * 
	 * @var int
	 */
	public $partnerSortValueLessThanOrEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $aggregationCategoriesMultiLikeOr = null;

	/**
	 * 
	 * @var string
	 */
	public $aggregationCategoriesMultiLikeAnd = null;

}
