<?php
/**
 * This class has been auto-generated by PHP-DI.
 */
class CompiledContainer extends DI\CompiledContainer{
    const METHOD_MAPPING = array (
  'Theme_Sniffer\\Admin_Menus\\Sniff_Page' => 'get5d873921285f3695255794',
  'Theme_Sniffer\\Callback\\Run_Sniffer_Callback' => 'get5d8739212b488781548526',
  'Theme_Sniffer\\Enqueue\\Enqueue_Resources' => 'get5d8739212b6ef442585473',
  'Theme_Sniffer\\i18n\\Internationalization' => 'get5d8739212b7c5480981663',
);

    protected function get5d873921285f3695255794()
    {
        $object = new Theme_Sniffer\Admin_Menus\Sniff_Page();
        return $object;
    }

    protected function get5d8739212b488781548526()
    {
        $object = new Theme_Sniffer\Callback\Run_Sniffer_Callback();
        return $object;
    }

    protected function get5d8739212b6ef442585473()
    {
        $object = new Theme_Sniffer\Enqueue\Enqueue_Resources();
        return $object;
    }

    protected function get5d8739212b7c5480981663()
    {
        $object = new Theme_Sniffer\i18n\Internationalization();
        return $object;
    }

}
