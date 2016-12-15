<?php
/**
 * Rocket.CMS : Your Social CMS (http://rocketcms.eu)
 * Copyright (c) Martin Kukolos (http://kukolos.eu)
 *
 * For full copyright and licence information, please see the LICENCE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright Copyright (c) Martin Kukolos (http://kukolos.eu)
 * @link http://rocketcms.eu The Rocket CMS Project
 * @since 0.1.0
 * @licence http://rocketcms.eu/licence
 *
 * @author Martin
 * @created 31.5.16 8:50
 */

$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);
if (in_array('alert-dismissible', $class)) {
    $button = <<<BUTTON
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
BUTTON;
    $message = $button . $message;
}
echo $this->Html->div($class, $message, $params['attributes']);
?>