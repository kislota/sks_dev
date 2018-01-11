<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Система учета</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script type='text/javascript' src='http://code.jquery.com/jquery-2.0.3.min.js'></script>
        <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('js/actions.js') }}"></script>
        <script src="{{ asset('js/search.js') }}"></script>
        <script type="text/javascript">
jQuery(function ($) {
    $("#phone").mask("+38(999)9999999");
});
        </script>
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title"></span>
                    <div class="mdl-layout-spacer">
                        <!--
                        TOP MENU
                        <a href="/order/add" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Добавить</a>
                        -->
                        @yield('topmenu')

                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" id="search">
                            <label class="mdl-textfield__label" for="search">Введите данные для поиска...</label>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                        <a class="mdl-navigation__link" href="/setting"><li class="mdl-menu__item">Настройки</li></a>
                        <a class="mdl-navigation__link" href="/admin"><li class="mdl-menu__item">Администрирование</li></a>
                        <a class="mdl-navigation__link" href="/setting"><li class="mdl-menu__item">Системная информация</li></a>
                    </ul>
                </div>
            </header>
            <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                @if (auth()->check())
                <header class="demo-drawer-header">
                    <div class="demo-avatar-dropdown">
                        <span>Добро пожаловать! {{auth()->user()->name}}</span>
                        <div class="mdl-layout-spacer"></div>
                        <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <i class="material-icons" role="presentation">arrow_drop_down</i>
                            <span class="visuallyhidden">Профиль</span>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                            <li class="mdl-menu__item">Заказать запчасть</li>
                            <a class="mdl-navigation__link" href="/user/{{auth()->id()}}"><li class="mdl-menu__item">Редактировать профиль</li></a>
                            <a class="mdl-navigation__link" href="/kassa/user/{{auth()->id()}}"><li class="mdl-menu__item">Баланс 0</li></a>
                            <a class="mdl-navigation__link" href="/user/logout"><li class="mdl-menu__item">Выход</li></a>
                        </ul>
                    </div>
                </header>
                @endif
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    <a class="mdl-navigation__link" href="/orders"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Заявки</a>
                    <a class="mdl-navigation__link" href="/kassa"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">attach_money</i>Касса</a>
                    <a class="mdl-navigation__link" href="/shop"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Магазин</a>
                    <a class="mdl-navigation__link" href="/part"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">memory</i>Склад</a>
                    <a class="mdl-navigation__link" href="/client"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Клиенты</a>
                    <a class="mdl-navigation__link" href="/report"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assessment</i>Отчеты</a>
                    <a class="mdl-navigation__link" href="/history"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">history</i>История</a>
                    <a class="mdl-navigation__link" href="/trash"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Корзина</a>
                    <a class="mdl-navigation__link" href="/purchase"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_basket</i>Закупка</a>
                    <div class="mdl-layout-spacer"></div>
                    <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
                </nav>
            </div>
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>