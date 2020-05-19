<?php


namespace common\SiteMain;

class SiteMain
{
    public function renderTemplate($__template, $__data)
    {
        extract($__data);
        ob_start();
        require $__template;
        $output = ob_get_clean();
        return($output);
    }
}