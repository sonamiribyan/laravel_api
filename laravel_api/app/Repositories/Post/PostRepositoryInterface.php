<?php


namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function all();

    public function find($id);

    // Add other methods as needed
    public function create($data);

    public function destroy($id);
}