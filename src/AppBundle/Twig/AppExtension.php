<?php
/**
 * Created by PhpStorm.
 * User: skouyate
 * Date: 28/09/2016
 * Time: 16:27
 */

namespace AppBundle\Twig;
use AppBundle\Controller\MenuController;
use Lexbase\CommonBundle\Model\Menu;
use Symfony\Component\HttpFoundation\RequestStack;

class AppExtension extends \Twig_Extension
{

    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * @return mixed
     */
    public function getActiveMenu(){

        $session = $this->requestStack->getMasterRequest()->getSession();
        $routeName = $this->requestStack->getMasterRequest()->get('_route');

        $menusList = $session->get(MenuController::SESSION_MENU_ID);
        foreach ($menusList as $menu){
            if($menu->getUrlAction() === $routeName){
                return $menu;
            } else {
                foreach ($menu->getChildren() as $child){
                    if($child->getUrlAction() === $routeName){
                        return $menu;
                    }
                }
            }
        }
        return null;
    }

    public function getPageMenu()
    {
        $session = $this->requestStack->getMasterRequest()->getSession();
        $routeName = $this->requestStack->getMasterRequest()->get('_route');

        $menusList = $session->get(MenuController::SESSION_MENU_ID);
        foreach ($menusList as $menu){
            if($menu->getUrlAction() === $routeName){
                return $menu;
            } else {
                foreach ($menu->getChildren() as $child){
                    if($child->getUrlAction() === $routeName){
                        return $child;
                    }
                }
            }
        }
        return null;
    }

    public function getActionsByMenu()
    {
        $menu = $this->getPageMenu();
        $actionList = array();
        $session = $this->requestStack->getMasterRequest()->getSession();

        foreach ($session->get(MenuController::SESSION_ACTION_ID) as $action){
            if(($action->getMenuId() === $menu->getId()) || $action->getMenuId() === 0){
                $actionList [] = $action;
            } else {
                foreach ($menu->getChildren() as $child){
                    if($child->getId() === $action->getMenuId()){
                        $actionList [] = $action;
                    }
                }
            }
        }
        return $actionList;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('get_active_menu',array($this, 'getActiveMenu')),
            new \Twig_SimpleFunction('get_action_by_menu', array($this, 'getActionsByMenu')),
            new \Twig_SimpleFunction('get_page_menu', array($this, 'getPageMenu'))
        );
    }

    public function getName()
    {
        return 'app_extension';
    }
}