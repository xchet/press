<?php

namespace App\Http\Repositories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

/**
 * Class CategoryRepository
 * @package App\Http\Repository
 */
class CategoryRepository extends Repository
{
    public function model()
    {
        return app(Category::class);
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        $categories = Category::withCount('posts')->get();
        return $categories;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        $category = $this->remember('category.one.' . $name, function () use ($name) {
            return Category::where('name', $name)->first();
        });
        if (!$category)
            abort(404);
        return $category;
    }

    public function pagedPostsByCategory(Category $category, $page = 7)
    {
        $posts = $this->remember('category.posts.' . $category->name . $page . request()->get('page', 1), function () use ($category, $page) {
            return $category->posts()->select(Post::selectArrayWithOutContent)->with(['tags', 'category'])->withCount('comments')->orderBy('created_at', 'desc')->paginate($page);
        });
        return $posts;
    }

    /**
     * @param Request $request
     * @return Category
     */
    public function create(Request $request)
    {
        $this->clearCache();

        $category = Category::create($request->all());
        return $category;
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return bool|int
     */
    public function update(Request $request, Category $category)
    {
        $this->clearCache();
        return $category->update($request->all());
    }

    public function tag()
    {
        return CategoryRepository::$tag;
    }
}