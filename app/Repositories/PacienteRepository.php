<?php
namespace App\Repositories;

use App\Models\Paciente;

class PacienteRepository implements PacienteRepositoryInterface
{
    protected $model;

    public function __construct(Paciente $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
