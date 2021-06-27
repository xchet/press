<?php
/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/8/25
 * Time: 13:07
 */

namespace App\Http\Repositories;

// use App\Contracts\PressCache;
use Closure;

abstract class Repository
{
    private $pressCache;

    public abstract function model();

    public abstract function tag();

    public function find($id)
    {
        $model = $this->remember($this->tag() . '.id' . $id, function () use ($id) {
            return $this->model()->findOrFail($id);
        });
        return $model;
    }

    private function getPressCache()
    {
        if ($this->pressCache == null) {
            $this->pressCache = app('PressCache'); // check in CacheServiceProvider
            $this->pressCache->setTag($this->tag());
            $this->pressCache->setTime($this->cacheTime());
        }
        return $this->pressCache;
    }

    public function cacheTime()
    {
        return 60;
    }

    public function count()
    {
        $count = $this->remember($this->tag() . '.count', function () {
            return $this->model()->count();
        });
        return $count;
    }

    public function all()
    {
        $all = $this->remember($this->tag() . '.all', function () {
            return $this->model()->all();
        });
        return $all;
    }

    public function remember($key, Closure $entity, $tag = null)
    {
        return $this->getPressCache()->remember($key, $entity, $tag);
    }

    public function forget($key, $tag = null)
    {
        $this->getPressCache()->forget($key, $tag);
    }

    public function clearCache($tag = null)
    {
        $this->getPressCache()->clearCache($tag);
    }

    public function clearAllCache()
    {
        $this->getPressCache()->clearAllCache();
    }

}