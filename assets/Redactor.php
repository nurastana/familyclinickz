<?php
/**
 * Created by PhpStorm.
 * User: ivphpan
 * Date: 13.08.15
 * Time: 14:03
 */

namespace app\assets;

class Redactor extends \yii\redactor\widgets\Redactor{

    public function run()
    {
        /*$themeClass = THEME_ASSET;
        $theme = new $themeClass();
        $baseUrl = \Yii::getAlias($theme->baseUrl);
        $content = '<style type="text/css">';
        foreach($theme->css as $k=>$css)
        {
            if(!preg_match('#^(http|https)#',$css))
                $content .= '@import "'.$baseUrl.'/'.$css.'";'."\r\n";
        }
        $content .= '</style>';
        echo $content;*/
        parent::run();
    }

}