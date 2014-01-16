<?php

// src/Sdz/BlogBundle/Entity/Image.php

namespace JdrCorp\ElricBundle\Entity;

class Image {

    public $path;

    public function __construct($perso_id, $fiche_id, $upload = null) {
        if ($upload !== null && $upload->files->get('avatar') !== null && filesize($upload->files->get('avatar')) < 50000) {
            $this->path = $fiche_id . '_' . $perso_id . '.png';
            $upload->files->get('avatar')->move($this->getUploadRootDir(), $this->path);
        } else if ($upload === null && !file_exists($this->getUploadRootDir())) {
            $this->path = null;
        }
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
