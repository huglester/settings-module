<?php namespace Anomaly\SettingsModule\Setting;

use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Settings\Module\Exception\SettingDoesNotExistException;

class SettingCollection extends EntryCollection
{
    public function findSetting($addonType, $addonSlug, $key)
    {
        foreach ($this->items as $item) {

            if ($addonType == $item->addon_type and $addonSlug == $item->addon_slug and $key == $item->key) {

                return $item;

            }

        }

        throw new SettingDoesNotExistException("The setting [{$addonType}.{$addonSlug}::{$key}] does not exist.");
    }
}
 