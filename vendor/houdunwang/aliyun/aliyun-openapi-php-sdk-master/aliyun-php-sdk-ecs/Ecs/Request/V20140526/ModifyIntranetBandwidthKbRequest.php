<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Ecs\Request\V20140526;

class ModifyIntranetBandwidthKbRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ModifyIntranetBandwidthKb");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $intranetMaxBandwidthOut;

	private  $instanceId;

	private  $intranetMaxBandwidthIn;

	private  $resourceOwnerAccount;

	private  $ownerAccount;

	private  $ownerId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getIntranetMaxBandwidthOut() {
		return $this->intranetMaxBandwidthOut;
	}

	public function setIntranetMaxBandwidthOut($intranetMaxBandwidthOut) {
		$this->intranetMaxBandwidthOut = $intranetMaxBandwidthOut;
		$this->queryParameters["IntranetMaxBandwidthOut"]=$intranetMaxBandwidthOut;
	}

	public function getInstanceId() {
		return $this->instanceId;
	}

	public function setInstanceId($instanceId) {
		$this->instanceId = $instanceId;
		$this->queryParameters["InstanceId"]=$instanceId;
	}

	public function getIntranetMaxBandwidthIn() {
		return $this->intranetMaxBandwidthIn;
	}

	public function setIntranetMaxBandwidthIn($intranetMaxBandwidthIn) {
		$this->intranetMaxBandwidthIn = $intranetMaxBandwidthIn;
		$this->queryParameters["IntranetMaxBandwidthIn"]=$intranetMaxBandwidthIn;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}