<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Awakenweb\BeverageScss;

use Awakenweb\Beverage\Modules\Module;

/**
 * Description of Scss
 *
 * @author Mathieu
 */
class Less implements Module
{

    const COMPRESSED = 'compressed';
    const LESSJS     = 'lessjs';
    const NORMAL     = 'classic';

    protected $compiler;

    public function __construct($importPath = 'less', $formatter = self::LESSJS)
    {
        $this->compiler = new lessc();
        $this->compiler->setImportDir($importPath);
        $this->compiler->setFormatter($formatter);
    }

    public function process(array $current_state)
    {
        $updated_state = [];

        foreach ($current_state as $filename => $content) {
            $updated_state[str_replace('.less', '.css', $filename)] = $this->compiler->compile($content);
        }

        return $updated_state;
    }

}
