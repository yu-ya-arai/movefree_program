<?php

require_once './DbManager.php';

$db = getDb();

print 'driver: ' . $db->getAttribute(PDO::ATTR_DRIVER_NAME) . '<br />';
print 'status: ' . $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);