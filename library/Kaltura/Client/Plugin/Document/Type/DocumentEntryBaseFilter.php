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
namespace Kaltura\Client\Plugin\Document\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
abstract class DocumentEntryBaseFilter extends \Kaltura\Client\Type\BaseEntryFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDocumentEntryBaseFilter';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->documentTypeEqual))
			$this->documentTypeEqual = (int)$xml->documentTypeEqual;
		if(count($xml->documentTypeIn))
			$this->documentTypeIn = (string)$xml->documentTypeIn;
		if(count($xml->assetParamsIdsMatchOr))
			$this->assetParamsIdsMatchOr = (string)$xml->assetParamsIdsMatchOr;
		if(count($xml->assetParamsIdsMatchAnd))
			$this->assetParamsIdsMatchAnd = (string)$xml->assetParamsIdsMatchAnd;
	}
	/**
	 * 
	 * @var \Kaltura\Client\Plugin\Document\Enum\DocumentType
	 */
	public $documentTypeEqual = null;

	/**
	 * 
	 * @var string
	 */
	public $documentTypeIn = null;

	/**
	 * 
	 * @var string
	 */
	public $assetParamsIdsMatchOr = null;

	/**
	 * 
	 * @var string
	 */
	public $assetParamsIdsMatchAnd = null;

}
