<?php
/**
 * @Table(name="searches")
 * @Entity(repositoryClass="Default_Model_SearchRepository")
 */
class Default_Model_Search {

    /**
     * @var integer $id
     * @Id @Column(type="integer") 
     * @GeneratedValue
     */
    private $id;

    /**
     * @var string $keyword
     * @Column(type="string")
     */
    private $keyword;
    
    /**
     * @var string $language
     * @Column(type="string")
     */
    private $language;
    
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
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * Get keyword
     *
     * @return string $keyword
     */
    public function getKeyword()
    {
        return $this->keyword;
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
     * Set created_at
     *
     * @param string $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * Get created_at
     *
     * @return string $created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param string $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * Get updated_at
     *
     * @return string $updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}