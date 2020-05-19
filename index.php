<?php
$loader = require __DIR__ .'/vendor/autoload.php';
$loader->add('common\\', __DIR__.'/src');
use common\SiteMain\siteMain;

$site = new SiteMain();
print $site->renderTemplate('template/layout.php', 'jopa');
