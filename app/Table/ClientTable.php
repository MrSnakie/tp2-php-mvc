<?php
namespace App\Table;

use Core\Table\Table;
/**
* 
*/
class ClientTable extends Table
{
    protected $table = "clients";

    public function byStatutName()
    {
        return $this->query(" SELECT clients.id,
                                     clients.first_name,
                                     clients.last_name,
                                     clients.birth_date,
                                     clients.adress,
                                     clients.postal_code,
                                     clients.phone,
                                     marital_status.status as statut
                                FROM clients
                                LEFT JOIN marital_status
                                       ON marital_status_id = marital_status.id
                                ORDER BY clients.last_name
                            ");
    }

    public function byStatusId($id)
    {
        return $this->query(" SELECT clients.id,
                                     clients.first_name,
                                     clients.last_name,
                                     clients.birth_date,
                                     clients.adress,
                                     clients.postal_code,
                                     clients.phone,
                                     marital_status.status as statut
                                FROM clients
                                LEFT JOIN marital_status
                                       ON marital_status_id = marital_status.id
                                WHERE marital_status_id = ?
                                ORDER BY clients.last_name
                            ", [$id]);
    }
}