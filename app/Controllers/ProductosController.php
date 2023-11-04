<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{
    public function index()
    {
        $model = new ProductoModel();
        $productos = $model->findAll();
        return $this->response->setJSON($productos);
    }

    public function create()
    {
        $model = new ProductoModel();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->response->setJSON(['message' => 'Producto creado con éxito']);
    }

    public function update($id = null)
    {
        $model = new ProductoModel();
        $data = $this->request->getJSON();
        $model->update($id, $data);
        return $this->response->setJSON(['message' => 'Producto actualizado con éxito']);
    }

    public function delete($id = null)
    {
        $model = new ProductoModel();
        $model->delete($id);
        return $this->response->setJSON(['message' => 'Producto eliminado con éxito']);
    }
}
