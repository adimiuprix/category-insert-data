<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Category extends BaseController{    
    public function index(){
        $categoryModel = new \App\Models\CategoryModel();
        $data['categories'] = $categoryModel->all_category();
    
        return view('category', $data);
    }

    public function add(){
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            $model = new \App\Models\CategoryModel();
    
            // get data from form
            $category_name = $this->request->getPost('category_name');
            $category_description = $this->request->getPost('category_description');
    
            // validate data
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'category_name' => 'required',
                'category_description' => 'required',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                // save data to database
                $model->save([
                    'category_name' => $category_name,
                    'category_description' => $category_description,
                ]);
    
                $data['success'] = 'Category has been added successfully.';
                return redirect()->to('/category');
            } else {
                $data['errors'] = $validation->getErrors();
            }
        }
    
        return view('add_category', $data);
    }
        
    public function edit($category_id){
        $model = new \App\Models\CategoryModel();
        $data['category'] = $model->find($category_id);
    
        if ($this->request->getMethod() === 'post') {
            $model = new \App\Models\CategoryModel();

            // get data from form
            $category_name = $this->request->getPost('category_name');
            $category_description = $this->request->getPost('category_description');
            
            // validate data
            $validation = \Config\Services::validation();
            $validation->setRules([
                'category_name' => 'required',
                'category_description' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // save data to database
                $model->save([
                    'category_id' => $category_id,
                    'category_name' => $category_name,
                    'category_description' => $category_description,
                ]);

                $data['success'] = 'Category has been updated successfully.';
                $data['category'] = $model->find($category_id);
                return redirect()->to('/category');
                // get the updated data
            } else {
                $data['errors'] = $validation->getErrors();
            }
        }
    
        return view('edit_category', $data);
    }
            
}
