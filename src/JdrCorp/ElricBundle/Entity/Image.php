<?php

// src/Sdz/BlogBundle/Entity/Image.php

namespace JdrCorp\ElricBundle\Entity;

class Image {

    public $id;
    public $path;

    public function __construct($upload = null) {
        if ($upload->files->get('avatar') !== null) {
            $upload->files->get('avatar')->move($this->getUploadRootDir(), 'test.png');
            $this->path = $this->getUploadRootDir() . '/test.png';
        }
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/avatars';
    }

}
