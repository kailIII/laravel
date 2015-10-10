<?php namespace App\Libraries\Repositories;

use App\Models\Prueba2;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Prueba2Repository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\Prueba2';
    }

	public function search($input)
    {
        $query = Prueba2::query();

        $columns = Schema::getColumnListing('prueba2s');
        $attributes = array();

        foreach($columns as $attribute)
        {
            if(isset($input[$attribute]) and !empty($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] = $input[$attribute];
            }
            else
            {
                $attributes[$attribute] =  null;
            }
        }

        return [$query->get(), $attributes];
    }

    public function apiFindOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Prueba2 not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "Prueba2 not found");
        }

        return $model->delete();
    }
}
