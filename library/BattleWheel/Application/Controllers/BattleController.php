<?php
namespace BATTLEWHEEL\Application\Controllers;

use BATTLEWHEEL\Framework\Controller\VanillaController as VanillaController;

/**
 * Sample Controller for Hello
 * @author Sean Prunka
 * @version 1.0
 *
 */
class BattleController extends VanillaController
{

    /**
     * Initialize
     */
    public function beforeAction()
    {
        $this->set('title', 'Battle Prep');
        $this->set('subtitle', '');
    }

    /**
     * This is the join method of the Battle Controller.
     * This is the method that will be called when you visit /battle/join
     */
    public function join()
    {
    }

    /**
     * This is the doJoin method, it is called upon form submission.
     * @param array $params
     */
    public function doJoin($params)
    {

    }


    public function afterAction()
    {
    }
}
