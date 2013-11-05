<?php

class MobWeb_UseShortDescriptionAsMetaDescriptionForProduct_Block_Product_View extends Mage_Catalog_Block_Product_View
{
	protected function _prepareLayout()
	{
		$product = $this->getProduct();
		$description = $product->getMetaDescription();
		if (!$description) {
		    $product->setMetaDescription($product->getShortDescription());
		}

		return parent::_prepareLayout();
	}
}
