<?php
/**
 * Part of the Platform Menus extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Menus extension
 * @version    3.0.0
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

	'general' => [

		'create' => [
			'legend'      => 'Vytvořit nový prvek',
			'description' => 'Přidat nový prvek navigace.',
		],

		'update' => [
			'legend'      => 'Upravit prvek',
			'description' => 'Upravit existující prvek navigace.',
		],

        'id'        => '#',
        'id_help'   => 'Unikátní identifikátor.',

		'name'      => 'Název menu',
		'name_help' => 'Napište název menu.',

		'slug'      => 'Slug',
		'slug_help' => 'Jednoslovný strojový identifikátor prvku.',

		'name_item'      => 'Název',
		'name_item_help' => 'Název vašeho prvku navigace.',

		'slug_item'      => 'Slug',
		'slug_item_help' => 'Jednoslovný strojový identifikátor prvku.',

		'enabled'      => 'Status',
		'enabled_help' => 'Stav navigačního prvku',

		'parent'      => 'Rodič',
		'parent_help' => 'Vyberte rodičovský prvek nebo ponechte prázdné, aby nový prvek byl rodičovský.',

		'type'      => 'Typ',
		'type_help' => 'Vyberte typ odkazu.',

		'type_static' => 'Statický',

		'uri'      => 'Uri',
		'uri_help' => 'Napište uri vašeho odkazu.',

		'secure'      => 'HTTPS',
		'secure_help' => 'Měla by tato URL být přes HTTPS protokol?',

		'visibility'      => 'Viditelnost',
		'visibility_help' => 'Upravte viditelnost pro různé situace.',

		'visibilities' => [
			'always'     => 'Zobrazit vždy',
			'logged_in'  => 'Přihlášený uživatel',
			'logged_out' => 'Odhlášený uživatel',
			'admin'      => 'Pouze administrátor',
		],

		'roles'      => 'Role',
		'roles_help' => 'Které uživatelské role by měly vidět tento prvek?',

		'class'      => 'Třída',
		'class_help' => 'CSS třída, která bude přiřazena tomuto prvku.',

		'target'      => 'Cíl',
		'target_help' => 'Vlastnost cíl specifikuje, kde se bude odkaz zobrazovat.',

		'targets' => [
			'self'   => 'Ve stejném okně',
			'blank'  => 'V novém okně',
			'parent' => 'V rodičovském rámu',
			'top'    => 'Vrchní rám (Main Document)',
		],

		'regex'      => 'Regulární výraz',
		'regex_help' => 'Regulární výraz pro pokročilé zvýraznění aktivního navigačního prvku.',

		'created_at' => 'Vytvořeno',

		'items_count' => '# prvků',
		'items'       => '{0} Žádné prvky|{1} 1 prvek|[2,4] :count prvky|[5,Inf] :count prvků',

		'item_details' => 'Detaily',
		'advanced_settings' => 'Pokročilé nastavení',

	],

];
