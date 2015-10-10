<?php namespace App;


namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
		protected $fillable = array('id', 'name', 'display_name');

}

?>