<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/jscomments/blueprints.yaml',
    'modified' => 1428606410,
    'data' => [
        'name' => 'JSComments',
        'version' => '1.2.3',
        'description' => 'Add comments in your site with Disqus, IntenseDebate, Facebook, and Muut comment system.',
        'icon' => 'comments-o',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-jscomments',
        'keywords' => 'jscomments, plugin, comments, services, disqus, intensedebate, facebook, muut',
        'bugs' => 'https://github.com/nunopress/grav-plugin-jscomments/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-jscomments/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'provider' => [
                    'type' => 'select',
                    'label' => 'Default provider',
                    'options' => [
                        'disqus' => 'Disqus',
                        'intensedebate' => 'IntenseDebate',
                        'facebook' => 'Facebook',
                        'muut' => 'Muut'
                    ]
                ],
                'providers' => [
                    'type' => 'section',
                    'title' => 'Providers',
                    'text' => 'Providers Settings',
                    'fields' => [
                        'disqus' => [
                            'type' => 'section',
                            'title' => 'Disqus',
                            'fields' => [
                                'providers.disqus.shortname' => [
                                    'type' => 'text',
                                    'label' => 'Shortname'
                                ]
                            ]
                        ],
                        'intensedebate' => [
                            'type' => 'section',
                            'title' => 'IntenseDebate',
                            'fields' => [
                                'providers.intensedebate.acct' => [
                                    'type' => 'text',
                                    'label' => 'ACCT'
                                ]
                            ]
                        ],
                        'facebook' => [
                            'type' => 'section',
                            'title' => 'Facebook',
                            'fields' => [
                                'providers.facebook.appId' => [
                                    'type' => 'text',
                                    'label' => 'appId'
                                ],
                                'providers.facebook.lang' => [
                                    'type' => 'text',
                                    'label' => 'Lang'
                                ],
                                'providers.facebook.numposts' => [
                                    'type' => 'text',
                                    'label' => 'Number of posts',
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'providers.facebook.colorscheme' => [
                                    'type' => 'select',
                                    'label' => 'Color scheme',
                                    'options' => [
                                        'light' => 'Light',
                                        'dark' => 'Dark'
                                    ]
                                ],
                                'providers.facebook.width' => [
                                    'type' => 'text',
                                    'label' => 'Width'
                                ]
                            ]
                        ],
                        'muut' => [
                            'type' => 'section',
                            'title' => 'Muut',
                            'fields' => [
                                'providers.muut.forum' => [
                                    'type' => 'text',
                                    'label' => 'Forum name'
                                ],
                                'providers.muut.channel' => [
                                    'type' => 'text',
                                    'label' => 'Channel'
                                ],
                                'providers.muut.show_online' => [
                                    'type' => 'toggle',
                                    'label' => 'Show online',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'providers.muut.show_title' => [
                                    'type' => 'toggle',
                                    'label' => 'Show title',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'providers.muut.upload' => [
                                    'type' => 'toggle',
                                    'label' => 'Upload',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'providers.muut.share' => [
                                    'type' => 'toggle',
                                    'label' => 'Share',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'providers.muut.widget' => [
                                    'type' => 'toggle',
                                    'label' => 'Widget',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ],
                                'providers.muut.lang' => [
                                    'type' => 'text',
                                    'label' => 'Language'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
