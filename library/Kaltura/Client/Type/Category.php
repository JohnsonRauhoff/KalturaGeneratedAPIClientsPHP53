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
class Category extends \Kaltura\Client\ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategory';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
		if(count($xml->depth))
			$this->depth = (int)$xml->depth;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->fullName))
			$this->fullName = (string)$xml->fullName;
		if(count($xml->fullIds))
			$this->fullIds = (string)$xml->fullIds;
		if(count($xml->entriesCount))
			$this->entriesCount = (int)$xml->entriesCount;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->description))
			$this->description = (string)$xml->description;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->appearInList))
			$this->appearInList = (int)$xml->appearInList;
		if(count($xml->privacy))
			$this->privacy = (int)$xml->privacy;
		if(count($xml->inheritanceType))
			$this->inheritanceType = (int)$xml->inheritanceType;
		if(count($xml->userJoinPolicy))
			$this->userJoinPolicy = (int)$xml->userJoinPolicy;
		if(count($xml->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$xml->defaultPermissionLevel;
		if(count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(count($xml->directEntriesCount))
			$this->directEntriesCount = (int)$xml->directEntriesCount;
		if(count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(count($xml->contributionPolicy))
			$this->contributionPolicy = (int)$xml->contributionPolicy;
		if(count($xml->membersCount))
			$this->membersCount = (int)$xml->membersCount;
		if(count($xml->pendingMembersCount))
			$this->pendingMembersCount = (int)$xml->pendingMembersCount;
		if(count($xml->privacyContext))
			$this->privacyContext = (string)$xml->privacyContext;
		if(count($xml->privacyContexts))
			$this->privacyContexts = (string)$xml->privacyContexts;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->inheritedParentId))
			$this->inheritedParentId = (int)$xml->inheritedParentId;
		if(count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(count($xml->defaultOrderBy))
			$this->defaultOrderBy = (string)$xml->defaultOrderBy;
		if(count($xml->directSubCategoriesCount))
			$this->directSubCategoriesCount = (int)$xml->directSubCategoriesCount;
		if(count($xml->moderation))
			$this->moderation = (int)$xml->moderation;
		if(count($xml->pendingEntriesCount))
			$this->pendingEntriesCount = (int)$xml->pendingEntriesCount;
		if(count($xml->isAggregationCategory))
			$this->isAggregationCategory = (int)$xml->isAggregationCategory;
		if(count($xml->aggregationCategories))
			$this->aggregationCategories = (string)$xml->aggregationCategories;
	}
	/**
	 * The id of the Category
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 * @var int
	 */
	public $parentId = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $depth = null;

	/**
	 * 
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The name of the Category. 
	 * 	 The following characters are not allowed: '<', '>', ','
	 * @var string
	 */
	public $name = null;

	/**
	 * The full name of the Category
	 * @var string
	 * @readonly
	 */
	public $fullName = null;

	/**
	 * The full ids of the Category
	 * @var string
	 * @readonly
	 */
	public $fullIds = null;

	/**
	 * Number of entries in this Category (including child categories)
	 * @var int
	 * @readonly
	 */
	public $entriesCount = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Category description
	 * @var string
	 */
	public $description = null;

	/**
	 * Category tags
	 * @var string
	 */
	public $tags = null;

	/**
	 * If category will be returned for list action.
	 * @var \Kaltura\Client\Enum\AppearInListType
	 */
	public $appearInList = null;

	/**
	 * defines the privacy of the entries that assigned to this category
	 * @var \Kaltura\Client\Enum\PrivacyType
	 */
	public $privacy = null;

	/**
	 * If Category members are inherited from parent category or set manualy.
	 * @var \Kaltura\Client\Enum\InheritanceType
	 */
	public $inheritanceType = null;

	/**
	 * Who can ask to join this category
	 * @var \Kaltura\Client\Enum\UserJoinPolicyType
	 * @readonly
	 */
	public $userJoinPolicy = null;

	/**
	 * Default permissionLevel for new users
	 * @var \Kaltura\Client\Enum\CategoryUserPermissionLevel
	 */
	public $defaultPermissionLevel = null;

	/**
	 * Category Owner (User id)
	 * @var string
	 */
	public $owner = null;

	/**
	 * Number of entries that belong to this category directly
	 * @var int
	 * @readonly
	 */
	public $directEntriesCount = null;

	/**
	 * Category external id, controlled and managed by the partner.
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * who can assign entries to this category
	 * @var \Kaltura\Client\Enum\ContributionPolicyType
	 */
	public $contributionPolicy = null;

	/**
	 * Number of active members for this category
	 * @var int
	 * @readonly
	 */
	public $membersCount = null;

	/**
	 * Number of pending members for this category
	 * @var int
	 * @readonly
	 */
	public $pendingMembersCount = null;

	/**
	 * Set privacy context for search entries that assiged to private and public categories. the entries will be private if the search context is set with those categories.
	 * @var string
	 */
	public $privacyContext = null;

	/**
	 * comma separated parents that defines a privacyContext for search
	 * @var string
	 * @readonly
	 */
	public $privacyContexts = null;

	/**
	 * Status
	 * @var \Kaltura\Client\Enum\CategoryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The category id that this category inherit its members and members permission (for contribution and join)
	 * @var int
	 * @readonly
	 */
	public $inheritedParentId = null;

	/**
	 * Can be used to store various partner related data as a numeric value
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * Can be used to store various partner related data as a string
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Enable client side applications to define how to sort the category child categories
	 * @var \Kaltura\Client\Enum\CategoryOrderBy
	 */
	public $defaultOrderBy = null;

	/**
	 * Number of direct children categories
	 * @var int
	 * @readonly
	 */
	public $directSubCategoriesCount = null;

	/**
	 * Moderation to add entries to this category by users that are not of permission level Manager or Moderator.
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $moderation = null;

	/**
	 * Nunber of pending moderation entries
	 * @var int
	 * @readonly
	 */
	public $pendingEntriesCount = null;

	/**
	 * Flag indicating that the category is an aggregation category
	 * @var \Kaltura\Client\Enum\NullableBoolean
	 */
	public $isAggregationCategory = null;

	/**
	 * List of aggregation channels the category belongs to
	 * @var string
	 */
	public $aggregationCategories = null;

}
