<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('task_date', date('Y-m-d'))
            ->findAll();

        return view('welcome', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('task_list', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function newTask()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('task_new');
    }

    public function createTask()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput();
        }

        $taskModel = new \App\Models\TaskModel();

        $taskModel->insert([
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/tasks');
    }

    public function editTask($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $taskModel = new \App\Models\TaskModel();

        $data['task'] = $taskModel->find($id);

        return view('task_edit', $data);
    }

    public function updateTask($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $taskModel = new \App\Models\TaskModel();

        $taskModel->update($id, [
            'title' => $this->request->getPost('title'),
            'status' => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function deleteTask($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $taskModel = new \App\Models\TaskModel();

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks');
    }
}
