<?php
/**
 * @Table(name="repositories")
 * @Entity(repositoryClass="Default_Model_RepositoryRepository")
 */
class Default_Model_Repository {
     /**
     * @var integer $id
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var integer $search_id
     * @Column(type="integer")
     */
    private $search_id;

    /**
     * @var string $type
     * @Column(type="string")
     */
    private $type;

    /**
     * @var string $username
     * @Column(type="string")
     */
    private $username;

    /**
     * @var string $pushed
     * @Column(type="string")
     */
    private $pushed;

    /**
     * @var integer $has_wiki
     * @Column(type="integer")
     */
    private $has_wiki;

    /**
     * @var integer $watchers
     * @Column(type="integer")
     */
    private $watchers;

    /**
     * @var string $description
     * @Column(type="string")
     */
    private $description;

    /**
     * @var integer $open_issues
     * @Column(type="integer")
     */
    private $open_issues;

    /**
     * @var string $language
     * @Column(type="string")
     */
    private $language;

    /**
     * @var integer $fork
     * @Column(type="integer")
     */
    private $fork;

    /**
     * @var integer $has_issues
     * @Column(type="integer")
     */
    private $has_issues;

    /**
     * @var string $homepage
     * @Column(type="string")
     */
    private $homepage;

    /**
     * @var integer $size
     * @Column(type="integer")
     */
    private $size;

    /**
     * @var integer $private
     * @Column(type="integer")
     */
    private $private;

    /**
     * @var integer $followers
     * @Column(type="integer")
     */
    private $followers;

    /**
     * @var string $name
     * @Column(type="string")
     */
    private $name;

    /**
     * @var string $owner
     * @Column(type="string")
     */
    private $owner;

    /**
     * @var integer $has_downloads
     * @Column(type="integer")
     */
    private $has_downloads;

    /**
     * @var string $pushed_at
     * @Column(type="string")
     */
    private $pushed_at;

    /**
     * @var string $score
     * @Column(type="float")
     *  decimal
     */
    private $score;

    /**
     * @var string $url
     * @Column(type="string")
     */
    private $url;

    /**
     * @var integer $forks
     * @Column(type="integer")
     */
    private $forks;

    /**
     * @var string $created
     * @Column(type="string")
     */
    private $created;

    /**
     * @var string $created_at
     * @Column(type="string")
     */
    private $created_at;

    /**
     * @var string $updated_at
     * @Column(type="string")
     */
    private $updated_at;

    /**
     * Get search_id
     *
     * @return integer $searchId
     */
    public function getSearchId()
    {
        return $this->search_id;
    }

    /**
     * Set serach_id
     *
     * @param string $serach_id
     */
    public function setSearchId($search_id)
    {
        $this->search_id = $search_id;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set pushed
     *
     * @param string $pushed
     */
    public function setPushed($pushed)
    {
        $this->pushed = $pushed;
    }

    /**
     * Get pushed
     *
     * @return string $pushed
     */
    public function getPushed()
    {
        return $this->pushed;
    }

    /**
     * Set has_wiki
     *
     * @param integer $hasWiki
     */
    public function setHasWiki($hasWiki)
    {
        $this->has_wiki = $hasWiki;
    }

    /**
     * Get has_wiki
     *
     * @return integer $hasWiki
     */
    public function getHasWiki()
    {
        return $this->has_wiki;
    }

    /**
     * Set watchers
     *
     * @param integer $watchers
     */
    public function setWatchers($watchers)
    {
        $this->watchers = $watchers;
    }

    /**
     * Get watchers
     *
     * @return integer $watchers
     */
    public function getWatchers()
    {
        return $this->watchers;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set open_issues
     *
     * @param integer $openIssues
     */
    public function setOpenIssues($openIssues)
    {
        $this->open_issues = $openIssues;
    }

    /**
     * Get open_issues
     *
     * @return integer $openIssues
     */
    public function getOpenIssues()
    {
        return $this->open_issues;
    }

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return string $language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set fork
     *
     * @param integer $fork
     */
    public function setFork($fork)
    {
        $this->fork = $fork;
    }

    /**
     * Get fork
     *
     * @return integer $fork
     */
    public function getFork()
    {
        return $this->fork;
    }

    /**
     * Set has_issues
     *
     * @param integer $hasIssues
     */
    public function setHasIssues($hasIssues)
    {
        $this->has_issues = $hasIssues;
    }

    /**
     * Get has_issues
     *
     * @return integer $hasIssues
     */
    public function getHasIssues()
    {
        return $this->has_issues;
    }

    /**
     * Set homepage
     *
     * @param string $homepage
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

    /**
     * Get homepage
     *
     * @return string $homepage
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Set size
     *
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * Get size
     *
     * @return integer $size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set private
     *
     * @param integer $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * Get private
     *
     * @return integer $private
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set followers
     *
     * @param integer $followers
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;
    }

    /**
     * Get followers
     *
     * @return integer $followers
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set owner
     *
     * @param string $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return string $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set has_downloads
     *
     * @param integer $hasDownloads
     */
    public function setHasDownloads($hasDownloads)
    {
        $this->has_downloads = $hasDownloads;
    }

    /**
     * Get has_downloads
     *
     * @return integer $hasDownloads
     */
    public function getHasDownloads()
    {
        return $this->has_downloads;
    }

    /**
     * Set pushed_at
     *
     * @param datetime $pushedAt
     */
    public function setPushedAt($pushedAt)
    {
        $this->pushed_at = $pushedAt;
    }

    /**
     * Get pushed_at
     *
     * @return datetime $pushedAt
     */
    public function getPushedAt()
    {
        return $this->pushed_at;
    }

    /**
     * Set score
     *
     * @param float $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * Get score
     *
     * @return float $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set forks
     *
     * @param integer $forks
     */
    public function setForks($forks)
    {
        $this->forks = $forks;
    }

    /**
     * Get forks
     *
     * @return integer $forks
     */
    public function getForks()
    {
        return $this->forks;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}