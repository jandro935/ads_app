<?php

namespace App\Components;

use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Contracts\View\Factory as View;
use Illuminate\Routing\UrlGenerator;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{
    private $config;
    private $view;

    /**
     * HtmlBuilder constructor.
     *
     * @param Config       $config
     * @param View         $view
     * @param UrlGenerator $url
     */
    public function __construct(Config $config, View $view, UrlGenerator $url)
    {
        $this->config = $config;
        $this->view = $view;
        $this->url = $url;
    }

    /**
     * @param array $classes
     *
     * @return string
     */
    public function classes(array $classes)
    {
        $html = '';
        foreach ($classes as $name => $bool) {
            if (is_int($name)) {
                $name = $bool;
                $bool = true;
            }
            if ($bool) {
                $html .= $name.' ';
            }
        }
        if (!empty($html)) {
            return ' class="'.trim($html).'"';
        }

        return '';
    }
}
