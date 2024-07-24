<?php
class Degriz_Snappixel_Helper_Data extends Mage_Core_Helper_Abstract
{
    //opcija dodajanja pixlov
    const CONFIG_XML_PATH_SETTINGS_PIXEL_ACTIVE = 'degriz_snappixel/pixel/pixel_active';
    const CONFIG_XML_PATH_SETTINGS_PIXEL_ID = 'degriz_snappixel/pixel/pixel_id';

    public function getPixelActive($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_XML_PATH_SETTINGS_PIXEL_ACTIVE, $store);
    }

    public function getPixelId($store = null)
    {
        return Mage::getStoreConfig(self::CONFIG_XML_PATH_SETTINGS_PIXEL_ID, $store);
    }

    public function __construct()
    {

    }


}