<?php
namespace app\Presenters\Admin;
use Illuminate\Http\Request;

/**
 * Class MenuPresenter
 * @package app\Presenters\Admin
 */
class MenuPresenter {
    /**
     * 判断是否有子集
     * @param $id
     * @param $name
     * @param $icon
     * @param $child
     * @return string
     */

    protected function getHandleList($id,$name,$icon,$child)
    {
        $handle = '';
        if ($child) {
            foreach ($child as $v) {
                $handle .= $this->getNestableItem($v);
            }
        }

        $html = <<<Eof
		<li class="dd-item dd3-item" data-id="{$id}">
            <div class="dd-handle dd3-handle">Drag</div>
            <div class="dd3-content">
            	<span class="label label-info"><i class="{$icon}"></i></span> {$name} {$this->getActionButtons($id)}
            </div>
            <ol class="dd-list">
                {$handle}
            </ol>
        </li>
Eof;
        return $html;
    }

    /**
     * @param $url
     */
    protected function getNavList($url){
        $nav = db('Menu')->where('url',$url)->find();
        dd($nav);
    }

    /**
     * @param Request $request
     */
    public function getCurrentUrl()
    {
        $url = Request::getRequestUri();
        return $url;
    }
    /**
     * 后台左侧菜单
     * @author 晚黎
     * @date   2016-11-06
     * @param  [type]     $sidebarMenus [菜单数据]
     * @return [type]                   [HTML]
     */
    public function sidebarMenuList($sidebarMenus)
    {
        $html = '';
        if ($sidebarMenus) {
            foreach ($sidebarMenus as $menu) {
//                if (!auth()->user()->can($menu['slug'])) {
//                    continue;
//                }
                if ($menu['child']) {
//                    $active = active_class(if_uri_pattern(explode(',',$menu['active'])),'active');
                    $active = 'active';
                    $url = url($menu['url']);
                    $html .= <<<Eof
                    <ul class="nav">
					<li class="has-sub">
			          	<a href="{$url}"><i class="{$menu['icon']}"></i> <span class="nav-label">{$menu['title']}</span> <span class="fa arrow"></span></a>
			          	<ul class="nav nav-second-level collapse">
			              	{$this->childMenu($menu['child'])}
			          	</ul>
			      	</li>
                    </ul>
Eof;
                }else{
                    $html .= '<li class="'.active_class(if_uri_pattern(explode(',',$menu['active'])),'active').'"><a href="'.url($menu['url']).'"><i class="'.$menu['icon'].'"></i> <span class="nav-label">'.$menu['name'].'</span></a></li>';
                }
            }
        }
        return $html;
    }
    /**
     * 多级菜单显示
     * @author 晚黎
     * @date   2016-11-06
     * @param  [type]     $childMenu [子菜单数据]
     * @return [type]                [HTML]
     */
    public function childMenu($childMenu)
    {
        $html = '';
        if ($childMenu) {
            foreach ($childMenu as $v) {
//                $html .= '<li class="'.active_class(if_uri_pattern(explode(',',$v['active'])),'active').'"><a href="'.url($v['url']).'">'.$v['title'].'</a></li>';
                $html .= '<li class="active"><a href="'.url($v['url']).'">'.$v['title'].'</a></li>';
            }
        }
        return $html;
    }

}