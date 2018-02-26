<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    
    //Получение ссылок на картинки превью с YouTube
    if(!empty($arResult['PROPERTIES']['LINK_TO_VIDEO']['VALUE']))
    {
        foreach ($arResult['PROPERTIES']['LINK_TO_VIDEO']['VALUE'] as $key=>$arLinkVideo)
        {
            $arResult['PROPERTIES']['LINK_TO_VIDEO']["PROPS"] = array();
            if(stristr($arLinkVideo,'youtu.be'))
            {
                $iCodeYoutubeVideo = str_replace('/','',strrchr($arLinkVideo,'/'));
            }
            if(stristr($arLinkVideo,'youtube.com'))
            {
                $iCodeYoutubeVideo = str_replace('=','',stristr($arLinkVideo,'='));
            }      
            $arResult['PROPERTIES']['LINK_TO_VIDEO']["PREVIEW_PICTURE"][$key] = !empty($iCodeYoutubeVideo) ? 'http://img.youtube.com/vi/'.$iCodeYoutubeVideo."/sddefault.jpg" : "/YouTube.jpg"; 
        }
    }
   
    
    //Проверка на доступность картинок с сервера YouTube
    if (!empty($arResult['PROPERTIES']['LINK_TO_VIDEO']["PREVIEW_PICTURE"]))
    {
         foreach ($arResult['PROPERTIES']['LINK_TO_VIDEO']["PREVIEW_PICTURE"] as $key=>$prevPic)
            {
                $pic_status = get_headers($prevPic);
                if(strpos($pic_status[0],'200' )) 
                {
                    echo 'tets';
                } 
                else 
                {
                   $arResult['PROPERTIES']['LINK_TO_VIDEO']["PREVIEW_PICTURE"][$key] = str_replace("sddefault", "0", $arResult['PROPERTIES']['LINK_TO_VIDEO']["PREVIEW_PICTURE"][$key]);
                }
            }
    }
                  
   