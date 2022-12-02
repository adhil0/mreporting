<?php

/**
 * -------------------------------------------------------------------------
 * Mreporting plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Mreporting.
 *
 * Mreporting is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Mreporting is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Mreporting. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2003-2022 by Mreporting plugin team.
 * @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/pluginsGLPI/mreporting
 * -------------------------------------------------------------------------
 */

global $LANG;

$LANG['plugin_mreporting']['Inventory'] = [

   'title' => "Inventory",

   'reportHbarComputersByOS' => [
      'title'    => "Computers per OS",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportPieComputersByOS' => [
      'title'    => "Computers per OS",
      'desc'     => "Camenbert",
      'category' => "OS",
   ],

   'reportHbarComputersByFabricant' => [
      'title'    => "Computers per manufacturer",
      'desc'     => "Bars",
      'category' => "Manufacturer",
   ],

   'reportPieComputersByFabricant' => [
      'title'    => "Computers per manufacturer",
      'desc'     => "Pie",
      'category' => "Manufacturer",
   ],

   'reportHbarComputersByType' => [
      'title'    => "Computers per type",
      'desc'     => "Bars",
      'category' => "Type",
   ],

   'reportPieComputersByType' => [
      'title'    => "Computers per type",
      'desc'     => "Pie",
      'category' => "Type",
   ],

   'reportHbarComputersByStatus' => [
      'title'    => "Computers per status",
      'desc'     => "Bars",
      'category' => "Status",
   ],

   'reportHbarPrintersByStatus' => [
      'title'    => "Printers per status",
      'desc'     => "Bars",
      'category' => "Status",
   ],

   'reportHbarWindows' => [
      'title'    => "Windows distribution",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportHbarLinux' => [
      'title'    => "Linux distribution detail",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportHbarLinuxDistro' => [
      'title'    => "Linux distribution detail",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportHbarMac' => [
      'title'    => "Mac OS X versions details",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportHbarMacFamily' => [
      'title'    => "MAC OS X version overview",
      'desc'     => "Bars",
      'category' => "OS",
   ],

   'reportHbarComputersByAge' => [
      'title'    => "Computer per age",
      'desc'     => "Bars",
      'category' => "Inventory",
   ],

   'reportPieComputersByAge' => [
      'title'    => "Computer per age",
      'desc'     => "Pie",
      'category' => "Inventory",
   ],

   'reportHbarFusionInventory' => [
      'title'    => "FusionInventory agent distribution",
      'desc'     => "Bars",
      'category' => "Agent",
   ],

   'reportPieFusionInventory' => [
      'title'    => "FusionInventory agent distribution",
      'desc'     => "Pie",
      'category' => "Agent",
   ],

   'reportHbarMonitors' => [
      'title'    => "Screens per computer distribution",
      'desc'     => "Bars",
      'category' => "Inventory",
   ],

    'reportHbarComputersByEntity' => [
      'title'    => "Computers per entities",
      'desc'     => "Bars",
      'category' => "Entity",
    ],
    'reportPieTotalComputers' => [
      'title'    => "Computers Total",
      'desc'     => "Pie",
      'category' => "Inventory",
   ],
   'reportLineNbComputer' => [
      'title'    => "Number of computer evolution over the period",
      'desc'     => "Line",
      'category' => "Inventory",
   ],
   'reportAreaNbComputer' => [
      'title'    => "Number of Computer evolution over the period",
      'desc'     => "Area",
      'category' => "Inventory",
   ],
   'reportHbarComputersByLab' => [
      'title'    => "Computers per manufacturer",
      'desc'     => "Bars",
      'category' => "Inventory",
   ],

   'reportPieComputersByLab' => [
      'title'    => "Computers per manufacturer",
      'desc'     => "Pie",
      'category' => "Inventory",
   ],
];
