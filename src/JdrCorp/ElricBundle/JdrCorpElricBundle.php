<?php

namespace JdrCorp\ElricBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JdrCorpElricBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
