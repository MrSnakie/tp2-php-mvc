<?php
namespace App\Entity;

use Core\Entity\Entity;

class ClientEntity extends Entity
{
    public function getIdentity(){
    	return strtoupper($this->last_name).' '.ucfirst($this->first_name);
    }

    public function getAge()
    {
        return (int)((time()-strtotime($this->birth_date))/(60*60*24*365)).' ans';
    }
}
