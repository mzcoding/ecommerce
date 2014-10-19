<!--menu-->
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Навигация</h1>


            <nav class="nav">
                <ul class="nav-list">
  
                {% if isLogin %}
                 <li class="nav-item">
                        <a class="pure-button" href="/user/profile">Профиль</a>
                    </li>
                     <li class="nav-item">
                        <a class="pure-button" href="/user/logout">Выход</a>
                    </li>
                {% else %}
                    <li class="nav-item">
                        <a class="pure-button" href="/user/signup">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="/user/login">Вход</a>
                    </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
    </div>
<!--End menu-->