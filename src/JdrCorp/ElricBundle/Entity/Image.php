<?php

// src/Sdz/BlogBundle/Entity/Image.php

namespace JdrCorp\ElricBundle\Entity;

class Image {

    public $path;

    public function __construct($upload = null) {
        if ($upload->files->get('avatar') !== null) {
            $this->path = rand(1,100).'_'.date('YmdHis').'.png';
            $upload->files->get('avatar')->move($this->getUploadRootDir(), $this->path);
        }
        return $this;
    }

    public function getWebPath() {
        return $this->getUploadDir() . '/' . $this->path;
    }
    
    public function getUploadRootDir() {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        return 'uploads/avatars';
    }

}
