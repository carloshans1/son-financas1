<?php

/** Implementação dos metodos
 * User: carlosoliveira 
 * Date: 03/12/2018
 * Time: 10:20
 */

declare(strict_types=1);

namespace SONFin\Repository;

use Illuminate\Database\Eloquent\Model;


class DefaultRepository implements RepositoryInterface
{
    /** Declaração variavel
     * @var string
     */
    private $modelClass;
    /**
     * @var Model
     */
    private $model;
    
    /** Passa o nome do modelo - Instancia do model
     * @param string $modelClass
     */
    public function __construct(string $modelClass)
    {
        $this->modelClass = $modelClass;
        $this->model = new $modelClass;
    }
 
    public function all(): array 
    {
        return $this->model->all()->toArray();
    }

    public function create(array $data)
    {
        $this->model->fill($data);
        $this->model->save();
        return $this->model;
    }

    public function update(int $id, array $data)
    {
        $model = $this->find($id);
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function delete(int $id)    
    {
        $model = $this->find($id);
        $model->delete();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

}



