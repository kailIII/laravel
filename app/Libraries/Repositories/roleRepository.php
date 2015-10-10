<?php 

namespace App\Libraries\Repositories;

use App\Models\Role;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;


class roleRepository extends Repository
{
    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\Role';
    }
}

