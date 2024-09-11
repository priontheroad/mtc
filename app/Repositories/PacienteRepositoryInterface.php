<?php
namespace App\Repositories;

interface PacienteRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
}
