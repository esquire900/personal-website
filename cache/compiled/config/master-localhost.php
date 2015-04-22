<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'timestamp' => 1429734776,
    'checksum' => '9d4293d1b0543dbbfdce1fed39f230c5',
    'data' => [
        'streams' => [
            'schemes' => [
                'system' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'system'
                        ]
                    ]
                ],
                'user' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user'
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://blueprints',
                            1 => 'system/blueprints'
                        ]
                    ]
                ],
                'config' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://config',
                            1 => 'system/config'
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://plugins'
                        ]
                    ]
                ],
                'themes' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes'
                        ]
                    ]
                ],
                'cache' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'cache'
                        ],
                        'images' => [
                            0 => 'images'
                        ]
                    ]
                ],
                'log' => [
                    'type' => 'Stream',
                    'prefixes' => [
                        '' => [
                            0 => 'logs'
                        ]
                    ]
                ],
                'asset' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'assets'
                    ]
                ],
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'plugins' => [
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => 'F Y',
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'filter_combinator' => 'and',
                'filters' => [
                    'category' => 'blog'
                ]
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => 'My Feed Description',
                'lang' => 'en-us',
                'length' => 500
            ],
            'jscomments' => [
                'enabled' => false,
                'provider' => '',
                'providers' => [
                    'disqus' => [
                        'shortname' => ''
                    ],
                    'intensedebate' => [
                        'acct' => ''
                    ],
                    'facebook' => [
                        'appId' => '',
                        'lang' => 'en_US',
                        'numposts' => 5,
                        'colorscheme' => 'light',
                        'width' => '100%'
                    ],
                    'muut' => [
                        'forum' => '',
                        'channel' => 'General',
                        'show_online' => false,
                        'show_title' => false,
                        'upload' => false,
                        'share' => true,
                        'widget' => false,
                        'lang' => 'en'
                    ]
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'relatedpages' => [
                'enabled' => true,
                'limit' => 5,
                'show_score' => true,
                'score_threshold' => 20,
                'filter' => [
                    'items' => [
                        '@page' => '/blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ]
                ],
                'page_in_filter' => true,
                'explicit_pages' => [
                    'process' => true,
                    'score' => 100
                ],
                'taxonomy_match' => [
                    'taxonomy' => 'tag',
                    'taxonomy_taxonomy' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 50,
                            2 => 75,
                            3 => 100
                        ]
                    ],
                    'taxonomy_content' => [
                        'process' => true,
                        'score_scale' => [
                            1 => 20,
                            2 => 30,
                            3 => 45,
                            4 => 60,
                            5 => 70,
                            6 => 80,
                            7 => 90,
                            8 => 100
                        ]
                    ]
                ],
                'content_match' => [
                    'process' => true
                ]
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and'
            ],
            'simple_form' => [
                'enabled' => true,
                'token' => '',
                'template_file' => 'simple_form',
                'fields' => [
                    'name' => [
                        'type' => 'text',
                        'title' => 'Naam',
                        'default' => '',
                        'placeholder' => 'Uw naam',
                        'class' => '',
                        'required' => true
                    ],
                    'email' => [
                        'type' => 'email',
                        'title' => 'Email',
                        'default' => '',
                        'placeholder' => 'Email adres',
                        'class' => '',
                        'required' => true
                    ],
                    'message' => [
                        'type' => 'textarea',
                        'title' => 'Bericht',
                        'default' => '',
                        'placeholder' => 'Wat is uw vraag?',
                        'class' => '',
                        'required' => true
                    ],
                    'submit' => [
                        'type' => 'submit',
                        'title' => 'Verzenden',
                        'default' => '',
                        'class' => ''
                    ]
                ],
                'messages' => [
                    'success' => 'Uw bericht is succesvol verstuurd!'
                ]
            ],
            'taxonomylist' => [
                'enabled' => true,
                'route' => '/blog'
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ]
        ],
        'site' => [
            'title' => 'SimonNouwens',
            'author' => [
                'name' => 'Simon Nouwens',
                'email' => 'simon@simonnouwens.nl',
                'copyright' => 'Copyright 2015 Simon Nouwens.'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'blog' => [
                'route' => '/blog'
            ],
            'metadata' => [
                'description' => 'Software Freelances and Human Technology Interaction Student'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'routes' => [
                '/something/else' => '/blog/sample-3',
                '/another/one/here' => '/blog/sample-3',
                '/new/*' => '/blog/*'
            ],
            'contact' => [
                'address' => [
                    0 => [
                        'line' => 'Simon Nouwens'
                    ],
                    1 => [
                        'line' => 'Breda, Nederland'
                    ]
                ]
            ],
            'othermenu' => [
                0 => [
                    'text' => 'About',
                    'url' => 'about'
                ],
                1 => [
                    'text' => 'Contact',
                    'url' => 'contact'
                ]
            ],
            'quicklinks' => [
                0 => [
                    'text' => 'Portfolio',
                    'url' => 'portfolio'
                ],
                1 => [
                    'text' => 'About',
                    'url' => 'about'
                ],
                2 => [
                    'text' => 'Contact Us',
                    'url' => 'contact'
                ]
            ],
            'header_options' => [
                'arrows' => 'false',
                'autoslide' => 'false',
                'autoslideHoverStop' => 'false',
                'interval' => '2000',
                'loop' => 'false',
                'transition' => 'zoom',
                'itemsForSlide' => '0',
                'touch' => 'true',
                'swipe' => 'true'
            ],
            'footer' => [
                'description' => 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.',
                'contact_title' => 'Contact Info',
                'links_title' => 'Quick Links',
                'copyright_text' => 'Copyright 2013 Deliver. All Rights Reserved.',
                'feedburner' => ''
            ],
            'social' => [
                0 => [
                    'url' => 'https://twitter.com/simonnouwens',
                    'icon' => 'twitter'
                ],
                1 => [
                    'url' => 'https://www.facebook.com/simon.nouwens',
                    'icon' => 'facebook'
                ],
                2 => [
                    'url' => 'https://github.com/esquire900',
                    'icon' => 'github'
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'param_sep' => ':',
            'home' => [
                'alias' => '/home'
            ],
            'pages' => [
                'theme' => 'deliver',
                'order' => [
                    'by' => 'defaults',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => false,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.1.3.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'twig' => true,
                'shutdown' => [
                    'close_connection' => true
                ]
            ],
            'images' => [
                'default_image_quality' => 85,
                'debug' => false
            ]
        ]
    ]
];
