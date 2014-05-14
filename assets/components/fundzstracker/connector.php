<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('fundzstracker_core_path', null, $modx->getOption('core_path') . 'components/fundzstracker/');
require_once $corePath . 'model/fundzstracker/fundzstracker.class.php';
$modx->fundzstracker = new fundzsTracker($modx);

$modx->lexicon->load('fundzstracker:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->fundzstracker->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));