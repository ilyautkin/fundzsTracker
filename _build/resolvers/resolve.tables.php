<?php

if ($object->xpdo) {
	/* @var modX $modx */
	$modx =& $object->xpdo;

	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
			$modelPath = $modx->getOption('fundzstracker_core_path',null,$modx->getOption('core_path').'components/fundzstracker/').'model/';
			$modx->addPackage('fundzstracker', $modelPath);

			$manager = $modx->getManager();
			$objects = array(
				'fundzsTrackerItem',
			);
			foreach ($objects as $tmp) {
				$manager->createObjectContainer($tmp);
			}
			break;

		case xPDOTransport::ACTION_UPGRADE:
			break;

		case xPDOTransport::ACTION_UNINSTALL:
			break;
	}
}
return true;
