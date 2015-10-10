<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    
	public $table = "users";
    

	public $fillable = [
	    "id",
		"name",
		"email",
		"password",
		"remember_token",
		"created_at",
		"updated_at"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"name" => "string",
		"email" => "string",
		"password" => "string",
		"remember_token" => "string"
    ];

	public static $rules = [
	    
	];

}
