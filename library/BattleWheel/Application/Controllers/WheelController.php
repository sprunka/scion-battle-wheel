<?php
namespace BattleWheel\Application\Controllers;

use BattleWheel\Framework\Controller\VanillaController as VanillaController;

/**
 * Sample Controller for Hello
 * @author Sean Prunka
 * @version 1.0
 *
 */
class WheelController extends VanillaController
{

    /**
     * Initialize
     */
    public function beforeAction()
    {
        $this->set('title', 'Hello World');
        $this->set('subtitle', '');
    }

    /**
     * This is the world method of the Hello Controller.
     * This is the method that will be called when you visit /hello/world
     */
    public function show()
    {
    }

    public function afterAction()
    {
    }
}
