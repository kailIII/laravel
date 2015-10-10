<?php namespace App;


namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $fillable = array('id', 'name', 'display_name');
}

?>