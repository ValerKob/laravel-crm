<?php

return [
   'acl' => [
        'leads'           => 'Лиды',
        'lead'            => 'Лид',
        'quotes'          => 'Коммерческие предложения',
        'mail'            => 'Почта',
        'inbox'           => 'Входящие',
        'draft'           => 'Черновики',
        'outbox'          => 'Исходящие',
        'sent'            => 'Отправленные',
        'trash'           => 'Корзина',
        'activities'      => 'Активности',
        'webhook'         => 'Вебхуки',
        'contacts'        => 'Контакты',
        'persons'         => 'Лица',
        'organizations'   => 'Организации',
        'products'        => 'Продукты',
        'settings'        => 'Настройки',
        'groups'          => 'Группы',
        'roles'           => 'Роли',
        'users'           => 'Пользователи',
        'user'            => 'Пользователь',
        'automation'      => 'Автоматизация',
        'attributes'      => 'Атрибуты',
        'pipelines'       => 'Воронки продаж',
        'sources'         => 'Источники',
        'types'           => 'Типы',
        'email-templates' => 'Шаблоны писем',
        'workflows'       => 'Сценарии',
        'other-settings'  => 'Прочие настройки',
        'tags'            => 'Теги',
        'configuration'   => 'Конфигурация',
        'create'          => 'Создать',
        'edit'            => 'Редактировать',
        'view'            => 'Просмотр',
        'print'           => 'Печать',
        'delete'          => 'Удалить',
        'export'          => 'Экспорт',
        'mass-delete'     => 'Массовое удаление',
        'data-transfer'   => 'Передача данных',
        'imports'         => 'Импорты',
        'import'          => 'Импорт',
        'event'           => 'Событие',
        'campaigns'       => 'Кампании',
    ],

    'users' => [
        'activate-warning' => 'Ваша учетная запись еще не активирована. Пожалуйста, свяжитесь с администратором.',
        'login-error'      => 'Учетные данные не совпадают с нашими записями.',
        'not-permission'   => 'У вас нет прав доступа к панели администратора.',

        'login' => [
            'email'                => 'Электронная почта',
            'forget-password-link' => 'Забыли пароль?',
            'password'             => 'Пароль',
            'submit-btn'           => 'Войти',
            'title'                => 'Вход',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'Зарегистрированная почта',
                'email-not-exist' => 'Электронная почта не существует',
                'page-title'      => 'Забыли пароль',
                'reset-link-sent' => 'Ссылка для сброса пароля отправлена',
                'sign-in-link'    => 'Вернуться ко входу?',
                'submit-btn'      => 'Сбросить',
                'title'           => 'Восстановление пароля',
            ],
        ],

        'reset-password' => [
            'back-link-title'  => 'Вернуться ко входу?',
            'confirm-password' => 'Подтвердите пароль',
            'email'            => 'Зарегистрированная почта',
            'password'         => 'Пароль',
            'submit-btn'       => 'Сбросить пароль',
            'title'            => 'Сброс пароля',
        ],
    ],


    'account' => [
        'edit' => [
            'back-btn'          => 'Назад',
            'change-password'   => 'Сменить пароль',
            'confirm-password'  => 'Подтвердите пароль',
            'current-password'  => 'Текущий пароль',
            'email'             => 'Электронная почта',
            'general'           => 'Общее',
            'invalid-password'  => 'Введённый текущий пароль неверен.',
            'name'              => 'Имя',
            'password'          => 'Пароль',
            'profile-image'     => 'Изображение профиля',
            'save-btn'          => 'Сохранить аккаунт',
            'title'             => 'Мой аккаунт',
            'update-success'    => 'Аккаунт успешно обновлён',
            'upload-image-info' => 'Загрузите изображение профиля (110px X 110px) в формате PNG или JPG',
        ],
    ],


    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'Письмо',
                    'title'        => 'Написать письмо',
                    'to'           => 'Кому',
                    'enter-emails' => 'Нажмите Enter, чтобы добавить email',
                    'cc'           => 'Копия',
                    'bcc'          => 'Скрытая копия',
                    'subject'      => 'Тема',
                    'send-btn'     => 'Отправить',
                    'message'      => 'Сообщение',
                ],

                'file' => [
                    'btn'           => 'Файл',
                    'title'         => 'Добавить файл',
                    'title-control' => 'Заголовок',
                    'name'          => 'Имя',
                    'description'   => 'Описание',
                    'file'          => 'Файл',
                    'save-btn'      => 'Сохранить файл',
                ],

                'note' => [
                    'btn'      => 'Заметка',
                    'title'    => 'Добавить заметку',
                    'comment'  => 'Комментарий',
                    'save-btn' => 'Сохранить заметку',
                ],

                'activity' => [
                    'btn'           => 'Активность',
                    'title'         => 'Добавить активность',
                    'title-control' => 'Заголовок',
                    'description'   => 'Описание',
                    'schedule-from' => 'Начало',
                    'schedule-to'   => 'Окончание',
                    'location'      => 'Место',
                    'call'          => 'Звонок',
                    'meeting'       => 'Встреча',
                    'lunch'         => 'Обед',
                    'save-btn'      => 'Сохранить активность',

                    'participants' => [
                        'title'       => 'Участники',
                        'placeholder' => 'Введите для поиска участников',
                        'users'       => 'Пользователи',
                        'persons'     => 'Лица',
                        'no-results'  => 'Ничего не найдено...',
                    ],
                ],
            ],


            'index' => [
                'all'          => 'Все',
                'bcc'          => 'Скрытая копия',
                'by-user'      => 'От :user',
                'calls'        => 'Звонки',
                'cc'           => 'Копия',
                'change-log'   => 'История изменений',
                'delete'       => 'Удалить',
                'edit'         => 'Редактировать',
                'emails'       => 'Письма',
                'empty'        => 'Пусто',
                'files'        => 'Файлы',
                'from'         => 'От',
                'location'     => 'Местоположение',
                'lunches'      => 'Обеды',
                'mark-as-done' => 'Отметить как выполненное',
                'meetings'     => 'Встречи',
                'notes'        => 'Заметки',
                'participants' => 'Участники',
                'planned'      => 'Запланировано',
                'quotes'       => 'Предложения',
                'scheduled-on' => 'Запланировано на',
                'system'       => 'Система',
                'to'           => 'Кому',
                'unlink'       => 'Отвязать',
                'view'         => 'Просмотр',

                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Активности не найдены',
                        'description' => 'Для этого элемента не найдено активностей. Вы можете добавить активности, нажав на кнопку в левой панели.',
                    ],

                    'planned' => [
                        'title'       => 'Запланированные активности не найдены',
                        'description' => 'Для этого элемента не найдено запланированных активностей. Вы можете добавить активности, нажав на кнопку в левой панели.',
                    ],

                    'notes' => [
                        'title'       => 'Заметки не найдены',
                        'description' => 'Для этого элемента не найдено заметок. Вы можете добавить заметки, нажав на кнопку в левой панели.',
                    ],

                    'calls' => [
                        'title'       => 'Звонки не найдены',
                        'description' => 'Для этого элемента не найдено звонков. Вы можете добавить звонки, нажав на кнопку в левой панели.',
                    ],

                    'meetings' => [
                        'title'       => 'Встречи не найдены',
                        'description' => 'Для этого элемента не найдено встреч. Вы можете добавить встречи, нажав на кнопку в левой панели.',
                    ],

                    'lunches' => [
                        'title'       => 'Обеды не найдены',
                        'description' => 'Для этого элемента не найдено обедов. Вы можете добавить обеды, нажав на кнопку в левой панели.',
                    ],

                    'files' => [
                        'title'       => 'Файлы не найдены',
                        'description' => 'Для этого элемента не найдено файлов. Вы можете добавить файлы, нажав на кнопку в левой панели.',
                    ],

                    'emails' => [
                        'title'       => 'Письма не найдены',
                        'description' => 'Для этого элемента не найдено писем. Вы можете добавить письмо, нажав на кнопку в левой панели.',
                    ],

                    'system' => [
                        'title'       => 'История изменений не найдена',
                        'description' => 'Для этого элемента не найдено записей об изменениях.',
                    ],
                ],
            ],

        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Добавить изображение',
                'ai-add-image-btn'  => 'Магия ИИ',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Разрешены только файлы изображений (.jpeg, .jpg, .png и т.д.).',

                'placeholders' => [
                    'front'     => 'Передняя сторона',
                    'next'      => 'Следующее',
                    'size'      => 'Размер',
                    'use-cases' => 'Сценарии использования',
                    'zoom'      => 'Увеличение',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Добавить видео',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Разрешены только видеофайлы (.mp4, .mov, .ogg и т.д.).',
            ],
        ],


        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Не выбрано ни одной записи.',
                'must-select-a-mass-action-option' => 'Необходимо выбрать вариант массового действия.',
                'must-select-a-mass-action'        => 'Необходимо выбрать массовое действие.',
            ],

            'toolbar' => [
                'length-of' => ':length из',
                'of'        => 'из',
                'per-page'  => 'На странице',
                'results'   => ':total результатов',
                'delete'    => 'Удалить',
                'selected'  => 'Выбрано элементов: :total',

                'mass-actions' => [
                    'submit'        => 'Применить',
                    'select-option' => 'Выберите вариант',
                    'select-action' => 'Выберите действие',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Применить фильтры',
                    'back-btn'          => 'Назад',
                    'create-new-filter' => 'Создать новый фильтр',
                    'custom-filters'    => 'Пользовательские фильтры',
                    'delete-error'      => 'Произошла ошибка при удалении фильтра, пожалуйста, попробуйте ещё раз.',
                    'delete-success'    => 'Фильтр успешно удалён.',
                    'empty-description' => 'Нет выбранных фильтров для сохранения. Пожалуйста, выберите фильтры для сохранения.',
                    'empty-title'       => 'Добавьте фильтры для сохранения',
                    'name'              => 'Название',
                    'quick-filters'     => 'Быстрые фильтры',
                    'save-btn'          => 'Сохранить',
                    'save-filter'       => 'Сохранить фильтр',
                    'saved-success'     => 'Фильтр успешно сохранён.',
                    'selected-filters'  => 'Выбранные фильтры',
                    'title'             => 'Фильтр',
                    'update'            => 'Обновить',
                    'update-filter'     => 'Обновить фильтр',
                    'updated-success'   => 'Фильтр успешно обновлён.',
                ],

                'search' => [
                    'title' => 'Поиск',
                ],
            ],

            'filters' => [
                'select' => 'Выбрать',
                'title'  => 'Фильтры',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Введите не менее 2 символов...',
                        'no-results'         => 'Ничего не найдено...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Очистить всё',
                    'title'     => 'Пользовательские фильтры',
                ],

                'boolean-options' => [
                    'false' => 'Нет',
                    'true'  => 'Да',
                ],

                'date-options' => [
                    'last-month'        => 'Прошлый месяц',
                    'last-six-months'   => 'Последние 6 месяцев',
                    'last-three-months' => 'Последние 3 месяца',
                    'this-month'        => 'Этот месяц',
                    'this-week'         => 'Эта неделя',
                    'this-year'         => 'Этот год',
                    'today'             => 'Сегодня',
                    'yesterday'         => 'Вчера',
                ],
            ],

            'table' => [
                'actions'              => 'Действия',
                'no-records-available' => 'Нет доступных записей.',
            ],
        ],


       'modal' => [
            'confirm' => [
                'agree-btn'    => 'Согласиться',
                'disagree-btn' => 'Отказаться',
                'message'      => 'Вы уверены, что хотите выполнить это действие?',
                'title'        => 'Вы уверены?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Теги',
                'added-tags'     => 'Добавленные теги',
                'save-btn'       => 'Сохранить тег',
                'placeholder'    => 'Введите для поиска тегов',
                'add-tag'        => 'Добавить «:term»...',
                'aquarelle-red'  => 'Акварельный красный',
                'crushed-cashew' => 'Дроблёный кешью',
                'beeswax'        => 'Пчелиный воск',
                'lemon-chiffon'  => 'Лимонный шифон',
                'snow-flurry'    => 'Снежный вихрь',
                'honeydew'       => 'Медовая роса',
            ],
        ],


        'layouts' => [
            'powered-by' => [
                'description' => 'Проект Бизнес Поток -  С исходным кодом',
            ],

            'header' => [
                'mega-search' => [
                    'title' => 'Мега-поиск',

                    'tabs' => [
                        'leads'    => 'Лиды',
                        'quotes'   => 'Коммерческие предложения',
                        'persons'  => 'Контакты',
                        'products' => 'Продукты',
                    ],

                    'explore-all-products'          => 'Просмотреть все продукты',
                    'explore-all-leads'             => 'Просмотреть все лиды',
                    'explore-all-contacts'          => 'Просмотреть все контакты',
                    'explore-all-quotes'            => 'Просмотреть все предложения',
                    'explore-all-matching-products' => 'Просмотреть все продукты, соответствующие «:query» (:count)',
                    'explore-all-matching-leads'    => 'Просмотреть все лиды, соответствующие «:query» (:count)',
                    'explore-all-matching-contacts' => 'Просмотреть все контакты, соответствующие «:query» (:count)',
                    'explore-all-matching-quotes'   => 'Просмотреть все предложения, соответствующие «:query» (:count)',
                ],
            ],
        ],


        'attributes' => [
            'edit' => [
                'delete' => 'Удалить',
            ],

            'lookup' => [
                'click-to-add'    => 'Нажмите, чтобы добавить',
                'search'          => 'Поиск...',
                'no-result-found' => 'Результаты не найдены',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Нажмите, чтобы добавить',
            'no-results'   => 'Результаты не найдены',
            'add-as-new'   => 'Добавить как новый',
            'search'       => 'Поиск...',
        ],

        'flash-group' => [
            'success' => 'Успешно',
            'error'   => 'Ошибка',
            'warning' => 'Предупреждение',
            'info'    => 'Информация',
        ],

        'tiny-mce' => [
            'http-error'    => 'Ошибка HTTP',
            'invalid-json'  => 'Сервер вернул некорректный JSON.',
            'upload-failed' => 'Не удалось загрузить файл. Пожалуйста, попробуйте снова.',
        ],

    ],

    'quotes' => [
        'index' => [
            'title'          => 'Квоты',
            'create-btn'     => 'Создать квоту',
            'create-success' => 'Квота успешно создана.',
            'update-success' => 'Квота успешно обновлена.',
            'delete-success' => 'Квота успешно удалена.',
            'delete-failed'  => 'Квота не может быть удалена.',

            'datagrid' => [
                'subject'        => 'Тема',
                'sales-person'   => 'Менеджер по продажам',
                'expired-at'     => 'Истекает',
                'created-at'     => 'Создана',
                'expired-quotes' => 'Истекшая квота',
                'person'         => 'Контакт',
                'subtotal'       => 'Промежуточный итог',
                'discount'       => 'Скидка',
                'tax'            => 'Налог',
                'adjustment'     => 'Корректировка',
                'grand-total'    => 'Итого',
                'edit'           => 'Редактировать',
                'delete'         => 'Удалить',
                'print'          => 'Печать',
            ],

            'pdf' => [
                'adjustment'       => 'Корректировка',
                'amount'           => 'Сумма',
                'billing-address'  => 'Платёжный адрес',
                'date'             => 'Дата',
                'discount'         => 'Скидка',
                'expired-at'       => 'Истекает',
                'grand-total'      => 'Итого',
                'person'           => 'Контакт',
                'price'            => 'Цена',
                'product-name'     => 'Название продукта',
                'quantity'         => 'Количество',
                'quote-id'         => 'ID квоты',
                'sales-person'     => 'Менеджер по продажам',
                'shipping-address' => 'Адрес доставки',
                'sku'              => 'Артикул',
                'sub-total'        => 'Промежуточный итог',
                'subject'          => 'Тема',
                'tax'              => 'Налог',
                'title'            => 'Квота',
            ],
        ],

        'create' => [
            'title'             => 'Создать квоту',
            'save-btn'          => 'Сохранить квоту',
            'quote-info'        => 'Информация о квоте',
            'quote-info-info'   => 'Введите основную информацию о квоте.',
            'address-info'      => 'Информация об адресе',
            'address-info-info' => 'Информация об адресе, связанная с квотой.',
            'quote-items'       => 'Элементы квоты',
            'search-products'   => 'Поиск продуктов',
            'link-to-lead'      => 'Связать с лидом',
            'quote-item-info'   => 'Добавьте продукт для этой квоты.',
            'quote-name'        => 'Название квоты',
            'quantity'          => 'Количество',
            'price'             => 'Цена',
            'discount'          => 'Скидка',
            'tax'               => 'Налог',
            'total'             => 'Итого',
            'amount'            => 'Сумма',
            'add-item'          => '+ Добавить элемент',
            'sub-total'         => 'Промежуточный итог (:symbol)',
            'total-discount'    => 'Скидка (:symbol)',
            'total-tax'         => 'Налог (:symbol)',
            'total-adjustment'  => 'Корректировка (:symbol)',
            'grand-total'       => 'Итого (:symbol)',
            'discount-amount'   => 'Сумма скидки',
            'tax-amount'        => 'Сумма налога',
            'adjustment-amount' => 'Сумма корректировки',
            'product-name'      => 'Название продукта',
            'action'            => 'Действие',
        ],

        'edit' => [
            'title'             => 'Редактировать квоту',
            'save-btn'          => 'Сохранить квоту',
            'quote-info'        => 'Информация о квоте',
            'quote-info-info'   => 'Введите основную информацию о квоте.',
            'address-info'      => 'Информация об адресе',
            'address-info-info' => 'Информация об адресе, связанная с квотой.',
            'quote-items'       => 'Элементы квоты',
            'link-to-lead'      => 'Связать с лидом',
            'quote-item-info'   => 'Добавьте продукт для этой квоты.',
            'quote-name'        => 'Название квоты',
            'quantity'          => 'Количество',
            'price'             => 'Цена',
            'search-products'   => 'Поиск продуктов',
            'discount'          => 'Скидка',
            'tax'               => 'Налог',
            'total'             => 'Итого',
            'amount'            => 'Сумма',
            'add-item'          => '+ Добавить элемент',
            'sub-total'         => 'Промежуточный итог (:symbol)',
            'total-discount'    => 'Скидка (:symbol)',
            'total-tax'         => 'Налог (:symbol)',
            'total-adjustment'  => 'Корректировка (:symbol)',
            'grand-total'       => 'Итого (:symbol)',
            'discount-amount'   => 'Сумма скидки',
            'tax-amount'        => 'Сумма налога',
            'adjustment-amount' => 'Сумма корректировки',
            'product-name'      => 'Название продукта',
            'action'            => 'Действие',
        ],
    ],


    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Контакты',
                'create-btn'     => 'Создать контакт',
                'create-success' => 'Контакт успешно создан.',
                'update-success' => 'Контакт успешно обновлён.',
                'delete-success' => 'Контакт успешно удалён.',
                'delete-failed'  => 'Контакт не может быть удалён.',

                'datagrid' => [
                    'contact-numbers'   => 'Контактные номера',
                    'delete'            => 'Удалить',
                    'edit'              => 'Редактировать',
                    'emails'            => 'Электронные адреса',
                    'id'                => 'ID',
                    'view'              => 'Просмотр',
                    'name'              => 'Имя',
                    'organization-name' => 'Название организации',
                ],
            ],

            'view' => [
                'title'              => ':name',
                'about-person'       => 'О человеке',
                'about-organization' => 'Об организации',

                'activities' => [
                    'index' => [
                        'all'          => 'Все',
                        'calls'        => 'Звонки',
                        'meetings'     => 'Встречи',
                        'lunches'      => 'Обеды',
                        'files'        => 'Файлы',
                        'quotes'       => 'Квоты',
                        'notes'        => 'Заметки',
                        'emails'       => 'Электронные письма',
                        'by-user'      => 'Пользователь: :user',
                        'scheduled-on' => 'Запланировано на',
                        'location'     => 'Место',
                        'participants' => 'Участники',
                        'mark-as-done' => 'Отметить как выполненное',
                        'delete'       => 'Удалить',
                        'edit'         => 'Редактировать',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'Почта',
                            'title'    => 'Написать письмо',
                            'to'       => 'Кому',
                            'cc'       => 'Копия',
                            'bcc'      => 'Скрытая копия',
                            'subject'  => 'Тема',
                            'send-btn' => 'Отправить',
                            'message'  => 'Сообщение',
                        ],

                        'file' => [
                            'btn'           => 'Файл',
                            'title'         => 'Добавить файл',
                            'title-control' => 'Название',
                            'name'          => 'Имя файла',
                            'description'   => 'Описание',
                            'file'          => 'Файл',
                            'save-btn'      => 'Сохранить файл',
                        ],

                        'note' => [
                            'btn'      => 'Заметка',
                            'title'    => 'Добавить заметку',
                            'comment'  => 'Комментарий',
                            'save-btn' => 'Сохранить заметку',
                        ],

                        'activity' => [
                            'btn'           => 'Активность',
                            'title'         => 'Добавить активность',
                            'title-control' => 'Название',
                            'description'   => 'Описание',
                            'schedule-from' => 'Начало',
                            'schedule-to'   => 'Окончание',
                            'location'      => 'Место',
                            'call'          => 'Звонок',
                            'meeting'       => 'Встреча',
                            'lunch'         => 'Обед',
                            'save-btn'      => 'Сохранить активность',
                        ],
                    ],
                ],

                'tags' => [
                    'create-success'  => 'Тег успешно создан.',
                    'destroy-success' => 'Тег успешно удалён.',
                ],
            ],

            'create' => [
                'title'    => 'Создать человека',
                'save-btn' => 'Сохранить человека',
            ],

            'edit' => [
                'title'    => 'Редактировать человека',
                'save-btn' => 'Сохранить человека',
            ],

        ],

       'organizations' => [
            'index' => [
                'title'          => 'Организации',
                'create-btn'     => 'Создать организацию',
                'create-success' => 'Организация успешно создана.',
                'update-success' => 'Организация успешно обновлена.',
                'delete-success' => 'Организация успешно удалена.',
                'delete-failed'  => 'Организация не может быть удалена.',

                'datagrid' => [
                    'delete'        => 'Удалить',
                    'edit'          => 'Редактировать',
                    'id'            => 'ID',
                    'name'          => 'Название',
                    'persons-count' => 'Количество людей',
                ],
            ],

            'create' => [
                'title'    => 'Создать организацию',
                'save-btn' => 'Сохранить организацию',
            ],

            'edit' => [
                'title'    => 'Редактировать организацию',
                'save-btn' => 'Сохранить организацию',
            ],
        ],
    ],

   'products' => [
        'index' => [
            'title'          => 'Продукты',
            'create-btn'     => 'Создать продукт',
            'create-success' => 'Продукт успешно создан.',
            'update-success' => 'Продукт успешно обновлён.',
            'delete-success' => 'Продукт успешно удалён.',
            'delete-failed'  => 'Продукт не может быть удалён.',

            'datagrid' => [
                'allocated' => 'Выделено',
                'delete'    => 'Удалить',
                'edit'      => 'Редактировать',
                'id'        => 'ID',
                'in-stock'  => 'В наличии',
                'name'      => 'Название',
                'on-hand'   => 'В наличии (на руках)',
                'price'     => 'Цена',
                'sku'       => 'Артикул (SKU)',
                'view'      => 'Просмотр',
            ],
        ],

        'create' => [
            'save-btn' => 'Сохранить продукт',
            'title'    => 'Создать продукт',
            'general'  => 'Общее',
            'price'    => 'Цена',
        ],

        'edit' => [
            'title'    => 'Редактировать продукт',
            'save-btn' => 'Сохранить продукт',
            'general'  => 'Общее',
            'price'    => 'Цена',
        ],

        'view' => [
            'sku'         => 'Артикул (SKU)',
            'all'         => 'Все',
            'notes'       => 'Заметки',
            'files'       => 'Файлы',
            'inventories' => 'Инвентарь',
            'change-logs' => 'Журнал изменений',

            'attributes' => [
                'about-product' => 'О продукте',
            ],

            'inventory' => [
                'source'     => 'Источник',
                'in-stock'   => 'В наличии',
                'allocated'  => 'Выделено',
                'on-hand'    => 'В наличии (на руках)',
                'actions'    => 'Действия',
                'assign'     => 'Назначить',
                'add-source' => 'Добавить источник',
                'location'   => 'Местоположение',
                'add-more'   => 'Добавить ещё',
                'save'       => 'Сохранить',
            ],
        ],
    ],


    'settings' => [
        'title' => 'Настройки',

        'groups' => [
            'index' => [
                'create-btn'        => 'Создать группу',
                'title'             => 'Группы',
                'create-success'    => 'Группа успешно создана.',
                'update-success'    => 'Группа успешно обновлена.',
                'destroy-success'   => 'Группа успешно удалена.',
                'delete-failed'     => 'Группа не может быть удалена.',

                'datagrid' => [
                    'delete'      => 'Удалить',
                    'description' => 'Описание',
                    'edit'        => 'Редактировать',
                    'id'          => 'ID',
                    'name'        => 'Название',
                ],

                'edit' => [
                    'title' => 'Редактировать группу',
                ],

                'create' => [
                    'name'        => 'Название',
                    'title'       => 'Создать группу',
                    'description' => 'Описание',
                    'save-btn'    => 'Сохранить группу',
                ],
            ],
        ],


        'roles' => [
            'index' => [
                'being-used'                => 'Роль не может быть удалена, так как она используется в учетной записи администратора.',
                'create-btn'                => 'Создать роль',
                'create-success'            => 'Роль успешно создана.',
                'current-role-delete-error' => 'Невозможно удалить роль, назначенную текущему пользователю.',
                'delete-failed'             => 'Роль не может быть удалена.',
                'delete-success'            => 'Роль успешно удалена.',
                'last-delete-error'         => 'Требуется минимум одна роль.',
                'settings'                  => 'Настройки',
                'title'                     => 'Роли',
                'update-success'            => 'Роль успешно обновлена.',
                'user-define-error'         => 'Невозможно удалить системную роль.',

                'datagrid' => [
                    'all'             => 'Все',
                    'custom'          => 'Пользовательская',
                    'delete'          => 'Удалить',
                    'description'     => 'Описание',
                    'edit'            => 'Редактировать',
                    'id'              => 'ID',
                    'name'            => 'Название',
                    'permission-type' => 'Тип разрешений',
                ],
            ],

            'create' => [
                'access-control' => 'Управление доступом',
                'all'            => 'Все',
                'back-btn'       => 'Назад',
                'custom'         => 'Пользовательский',
                'description'    => 'Описание',
                'general'        => 'Общее',
                'name'           => 'Название',
                'permissions'    => 'Разрешения',
                'save-btn'       => 'Сохранить роль',
                'title'          => 'Создать роль',
            ],

            'edit' => [
                'access-control' => 'Управление доступом',
                'all'            => 'Все',
                'back-btn'       => 'Назад',
                'custom'         => 'Пользовательский',
                'description'    => 'Описание',
                'general'        => 'Общее',
                'name'           => 'Название',
                'permissions'    => 'Разрешения',
                'save-btn'       => 'Сохранить роль',
                'title'          => 'Редактировать роль',
            ],
        ],


       'types' => [
            'index' => [
                'create-btn'     => 'Создать тип',
                'create-success' => 'Тип успешно создан.',
                'delete-failed'  => 'Тип не может быть удалён.',
                'delete-success' => 'Тип успешно удалён.',
                'title'          => 'Типы',
                'update-success' => 'Тип успешно обновлён.',

                'datagrid' => [
                    'delete'      => 'Удалить',
                    'description' => 'Описание',
                    'edit'        => 'Редактировать',
                    'id'          => 'ID',
                    'name'        => 'Название',
                ],

                'create' => [
                    'name'     => 'Название',
                    'save-btn' => 'Сохранить тип',
                    'title'    => 'Создать тип',
                ],

                'edit' => [
                    'title' => 'Редактировать тип',
                ],
            ],
        ],


       'sources' => [
            'index' => [
                'create-btn'     => 'Создать источник',
                'create-success' => 'Источник успешно создан.',
                'delete-failed'  => 'Источник не может быть удалён.',
                'delete-success' => 'Источник успешно удалён.',
                'title'          => 'Источники',
                'update-success' => 'Источник успешно обновлён.',

                'datagrid' => [
                    'delete' => 'Удалить',
                    'edit'   => 'Редактировать',
                    'id'     => 'ID',
                    'name'   => 'Название',
                ],

                'create' => [
                    'name'     => 'Название',
                    'save-btn' => 'Сохранить источник',
                    'title'    => 'Создать источник',
                ],

                'edit' => [
                    'title' => 'Редактировать источник',
                ],
            ],
        ],


        'workflows' => [
            'index' => [
                'title'          => 'Рабочие процессы',
                'create-btn'     => 'Создать рабочий процесс',
                'create-success' => 'Рабочий процесс успешно создан.',
                'update-success' => 'Рабочий процесс успешно обновлён.',
                'delete-success' => 'Рабочий процесс успешно удалён.',
                'delete-failed'  => 'Рабочий процесс не может быть удалён.',
                'datagrid'       => [
                    'delete'      => 'Удалить',
                    'description' => 'Описание',
                    'edit'        => 'Редактировать',
                    'id'          => 'ID',
                    'name'        => 'Название',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'Обновить связанные лиды',
                'send-email-to-sales-owner'  => 'Отправить письмо владельцу продаж',
                'send-email-to-participants' => 'Отправить письмо участникам',
                'add-webhook'                => 'Добавить вебхук',
                'update-lead'                => 'Обновить лид',
                'update-person'              => 'Обновить персону',
                'send-email-to-person'       => 'Отправить письмо персоне',
                'add-tag'                    => 'Добавить тег',
                'add-note-as-activity'       => 'Добавить заметку как активность',
                'update-quote'               => 'Обновить коммерческое предложение',
            ],

            'create' => [
                'title'                  => 'Создать рабочий процесс',
                'event'                  => 'Событие',
                'back-btn'               => 'Назад',
                'save-btn'               => 'Сохранить рабочий процесс',
                'name'                   => 'Название',
                'basic-details'          => 'Основные данные',
                'description'            => 'Описание',
                'actions'                => 'Действия',
                'basic-details-info'     => 'Введите основную информацию о рабочем процессе.',
                'event-info'             => 'Событие запускает, проверяет условия и выполняет заданные действия.',
                'conditions'             => 'Условия',
                'conditions-info'        => 'Условия — это правила, проверяющие сценарии и запускаемые при определённых событиях.',
                'actions-info'           => 'Действия уменьшают нагрузку и упрощают автоматизацию CRM.',
                'value'                  => 'Значение',
                'condition-type'         => 'Тип условия',
                'all-condition-are-true' => 'Все условия истинны',
                'any-condition-are-true' => 'Любое из условий истинно',
                'add-condition'          => 'Добавить условие',
                'add-action'             => 'Добавить действие',
                'yes'                    => 'Да',
                'no'                     => 'Нет',
                'email'                  => 'Электронная почта',
                'is-equal-to'            => 'Равно',
                'is-not-equal-to'        => 'Не равно',
                'equals-or-greater-than' => 'Равно или больше',
                'equals-or-less-than'    => 'Равно или меньше',
                'greater-than'           => 'Больше чем',
                'less-than'              => 'Меньше чем',
                'type'                   => 'Тип',
                'contain'                => 'Содержит',
                'contains'               => 'Содержит',
                'does-not-contain'       => 'Не содержит',
            ],

            'edit' => [
                'title'                  => 'Редактировать рабочий процесс',
                'event'                  => 'Событие',
                'back-btn'               => 'Назад',
                'save-btn'               => 'Сохранить рабочий процесс',
                'name'                   => 'Название',
                'basic-details'          => 'Основные данные',
                'description'            => 'Описание',
                'actions'                => 'Действия',
                'type'                   => 'Тип',
                'basic-details-info'     => 'Введите основную информацию о рабочем процессе.',
                'event-info'             => 'Событие запускает, проверяет условия и выполняет заданные действия.',
                'conditions'             => 'Условия',
                'conditions-info'        => 'Условия — это правила, проверяющие сценарии и запускаемые при определённых событиях.',
                'actions-info'           => 'Действия уменьшают нагрузку и упрощают автоматизацию CRM.',
                'value'                  => 'Значение',
                'condition-type'         => 'Тип условия',
                'all-condition-are-true' => 'Все условия истинны',
                'any-condition-are-true' => 'Любое из условий истинно',
                'add-condition'          => 'Добавить условие',
                'add-action'             => 'Добавить действие',
                'yes'                    => 'Да',
                'no'                     => 'Нет',
                'email'                  => 'Электронная почта',
                'is-equal-to'            => 'Равно',
                'is-not-equal-to'        => 'Не равно',
                'equals-or-greater-than' => 'Равно или больше',
                'equals-or-less-than'    => 'Равно или меньше',
                'greater-than'           => 'Больше чем',
                'less-than'              => 'Меньше чем',
                'contain'                => 'Содержит',
                'contains'               => 'Содержит',
                'does-not-contain'       => 'Не содержит',
            ],
        ],


        'webforms' => [
            'index' => [
                'title'          => 'Веб-формы',
                'create-btn'     => 'Создать веб-форму',
                'create-success' => 'Веб-форма успешно создана.',
                'update-success' => 'Веб-форма успешно обновлена.',
                'delete-success' => 'Веб-форма успешно удалена.',
                'delete-failed'  => 'Веб-форма не может быть удалена.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Название',
                    'edit'   => 'Редактировать',
                    'delete' => 'Удалить',
                ],
            ],

            'create' => [
                'title'                    => 'Создать веб-форму',
                'add-attribute-btn'        => 'Добавить кнопку атрибута',
                'attribute-label-color'    => 'Цвет метки атрибута',
                'attributes'               => 'Атрибуты',
                'attributes-info'          => 'Добавьте пользовательские атрибуты в форму.',
                'background-color'         => 'Цвет фона',
                'create-lead'              => 'Создать лид',
                'customize-webform'        => 'Настроить веб-форму',
                'customize-webform-info'   => 'Настройте веб-форму, выбрав цвета элементов.',
                'description'              => 'Описание',
                'display-custom-message'   => 'Показать пользовательское сообщение',
                'form-background-color'    => 'Цвет фона формы',
                'form-submit-btn-color'    => 'Цвет кнопки отправки формы',
                'form-submit-button-color' => 'Цвет кнопки отправки формы',
                'form-title-color'         => 'Цвет заголовка формы',
                'general'                  => 'Общее',
                'leads'                    => 'Лиды',
                'person'                   => 'Персона',
                'save-btn'                 => 'Сохранить веб-форму',
                'submit-button-label'      => 'Текст кнопки отправки',
                'submit-success-action'    => 'Действие после успешной отправки',
                'redirect-to-url'          => 'Перенаправить на URL',
                'choose-value'             => 'Выбрать значение',
                'select-file'              => 'Выбрать файл',
                'select-image'             => 'Выбрать изображение',
                'enter-value'              => 'Введите значение',
            ],

            'edit' => [
                'add-attribute-btn'         => 'Добавить кнопку атрибута',
                'attribute-label-color'     => 'Цвет метки атрибута',
                'attributes'                => 'Атрибуты',
                'attributes-info'           => 'Добавьте пользовательские атрибуты в форму.',
                'background-color'          => 'Цвет фона',
                'choose-value'              => 'Выбрать значение',
                'code-snippet'              => 'Код для вставки',
                'copied'                    => 'Скопировано',
                'copy'                      => 'Копировать',
                'create-lead'               => 'Создать лид',
                'customize-webform'         => 'Настроить веб-форму',
                'customize-webform-info'    => 'Настройте веб-форму, выбрав цвета элементов.',
                'description'               => 'Описание',
                'display-custom-message'    => 'Показать пользовательское сообщение',
                'embed'                     => 'Встроить',
                'enter-value'               => 'Введите значение',
                'form-background-color'     => 'Цвет фона формы',
                'form-submit-btn-color'     => 'Цвет кнопки отправки формы',
                'form-submit-button-color'  => 'Цвет кнопки отправки формы',
                'form-title-color'          => 'Цвет заголовка формы',
                'general'                   => 'Общее',
                'leads'                     => 'Лиды',
                'person'                    => 'Персона',
                'preview'                   => 'Предпросмотр',
                'public-url'                => 'Публичный URL',
                'redirect-to-url'           => 'Перенаправить на URL',
                'save-btn'                  => 'Сохранить веб-форму',
                'select-file'               => 'Выбрать файл',
                'select-image'              => 'Выбрать изображение',
                'submit-button-label'       => 'Текст кнопки отправки',
                'submit-success-action'     => 'Действие после успешной отправки',
                'title'                     => 'Редактировать веб-форму',
            ],
        ],


        'email-template' => [
            'index' => [
                'create-btn'     => 'Создать шаблон письма',
                'title'          => 'Шаблоны писем',
                'create-success' => 'Шаблон письма успешно создан.',
                'update-success' => 'Шаблон письма успешно обновлён.',
                'delete-success' => 'Шаблон письма успешно удалён.',
                'delete-failed'  => 'Шаблон письма не может быть удалён.',

                'datagrid'   => [
                    'delete'       => 'Удалить',
                    'edit'         => 'Редактировать',
                    'id'           => 'ID',
                    'name'         => 'Название',
                    'subject'      => 'Тема',
                ],
            ],

            'create'     => [
                'title'                => 'Создать шаблон письма',
                'save-btn'             => 'Сохранить шаблон письма',
                'email-template'       => 'Шаблон письма',
                'subject'              => 'Тема',
                'content'              => 'Содержание',
                'subject-placeholders' => 'Плейсхолдеры темы',
                'general'              => 'Общее',
                'name'                 => 'Название',
            ],

            'edit' => [
                'title'                => 'Редактировать шаблон письма',
                'save-btn'             => 'Сохранить шаблон письма',
                'email-template'       => 'Шаблон письма',
                'subject'              => 'Тема',
                'content'              => 'Содержание',
                'subject-placeholders' => 'Плейсхолдеры темы',
                'general'              => 'Общее',
                'name'                 => 'Название',
            ],
        ],


       'marketing' => [
            'events' => [
                'index' => [
                    'create-btn'          => 'Создать событие',
                    'title'               => 'События',
                    'create-success'      => 'Событие успешно создано.',
                    'update-success'      => 'Событие успешно обновлено.',
                    'delete-success'      => 'Событие успешно удалено.',
                    'delete-failed'       => 'Событие не может быть удалено.',
                    'mass-delete-success' => 'События успешно удалены.',

                    'datagrid'   => [
                        'delete'       => 'Удалить',
                        'edit'         => 'Редактировать',
                        'id'           => 'ID',
                        'name'         => 'Название',
                        'description'  => 'Описание',
                        'date'         => 'Дата',
                    ],

                    'create'     => [
                        'title'       => 'Создать событие',
                        'name'        => 'Название',
                        'date'        => 'Дата',
                        'description' => 'Описание',
                        'save-btn'    => 'Сохранить событие',
                    ],

                    'edit' => [
                        'title' => 'Редактировать событие',
                    ],
                ],
            ],

            'campaigns' => [
                'index' => [
                    'create-btn'          => 'Создать кампанию',
                    'title'               => 'Кампании',
                    'create-success'      => 'Кампания успешно создана.',
                    'update-success'      => 'Кампания успешно обновлена.',
                    'delete-success'      => 'Кампания успешно удалена.',
                    'delete-failed'       => 'Кампания не может быть удалена.',
                    'mass-delete-success' => 'Кампании успешно удалены.',

                    'datagrid'   => [
                        'id'       => 'ID',
                        'name'     => 'Название',
                        'subject'  => 'Тема',
                        'status'   => 'Статус',
                        'active'   => 'Активна',
                        'inactive' => 'Неактивна',
                        'edit'     => 'Редактировать',
                        'delete'   => 'Удалить',
                    ],

                    'create'     => [
                        'title'          => 'Создать кампанию',
                        'name'           => 'Название',
                        'type'           => 'Тип',
                        'subject'        => 'Тема',
                        'event'          => 'Событие',
                        'email-template' => 'Шаблон письма',
                        'status'         => 'Статус',
                    ],

                    'edit' => [
                        'title' => 'Редактировать кампанию',
                    ],
                ],
            ],
        ],


       'tags' => [
            'index' => [
                'create-btn'     => 'Создать тег',
                'title'          => 'Теги',
                'create-success' => 'Тег успешно создан.',
                'update-success' => 'Тег успешно обновлён.',
                'delete-success' => 'Тег успешно удалён.',
                'delete-failed'  => 'Тег не может быть удалён.',

                'datagrid' => [
                    'delete'      => 'Удалить',
                    'edit'        => 'Редактировать',
                    'id'          => 'ID',
                    'name'        => 'Название',
                    'users'       => 'Пользователи',
                    'created-at'  => 'Дата создания',
                ],

                'create' => [
                    'name'     => 'Название',
                    'save-btn' => 'Сохранить тег',
                    'title'    => 'Создать тег',
                    'color'    => 'Цвет',
                ],

                'edit' => [
                    'title' => 'Редактировать тег',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Создать пользователя',
                'create-success'      => 'Пользователь успешно создан.',
                'delete-failed'       => 'Пользователь не может быть удалён.',
                'delete-success'      => 'Пользователь успешно удалён.',
                'last-delete-error'   => 'Должен быть хотя бы один пользователь.',
                'mass-delete-failed'  => 'Пользователи не могут быть удалены.',
                'mass-delete-success' => 'Пользователи успешно удалены.',
                'mass-update-failed'  => 'Пользователи не могут быть обновлены.',
                'mass-update-success' => 'Пользователи успешно обновлены.',
                'title'               => 'Пользователи',
                'update-success'      => 'Пользователь успешно обновлён.',
                'user-define-error'   => 'Нельзя удалить системного пользователя.',
                'active'              => 'Активен',
                'inactive'            => 'Неактивен',

                'datagrid' => [
                    'active'        => 'Активен',
                    'created-at'    => 'Дата создания',
                    'delete'        => 'Удалить',
                    'edit'          => 'Редактировать',
                    'email'         => 'Email',
                    'id'            => 'ID',
                    'inactive'      => 'Неактивен',
                    'name'          => 'Имя',
                    'status'        => 'Статус',
                    'update-status' => 'Обновить статус',
                    'users'         => 'Пользователи',
                ],

                'create' => [
                    'confirm-password' => 'Подтвердите пароль',
                    'email'            => 'Email',
                    'general'          => 'Общие',
                    'global'           => 'Глобальный',
                    'group'            => 'Группа',
                    'individual'       => 'Индивидуальный',
                    'name'             => 'Имя',
                    'password'         => 'Пароль',
                    'permission'       => 'Разрешение',
                    'role'             => 'Роль',
                    'save-btn'         => 'Сохранить пользователя',
                    'status'           => 'Статус',
                    'title'            => 'Создать пользователя',
                    'view-permission'  => 'Просмотр разрешений',
                ],

                'edit' => [
                    'title' => 'Редактировать пользователя',
                ],
            ],
        ],


        'pipelines' => [
            'index' => [
                'title'                => 'Воронки',
                'create-btn'           => 'Создать воронку',
                'create-success'       => 'Воронка успешно создана.',
                'update-success'       => 'Воронка успешно обновлена.',
                'delete-success'       => 'Воронка успешно удалена.',
                'delete-failed'        => 'Воронку нельзя удалить.',
                'default-delete-error' => 'Нельзя удалить воронку по умолчанию.',

                'datagrid' => [
                    'delete'      => 'Удалить',
                    'edit'        => 'Редактировать',
                    'id'          => 'ID',
                    'is-default'  => 'По умолчанию',
                    'name'        => 'Название',
                    'no'          => 'Нет',
                    'rotten-days' => 'Срок устаревания (дни)',
                    'yes'         => 'Да',
                ],
            ],

            'create' => [
                'title'                => 'Создать воронку',
                'save-btn'             => 'Сохранить воронку',
                'name'                 => 'Название',
                'rotten-days'          => 'Срок устаревания (дни)',
                'mark-as-default'      => 'Отметить как по умолчанию',
                'general'              => 'Общие',
                'probability'          => 'Вероятность (%)',
                'new-stage'            => 'Новый',
                'won-stage'            => 'Выигран',
                'lost-stage'           => 'Проигран',
                'stage-btn'            => 'Добавить этап',
                'stages'               => 'Этапы',
                'duplicate-name'       => 'Поле "Название" не может повторяться',
                'delete-stage'         => 'Удалить этап',
                'add-new-stages'       => 'Добавить новые этапы',
                'add-stage-info'       => 'Добавьте новый этап для вашей воронки',
                'newly-added'          => 'Недавно добавлено',
                'stage-delete-success' => 'Этап успешно удалён',
            ],

            'edit'  => [
                'title'                => 'Редактировать воронку',
                'save-btn'             => 'Сохранить воронку',
                'name'                 => 'Название',
                'rotten-days'          => 'Срок устаревания (дни)',
                'mark-as-default'      => 'Отметить как по умолчанию',
                'general'              => 'Общие',
                'probability'          => 'Вероятность (%)',
                'new-stage'            => 'Новый',
                'won-stage'            => 'Выигран',
                'lost-stage'           => 'Проигран',
                'stage-btn'            => 'Добавить этап',
                'stages'               => 'Этапы',
                'duplicate-name'       => 'Поле "Название" не может повторяться',
                'delete-stage'         => 'Удалить этап',
                'add-new-stages'       => 'Добавить новые этапы',
                'add-stage-info'       => 'Добавьте новый этап для вашей воронки',
                'stage-delete-success' => 'Этап успешно удалён',
            ],
        ],


        'webhooks' => [
            'index' => [
                'title'          => 'Вебхуки',
                'create-btn'     => 'Создать вебхук',
                'create-success' => 'Вебхук успешно создан.',
                'update-success' => 'Вебхук успешно обновлён.',
                'delete-success' => 'Вебхук успешно удалён.',
                'delete-failed'  => 'Вебхук не может быть удалён.',

                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Удалить',
                    'edit'        => 'Редактировать',
                    'name'        => 'Название',
                    'entity-type' => 'Тип сущности',
                    'end-point'   => 'Конечная точка',
                ],
            ],

            'create' => [
                'title'                 => 'Создать вебхук',
                'save-btn'              => 'Сохранить вебхук',
                'info'                  => 'Введите данные вебхука',
                'url-and-parameters'    => 'URL и параметры',
                'method'                => 'Метод',
                'post'                  => 'POST',
                'put'                   => 'PUT',
                'url-endpoint'          => 'URL конечной точки',
                'parameters'            => 'Параметры',
                'add-new-parameter'     => 'Добавить новый параметр',
                'url-preview'           => 'Просмотр URL:',
                'headers'               => 'Заголовки',
                'add-new-header'        => 'Добавить новый заголовок',
                'body'                  => 'Тело',
                'default'               => 'По умолчанию',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Ключ и значение',
                'add-new-payload'       => 'Добавить новую нагрузку',
                'raw'                   => 'Raw',
                'general'               => 'Общие',
                'name'                  => 'Название',
                'entity-type'           => 'Тип сущности',
                'insert-placeholder'    => 'Вставить заполнители',
                'description'           => 'Описание',
                'json'                  => 'JSON',
                'text'                  => 'Текст',
            ],

            'edit' => [
                'title'                 => 'Редактировать вебхук',
                'edit-btn'              => 'Сохранить вебхук',
                'save-btn'              => 'Сохранить вебхук',
                'info'                  => 'Введите данные вебхука',
                'url-and-parameters'    => 'URL и параметры',
                'method'                => 'Метод',
                'post'                  => 'POST',
                'put'                   => 'PUT',
                'url-endpoint'          => 'URL конечной точки',
                'parameters'            => 'Параметры',
                'add-new-parameter'     => 'Добавить новый параметр',
                'url-preview'           => 'Просмотр URL:',
                'headers'               => 'Заголовки',
                'add-new-header'        => 'Добавить новый заголовок',
                'body'                  => 'Тело',
                'default'               => 'По умолчанию',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'key-and-value'         => 'Ключ и значение',
                'add-new-payload'       => 'Добавить новую нагрузку',
                'raw'                   => 'Raw',
                'general'               => 'Общие',
                'name'                  => 'Название',
                'entity-type'           => 'Тип сущности',
                'insert-placeholder'    => 'Вставить заполнители',
                'description'           => 'Описание',
                'json'                  => 'JSON',
                'text'                  => 'Текст',
            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Склады',
                'create-btn'     => 'Создать склад',
                'create-success' => 'Склад успешно создан.',
                'name-exists'    => 'Название склада уже существует.',
                'update-success' => 'Склад успешно обновлён.',
                'delete-success' => 'Склад успешно удалён.',
                'delete-failed'  => 'Склад не может быть удалён.',

                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Название',
                    'contact-name'    => 'Контактное лицо',
                    'delete'          => 'Удалить',
                    'edit'            => 'Редактировать',
                    'view'            => 'Просмотр',
                    'created-at'      => 'Создан',
                    'products'        => 'Продукты',
                    'contact-emails'  => 'Контактные email',
                    'contact-numbers' => 'Контактные телефоны',
                ],
            ],

            'create' => [
                'title'         => 'Создать склад',
                'save-btn'      => 'Сохранить склад',
                'contact-info'  => 'Контактная информация',
            ],

            'edit' => [
                'title'         => 'Редактировать склад',
                'save-btn'      => 'Сохранить склад',
                'contact-info'  => 'Контактная информация',
            ],

            'view' => [
                'all'         => 'Все',
                'notes'       => 'Заметки',
                'files'       => 'Файлы',
                'location'    => 'Расположение',
                'change-logs' => 'Журнал изменений',

                'locations' => [
                    'action'         => 'Действие',
                    'add-location'   => 'Добавить расположение',
                    'create-success' => 'Расположение успешно создано.',
                    'delete'         => 'Удалить',
                    'delete-failed'  => 'Расположение не может быть удалено.',
                    'delete-success' => 'Расположение успешно удалено.',
                    'name'           => 'Название',
                    'save-btn'       => 'Сохранить',
                ],

                'general-information' => [
                    'title' => 'Общая информация',
                ],

                'contact-information' => [
                    'title' => 'Контактная информация',
                ],
            ],
        ],


        'attributes' => [
            'index' => [
                'title'              => 'Атрибуты',
                'create-btn'         => 'Создать атрибут',
                'create-success'     => 'Атрибут успешно создан.',
                'update-success'     => 'Атрибут успешно обновлён.',
                'delete-success'     => 'Атрибут успешно удалён.',
                'delete-failed'      => 'Атрибут не может быть удалён.',
                'user-define-error'  => 'Нельзя удалить системный атрибут.',
                'mass-delete-failed' => 'Системные атрибуты не могут быть удалены.',

                'datagrid' => [
                    'yes'         => 'Да',
                    'no'          => 'Нет',
                    'id'          => 'ID',
                    'code'        => 'Код',
                    'name'        => 'Название',
                    'entity-type' => 'Тип сущности',
                    'type'        => 'Тип',
                    'is-default'  => 'По умолчанию',
                    'edit'        => 'Редактировать',
                    'delete'      => 'Удалить',

                    'entity-types' => [
                        'leads'         => 'Лиды',
                        'organizations' => 'Организации',
                        'persons'       => 'Персоны',
                        'products'      => 'Продукты',
                        'quotes'        => 'Коммерческие предложения',
                        'warehouses'    => 'Склады',
                    ],

                    'types' => [
                        'address'  => 'Адрес',
                        'date'     => 'Дата',
                        'email'    => 'Email',
                        'lookup'   => 'Поиск',
                        'phone'    => 'Телефон',
                        'price'    => 'Цена',
                        'select'   => 'Выбор',
                        'text'     => 'Текст',
                        'textarea' => 'Текстовое поле',
                    ],
                ],
            ],

            'create'  => [
                'title'                 => 'Создать атрибут',
                'save-btn'              => 'Сохранить атрибут',
                'code'                  => 'Код',
                'name'                  => 'Название',
                'entity-type'           => 'Тип сущности',
                'type'                  => 'Тип',
                'validations'           => 'Валидация',
                'is-required'           => 'Обязательно',
                'input-validation'      => 'Валидация ввода',
                'is-unique'             => 'Уникально',
                'labels'                => 'Метки',
                'general'               => 'Общее',
                'numeric'               => 'Числовой',
                'decimal'               => 'Десятичный',
                'url'                   => 'URL',
                'options'               => 'Опции',
                'option-type'           => 'Тип опции',
                'lookup-type'           => 'Тип поиска',
                'add-option'            => 'Добавить опцию',
                'save-option'           => 'Сохранить опцию',
                'option-name'           => 'Название опции',
                'add-attribute-options' => 'Добавить опции атрибута',
                'text'                  => 'Текст',
                'textarea'              => 'Текстовое поле',
                'price'                 => 'Цена',
                'boolean'               => 'Логический (да/нет)',
                'select'                => 'Выбор',
                'multiselect'           => 'Множественный выбор',
                'email'                 => 'Email',
                'address'               => 'Адрес',
                'phone'                 => 'Телефон',
                'datetime'              => 'Дата и время',
                'date'                  => 'Дата',
                'image'                 => 'Изображение',
                'file'                  => 'Файл',
                'lookup'                => 'Поиск',
                'entity_type'           => 'Тип сущности',
                'checkbox'              => 'Чекбокс',
                'is_required'           => 'Обязательно',
                'is_unique'             => 'Уникально',
                'actions'               => 'Действия',
            ],

            'edit'  => [
                'actions'               => 'Действия',
                'add-attribute-options' => 'Добавить опции атрибута',
                'add-option'            => 'Добавить опцию',
                'address'               => 'Адрес',
                'boolean'               => 'Логический (да/нет)',
                'checkbox'              => 'Чекбокс',
                'code'                  => 'Код',
                'date'                  => 'Дата',
                'datetime'              => 'Дата и время',
                'decimal'               => 'Десятичный',
                'email'                 => 'Email',
                'entity-type'           => 'Тип сущности',
                'entity_type'           => 'Тип сущности',
                'file'                  => 'Файл',
                'general'               => 'Общее',
                'image'                 => 'Изображение',
                'input-validation'      => 'Валидация ввода',
                'is-required'           => 'Обязательно',
                'is-unique'             => 'Уникально',
                'is_required'           => 'Обязательно',
                'is_unique'             => 'Уникально',
                'labels'                => 'Метки',
                'lookup'                => 'Поиск',
                'lookup-type'           => 'Тип поиска',
                'multiselect'           => 'Множественный выбор',
                'name'                  => 'Название',
                'numeric'               => 'Числовой',
                'option-deleted'        => 'Опция атрибута успешно удалена',
                'option-name'           => 'Название опции',
                'option-type'           => 'Тип опции',
                'options'               => 'Опции',
                'phone'                 => 'Телефон',
                'price'                 => 'Цена',
                'save-btn'              => 'Сохранить атрибут',
                'save-option'           => 'Сохранить опцию',
                'select'                => 'Выбор',
                'text'                  => 'Текст',
                'textarea'              => 'Текстовое поле',
                'title'                 => 'Редактировать атрибут',
                'type'                  => 'Тип',
                'url'                   => 'URL',
                'validations'           => 'Валидация',
            ],
        ],


        'data-transfer' => [
            'imports' => [
                'create' => [
                    'action'              => 'Действие',
                    'allowed-errors'      => 'Допустимые ошибки',
                    'back-btn'            => 'Назад',
                    'create-update'       => 'Создать/Обновить',
                    'delete'              => 'Удалить',
                    'download-sample'     => 'Скачать образец',
                    'field-separator'     => 'Разделитель полей',
                    'file'                => 'Файл',
                    'general'             => 'Общие',
                    'images-directory'    => 'Путь к папке с изображениями',
                    'process-in-queue'    => 'Обрабатывать в очереди',
                    'results'             => 'Результаты',
                    'save-btn'            => 'Сохранить импорт',
                    'settings'            => 'Настройки',
                    'skip-errors'         => 'Пропускать ошибки',
                    'stop-on-errors'      => 'Остановить при ошибках',
                    'title'               => 'Создать импорт',
                    'type'                => 'Тип',
                    'validation-strategy' => 'Стратегия валидации',
                ],

                'edit' => [
                    'action'              => 'Действие',
                    'allowed-errors'      => 'Допустимые ошибки',
                    'back-btn'            => 'Назад',
                    'create-update'       => 'Создать/Обновить',
                    'delete'              => 'Удалить',
                    'download-sample'     => 'Скачать образец',
                    'field-separator'     => 'Разделитель полей',
                    'file'                => 'Файл',
                    'general'             => 'Общие',
                    'images-directory'    => 'Путь к папке с изображениями',
                    'process-in-queue'    => 'Обрабатывать в очереди',
                    'results'             => 'Результаты',
                    'save-btn'            => 'Сохранить импорт',
                    'settings'            => 'Настройки',
                    'skip-errors'         => 'Пропускать ошибки',
                    'stop-on-errors'      => 'Остановить при ошибках',
                    'title'               => 'Редактировать импорт',
                    'type'                => 'Тип',
                    'validation-strategy' => 'Стратегия валидации',
                ],

                'index' => [
                    'button-title' => 'Создать импорт',
                    'title'        => 'Импорты',

                    'datagrid' => [
                        'actions'       => 'Действия',
                        'completed-at'  => 'Завершено',
                        'created'       => 'Создано',
                        'delete'        => 'Удалить',
                        'deleted'       => 'Удалено',
                        'edit'          => 'Редактировать',
                        'error-file'    => 'Файл ошибок',
                        'id'            => 'ID',
                        'started-at'    => 'Начато',
                        'state'         => 'Состояние',
                        'summary'       => 'Итоги',
                        'type'          => 'Тип',
                        'updated'       => 'Обновлено',
                        'uploaded-file' => 'Загруженный файл',
                    ],
                ],

                'import' => [
                    'back-btn'                => 'Назад',
                    'completed-batches'       => 'Всего завершено пакетов:',
                    'download-error-report'   => 'Скачать полный отчет',
                    'edit-btn'                => 'Редактировать',
                    'imported-info'           => 'Поздравляем! Импорт выполнен успешно.',
                    'importing-info'          => 'Идет процесс импорта',
                    'indexing-info'           => 'Идет индексация ресурсов (цены, запасы и Elastic Search)',
                    'linking-info'            => 'Идет связывание ресурсов',
                    'progress'                => 'Прогресс:',
                    'title'                   => 'Импорт',
                    'total-batches'           => 'Всего пакетов:',
                    'total-created'           => 'Всего создано записей:',
                    'total-deleted'           => 'Всего удалено записей:',
                    'total-errors'            => 'Всего ошибок:',
                    'total-invalid-rows'      => 'Всего некорректных строк:',
                    'total-rows-processed'    => 'Всего обработано строк:',
                    'total-updated'           => 'Всего обновлено записей:',
                    'validate'                => 'Проверить',
                    'validate-info'           => 'Нажмите "Проверить данные", чтобы проверить импорт.',
                    'validating-info'         => 'Данные начали считываться и проверяться',
                    'validation-failed-info'  => 'Импорт недействителен. Исправьте ошибки и попробуйте снова.',
                    'validation-success-info' => 'Импорт действителен. Нажмите "Импортировать", чтобы начать процесс импорта.',
                ],

                'create-success'    => 'Импорт успешно создан.',
                'delete-failed'     => 'Не удалось удалить импорт.',
                'delete-success'    => 'Импорт успешно удалён.',
                'not-valid'         => 'Импорт недействителен',
                'nothing-to-import' => 'Нет ресурсов для импорта.',
                'setup-queue-error' => 'Пожалуйста, измените драйвер очереди на "database" или "redis" для запуска процесса импорта.',
                'update-success'    => 'Импорт успешно обновлён.',
            ],
        ],

    ],

    'activities' => [
        'index' => [
            'title'      => 'Активности',

            'datagrid' => [
                'comment'       => 'Комментарий',
                'created_at'    => 'Создано',
                'created_by'    => 'Создал',
                'edit'          => 'Редактировать',
                'id'            => 'ID',
                'done'          => 'Выполнено',
                'not-done'      => 'Не выполнено',
                'lead'          => 'Лид',
                'mass-delete'   => 'Массовое удаление',
                'mass-update'   => 'Массовое обновление',
                'schedule-from' => 'Дата начала',
                'schedule-to'   => 'Дата окончания',
                'schedule_from' => 'Дата начала',
                'schedule_to'   => 'Дата окончания',
                'title'         => 'Название',
                'is_done'       => 'Выполнено',
                'type'          => 'Тип',
                'update'        => 'Обновить',
                'call'          => 'Звонок',
                'meeting'       => 'Встреча',
                'lunch'         => 'Обед',
            ],
        ],

        'edit' => [
            'title'           => 'Редактировать активность',
            'back-btn'        => 'Назад',
            'save-btn'        => 'Сохранить активность',
            'type'            => 'Тип активности',
            'call'            => 'Звонок',
            'meeting'         => 'Встреча',
            'lunch'           => 'Обед',
            'schedule_to'     => 'Дата окончания',
            'schedule_from'   => 'Дата начала',
            'location'        => 'Место',
            'comment'         => 'Комментарий',
            'lead'            => 'Лид',
            'participants'    => 'Участники',
            'general'         => 'Общее',
            'persons'         => 'Персоны',
            'no-result-found' => 'Записи не найдены.',
            'users'           => 'Пользователи',
        ],

        'updated'              => ':attribute обновлено',
        'created'              => 'Создано',
        'duration-overlapping' => 'У участников в это время уже есть другая встреча. Продолжить?',
        'create-success'       => 'Активность успешно создана.',
        'update-success'       => 'Активность успешно обновлена.',
        'overlapping-error'    => 'У участников в это время уже есть другая встреча.',
        'destroy-success'      => 'Активность успешно удалена.',
        'delete-failed'        => 'Активность не может быть удалена.',
        'mass-update-success'  => 'Активности успешно обновлены.',
        'mass-destroy-success' => 'Активности успешно удалены.',
        'mass-delete-failed'   => 'Активности не могут быть удалены.',
    ],


   'mail' => [
        'index' => [
            'compose'           => 'Написать',
            'draft'             => 'Черновик',
            'inbox'             => 'Входящие',
            'outbox'            => 'Исходящие',
            'sent'              => 'Отправленные',
            'trash'             => 'Корзина',
            'compose-mail-btn'  => 'Написать письмо',
            'btn'               => 'Почта',
            'mail'              => [
                'title'         => 'Написать письмо',
                'to'            => 'Кому',
                'enter-emails'  => 'Нажмите Enter для добавления email',
                'cc'            => 'Копия (CC)',
                'bcc'           => 'Скрытая копия (BCC)',
                'subject'       => 'Тема',
                'send-btn'      => 'Отправить',
                'message'       => 'Сообщение',
                'draft'         => 'Черновик',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'От',
                'to'            => 'Кому',
                'subject'       => 'Тема',
                'tags'          => 'Теги',
                'content'       => 'Содержание',
                'attachments'   => 'Вложения',
                'date'          => 'Дата',
                'move-to-inbox' => 'Перемещено во входящие',
                'edit'          => 'Редактировать',
                'view'          => 'Просмотр',
                'delete'        => 'Удалить',
            ],
        ],

        'create-success'      => 'Письмо успешно отправлено.',
        'update-success'      => 'Письмо успешно обновлено.',
        'mass-update-success' => 'Письма успешно обновлены.',
        'delete-success'      => 'Письмо успешно удалено.',
        'delete-failed'       => 'Письмо не может быть удалено.',

        'view' => [
            'title'                      => 'Почта',
            'subject'                    => ':subject',
            'link-mail'                  => 'Связать письмо',
            'to'                         => 'Кому',
            'cc'                         => 'Копия (CC)',
            'bcc'                        => 'Скрытая копия (BCC)',
            'reply'                      => 'Ответить',
            'reply-all'                  => 'Ответить всем',
            'forward'                    => 'Переслать',
            'delete'                     => 'Удалить',
            'enter-mails'                => 'Введите email',
            'rotten-days'                => 'Лид "застоялся" уже :days дней',
            'search-an-existing-lead'    => 'Поиск существующего лида',
            'search-an-existing-contact' => 'Поиск существующего контакта',
            'message'                    => 'Сообщение',
            'add-attachments'            => 'Добавить вложения',
            'discard'                    => 'Отменить',
            'send'                       => 'Отправить',
            'no-result-found'            => 'Результаты не найдены',
            'add-new-contact'            => 'Добавить новый контакт',
            'description'                => 'Описание',
            'search'                     => 'Поиск...',
            'add-new-lead'               => 'Добавить новый лид',
            'create-new-contact'         => 'Создать новый контакт',
            'save-contact'               => 'Сохранить контакт',
            'create-lead'                => 'Создать лид',
            'linked-contact'             => 'Связанный контакт',
            'link-to-contact'            => 'Связать с контактом',
            'link-to-lead'               => 'Связать с лидом',
            'linked-lead'                => 'Связанный лид',
            'lead-details'               => 'Детали лида',
            'contact-person'             => 'Контактное лицо',
            'product'                    => 'Продукт',

            'tags' => [
                'create-success'  => 'Тег успешно создан.',
                'destroy-success' => 'Тег успешно удалён.',
            ],
        ],
    ],


   'common' => [
        'custom-attributes' => [
            'add-more'             => 'Добавить ещё',
            'address'              => 'Адрес',
            'city'                 => 'Город',
            'contact'              => 'Контактные номера',
            'country'              => 'Страна',
            'email'                => 'Электронная почта',
            'home'                 => 'Домашний',
            'postcode'             => 'Почтовый индекс',
            'save'                 => 'Сохранить',
            'select'               => 'Выбрать',
            'select-country'       => 'Выберите страну',
            'select-state'         => 'Выберите регион',
            'state'                => 'Регион',
            'update-contact-title' => 'Обновить контактные номера',
            'update-emails-title'  => 'Обновить контактные email',
            'work'                 => 'Рабочий',
        ],
    ],


    'leads' => [
        'create-success'    => 'Лид успешно создан.',
        'update-success'    => 'Лиды успешно обновлены.',
        'update-failed'     => 'Не удалось обновить лиды.',
        'destroy-success'   => 'Лид успешно удалён.',
        'destroy-failed'    => 'Лид не может быть удалён.',

        'file' => [
            'data-not-found'         => 'Данные не найдены.',
            'empty-content'          => 'Содержимое PDF пусто или не может быть извлечено.',
            'failed-extract'         => 'Не удалось извлечь текст из файла.',
            'insufficient-info'      => 'Из-за недостатка данных мы не можем обработать ваш запрос в данный момент.',
            'invalid-base64'         => 'Неверный формат base64.',
            'invalid-format'         => 'Неверный формат JSON.',
            'invalid-response'       => 'Неверный формат ответа AI.',
            'missing-api-key'        => 'Отсутствует API ключ или конфигурация модели.',
            'not-found'              => 'Файл не найден.',
            'recursive-call'         => 'Обнаружен рекурсивный вызов.',
            'text-generation-failed' => 'Извлечение текста не удалось. Файл может быть пустым или нечитаемым.',
        ],

        'index' => [
            'title'      => 'Лиды',
            'create-btn' => 'Создать лид',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Менеджер по продажам',
                'subject'             => 'Тема',
                'source'              => 'Источник',
                'lead-value'          => 'Стоимость лида',
                'lead-type'           => 'Тип лида',
                'tag-name'            => 'Тег',
                'contact-person'      => 'Контактное лицо',
                'stage'               => 'Стадия',
                'rotten-lead'         => 'Просроченный лид',
                'date-to'             => 'Дата до',
                'created-at'          => 'Дата создания',
                'no'                  => 'Нет',
                'yes'                 => 'Да',
                'delete'              => 'Удалить',
                'mass-delete'         => 'Массовое удаление',
                'mass-update'         => 'Массовое обновление',
            ],

            'kanban' => [
                'rotten-days'            => 'Лид просрочен на :days дней',
                'empty-list'             => 'Список ваших лидов пуст',
                'empty-list-description' => 'Создайте лид, чтобы организовать ваши цели.',
                'create-lead-btn'        => 'Создать лид',

                'columns' => [
                    'contact-person'      => 'Контактное лицо',
                    'id'                  => 'ID',
                    'lead-type'           => 'Тип лида',
                    'lead-value'          => 'Стоимость лида',
                    'sales-person'        => 'Менеджер по продажам',
                    'source'              => 'Источник',
                    'title'               => 'Название',
                    'tags'                => 'Теги',
                    'expected-close-date' => 'Ожидаемая дата закрытия',
                    'created-at'          => 'Дата создания',
                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Поиск',
                    ],

                    'filters' => [
                        'apply-filters' => 'Применить фильтры',
                        'clear-all'     => 'Очистить все',
                        'filter'        => 'Фильтр',
                        'filters'       => 'Фильтры',
                        'from'          => 'От',
                        'select'        => 'Выбрать',
                        'to'            => 'До',
                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Все воронки',
                'create-new-pipeline' => 'Создать новую воронку',
            ],

            'upload' => [
                'create-lead'   => 'Создать лид с помощью AI',
                'file'          => 'Загрузка файла',
                'file-info'     => 'Принимаются только файлы форматов pdf, bmp, jpg, jpeg, png.',
                'file-required' => 'Пожалуйста, выберите хотя бы один корректный файл для продолжения.',
                'save-btn'      => 'Сохранить',
                'upload-file'   => 'Загрузить файл',
            ],
        ],

        'create' => [
            'title'          => 'Создать лид',
            'save-btn'       => 'Сохранить',
            'details'        => 'Детали',
            'details-info'   => 'Введите основную информацию о лиде',
            'contact-person' => 'Контактное лицо',
            'contact-info'   => 'Информация о контактном лице',
            'products'       => 'Продукты',
            'products-info'  => 'Информация о продуктах',
        ],

        'edit' => [
            'title'          => 'Редактировать лид',
            'save-btn'       => 'Сохранить',
            'details'        => 'Детали',
            'details-info'   => 'Введите основную информацию о лиде',
            'contact-person' => 'Контактное лицо',
            'contact-info'   => 'Информация о контактном лице',
            'products'       => 'Продукты',
            'products-info'  => 'Информация о продуктах',
        ],

        'common' => [
            'contact' => [
                'name'           => 'Имя',
                'email'          => 'Email',
                'contact-number' => 'Контактный номер',
                'organization'   => 'Организация',
            ],

            'products' => [
                'product-name' => 'Название продукта',
                'quantity'     => 'Количество',
                'price'        => 'Цена',
                'amount'       => 'Сумма',
                'action'       => 'Действие',
                'add-more'     => 'Добавить ещё',
                'total'        => 'Итого',
            ],
        ],

        'view' => [
            'title'       => 'Лид: :title',
            'rotten-days' => ':days дней',

            'tabs'        => [
                'description' => 'Описание',
                'products'    => 'Продукты',
                'quotes'      => 'Коммерческие предложения',
            ],

            'attributes' => [
                'title' => 'О лиде',
            ],

            'quotes' => [
                'subject'         => 'Тема',
                'expired-at'      => 'Истекает',
                'sub-total'       => 'Промежуточный итог',
                'discount'        => 'Скидка',
                'tax'             => 'Налог',
                'adjustment'      => 'Корректировка',
                'grand-total'     => 'Итог',
                'delete'          => 'Удалить',
                'edit'            => 'Редактировать',
                'download'        => 'Скачать',
                'destroy-success' => 'Коммерческое предложение успешно удалено.',
                'empty-title'     => 'Коммерческие предложения не найдены',
                'empty-info'      => 'Для этого лида коммерческие предложения не найдены',
                'add-btn'         => 'Добавить коммерческое предложение',
            ],

            'products' => [
                'product-name' => 'Название продукта',
                'quantity'     => 'Количество',
                'price'        => 'Цена',
                'amount'       => 'Сумма',
                'action'       => 'Действие',
                'add-more'     => 'Добавить ещё',
                'total'        => 'Итого',
                'empty-title'  => 'Продукты не найдены',
                'empty-info'   => 'Для этого лида продукты не найдены',
                'add-product'  => 'Добавить продукт',
            ],

            'persons' => [
                'title'     => 'О людях',
                'job-title' => ':job_title в :organization',
            ],

            'stages' => [
                'won-lost'       => 'Выигранные/проигранные',
                'won'            => 'Выиграно',
                'lost'           => 'Проиграно',
                'need-more-info' => 'Требуется больше информации',
                'closed-at'      => 'Закрыто',
                'won-value'      => 'Сумма выигрыша',
                'lost-reason'    => 'Причина проигрыша',
                'save-btn'       => 'Сохранить',
            ],

            'tags' => [
                'create-success'  => 'Тег успешно создан.',
                'destroy-success' => 'Тег успешно удалён.',
            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'           => 'Назад',
            'delete'         => 'Удалить',
            'save-btn'       => 'Сохранить настройки',
            'save-success'   => 'Настройки успешно сохранены.',
            'search'         => 'Поиск',
            'select-country' => 'Выберите страну',
            'select-state'   => 'Выберите регион',
            'title'          => 'Настройки',

            'general'  => [
                'title'   => 'Общие',
                'info'    => 'Общие настройки',

                'general' => [
                    'title'           => 'Общие',
                    'info'            => 'Обновите ваши общие настройки здесь.',
                    'locale-settings' => [
                        'title'       => 'Настройки локали',
                        'title-info'  => 'Определяет язык интерфейса, например арабский (ar), английский (en), испанский (es), персидский (fa) и турецкий (tr).',
                    ],

                    'admin-logo' => [
                        'logo-image' => 'Изображение логотипа',
                        'title'      => 'Логотип администратора',
                        'title-info' => 'Настройте изображение логотипа для панели администратора.',
                    ],
                ],

                'settings' => [
                    'title' => 'Настройки',
                    'info'  => 'Обновите ваши настройки здесь.',

                    'footer' => [
                        'info'       => 'Здесь можно настроить раздел "Powered by".',
                        'powered-by' => 'Текст в разделе "Powered by"',
                        'title'      => 'Настройки раздела "Powered by"',
                    ],

                    'menu' => [
                        'activities'     => 'Действия',
                        'configuration'  => 'Настройки',
                        'contacts'       => 'Контакты',
                        'dashboard'      => 'Панель управления',
                        'draft'          => 'Черновик',
                        'inbox'          => 'Входящие',
                        'info'           => 'Здесь можно настроить названия пунктов меню.',
                        'leads'          => 'Лиды',
                        'mail'           => 'Почта',
                        'organizations'  => 'Организации',
                        'outbox'         => 'Отправленные',
                        'persons'        => 'Люди',
                        'products'       => 'Продукты',
                        'quotes'         => 'Коммерческие предложения',
                        'sent'           => 'Отправлено',
                        'settings'       => 'Настройки',
                        'title'          => 'Настройки пунктов меню',
                        'trash'          => 'Корзина',
                    ],

                    'menu-color' => [
                        'brand-color' => 'Основной цвет',
                        'info'        => 'Здесь можно изменить цвета пунктов меню.',
                        'title'       => 'Настройки цвета пунктов меню',
                    ],
                ],
            ],

            'email' => [
                'title' => 'Настройки электронной почты',
                'info'  => 'Конфигурация электронной почты для приложения.',

                'imap' => [
                    'title' => 'Настройки IMAP',
                    'info'  => 'Конфигурация IMAP для получения писем.',

                    'account' => [
                        'title'         => 'Аккаунт IMAP',
                        'title-info'    => 'Настройте параметры вашего IMAP аккаунта здесь.',
                        'host'          => 'Хост',
                        'port'          => 'Порт',
                        'encryption'    => 'Тип шифрования',
                        'validate-cert' => 'Проверять SSL сертификат',
                        'username'      => 'Имя пользователя IMAP',
                        'password'      => 'Пароль IMAP',
                    ],
                ],
            ],

            'magic-ai' => [
                'title' => 'Magic AI',
                'info'  => 'Настройки Magic AI для приложения.',

                'settings' => [
                    'api-key'             => 'API ключ',
                    'api-key-info'        => 'Не забудьте использовать OpenRouter API ключ для каждой модели. Это простой шаг для повышения безопасности и производительности.',
                    'enable'              => 'Включить',
                    'info'                => 'Улучшите работу Magic AI с вашим OpenRouter API ключом. Интегрируйте его для бесшовного, персонализированного AI опыта, созданного специально для вас! Легко настраивайте параметры и контролируйте ваш AI-путь.',
                    'other'               => 'Другая модель',
                    'other-model'         => 'Для других моделей используйте ID модели из OpenRouter.',
                    'doc-generation'      => 'Генерация DOC',
                    'doc-generation-info' => 'Включите функцию генерации DOC, чтобы автоматически извлекать данные из DOC файлов и преобразовывать их в текстовый формат. Повышайте продуктивность и эффективность с помощью этой функции.',
                    'title'               => 'Общие настройки',

                    'models'     => [
                        'deepseek-r1'           => 'Deepseek R1 Distill-llama-8b',
                        'gemini-2-0-flash-001'  => 'Gemini 2.0 flash-001',
                        'gpt-4o'                => 'GPT-4.0',
                        'gpt-4o-mini'           => 'GPT-4.0 mini',
                        'grok-2-1212'           => 'Grok 2.12',
                        'llama-3-2-3b-instruct' => 'Llama 3.2 3b Instruct',
                        'title'                 => 'Модели',
                    ],
                ],
            ],
        ],
    ],

   'dashboard' => [
        'index' => [
            'title' => 'Панель управления',

            'revenue' => [
                'lost-revenue' => 'Потерянный доход',
                'won-revenue'  => 'Полученный доход',
            ],

            'over-all' => [
                'average-lead-value'    => 'Средняя ценность лида',
                'total-leads'           => 'Всего лидов',
                'average-leads-per-day' => 'Среднее количество лидов в день',
                'total-quotations'      => 'Всего коммерческих предложений',
                'total-persons'         => 'Всего людей',
                'total-organizations'   => 'Всего организаций',
            ],

            'total-leads' => [
                'title' => 'Лиды',
                'total' => 'Всего лидов',
                'won'   => 'Выигранные лиды',
                'lost'  => 'Проигранные лиды',
            ],

            'revenue-by-sources' => [
                'title'       => 'Доход по источникам',
                'empty-title' => 'Данные отсутствуют',
                'empty-info'  => 'Нет данных за выбранный период',
            ],

            'revenue-by-types' => [
                'title'       => 'Доход по типам',
                'empty-title' => 'Данные отсутствуют',
                'empty-info'  => 'Нет данных за выбранный период',
            ],

            'top-selling-products' => [
                'title'       => 'Топ продуктов',
                'empty-title' => 'Продукты не найдены',
                'empty-info'  => 'Нет продуктов за выбранный период',
            ],

            'top-persons' => [
                'title'       => 'Топ людей',
                'empty-title' => 'Люди не найдены',
                'empty-info'  => 'Нет людей за выбранный период',
            ],

            'open-leads-by-states' => [
                'title'       => 'Открытые лиды по этапам',
                'empty-title' => 'Данные отсутствуют',
                'empty-info'  => 'Нет данных за выбранный период',
            ],
        ],
    ],


    'layouts' => [
        'app-version'          => 'Версия: :version',
        'dashboard'            => 'Панель управления',
        'leads'                => 'Лиды',
        'quotes'               => 'Коммерческие предложения',
        'quote'                => 'Коммерческое предложение',
        'mail'                 => [
            'title'   => 'Почта',
            'compose' => 'Создать',
            'inbox'   => 'Входящие',
            'draft'   => 'Черновики',
            'outbox'  => 'Исходящие',
            'sent'    => 'Отправленные',
            'trash'   => 'Корзина',
            'setting' => 'Настройки',
        ],
        'activities'           => 'Активности',
        'contacts'             => 'Контакты',
        'persons'              => 'Люди',
        'person'               => 'Человек',
        'organizations'        => 'Организации',
        'organization'         => 'Организация',
        'products'             => 'Продукты',
        'product'              => 'Продукт',
        'settings'             => 'Настройки',
        'user'                 => 'Пользователь',
        'user-info'            => 'Управляйте всеми пользователями и их правами в CRM, что им разрешено делать.',
        'groups'               => 'Группы',
        'groups-info'          => 'Добавляйте, редактируйте или удаляйте группы в CRM',
        'roles'                => 'Роли',
        'role'                 => 'Роль',
        'roles-info'           => 'Добавляйте, редактируйте или удаляйте роли в CRM',
        'users'                => 'Пользователи',
        'users-info'           => 'Добавляйте, редактируйте или удаляйте пользователей в CRM',
        'lead'                 => 'Лид',
        'lead-info'            => 'Управляйте всеми настройками лидов в CRM',
        'pipelines'            => 'Воронки',
        'pipelines-info'       => 'Добавляйте, редактируйте или удаляйте воронки в CRM',
        'sources'              => 'Источники',
        'sources-info'         => 'Добавляйте, редактируйте или удаляйте источники в CRM',
        'types'                => 'Типы',
        'types-info'           => 'Добавляйте, редактируйте или удаляйте типы в CRM',
        'automation'           => 'Автоматизация',
        'automation-info'      => 'Управляйте всеми настройками автоматизации в CRM',
        'attributes'           => 'Атрибуты',
        'attribute'            => 'Атрибут',
        'attributes-info'      => 'Добавляйте, редактируйте или удаляйте атрибуты в CRM',
        'email-templates'      => 'Шаблоны писем',
        'email'                => 'Email',
        'email-templates-info' => 'Добавляйте, редактируйте или удаляйте шаблоны писем в CRM',
        'events'               => 'События',
        'events-info'          => 'Добавляйте, редактируйте или удаляйте события в CRM',
        'campaigns'            => 'Кампании',
        'campaigns-info'       => 'Добавляйте, редактируйте или удаляйте кампании в CRM',
        'workflows'            => 'Рабочие процессы',
        'workflows-info'       => 'Добавляйте, редактируйте или удаляйте рабочие процессы в CRM',
        'webhooks'             => 'Вебхуки',
        'webhooks-info'        => 'Добавляйте, редактируйте или удаляйте вебхуки в CRM',
        'other-settings'       => 'Другие настройки',
        'other-settings-info'  => 'Управляйте всеми дополнительными настройками в CRM',
        'tags'                 => 'Теги',
        'tags-info'            => 'Добавляйте, редактируйте или удаляйте теги в CRM',
        'my-account'           => 'Мой аккаунт',
        'sign-out'             => 'Выйти',
        'back'                 => 'Назад',
        'name'                 => 'Имя',
        'configuration'        => 'Конфигурация',
        'activities'           => 'Активности',
        'howdy'                => 'Привет!',
        'warehouses'           => 'Склады',
        'warehouse'            => 'Склад',
        'warehouses-info'      => 'Добавляйте, редактируйте или удаляйте склады в CRM',
        'data_transfer'        => 'Передача данных',
        'data_transfer_info'   => 'Управляйте настройками передачи данных о людях, продуктах и лидах в CRM',
    ],

    'user' => [
        'account' => [
            'name'                  => 'Имя',
            'email'                 => 'Электронная почта',
            'password'              => 'Пароль',
            'my_account'            => 'Мой аккаунт',
            'update_details'        => 'Обновить данные',
            'current_password'      => 'Текущий пароль',
            'confirm_password'      => 'Подтвердите пароль',
            'password-match'        => 'Текущий пароль не совпадает.',
            'account-save'          => 'Изменения в аккаунте успешно сохранены.',
            'permission-denied'     => 'Доступ запрещён',
            'remove-image'          => 'Удалить изображение',
            'upload_image_pix'      => 'Загрузить фото профиля (100px x 100px)',
            'upload_image_format'   => 'в формате PNG или JPG',
            'image_upload_message'  => 'Разрешены только изображения (.jpeg, .jpg, .png и т.п.).',
        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Уважаемый(ая) :name',
            'cheers' => 'С уважением,</br>Команда :app_name',

            'user'   => [
                'dear'           => 'Уважаемый(ая) :username',
                'create-subject' => 'Вы добавлены в команду.',
                'create-body'    => 'Поздравляем! Вы теперь член нашей команды.',

                'forget-password' => [
                    'subject'           => 'Сброс пароля пользователя',
                    'dear'              => 'Уважаемый(ая) :username',
                    'reset-password'    => 'Сбросить пароль',
                    'info'              => 'Вы получили это письмо, потому что была получена заявка на сброс пароля для вашей учетной записи',
                    'final-summary'     => 'Если вы не запрашивали сброс пароля, дальнейшие действия не требуются',
                    'thanks'            => 'Спасибо!',
                ],
            ],
        ],
    ],


    'validations' => [
        'message' => [
            'decimal' => 'Поле :attribute должно быть десятичным числом.',
        ],
    ],

    'errors' => [
        'dashboard' => 'Панель управления',
        'go-back'   => 'Вернуться назад',
        'support'   => 'Если проблема сохраняется, обратитесь к нам по адресу <a href=":link" class=":class">:email</a> для получения помощи.',

        '404' => [
            'description' => 'Упс! Страница, которую вы ищете, в отпуске. Похоже, мы не смогли найти то, что вы искали.',
            'title'       => '404 Страница не найдена',
        ],

        '401' => [
            'description' => 'Упс! Похоже, у вас нет доступа к этой странице. Вероятно, отсутствуют необходимые права.',
            'title'       => '401 Неавторизован',
        ],

        '403' => [
            'description' => 'Упс! Эта страница закрыта. Похоже, у вас нет разрешений для просмотра этого содержимого.',
            'title'       => '403 Доступ запрещён',
        ],

        '500' => [
            'description' => 'Упс! Что-то пошло не так. Похоже, у нас проблемы с загрузкой нужной страницы.',
            'title'       => '500 Внутренняя ошибка сервера',
        ],

        '503' => [
            'description' => 'Упс! Похоже, сейчас идет техническое обслуживание. Пожалуйста, зайдите позже.',
            'title'       => '503 Сервис временно недоступен',
        ],
    ],

    'export' => [
        'csv'        => 'CSV',
        'download'   => 'Скачать',
        'export'     => 'Экспорт',
        'no-records' => 'Нет данных для экспорта',
        'xls'        => 'XLS',
        'xlsx'       => 'XLSX',
    ],
];
