<?php

return [
    'importers' => [
        'products' => [
            'title'      => 'Продукти',
            'validation' => [
                'errors' => [
                    'duplicate-url-key'                        => 'URL ключ: \'%s\' вже створено для товару зі SKU: \'%s\'.',
                    'invalid-attribute-family'                 => 'Недопустиме значення для стовпця сімейства атрибутів (сімейство атрибутів відсутнє?)',
                    'invalid-type'                             => 'Тип продукту недійсний або не підтримується',
                    'sku-not-found'                            => 'Продукт з вказаним SKU не знайдено',
                    'super-attribute-not-found'                => 'Конфігурований атрибут з кодом: \'%s\' не знайдено або не належить сімейству атрибутів: \'%s\'',
                    'configurable-attributes-not-found'        => 'Конфігуровані атрибути потрібні для створення моделі продукту',
                    'configurable-attributes-wrong-type'       => 'Тільки вибрані атрибути типу, які не базуються на місті або каналі, можуть бути конфігурованими атрибутами для конфігурованого продукту',
                    'variant-configurable-attribute-not-found' => 'Потрібний конфігурований атрибут варіанту: :code',
                    'not-unique-variant-product'               => 'Продукт з такими конфігурованими атрибутами вже існує.',
                    'channel-not-exist'                        => 'Цей канал не існує.',
                    'locale-not-in-channel'                    => 'Ця локалізація не вибрана в каналі.',
                    'locale-not-exist'                         => 'Ця локалізація не існує',
                    'not-unique-value'                         => 'Значення :code повинно бути унікальним.',
                    'incorrect-family-for-variant'             => 'Сімейство має бути таким самим, як і основне сімейство',
                    'parent-not-exist'                         => 'Батьківський товар не існує.',
                ],
            ],
        ],
        'categories' => [
            'title'      => 'Категорії',
            'validation' => [
                'errors' => [
                    'channel-related-category-root' => 'Ви не можете видалити кореневу категорію, яка пов\'язана з каналом',
                ],
            ],
        ],
    ],
    'exporters' => [
        'products' => [
            'title'      => 'Продукти',
            'validation' => [
                'errors' => [
                    'duplicate-url-key'         => 'URL ключ: \'%s\' вже створено для товару зі SKU: \'%s\'.',
                    'invalid-attribute-family'  => 'Недопустиме значення для стовпця сімейства атрибутів (сімейство атрибутів відсутнє?)',
                    'invalid-type'              => 'Тип продукту недійсний або не підтримується',
                    'sku-not-found'             => 'Продукт з вказаним SKU не знайдено',
                    'super-attribute-not-found' => 'Конфігурований атрибут з кодом: \'%s\' не знайдено або не належить сімейству атрибутів: \'%s\'',
                ],
            ],
        ],
        'categories' => [
            'title' => 'Категорії',
        ],
    ],
    'validation' => [
        'errors' => [
            'column-empty-headers' => 'Кількість колонок "%s" має пусті заголовки.',
            'column-name-invalid'  => 'Недійсні імена колонок: "%s".',
            'column-not-found'     => 'Вимагані колонки не знайдені: %s.',
            'column-numbers'       => 'Кількість колонок не відповідає кількості рядків у заголовку.',
            'invalid-attribute'    => 'Заголовок містить недійсні атрибути: "%s".',
            'system'               => 'Сталася несподівана система помилка.',
            'wrong-quotes'         => 'Використано криві лапки замість прямих лапок.',
        ],
    ],
    'job' => [
        'started'   => 'Запущено виконання завдання',
        'completed' => 'Завдання виконане',
    ],
];
