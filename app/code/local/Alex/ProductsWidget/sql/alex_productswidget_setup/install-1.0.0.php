<?php
/**
 * Created by PhpStorm.
 * User: aber
 * Date: 29.07.16
 * Time: 15:45
 */

$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_product', "is_top", [
    'type'       => 'int',
    'input'      => 'boolean',
    'label'      => 'Is TOP?',
    'group' => 'Education',
    'sort_order' => 999,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 0,
    'searchable' => 0,
    'filterable' => 0,
    'comparable' => 0,
    'visible_on_front' => 0,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 0,
    'is_configurable' => 0,
    'unique' => 0,
    'global'     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    ]
);

$products = Mage::getModel("catalog/product")->getCollection()->getAllIds();

Mage::getSingleton('catalog/product_action')->updateAttributes($products, ['is_top' => "0"], 0);

$installer->endSetup();