
<?php get_header(); ?>
<main class="main">
    <section class="hero">
        <div class="container">
            <div class="hero-wrap">
                <div class="hero_text">
                    <h1 class="hero_text-title">Криптовалютный рынок</h1>
                    <p class="hero_text-desc">Торгуйте криптовалютами на мировом финансовом рынке на конкурентоспособных условиях.</p>
                    <button class="btn">Открыть счет</button>
                </div>
                <div class="hero-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/hero-kry.png' ; ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h2 class="advantages-title">Преимущества торговли с «United Brokers»</h2>
            <div class="advantages-items">
                <div class="advantages_item">
                    <h3 class="advantages_item-title">Сверхбыстрое исполнение <br>и высокая ликвидность</h3>
                    <p class="advantages_item-desc">99,9% ордеров исполняются менее чем за 11.06 мс</p>
                    <img class="advantages_item-icon" src="<?php echo get_template_directory_uri() . '/img/advantages-1.svg' ; ?>">
                </div>
                <div class="advantages_item">
                    <h3 class="advantages_item-title">Типы счетов</h3>
                    <p class="advantages_item-desc">Возможность торговать <br>Mini, Standard, Classic и ProInvest счетами с одного устройства  </p>
                    <img class="advantages_item-icon" src="<?php echo get_template_directory_uri() . '/img/advantages-2.svg' ; ?>">
                    <img class="advantages_item-img" src="<?php echo get_template_directory_uri() . '/img/advantages-img.png' ; ?>">
                    <img class="advantages_item-imgBefore" src="<?php echo get_template_directory_uri() . '/img/advantages-imgBefore.png' ; ?>">
                </div>
                <div class="advantages_item">
                    <h3 class="advantages_item-title">Мировые стандарты безопасности</h3>
                    <p class="advantages_item-desc">Выбирайте надежного брокера, который работает с клиентами более чем в 83 странах мира</p>
                    <img class="advantages_item-icon" src="<?php echo get_template_directory_uri() . '/img/advantages-3.svg' ; ?>">
                </div>
                <div class="advantages_item">
                    <h3 class="advantages_item-title">150+ инструментов</h3>
                    <p class="advantages_item-desc">Forex, акции, фьючерсы, индексы, металлы и энергоресурсы</p>
                    <img class="advantages_item-icon" src="<?php echo get_template_directory_uri() . '/img/advantages-4.svg' ; ?>">
                </div>
                <div class="advantages_item">
                    <h3 class="advantages_item-title">Мультиязычная поддержка 24/5</h3>
                    <p class="advantages_item-desc">Почувствуйте себя уверенно, зная,
                        что наша служба поддержки доступна
                        для вас в любое время дня и ночи,
                        с понедельника по пятницу</p>
                    <img class="advantages_item-icon" src="<?php echo get_template_directory_uri() . '/img/advantages-5.svg' ; ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="platform">
        <div class="container">
            <div class="platform-wrap">
                <div class="platform_text">
                    <h1 class="platform_text-title">Выберите свою платформу</h1>
                    <p class="platform_text-desc">Переходите на новый уровень трейдинга с<br> профессионально оснащенной платформой «United<br> Brokers». Доступны версии для ПК, веб и смартфонов.</p>
                    <button class="btn">Подробнее</button>
                </div>
                <div class="platform-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/platform.png' ; ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="questions">
        <div class="container">
            <h3 class="questions-title">Вопросы и ответы</h3>
            <div class="questions_accordion-items">
                <div class="questions_accordion-item">
                    <div class="questions_accordion-head">
                        <h4>Что такое криптовалюты?</h4>
                        <span></span>
                    </div>
                    <div class="questions_accordion-content">
                        <p><strong>Криптовалюты</strong> – относительно недавно возникшее явление в финансовом мире, стремительно набирающее популярность. Это цифровые деньги, в основе которых лежит децентрализованная открытая база – блокчейн, функционирующая на основе криптографических методов. Криптовалюты не имеют физического облика, они существуют лишь в электронном виде.</p>
                    </div>
                </div>
                <div class="questions_accordion-item">
                    <div class="questions_accordion-head">
                        <h4>Основные преимущества криптовалют</h4>
                        <span></span>
                    </div>
                    <div class="questions_accordion-content">
                        <p><strong>Криптовалюты</strong> – относительно недавно возникшее явление в финансовом мире, стремительно набирающее популярность. Это цифровые деньги, в основе которых лежит децентрализованная открытая база – блокчейн, функционирующая на основе криптографических методов. Криптовалюты не имеют физического облика, они существуют лишь в электронном виде.</p>
                    </div>
                </div>
            </div>
            <button class="questions-btn btn">Подробнее</button>
        </div>
    </section>
</main>
<?php get_footer(); ?>
