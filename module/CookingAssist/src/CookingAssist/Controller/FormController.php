<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * FormController
 *
 * @author
 *
 * @version
 *
 */
class FormController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        // TODO Auto-generated FormController::indexAction() default action
        return new ViewModel();
    }
    
    public function getLevels(){
        return array();
    }
}