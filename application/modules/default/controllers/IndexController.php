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
        $repos = array();
        $form = new Default_Form_Search;

        if ($this->_request->isPost()) {
            # get params
            $data = $this->_request->getPost();

            # check validate form
            if ($form->isValid($data)) {
                $repos = $this->_em->getRepository('Default_Model_Search')
                        ->setCache($this->_github->cache->time)
                        ->search($data['keyword'], $data['language'], $data['sort_by']);
            }

            # populate form
            $form->populate($data);
        }

        $this->view->repos = $repos;
        $this->view->form = $form;
    }
    


}

