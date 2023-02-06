<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2015 (original work) Open Assessment Technologies;
 *
 *
 */

use oat\geogebra\scripts\install\RegisterPciGeogebraIMS;

return array(
    'name' => 'geogebra',
	'label' => 'PCI GeoGebra installer respecting IMS PCI format (1EdTech)',
	'description' => 'PCI GeoGebra installer',
    'license' => 'GPL-2.0',
	'author' => 'Jean-Philippe Rivière',
	'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#geogebraManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#geogebraManager', array('ext'=>'geogebra')),
    ),
    'install' => array(
        'php'	=> array(

            RegisterPciGeogebraIMS::class 
		)
    ),
    'update' => 'oat\\geogebra\\scripts\\update\\Updater',
    'uninstall' => array(
    ),
    'autoload' => array (
        'psr-4' => array(
            'oat\\geogebra\\' => dirname(__FILE__).DIRECTORY_SEPARATOR
        )
    ),
    'routes' => array(
        '/geogebra' => 'oat\\geogebra\\controller'
    ),
	'constants' => array(
	    # views directory
	    "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,

		#BASE URL (usually the domain root)
		'BASE_URL' => ROOT_URL.'geogebra/',
	)
);
