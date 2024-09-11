<?php 

namespace App\Services;

use App\Repositories\PacienteRepositoryInterface;

class PacienteService
{
    protected $pacienteRepo;

    public function __construct(PacienteRepositoryInterface $pacienteRepo)
    {
        $this->pacienteRepo = $pacienteRepo;
    }

    public function getAllPacientes()
    {
        return $this->pacienteRepo->all();
    }

    public function getPacienteById($id)
    {
        return $this->pacienteRepo->find($id);
    }

    public function createPaciente(array $data)
    {
        return $this->pacienteRepo->create($data);
    }
}
