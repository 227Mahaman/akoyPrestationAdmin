<?php

class MenuManager
{

    public $mName;
    public $mSousMenu;
    public $mSousMenuDeSousMenu;

    public function __construct($mName)
    {
        $this->mName = $mName;
    }

    public function getmName()
    {
        return $this->mName;
    }

    public function getmSousMenu()
    {
        return $this->mSousMenu;
    }

    public function getmSousMenuDeSousMenu()
    {
        return $this->mSousMenuDeSousMenu;
    }

    public function getMenu($icon = 'fa-dashboard')
    {
        if ($icon == '') {
            $icon = 'fa-dashboard';
        }
        return '
            <li >
            <a href="javaScript:void();">
            <i class="fa ' . $icon . '"></i><span>' . $this->mName . '</span><i class="feather icon-chevron-right pull-right"></i>
            </a>
            <ul class="vertical-submenu">
                ' . $this->mSousMenu . '
            </ul>
          </li>
        ';
    }

    public function setmSousMenu($mSousMenu = [], $nb ="")
    {
        // if($nb>0){
        //     // <li >
        //     //     <a href="javaScript:void();">
        //     //     <i class=""></i><span>' . $this->mName . '</span><i class="feather icon-chevron-right pull-right"></i>
        //     //     </a>
        //     //     <ul class="vertical-submenu">
        //     //         ' . 
        //     //             ob_start();
        //     //             foreach ($mSousMenu as $key => $value) {
        //     //                 $this->mSousMenu .= '<li><a href="javascript:void()" onclick="getHTML(\'' . $key . '\')">' . $value . '</a></li>';
        //     //             }
        //     //          ob_get_clean()
        //     //          . '
        //     //     </ul>
        //     // </li>
        //     $this->mSousMenu .= '
        //     <li >
        //         <a href="javaScript:void();">
        //         <i class=""></i><span>' . $this->mName . '</span><i class="feather icon-chevron-right pull-right"></i>
        //         </a>
        //         <ul class="vertical-submenu">
        //             ' . 
                       
        //                     $this->mSousMenuDeSousMenu
        //              . '
        //         </ul>
        //     </li>
        //     ';
        //     // foreach ($mSousMenu as $key => $value) {
        //     //     $this->mSousMenu .= '<li><a href="javascript:void()" onclick="getHTML(\'' . $key . '\')">' . $value . '</a></li>';
        //     // }
        // } else {
            foreach ($mSousMenu as $key => $value) {
                $this->mSousMenu .= '<li><a href="javascript:void()" onclick="getHTML(\'' . $key . '\')">' . $value . '</a></li>';
            }
        //}
    }

    public function setmSousMenuDeSousMenu($mSousMenuDeSousMenu = [])
    {
        foreach ($mSousMenuDeSousMenu as $key => $value) {
            $this->mSousMenuDeSousMenu .= '<li><a href="javascript:void()" onclick="getHTML(\'' . $key . '\')">' . $value . '</a></li>';
        }
    }

    public function setmName($mName)
    {
        $this->mName = $mName;
    }
}
