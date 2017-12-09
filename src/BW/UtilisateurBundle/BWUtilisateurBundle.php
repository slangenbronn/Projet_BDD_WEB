<?php

namespace BW\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BWUtilisateurBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
