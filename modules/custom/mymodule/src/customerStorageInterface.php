<?php

namespace Drupal\mymodule;

use Drupal\Core\Entity\ContentEntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\mymodule\Entity\customerInterface;

/**
 * Defines the storage handler class for Customer entities.
 *
 * This extends the base storage class, adding required special handling for
 * Customer entities.
 *
 * @ingroup mymodule
 */
interface customerStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Customer revision IDs for a specific Customer.
   *
   * @param \Drupal\mymodule\Entity\customerInterface $entity
   *   The Customer entity.
   *
   * @return int[]
   *   Customer revision IDs (in ascending order).
   */
  public function revisionIds(customerInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Customer author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Customer revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\mymodule\Entity\customerInterface $entity
   *   The Customer entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(customerInterface $entity);

  /**
   * Unsets the language for all Customer with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
