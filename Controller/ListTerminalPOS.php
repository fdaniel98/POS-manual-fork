<?php
/**
 * This file is part of POS plugin for FacturaScripts
 * Copyright (C) 2020 Juan José Prieto Dzul <juanjoseprieto88@gmail.com>
 */
namespace FacturaScripts\Plugins\POS\Controller;

use FacturaScripts\Core\Lib\ExtendedController;

/**
 * Controller to list the items in the TerminalPOS model
 *
 * @author Juan José Prieto Dzul <juanjoseprieto88@gmail.com>
 */
class ListTerminalPOS extends ExtendedController\ListController
{

    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $pagedata = parent::getPageData();
        $pagedata['title'] = 'cash-registers';
        $pagedata['icon'] = 'fas fa-cash-register';
        $pagedata['menu'] = 'point-of-sale';

        return $pagedata;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->addView('ListTerminalPOS', 'TerminalPOS', 'cash-registers', 'fas fa-cash-register');
        $this->addSearchFields('ListTerminalPOS', ['nombre']);

        $this->addOrderBy('ListTerminalPOS', ['idterminal'], 'ID');
        $this->addOrderBy('ListTerminalPOS', ['nombre'], 'Nombre');
    }
}
