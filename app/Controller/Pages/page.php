<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader()
    {
        return View::render("pages/header");
    }

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getFooter()
    {
        return View::render("pages/footer");
    }

    /**
     * Método responsável por retornar o conteúdo da nossa home
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'Title' => $title,
            'Header' => self::getHeader(),
            'Content' => $content,
            'Footer' => self::getFooter()
        ]);
    }

}