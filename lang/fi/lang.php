<?php

    return [

        'plugin' => [
            'name'              => 'Somejaot',
            'description'       => 'Näytä nappulat sisällön jakamiseksi eri somekanaviin',
            'permissions'       => 'Single Sign-on kirjautuminen ylläpitoon'
        ],

        'settings' => [
            'twitter'     => 'Twitter',
            'facebook'    => 'Facebook',
            'google+'     => 'Google+',
            'stumbleupon' => 'StumbleUpon',
            'linkedin'    => 'LinkedIn',
            'tumblr'      => 'Tumblr',
            'pinterest'   => 'Pinterest',
            'pocket'      => 'Pocket',
            'reddit'      => 'Reddit',
            'wordpress'   => 'WordPress',
            'pinboard'    => 'Pinboard',
            'email'       => 'Email',
        ],

        'components' => [
            'ssbuttons' => [
                'name'        => 'Jaa nykyinen sivu',
                'description' => 'Näytä someikonit jakaaksesi tämä sivu (Bootstrap on pakollinen)',
            ],
            'ssbuttonsnb' => [
                'name'        => 'Jaa nykyinen sivu (Alt)',
                'description' => 'Näytä someikonit jakaaksesi tämä sivu (Bootstrap ei ole pakollinen)'
            ],
            'ssbuttonsssb' => [
                'name'        => 'Yksinkertaiset jakonapit',
                'description' => 'Näytä someikonit jakaaksesi tämä sivu (Monta teemavaihtoehtoa)'
            ]
        ],

        'shared' => [
            'buttons_group' => 'Näytä / piilota napit',
            'order_custom'  => 'Aktivoi oma järjestys',
            'order_customd' => 'Näyttää nappulat haluamassasi järjestyksessä',
            'order_group'   => 'Oma järjestys',
            'order_descr'   => 'Käytä vain numeroita',
            'order_valid'   => 'Järjestys on merkittävä numeroin 1–5',
            'js_title'      => 'Käytä javaskriptia Otsikkoon ja URL-osoitteeseen',
            'js_descr'      => 'Poimi sivuston Otsikko ja URL javaskriptilla. Kätevä SEO-laajennuksille.'
        ]

    ];

?>