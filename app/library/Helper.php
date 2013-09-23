<?php

class Helper
{
    public static function navItem($title, $url = '/')
    {
        $segments = Request::segments();

        $class = null;

        if ( ! isset($segments[0]))
        {
            if ($url == '/')
            {
                $class = ' class="active"';
            }
        }
        else
        {
            if ($segments[0] == $url)
            {
                $class = ' class="active"';
            }
        }

        $link = link_to($url, $title);

        return '<li' . $class . '>' . $link . '</li>';
    }
}
