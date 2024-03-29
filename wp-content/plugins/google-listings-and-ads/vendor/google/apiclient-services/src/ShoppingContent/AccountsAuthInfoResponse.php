<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class AccountsAuthInfoResponse extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Collection
{
  protected $collection_key = 'accountIdentifiers';
  /**
   * @var AccountIdentifier[]
   */
  public $accountIdentifiers;
  protected $accountIdentifiersType = AccountIdentifier::class;
  protected $accountIdentifiersDataType = 'array';
  /**
   * @var string
   */
  public $kind;

  /**
   * @param AccountIdentifier[]
   */
  public function setAccountIdentifiers($accountIdentifiers)
  {
    $this->accountIdentifiers = $accountIdentifiers;
  }
  /**
   * @return AccountIdentifier[]
   */
  public function getAccountIdentifiers()
  {
    return $this->accountIdentifiers;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AccountsAuthInfoResponse::class, 'Google_Service_ShoppingContent_AccountsAuthInfoResponse');
