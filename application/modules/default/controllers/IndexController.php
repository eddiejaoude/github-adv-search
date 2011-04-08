<?php
/**
 * Default Controller
 *
 * @author          Eddie Jaoude
 * @package       Default Module
 *
 */
class IndexController extends BaseController
{

    /**
     * Initialisation method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function init()
    {
        parent::init();
    }

    /**
     * default method
     *
     * @author          Eddie Jaoude
     * @param           void
     * @return           void
     *
     */
    public function indexAction() {
        $repos = $this->_em->getRepository('Default_Model_Search')->setCache($this->_github->cache->time)->search('github', 'php');

        $this->view->repos = $repos;
    }
    


}

