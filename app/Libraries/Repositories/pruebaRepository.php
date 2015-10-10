<?php namespace App\Libraries\Repositories;

use App\Models\prueba;
use Bosnadev\Repositories\Eloquent\Repository;
use Schema;
use Symfony\Component\HttpKernel\Exception\HttpException;

class pruebaRepository extends Repository
{

    /**
    * Configure the Model
    *
    **/
    public function model()
    {
      return 'App\Models\prueba';
    }

	public function search($input)
    {
        $query = prueba::query();

        $columns = Schema::getColumnListing('pruebas');
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
            throw new HttpException(1001, "prueba not found");
        }

        return $model;
    }

    public function apiDeleteOrFail($id)
    {
        $model = $this->find($id);

        if(empty($model))
        {
            throw new HttpException(1001, "prueba not found");
        }

        return $model->delete();
    }
}
