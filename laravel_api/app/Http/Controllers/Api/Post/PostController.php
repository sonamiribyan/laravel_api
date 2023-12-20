<?php

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\Post\PostStoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $postService;


    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPosts();

        return response()->json($posts);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $validated = $request->validated();

        $post = $this->postService->createPost($validated);

        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $post = $this->postService->getPostById($id);
            return response()->json($post);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'code' => 404,
                    'message' => 'Post not found',
                ],
            ], 404);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->postService->delete($id);
    }
}
