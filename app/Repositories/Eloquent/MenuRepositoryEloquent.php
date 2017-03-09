<?php
namespace App\Repositories\Eloquent;
//use Prettus\Repository\Eloquent\BaseRepository;
//use App\Repositories\Contracts\MenuRepository;
use App\Models\Menu;
/**
 * 菜单仓库
 */
//class MenuRepositoryEloquent extends BaseRepository implements MenuRepository
class MenuRepositoryEloquent
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function __construct(Menu $menus)
    {
        $this->menus = $menus;
    }

    public function allMenus()
    {
    	return $this->menus->orderBy('sort','desc')->get()->toArray();
    }

    public function createMenu($attributes)
    {
        $model = new $this->model;
        return $model->fill($attributes)->save();
    }
}
