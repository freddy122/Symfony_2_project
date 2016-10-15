<?php

namespace Myapp\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyappUtilisateurBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
