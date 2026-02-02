<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AmenityModel;

class AmenityController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AmenityModel();
    }

    public function index()
    {
        return view('admin/amenities/index', [
            'title'     => 'Amenities - ' . config('App')->appName,
            'amenities' => $this->model->getActiveSorted(),
        ]);
    }

    public function create()
    {
        return view('admin/amenities/create', [
            'title' => 'New Amenity - ' . config('App')->appName,
        ]);
    }

    public function store()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[120]|is_unique[amenities.name]',
            'icon' => 'required|max_length[100]',
            'sort_order' => 'permit_empty|integer',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->insert($this->request->getPost());

        return redirect()->to('/admin/amenities')->with('success', 'Amenity created.');
    }

    public function edit($id)
    {
        $amenity = $this->model->find($id);
        if (! $amenity) {
            return redirect()->to('/admin/amenities')->with('error', 'Not found');
        }

        return view('admin/amenities/edit', [
            'title'   => 'Edit Amenity',
            'amenity' => $amenity,
        ]);
    }

    public function update($id)
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[120]|is_unique[amenities.name,id,'.$id.']',
            'icon' => 'required|max_length[100]',
            'sort_order' => 'permit_empty|integer',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->model->update($id, $this->request->getPost());

        return redirect()->to('/admin/amenities')->with('success', 'Amenity updated.');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/admin/amenities')->with('success', 'Amenity deleted.');
    }
}