<?php
    namespace App\ServerBundle\Document;

    use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

    /**
     * @MongoDB\Document
     */
    class Application{
        /**
         * @MongoDB\Id
         */
        protected $id;

        /**
         * @MongoDb\String 
         */
        protected $name;

    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
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
}
