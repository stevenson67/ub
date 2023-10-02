<footer class="footer">
    <div class="container">
        <div class="footer_head">
            <div class="footer_head-logo">
                <img src="<?php echo get_template_directory_uri() . '/img/logo-footer.svg' ; ?>">
            </div>
            <div class="footer_head-social">
                <p>Скачать приложение<br>
                    United Brokers:</p>
                <div class="footer_head-social-icon">
                    <img src="<?php echo get_template_directory_uri() . '/img/windows.svg' ; ?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/web-terminal.svg' ; ?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/apple.svg' ; ?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/play-market.svg' ; ?>">
                </div>
            </div>
            <div class="footer_head-contact">
                <p>+7 (900) 222-99-99</p>
                <p>info@unitedbrokers.io</p>
            </div>
            <div class="footer_head-btn">
                <button class="btn">Личный кабинет</button>
            </div>
            <div class="footer_head-mob">
                <div class="footer_head-social">
                    <p>Скачать приложение<br>
                        United Brokers:</p>
                    <div class="footer_head-social-icon">
                        <img src="<?php echo get_template_directory_uri() . '/img/windows.svg' ; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/web-terminal.svg' ; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/apple.svg' ; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/img/play-market.svg' ; ?>">
                    </div>
                </div>
                <div class="footer_head-btn">
                    <button class="btn">Личный кабинет</button>
                </div>
            </div>
        </div>
        <div class="footer_menu">
            <div class="footer_menu-trade">
                <h4 class="footer_menu-title">Торговля</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">Платформы</a></li>
                    <li class="footer_menu-item"><a href="#">Типы счетов</a></li>
                    <li class="footer_menu-item"><a href="#">Условия торговли</a></li>
                </ul>
            </div>
            <div class="footer_menu-markets">
                <h4 class="footer_menu-title">Рынки</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">Валютный рынок</a></li>
                    <li class="footer_menu-item"><a href="#">Фондовый рынок</a></li>
                    <li class="footer_menu-item"><a href="#">Товарный рынок</a></li>
                    <li class="footer_menu-item"><a href="#">Индексы</a></li>
                    <li class="footer_menu-item"><a href="#">Криптовалюты</a></li>
                </ul>
            </div>
            <div class="footer_menu-clients">
                <h4 class="footer_menu-title">Клиентам</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">Аналитика</a></li>
                    <li class="footer_menu-item"><a href="#">Новости</a></li>
                    <li class="footer_menu-item"><a href="#">Обучение</a></li>
                    <li class="footer_menu-item"><a href="#">Советы трейдерам</a></li>
                    <li class="footer_menu-item"><a href="#">Программа лояльности</a></li>
                </ul>
            </div>
            <div class="footer_menu-about">
                <h4 class="footer_menu-title">О нас</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">О компании</a></li>
                    <li class="footer_menu-item"><a href="#">Контакты</a></li>
                    <li class="footer_menu-item"><a href="#">Документы</a></li>
                    <li class="footer_menu-item"><a href="#">Сохранность средств</a></li>
                    <li class="footer_menu-item"><a href="#">Вакансии</a></li>
                </ul>
            </div>
            <div class="footer_menu-contactMob">
                <h4 class="footer_menu-title">Контакты</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">+7 (900) 222-99-99</a></li>
                    <li class="footer_menu-item"><a href="#">info@unitedbrokers.io</a></li>
                </ul>
            </div>
            <div class="footer_menu-doc">
                <h4 class="footer_menu-title">Документы</h4>
                <ul class="footer_menu-items">
                    <li class="footer_menu-item"><a href="#">Клиентское соглашение</a></li>
                    <li class="footer_menu-item"><a href="#">Политика конфиденциальности</a></li>
                    <li class="footer_menu-item"><a href="#">Политика возврата платежей</a></li>
                    <li class="footer_menu-item"><a href="#">Свидетельство о регистрации</a></li>
                    <li class="footer_menu-item"><a href="#">Политика AML</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_rights">
            <p>© United Brokers 2021. Все права защищены. Любое использование материалов сайта без разрешения запрещено.</p>
            <p>Уведомление о рисках:<br>
                Инвестирование в группы высокого риска: (Forex) и контрактами на разницу (CFD) является спекулятивной операцией, включая высокий риск, и не подходит для каждого инвестора. Вы можете понести как частичные, так и полные потери вложенных средств, поэтому мы не советуем инвестировать капитал, которым вы не можете рисковать. Вы должны знать о повышенном риске, связанном с использованием кредитного плеча. Мы настоятельно рекомендуем вам ознакомиться с условиями и услугами нашего веб-сайта, прежде чем начать пользоваться нашим сервисом.</p>
        </div>
    </div>
</footer>
<script>
    const accordionItems = document.querySelectorAll('.questions_accordion-item');

    accordionItems.forEach(accordionItem => {
        accordionItem.addEventListener('click', function() {
            const isActive = this.classList.contains('active');

            if (isActive) {
                this.classList.remove('active');
            } else {
                this.classList.add('active');
            }
        });
    });
</script>
</body>
<?php wp_footer(); ?>
