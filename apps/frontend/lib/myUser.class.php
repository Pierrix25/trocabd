<?php

class myUser extends sfGuardSecurityUser
{
	public function getId()
	{
	  return $this->getAttribute('id');
	}

}
