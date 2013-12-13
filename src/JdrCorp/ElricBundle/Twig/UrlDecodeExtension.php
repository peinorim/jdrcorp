<?php
namespace JdrCorp\ElricBundle\Twig;

class UrlDecodeExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            'url_decode' => new \Twig_Filter_Method($this, 'urlDecode'),
        );
    }

    public function urlDecode($url) {
        return urldecode($url);
    }

    public function getName() {
        return 'url_decode_extension';
    }

}
