<?php

namespace App\Services;

use App\Repositories\Post\PostRepositoryInterface;

class PostService
{
    protected $postRepository;


    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->all();
    }

    public function getPostById($id)
    {

        return $this->postRepository->find($id);
    }

    public function createPost($data)
    {
        return $this->postRepository->create($data);    
    }

    public function delete($id)
    {
        return $this->postRepository->destroy($id);
    }
}



