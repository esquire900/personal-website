<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simple_form/simple_form.yaml',
    'modified' => 1429732254,
    'data' => [
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
    ]
];
