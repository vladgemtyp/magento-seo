<?php

/**
 * SEO Rule
 *
 * @category Popov
 * @package Popov_Seo
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @datetime: 21.04.14 15:13
 */
//class Popov_Seo_Model_Rule extends Mage_Core_Model_Abstract
class Popov_Seo_Model_Rule extends Mage_CatalogRule_Model_Rule
//class Popov_Seo_Model_Rule extends Mage_Rule_Model_Rule
{
    protected function _construct()
    {
        $this->_init('popov_seo/rule');
    }

    public function getConditionsInstance()
    {
        return Mage::getModel('catalogrule/rule_condition_combine');
    }

    /*public function getConditionsInstance()
    {
        return Mage::getModel('salesrule/rule_condition_combine');
    }*/

    /*public function getActionsInstance()
    {
        return Mage::getModel('salesrule/rule_condition_product_combine');
    }*/

    /**
     * load Rule posted from web
     *
     * @param array $rule
     * @return Magestore_RewardPointsRule_Model_Earning_Sales
     */
    /*public function loadPost(array $rule)
    {
        $arr = $this->_convertFlatToRecursive($rule);
        if (isset($arr['conditions'])) {
            $this->getConditions()->setConditions([])->loadArray($arr['conditions'][1]);
        }
        if (isset($arr['actions'])) {
            $this->getActions()->setActions([])->loadArray($arr['actions'][1], 'actions');
        }

        return $this;
    }*/

    /*protected function _beforeSave()
    {
        parent::_beforeSave();
        if ($this->hasWebsiteIds()) {
            $websiteIds = $this->getWebsiteIds();
            if (is_array($websiteIds) && !empty($websiteIds)) {
                $this->setWebsiteIds(implode(',', $websiteIds));
            }
        }
        if ($this->hasCustomerGroupIds()) {
            $groupIds = $this->getCustomerGroupIds();
            if (is_array($groupIds) && !empty($groupIds)) {
                $this->setCustomerGroupIds(implode(',', $groupIds));
            }
        }

        return $this;
    }*/
}