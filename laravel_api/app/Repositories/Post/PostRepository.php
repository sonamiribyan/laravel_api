<?php


namespace App\Repositories\Post;


use App\Model\Post\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function find($id)
    {
        return Post::findOrFail($id);
    }
    public function create($data)
    {
        return Post::create($data);
    }

    public function destroy($id)
    {
        return Post::destroy($id);
    }
    // Implement other methods as needed
}

