<?php
/**
 * Search Repository
 *
 *
 * @author          Eddie Jaoude
 * @package       Default Module
 *
 */

use Doctrine\ORM\EntityRepository;
class Default_Model_SearchRepository extends EntityRepository
{
    /**
     * cache length in hours
     *
     * @author          Eddie Jaoude
     * @param           int $cache
     *
     */
    public $cache = 12;

    /**
     * cache
     *
     * @author          Eddie Jaoude
     * @param           int $time
     * @return           object $this
     *
     */
    public function setCache($time) {
        # filter data
        if ($time == null) {
            throw new Exception('Cache value can not be null');
        }
        $this->cache = $time;
        return $this;
    }
    /**
     * search
     *
     * @author          Eddie Jaoude
     * @param           string $keyword
     * @param           string $language
     * @return           array $results
     *
     */
    public function search($keyword, $language, $sort_by='id', $order='ASC')
    { 
        # filter data
        if (empty($keyword) && empty($language) && empty($sory_by) && empty($order)) {
            throw new Exception('keyword, language, sort_by, order are all required');
        }

        // check cache
        $search_exists = $this->findOneBy(array('keyword' => (string) $keyword, 'language' => (string) $language));
        $now = new Zend_Date();
        $now->sub($this->cache, Zend_Date::HOUR);
        if (count($search_exists) != 1 || $now->isLater($search_exists->getUpdatedAt())) {
            # get new data
            $result = array();
            $page = 1;
            $github = new Github_Client();
            while ($repos = $github->getRepoApi()->search($keyword, $language, $page)) {
                $result = array_merge($result, $repos);
                $page++;
            }

            # current date
            $date = new Zend_Date;

            # delete existing repositories
            if (count($search_exists) == 1) {
                $this->deleteSearchAndRepositories($search_exists->getId());
            }

            # save new repositories
            $search = new Default_Model_Search;
            $search->setKeyword($keyword);
            $search->setLanguage($language);
            $date = new Zend_Date;
            $search->setCreatedAt($date->toString('YYYY-MM-dd HH:mm:ss'));
            $search->setUpdatedAt($date->toString('YYYY-MM-dd HH:mm:ss'));
            $this->_em->persist($search);
            $this->_em->flush();
            $search_id = $search->getId();
            
            foreach ($result as $k=>$v) {
                $repository = new Default_Model_Repository;
                $repository->setSearchId($search_id);
                $repository->setType($v['type']);
                $repository->setUsername($v['username']);
                $repository->setPushed($v['pushed']);
                $repository->setHasWiki($v['has_wiki']);
                $repository->setWatchers($v['watchers']);
                $repository->setDescription(!empty($v['description']) ? $v['description'] : '');
                $repository->setOpenIssues($v['open_issues']);
                $repository->setLanguage($v['language']);
                $repository->setFork($v['fork']);
                $repository->setHasIssues($v['has_issues']);
                $repository->setHomepage(!empty($v['homepage']) ? $v['homepage'] : '');
                $repository->setSize($v['size']);
                $repository->setPrivate($v['private']);
                $repository->setFollowers($v['followers']);
                $repository->setName($v['name']);
                $repository->setOwner($v['owner']);
                $repository->setHasDownloads($v['has_downloads']);
                $repository->setPushedAt($v['pushed_at']);
                $repository->setScore($v['score']);
                $repository->setUrl($v['url']);
                $repository->setForks($v['forks']);
                $repository->setCreated($v['created']);
                $repository->setCreatedAt($v['created_at']);
                $repository->setUpdatedAt($date->toString('YYYY-MM-dd HH:mm:ss'));
                $this->_em->persist($repository);
            }
            $this->_em->flush();
            
        }

        # get data
        $repositories_qb = $this->_em->createQueryBuilder();
        $repositories_query = $repositories_qb->add('select', 'repository')
                    ->add('from', 'Default_Model_Repository repository')
                    ->add('where', 'repository.search_id = :id')
                    ->setParameter('id', $search_id);

        # sort
        switch($sort_by) {
            case 'id':
                $repositories_query->add('orderBy', 'repository.id DESC');
                break;
            case 'name':
                $repositories_query->add('orderBy', 'repository.name DESC');
                break;
            case 'owner':
                $repositories_query->add('orderBy', 'repository.owner DESC');
                break;
            case 'activity':
                $repositories_query->add('orderBy', 'repository.activity DESC');
                break;
            case 'created':
                $repositories_query->add('orderBy', 'repository.created DESC');
                break;
            case 'watchers':
                $repositories_query->add('orderBy', 'repository.watchers DESC');
                break;
            case 'forks':
                $repositories_query->add('orderBy', 'repository.forks DESC');
                break;
            case 'issues':
                $repositories_query->add('orderBy', 'repository.open_issues DESC');
                break;
            case 'score':
                $repositories_query->add('orderBy', 'repository.score DESC');
                break;
        }

        $result = $repositories_query->getQuery()
                    ->getArrayResult();

        return $result;
    }

    /**
     * delete repositories by search id
     *
     * @author          Eddie Jaoude
     * @param           int $search_id
     * @return           int $repositories
     *
     */
    public function deleteSearchAndRepositories($search_id)
    {
        $search = $this->_em->createQuery('delete from Default_Model_Search search where search.id = :id')
                    ->setParameter('id', $search_id)
                    ->execute();

        $repositories = $this->_em->createQuery('delete from Default_Model_Repository repository where repository.search_id = :id')
                    ->setParameter('id', $search_id)
                    ->execute();
        return $repositories;
    }

}