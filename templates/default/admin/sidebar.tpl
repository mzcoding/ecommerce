<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">Навигация</a>

            <ul>
                <li {% if type == 'index' %} class="menu-item-divided pure-menu-selected" {% endif %}><a href="/admin">Главная</a></li>
                <li {% if type == 'category' %} class="menu-item-divided pure-menu-selected" {% endif %}><a href="/category">Категории</a></li>

                <li {% if type == 'articles' %} class="menu-item-divided pure-menu-selected" {% endif %}>
                    <a href="/articles">Статьи</a>
                </li>

                <li {% if type == 'users' %} class="menu-item-divided pure-menu-selected" {% endif %}><a href="/user/listusers">Пользователи</a></li>
                <li {% if type == 'transaction' %} class="menu-item-divided pure-menu-selected" {% endif %}><a href="/transaction">Транзакции</a></li>
            
            </ul>
        </div>
    </div>