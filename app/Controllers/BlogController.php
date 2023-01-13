<?php

namespace App\Controllers;

use App\Models\PostModel;

class BlogController extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();

        // $data['posts'] = $postModel->findAll();
        $data['random'] = $postModel->fetchRandomPost();

        $data['posts'] = $postModel->fetchAllPosts();

        return view('layouts/header')
                    .view('blog/index', $data)
                    .view('layouts/footer');
    }

    public function showAllPosts()
    {
        $postModel = new PostModel();

        $data['posts'] = $postModel->fetchAllPosts();

        return view('layouts/header')
                .view('blog/manage-posts', $data)
                .view('layouts/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('layouts/header')
                    .view('blog/create', ['title' => 'Create a new item'])
                    .view('layouts/footer');
        }

        $post = $this->request->getPost(['title', 'slug', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'slug' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('layouts/header')
                .view('blog/create', ['title' => 'Create a new item'])
                .view('layouts/footer');
        }

        $model = model(PostModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('layouts/header')
                .view('blog/create', ['title' => 'Post item created'])
                .view('layouts/footer');
    }
    // public function insertPost()
    // {
    //     helper('form');
        
    //     $postModel = new PostModel();
        
    //     $slug = $this->request->getPost('slug');
    //     $title = $this->request->getPost('title');
    //     $body = $this->request->getPost('body');

    //     $data = [
    //         'slug' => $slug,
    //         'title' => $title,
    //         'body' => $body,
    //     ];

    //     $result = $this->postModel->insert($data);

    //     if ($result) {
    //         echo "NEW POST INSERTED";
    //     } else {
    //         echo "OOPS; SOMETHING WENT WRONG";
    //     }
      
    // }

}
