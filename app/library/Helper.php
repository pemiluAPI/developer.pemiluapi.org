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
        // <li @if(!isset($segments[0]))class="active"@endif><a href="/">Home</a></li>
        // <li @if(isset($segments[0]) && $segments[0] == 'about')class="active"@endif><a href="/about">About</a></li>
    }
}
