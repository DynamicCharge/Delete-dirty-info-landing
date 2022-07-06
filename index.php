<?php session_start();?>
<?
  $csrf = md5(uniqid(mt_rand(), true));
  $_SESSION['token'] = $csrf;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Управление репутацией Вашего бренда</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="yandex-verification" content="20b82a6811632c31" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link rel="shortcut icon" href="assets/images/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="assets/scripts/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/styles/app.min.css">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88957293, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88957293" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  </head>

  <body>
    <div class="wrapper">
      <header class="header">
        <div class="mycontainer">
          <div class="header__logo"><img src="assets/images/logo.svg" alt="" style="margin-left:-5px"></div>
          <nav class="header-menu"><a class="header-menu__href" href="#made">Главная</a><a class="header-menu__href" href="#about">О нас</a><a class="header-menu__href" href="#actual">Контакты</a></nav>
          <div class="header-info"><a class="header-info__tel" href="tel:+78126112333">+7 (812) 611-2-333</a>
          
            <div class="header-info__burger"><svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <line y1="1" x2="30" y2="1" stroke="#F9F9F9" stroke-width="2"></line>
              <line y1="9" x2="30" y2="9" stroke="#F9F9F9" stroke-width="2"></line>
              <line y1="17" x2="30" y2="17" stroke="#F9F9F9" stroke-width="2"></line>
              </svg>
            </div>
          </div>
        </div>
        <div class="header-popup">
          <div class="header-popup-menu"><a class="header-popup-menu__item" href="#made">Виды услуг</a><a class="header-popup-menu__item" href="#about">Что это такое</a><a class="header-popup-menu__item" href="#actual">Для кого</a><a class="header-popup-menu__item" href="#tasks">Решаемые задачи</a></div>
          <div class="header-popup-bot"><a class="header-popup-bot__tel" href="tel:+78126112333">+7 (812) 611-2-333</a><a class="header-popup-bot__btn popup__btn" href="#">Заказать звонок</a></div>
        </div>
      </header>
      <div class="content">
        <div class="main">
          <section class="main-banner">
            <div class="mycontainer">
              <div class="main-banner-col">
                <div class="main-banner-col__title">Удаление контента и материалов из интернета</div>
                <div class="main-banner-col__text">В интернет появилась негативная инфомарция о вашей компании?</div>
                  <ul class="main-banner-col__list">
                    <li>Конфиденциальность и тишина в СМИ</li>
                    <li>Законно удалим или сместим ее в поиске</li>
                    <li>Справимся с большим количеством материалов</li>
                  </ul>
                <div class="main-banner-col-bot">
                  <a class="main-banner-col-bot__btn popup__btn" href="#">Очистить интернет</a>
                <!-- <a class="main-banner-col-bot__text" href="#about">Как это работает?</a> -->
              </div>
              </div>
              <div class="main-banner-col"><img src="assets/images/banner.png" alt=""></div>
            </div>
          </section>
          <section class="main-made" id="made">
            <div class="mycontainer">
              <div class="title">Информацию которую мы можем удалить</div>
              <div class="description">
                Безопасность и приватность — наш главный приоритет. С высокой вероятностью предскажем “как будет после”. Открытость к диалогу и обсуждению вариантов, всегда позволяет подобрать
                максимально комфортное решение при решении сложных задач.
              </div>
              <div class="main-made-items">
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Материалы, нарушающие авторские права</div>
                  <div class="main-made-items-item__text">Фото, видео, статьи и их фрагменты и прочие артефакты</div>
                </div>
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Материалы, нарушающие конфиденциальность</div>
                  <div class="main-made-items-item__text">Личные данные, участие в фото, видео</div>
                </div>
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Устаревшие видео и каналы на YouTube</div>
                  <div class="main-made-items-item__text">Если действия совершались более 3-х месяцев назад</div>
                </div>
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Фото и видео из соцсетей</div>
                  <div class="main-made-items-item__text">Facebook, VK, OK, YouTube, Instagram</div>
                </div>
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Негативный PR</div>
                  <div class="main-made-items-item__text">Компрометирующие фото, видео, статьи, новости, отзывы</div>
                </div>
                <div class="main-made-items-item">
                  <svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"></path>
                  </svg>
                  <div class="main-made-items-item__title">Неактуальные материалы</div>
                  <div class="main-made-items-item__text">Фото, видео, которые устарели и не соответствуют имиджу</div>
                </div>
              </div>
            </div>
          </section>
          <section class="main-categories main-made" id="categories">
            <div class="mycontainer">
              <div class="title">Категории</div>
              <div class="description">
                  Чувствительная информация подразделяется на основные категории, чтобы использовать наиболее эффективных подходы к ее поиску и удалению
              </div>
              <div class="main-made-items">

                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Клевета</div>
                </div>
                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Ошибки молодости</div>
                </div>
                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Ложь</div>
                </div>
                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Судимость</div>
                </div>
                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Провокационные факты</div>
                </div>
                <div class="main-made-items-item">
                  <div class="main-made-items-item__title"><span>+</span>Черный PR</div>
                </div>

              </div>
              <a class="main-banner-col-bot__btn" href="#">Улучшить репутацию</a>
            </div>
          </section>

          <section class="main-working main-made" id="working">
            <div class="mycontainer">
              <div class="title">Как мы работаем</div>
              <ul class="working__list">
                <li class="working__list__item">
                  <span class="working__list__item__count">1</span>
                  <span class="working__list__item__desc">
                    Делаем <br>
                    полный анализ <br>
                    по заявке                    
                  </span>
                </li>
                <li class="working__list__item">
                  <span class="working__list__item__count">2</span>
                  <span class="working__list__item__desc">
                    Присылаем <br>
                    отчет и оценку <br>
                    стоимости
                  </span>
                </li>
                <li class="working__list__item">
                  <span class="working__list__item__count">3</span>
                  <span class="working__list__item__desc">
                    Подбираем <br>
                    эффективный <br>
                    метод                    
                  </span>
                </li>
                <li class="working__list__item">
                  <span class="working__list__item__count">4</span>
                  <span class="working__list__item__desc">
                    Деиндексируем, <br>
                     удаляем, <br>
                    смещаем
                  </span>
                </li>
                <li class="working__list__item">
                  <span class="working__list__item__count">5</span>
                  <span class="working__list__item__desc">
                    Оплата по факту <br>
                    выполненных <br>
                    работ                    
                  </span>
                </li>
              </ul>
            </div>
          </section>

          <section class="main-control" id="about">
            <div class="mycontainer">
              <div class="main-control-row">
                <div class="main-control-row-col">
                  <div class="title">Мы работаем для того, чтобы ваш бизнес привлекал как можно больше клиентов!</div>
                  <div class="main-control-row-col__text">Много лет специализируемся на решении кризисных ситуаций, занимаемся не просто удалением негатива, а в первую очередь безопасно решаем проблемы. Тихо и аккуратно делаем работу, доводим начатое до логического конца. Грамотно расставляем приоритеты, оцениваем риски и последствия — предлагаем наиболее эффективные варианты решений.</div>
				          <a class="main-banner-col-bot__btn popup__btn" href="#">Связаться с нами</a>
                </div>
                <div class="main-control-row-col">
                  <ul class="working__list">
                    <li class="working__list__item">
                      <div class="working__list__item__wrap">
                        <span class="working__list__item__count">40+</span>
                        <span class="working__list__item__desc">
                          Успешных <br>
                          кейсов                    
                        </span>
                      </div>
                    </li>
                    <li class="working__list__item">
                      <div class="working__list__item__wrap">
                        <span class="working__list__item__count">9</span>
                        <span class="working__list__item__desc">
                          лет успешной <br>
                          работы
                        </span>
                      </div>
                    </li>
                    <li class="working__list__item">
                      <div class="working__list__item__wrap">
                        <span class="working__list__item__count">15+</span>
                        <span class="working__list__item__desc">
                          высококлассных <br>
                          проффесионалов                   
                        </span>
                      </div>
                    </li>
                    <li class="working__list__item">
                      <div class="working__list__item__wrap">
                        <span class="working__list__item__count">!!!</span>
                        <span class="working__list__item__desc">
                          системный <br>
                          подход
                        </span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section class="main-made main-advantages" id="made">
            <div class="mycontainer">
              <div class="title">Наши преимущества</div>
              
              <div class="main-made-items">

                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                    Полная конфиденциальность <br>
                  </div>
                </div>
                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                    Полная конфиденциальность <br>
                  </div>
                </div>
                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                    Копим бесценный опыт с 2013 года <br>
                  </div>
                </div>
                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                    Наши партнеры крупные PR агентства <br>
                  </div>
                </div>
                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                      Негативная информация <br>
                      не появляется повторно
                  </div>
                </div>
                <div class="main-made-items-item">
                  <span class="_violet">+</span>
                  <div class="main-made-items-item__title">
                    Возможна оплата <br>
                     по результату работ
                  </div>
                </div>
                
              </div>
            </div>
          </section>

          <section class="main-business">
            <div class="mycontainer">
              <div class="title">Удалить чувстительную <br> информацию с нами просто!</div>
              <div class="main-business__text">Мы придержваемся правила: достойный сервис с высоким качеством услуги должен стоить разумно.</div>
              <div class="main-business-items">
                <div class="main-business-item">
                  <span class="main-business-item__name">Яндекс</span>
                  <span class="main-business-item__time">Срок: от 2 дней</span>
                </div>
                <div class="main-business-item">
                  <span class="main-business-item__name">Google</span>
                  <span class="main-business-item__time">Срок: от 5 дней</span>
                </div>
                <div class="main-business-item">
                  <span class="main-business-item__name">@ mail</span>
                  <span class="main-business-item__time">Срок: от 2 дней</span>
                </div>
              </div>
              <span class="main-business__desc">*Индивидуальный подход к ценообразованию</span>
              <a class="main-banner-col-bot__btn popup__btn" href="#">Заказать услугу</a>
            </div>
          </section>
          <!-- <section class="main-cases">
            <div class="mycontainer">
              <div class="title">Кейсы</div>
              <div class="main-cases-items"><a class="main-cases-items-item" href="#case1">
                  <div class="main-cases-items-item-info">
                    <div class="main-cases-items-item-info__title">Проблемный городской застройщик</div>
                    <div class="main-cases-items-item-info__time">Срок работы: 10 месяцев</div>
                  </div>
                  <div class="main-cases-items-item__text">Рост продаж с 0 до 100 млн рублей в месяц</div><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6777 6.00006C24.6777 5.44778 24.23 5.00006 23.6777 5.00006L14.6777 5.00007C14.1254 5.00007 13.6777 5.44778 13.6777 6.00007C13.6777 6.55235 14.1254 7.00006 14.6777 7.00007L22.6777 7.00006L22.6777 15.0001C22.6777 15.5523 23.1254 16.0001 23.6777 16.0001C24.23 16.0001 24.6777 15.5523 24.6777 15.0001L24.6777 6.00006ZM6.70711 24.3848L24.3848 6.70717L22.9706 5.29296L5.29289 22.9706L6.70711 24.3848Z" fill="#6F4FC9"/>
</svg></a><a class="main-cases-items-item" href="#case2">
                  <div class="main-cases-items-item-info">
                    <div class="main-cases-items-item-info__title">Загородный застройщик</div>
                    <div class="main-cases-items-item-info__time">Срок работы: 1 год</div>
                  </div>
                  <div class="main-cases-items-item__text">Вывели новичка рынка до второго по объему продаж загородного девелопера в регионе с долей рынка 10,2%</div><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6777 6.00006C24.6777 5.44778 24.23 5.00006 23.6777 5.00006L14.6777 5.00007C14.1254 5.00007 13.6777 5.44778 13.6777 6.00007C13.6777 6.55235 14.1254 7.00006 14.6777 7.00007L22.6777 7.00006L22.6777 15.0001C22.6777 15.5523 23.1254 16.0001 23.6777 16.0001C24.23 16.0001 24.6777 15.5523 24.6777 15.0001L24.6777 6.00006ZM6.70711 24.3848L24.3848 6.70717L22.9706 5.29296L5.29289 22.9706L6.70711 24.3848Z" fill="#6F4FC9"/>
</svg></a><a class="main-cases-items-item" href="#case4">
                  <div class="main-cases-items-item-info">
                    <div class="main-cases-items-item-info__title">Стоматологическая клиника</div>
                    <div class="main-cases-items-item-info__time">Срок работы: 6 месяцев</div>
                  </div>
                  <div class="main-cases-items-item__text">Увеличили прибыль на 1 млн рублей и число повторных обращений на 52%
</div><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6777 6.00006C24.6777 5.44778 24.23 5.00006 23.6777 5.00006L14.6777 5.00007C14.1254 5.00007 13.6777 5.44778 13.6777 6.00007C13.6777 6.55235 14.1254 7.00006 14.6777 7.00007L22.6777 7.00006L22.6777 15.0001C22.6777 15.5523 23.1254 16.0001 23.6777 16.0001C24.23 16.0001 24.6777 15.5523 24.6777 15.0001L24.6777 6.00006ZM6.70711 24.3848L24.3848 6.70717L22.9706 5.29296L5.29289 22.9706L6.70711 24.3848Z" fill="#6F4FC9"/>
</svg></a><a class="main-cases-items-item" href="#case3">
                  <div class="main-cases-items-item-info">
                    <div class="main-cases-items-item-info__title">Ключевой игрок на рынке элитной загородной недвижимости </div>
                    <div class="main-cases-items-item-info__time">Срок работы: 6 месяцев</div>
                  </div>
                  <div class="main-cases-items-item__text">Увеличили продажи и практически в 9 раз снизили число отказов</div><svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6777 6.00006C24.6777 5.44778 24.23 5.00006 23.6777 5.00006L14.6777 5.00007C14.1254 5.00007 13.6777 5.44778 13.6777 6.00007C13.6777 6.55235 14.1254 7.00006 14.6777 7.00007L22.6777 7.00006L22.6777 15.0001C22.6777 15.5523 23.1254 16.0001 23.6777 16.0001C24.23 16.0001 24.6777 15.5523 24.6777 15.0001L24.6777 6.00006ZM6.70711 24.3848L24.3848 6.70717L22.9706 5.29296L5.29289 22.9706L6.70711 24.3848Z" fill="#6F4FC9"/>
</svg></a></div>
              <div class="main-cases__more">Показать еще</div>
            </div>
          </section> -->
          <section class="main-made main__mistakes actual" >
            <div class="mycontainer">
              <div class="title">
                Ошибки при самостоятельной попытке почистить историю
              </div>
              <div class="main-made-items">
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Неграмотные переговоры с автором.</div>
                  <div class="main-made-items-item__text">Ускоренное распространение нежелательных материалов.</div>
                </div>
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Накрутка дизлайков или просмотров</div>
                  <div class="main-made-items-item__text">Ролик попадает под защиту YouTube с невозможностью удаления, блокировки.</div>
                </div>
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Подача жалобы на товарный знак.</div>
                  <div class="main-made-items-item__text">Агрессия со стороны автора, судебные разбирательства.</div>
                </div>
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Подача необоснованной жалобы на нарушение конфиденциальности</div>
                  <div class="main-made-items-item__text"> Отказ в решении проблемы и дальнейшее распространение личной информации.</div>
                </div>
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Жалобы на нарушение авторских прав без должных доказательств.</div>
                  <div class="main-made-items-item__text">Блокировка аккаунта заявителя.</div>
                </div>
                <div class="main-made-items-item"><svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 10L10.1404 18L26.4211 2" stroke="#542EFF" stroke-width="3"/>
</svg>
                  <div class="main-made-items-item__title">Заказ услуг у непроверенных компаний или специалистов.</div>
                  <div class="main-made-items-item__text">Потеря денег, повторное размещение удаленных материалов.</div>
                </div>
              </div>
            </div>
          </section>
          <!-- <section class="main-control tasks" id="tasks">
            <div class="mycontainer">
              <div class="title">Задачи, которые мы можем решить</div>
              <div class="main-control-row">
                <div class="main-control-row-col">
                  <div class="main-control-row-col__text">Уникальное решение помогает управлять репутацией в сети: создавать положительный имидж бренда и получать позитивные отзывы потребителей в выдаче поисковых систем.</div>
                  <div class="main-control-row-col-list">
                    <div class="main-control-row-col-list__item"><span>+</span> ORM</div>
                    <div class="main-control-row-col-list__item"><span>+</span> Мониторинг </div>
                    <div class="main-control-row-col-list__item"><span>+</span> SERM</div>
                    <div class="main-control-row-col-list__item"><span>+</span> Формирование положительного мнения</div>
                    <div class="main-control-row-col-list__item"><span>+</span> Вытеснение негатива</div>
                    <div class="main-control-row-col-list__item"><span>+</span> Деиндексация материалов</div>
                    <div class="main-control-row-col-list__item"><span>+</span> PR-продвижение</div>
                    <div class="main-control-row-col-list__item"><span>+</span> SERM</div>
                  </div><a class="main-control-row-col__btn popup__btn" href="#">Получить аудит репутации</a>
                </div>
                <div class="main-control-row-col"><img src="assets/images/screen8-banner.svg" alt=""></div>
              </div>
            </div>
          </section> -->
          <!-- <section class="main-serm">
            <div class="mycontainer">
              <div class="title">Сколько стоит управление репутацией?</div>
              <div class="main-serm-content">

                <div class="main-serm-content-row ac-trigger main-serm-content-row-flex">
                  <div class="main-serm-content-row__title">Мониторинг упоминаний</div>
                  <div class="main-serm-content-row-price"><span>от 25 000 рублей</span></div>
                  <div class="ac-trigger-button"></div>
                </div>

                <div class="ac-content main-serm-content-row__wrap" style="display: none;">

                  <div class="main-serm-content-row">
                    <div class="main-serm-content-row-col">
                      <div class="main-serm-content-row-col__subtitle">Что входит? </div>
                      <div class="main-serm-content-row-col__item"><span>•</span> подключение и настройка системы аналитики;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> подбор и согласование списка объектов мониторинга;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> разработка семантического ядра поисковых запросов;</div>
                      
					
					</div>
					<div class="main-serm-content-row-col">
                      <div class="main-serm-content-row-col__subtitle"></div>
                      <div class="main-serm-content-row-col__item"><span>•</span> разработка системы тегов;</div>
					  <div class="main-serm-content-row-col__item"><span>•</span> ручная обработка 100% собранных упоминаний;</div>
						<div class="main-serm-content-row-col__item"><span>•</span> подключение системы оповещения о кризисных сиутациях</div>
                    </div>

                  </div>
                  <div class="main-serm-content-row"><a class="main-serm-content-row__btn popup__btn" href="#">Улучшить репутацию</a>
                    <div class="main-serm-content-row-price"> <span>от 45 000 рублей</span>Без учета НДС</div>
                  </div>
                </div>

              </div>
			                <div class="main-serm-content">

                <div class="main-serm-content-row ac-trigger main-serm-content-row-flex">
                  <div class="main-serm-content-row__title">Комплексный ORM</div>
                  <div class="main-serm-content-row-price"><span>от 45 000 рублей</span></div>
                  <div class="ac-trigger-button"></div>
                </div>

                <div class="ac-content main-serm-content-row__wrap" style="display: none;">
                  <div class="main-serm-content-row">
                    <div class="main-serm-content-row__text">Уникальное решение помогает управлять репутацией в сети: создавать положительный имидж бренда и получать позитивные отзывы потребителей в выдаче поисковых систем.</div>
                  </div>
                  <div class="main-serm-content-row">
                    <div class="main-serm-content-row-col">
                      <div class="main-serm-content-row-col__subtitle">Предоставляем детальную аналитику и прозрачную отчетность:</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> проводим бесплатный аудит текущей репутации;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> прогнозируем динамику тональности в поисковой выдаче;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> ежедневно анализируем репутацию в выдаче;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> ежемесячно предоставляем детальные отчеты о проделанной работе.
</div>
                    </div>
                    <div class="main-serm-content-row-col">
                      <div class="main-serm-content-row-col__subtitle">Предлагаем эффективные решения:</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> берем в работу 30 запросов по бренду, отрасли, конкурентам;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> размещаем отзывы на площадках;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> размещаем 5 отзывов на сайт и создаем страницу отзывов;</div>
                      <div class="main-serm-content-row-col__item"><span>•</span> размещаем 5 отзывов в сервисах “Яндекс” и Google (Карты)</div>
                    </div>
                  </div>
                  <div class="main-serm-content-row"><a class="main-serm-content-row__btn popup__btn" href="#">Улучшить репутацию</a>
                    <div class="main-serm-content-row-price"> <span>от 45 000 рублей</span>Без учета НДС</div>
                  </div>
                </div>

              </div>
            </div>
          </section> -->


          
          <!-- <section class="main-faq">
            <div class="mycontainer">
              <div class="title">Ответы на вопросы</div>
              <div class="main-faq-item">
                <div class="main-faq-item__title">Что такое SERM?<span></span></div>
                <div class="main-faq-item__text">Это управление репутацией бренда в поисковых системах. SERM отвечает за все площадки в Интернете, где говорят о бренде. </div>
              </div>
              <div class="main-faq-item">
                <div class="main-faq-item__title">Что такое ORM?
<span></span></div>
                <div class="main-faq-item__text">Дословно с английского – управление репутацией в Интернете. ORM включает отслеживание упоминаний в Интернете, взаимодействие с площадками и другие действия для на поддержания позитивной репутации бренда или персоны.
</div>
              </div>
              <div class="main-faq-item">
                <div class="main-faq-item__title">Подойдет ли управление репутации для моей компании?<span></span></div>
                <div class="main-faq-item__text">Да, если она представлена в Интернете.
</div>
              </div>
              <div class="main-faq-item">
                <div class="main-faq-item__title">Принесет ли работа над репутацией экономическую выгоду?<span></span></div>
                <div class="main-faq-item__text">Безусловно. Подтверждение этому – наши успешные кейсы. </div>
              </div>
            </div>
          </section> -->
          <section class="main-form" id='actual'>
            <div class="mycontainer">
              <div class="main-form-content">
                <div class="main-form-content__info">
                  <span class="main-form-content__info__heading">Требуется помощь?</span>
                  <span class="main-form-content__info__desc">
                    Оставьте свои контакты, или свяжитесь с нами любым удобным способом
                  </span>
                  <a href="" class="main-form-content__info__link">+7 (812) 611-2-333</a>
                  <a href="" class="main-form-content__info__link">info@ra-studio.ru</a>
                  <div class="main-form-content__info__wrap">
                    <a href="" class="main-form-content__info__social"><img src="./assets/images/vk.svg" alt=""></a>
                    <a href="" class="main-form-content__info__social"><img src="./assets/images/tlg.svg" alt=""></a>
                  </div>
                </div>
                <form class="main-form-wrap-content-col general-form" action="#">
                  <div class="general-itemInput">
                    <input class="general-itemInput__input" name="name" type="text" data-required="" placeholder="Имя">
                  </div>
                  <div class="general-itemInput general-itemInput_50">
                    <input class="general-itemInput__input" name="tel" type="tel" data-type="tel" data-required="" placeholder="Телефон" autocomplete="off">
                  </div>
                  <div class="general-itemInput general-itemInput_50">
                    <input class="general-itemInput__input" name="email" type="text" data-type="email" placeholder="Электронная почта">
                  </div>
                  <input name="token" type="hidden" value="<?=$_SESSION['token']?>">
                  <div class="general-itemInput">
                    <input class="general-itemInput__input" name="descr" type="text" placeholder="Описание проекта">
                  </div>
                  <div class="general-bottomBlock">
                    <button class="general__btn" type="submit">Отправить заявку</button>
                    <p class="general-bottomBlock__text">Нажимая на кнопку, вы даете согласие</br><a class="privacy__btn" href="#"> на обработку персональных данных</a></p>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
        <div class="case-popup" id="case1">
          <div class="popup-wrap">
            <div class="popup__overlay"></div>
            <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
            </div>
            <div class="case-popup-content">
              <div class="case-popup-content__title">Проблемный городской застройщик</div>
              
              <p>  <b>Ситуация: </b>учредители поделили бизнес. Пока шел процесс разделения, все работы на нескольких объектах заморозили. Заказчик достраивал один из объектов. Чтобы улучшить финансирование проекта для продолжения строительства, ему пришлось с нуля решать репутационные задачи.
			  </p><!--<img src="assets/images/case.jpg" alt=""><span class="case-popup-content__imgspan">Новостройка в пригороде</span>-->
              <p><b>Как мы работали: </b>формировали положительную поисковую выдачу, оказывали информационную поддержку, выстраивали репутацию через лидеров мнений по смежной теме. </p>
			  <p><b>Результат: </b>за счет комплексной работы помогли компании вырасти по продажам от 0 до 100 млн рублей. Благодаря полученной прибыли заказчик смог достроить и сдать объект. </p>
          </div>
        </div>
      </div>
	          <div class="case-popup" id="case2">
          <div class="popup-wrap">
            <div class="popup__overlay"></div>
            <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
            </div>
            <div class="case-popup-content">
              <div class="case-popup-content__title">Загородный застройщик – Вывели новичка рынка до второго по объему продаж загородного девелопера в регионе с долей рынка 10,2%</div>
              
              <p>  <b>Ситуация: </b>новый застройщик владеет несколькими земельными участками за городом. На этих участках началось возведение коттеджных поселков
			  </p><!--<img src="assets/images/case.jpg" alt=""><span class="case-popup-content__imgspan">Новостройка в пригороде</span>-->
              <p><b>Как мы работали: </b>решали не только репутационные, но и маркетинговые задачи. Разработали с нуля всю концепцию сайта, начали популяризацию объектов в формате управления репутацией. Проводили скрытую рекламу, скрытый маркетинг. 
</p>
			  <p><b>Результат: </b>за полтора года вырастили застройщика с нуля до игрока, который своими продажами закрывает 10% от всех продаж на рынке. 
 </p>
          </div>
        </div>
      </div>
	  
	  	          <div class="case-popup" id="case3">
          <div class="popup-wrap">
            <div class="popup__overlay"></div>
            <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
            </div>
            <div class="case-popup-content">
              <div class="case-popup-content__title">Ключевой игрок на рынке элитной загородной недвижимости – Увеличили продажи и практически в 9 раз снизили число отказов</div>
              
              <p>  <b>Ситуация: </b>у клиента слетали сделки, когда потенциальные клиенты находили негативные оценки его работы. Отзывы касались проблем с ежемесячными платежами и оформлением собственности. В месяц срывалось 15-18 сделок.

			  </p><!--<img src="assets/images/case.jpg" alt=""><span class="case-popup-content__imgspan">Новостройка в пригороде</span>-->
              <p><b>Как мы работали: </b>поддерживали информационный фон в выдаче, занимались SERM, реагировали на упоминания, отслеживали любые напоминания об объектах и застройщике. 

</p>
			  <p><b>Результат: </b>снизили цифру до 1-2 отказов в течение 3-4 месяцев. Продажи выросли. 

 </p>
          </div>
        </div>
      </div>
	  
	  
	  
	  	  	          <div class="case-popup" id="case4">
          <div class="popup-wrap">
            <div class="popup__overlay"></div>
            <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
            </div>
            <div class="case-popup-content">
              <div class="case-popup-content__title">Стоматологическая клиника – Увеличили прибыль на 1 млн рублей и число повторных обращений на 52%</div>
              
              <p>  <b>Ситуация: </b>частная клиника стоматологии обратилась с запросом на выстраивание положительной репутации и увеличение рейтингов


			  </p><!--<img src="assets/images/case.jpg" alt=""><span class="case-popup-content__imgspan">Новостройка в пригороде</span>-->
              <p><b>Как мы работали: </b>решали маркетинговые задачи, налаживали репутационную поддержку в сети Интернет.
 

</p>
			  <p><b>Результат: </b>мы увеличили количество первичных посетителей на 52% и рейтинги на профильных порталах и в Яндекс картах. Прибыль клиники возросла с 2 млн рублей до 3 млн рублей.


 </p>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="mycontainer">
          <div class="footer-col">
            <div class="footer-col__logo"><img src="assets/images/logo.svg" alt="" style="margin-left:-10px"></div>
            
            <div class="footer-col__last">© RA-Studio 2022.&nbsp;</br>Репутационное агентство.</div>
          </div>
          <div class="footer-col">
            <div class="footer-col__title">Социальные сети</div>
            <div class="footer-col-row"><a href="https://vk.com/ra_studio" target="_blank">VK</a></div><a class="footer-col__last privacy__btn" href="#">Политика конфиденциальности</a>
          </div>
          <div class="footer-col">
            <div class="footer-col__title">Контакты</div><a href="tel:88126112333">8 (812) 611-2-333</a><a href="mailto:info@ra-studio.ru">info@ra-studio.ru</a><a class="footer-col__last popup__btn popup__btn" href="#">Написать нам</a>
          </div>
        </div>
      </footer>
      <div class="popup">
        <div class="popup-wrap">
          <div class="popup__overlay"></div>
          <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
          </div>
          <form class="popup-form" action="#">
            <div class="popup-form__title">Удалим ненужную информацию из инернета</div>
            <div class="popup-form-content general-form">
              <div class="general-itemInput">
                <input class="general-itemInput__input" name="name" type="text" data-required="" placeholder="Имя">
              </div>
              <div class="general-itemInput general-itemInput_50">
                <input class="general-itemInput__input" name="tel" type="tel" data-type="tel" data-required="" placeholder="Телефон" autocomplete="off">
              </div>
              <div class="general-itemInput general-itemInput_50">
                <input class="general-itemInput__input" name="email" type="text" data-type="email" placeholder="Электронная почта">
              </div>
              <div class="general-itemInput">
                <input class="general-itemInput__input" name="descr" type="text" placeholder="Описание проекта">
                <input name="token" type="hidden" value="<?=$_SESSION['token']?>">
              </div>
              <div class="general-bottomBlock">
                <button class="general__btn" type="submit">Отправить</button>
                <p class="general-bottomBlock__text">Заполняя форму, вы соглашаетесь с <a class="privacy__btn" href="#">политикой конфиденциальности</a></p>
              </div>
            </div>
          </form>
          <div class="popup-success"><span>👍 </span>Ваша заявку успешно отправлена, мы скоро свяжемся с вами!</div>
        </div>
      </div>
      <div class="privacy">
        <div class="popup-wrap">
          <div class="popup__overlay"></div>
          <div class="popup__close"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31 1L16 16M1 31L16 16M16 16L31 31M16 16L1 1" stroke="#F9F9F9" stroke-width="2"/>
</svg>
          </div>
          <div class="popup-privacy">
            <div class="popup-privacy-wrap">
              <div class="popup-privacy__title">Положение о политике конфиденциальности</div>
              <p>Обработку персональных данных, полученных на настоящем сайте, осуществляет ООО «РА-Студио» <br>Настоящее Положение о политике конфиденциальности (далее — Положение) является официальным документом ООО «РА-Студио», расположенного по адресу: Санкт-Петербург, ул Кооперативная д 20, лит Б, офис 320 (далее — «Компания») и определяет порядок обработки и защиты информации о физических лицах (далее — Пользователи), пользующихся сервисами, информацией и услугами сайта, расположенного на доменном имени support.ra-studio.ru (далее — Сайт).<br>Положение описывает, как Компания осуществляет обработку персональных данных — а именно, любые действия (операции) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.<br>Отношения, связанные с обработкой персональных данных и информации о пользователях Сайта, регулируются настоящим Положением, иными официальными документами Компании и действующим законодательством РФ.<br>Настоящее Положение распространяется на обработку личных, персональных данных, собранных любыми средствами, как активными, так и пассивными, как через Интернет, так и без его использования, от лиц, находящихся в любой точке мира.<br>ООО «РА-Студио» оставляет за собой право вносить любые изменения в данный текст без предварительного оповещения пользователей данного сайта.</p>
              <div class="popup-privacy__subtitle">Персональные данные</div>
              <p>Компания не имеет намерения собирать информацию, относимую действующим законодательством Российской Федерации к персональным данным, например, Ваши фамилию, имя, отчество, год, месяц, дату и место рождения, адрес, семейное, социальное, имущественное положение, образование, профессия, доходы, номер телефона, адрес электронной почты и другую информацию («Персональные данные»), через Сайт, за исключением случаев, когда Персональные данные были предоставлены вами добровольно.</p>
              <div class="popup-privacy__subtitle">Данные, которые мы собираем автоматически</div>
              <p>Вы можете просматривать Сайт, не сообщая Компании своих персональных данных.<br>Информация, которую Компания собирает во время просмотра Сайта, - это информация из стандартных журналов регистрации сервера (server logs). Сюда входит ваш IP- адрес (адрес Интернет-протокола), имя домена, тип браузера и операционной системы, а также информация о веб-сайте, с которого вы пришли на Сайт, файлах, которые вы загружаете, страницах, которые вы посещаете, и дате/времени этих посещений. Компания использует cookies для определения уникального идентификатора доступа пользователя к Cайту.<br>Cookies - это небольшой объем информации, посылаемый с веб-сервера на Ваш браузер. Обычно он используется для однозначной идентификации вашего компьютера и надежного хранения такой информации, как идентификатор, пароль, предпочтения и онлайновые характеристики пользователя. Он хранится на жестком диске Вашего компьютера. Путем настройки программного обеспечения Вы можете запретить использование cookies на своем компьютере, однако это может привести к частичной или полной потере функциональности Сайта.</p>
              <div class="popup-privacy__subtitle">Данные, которые вы предоставляете лично</div>
              <p>Если Вы посредством Сайта запрашиваете информацию, хотите получить консультацию, заполняете форму для комментариев, отзывов и т.д., Вас попросят предоставить персональные данные, такие как Ваше имя, и адрес электронной почты, номер Вашего телефона. Вы сами принимаете решение о предоставлении своих персональных данных.<br>Предоставляя персональные данные, Вы тем самым даете согласие на их обработку и принимаете политику конфиденциальности Компании.<br>Сайт не содержит персональные данные 1-й категории (персональные данные, касающиеся расовой, национальной принадлежности, политических взглядов, религиозных и философских убеждений, состояния здоровья, интимной жизни). Вопросы и отзывы о работе Компании и ее сотрудниках, присланные посетителями Сайта, считаются открытой общедоступной информацией и размещаются в соответствующих разделах. Авторы вопросов и отзывов представлены максимально обезличено (Имя). Личная информация, предоставленная Вами при заполнении соответствующих форм «Отзыв» и «Задать вопрос» (e-mail, номер телефона), размещенных на Сайте, при публикации вопросов и отзывов на Сайте не указывается.<br>Персональные данные, оставленные Вами при заполнении формы Комплексную техническую поддержку и развитие Вашего сайта», доступны только сотрудникам Компании и не подлежат размещению в общем доступе. Такие данные используются исключительно в целях предоставления запрашиваемой посетителями Сайта услуги и обрабатываются до тех пор, пока в этом есть необходимость в целях исполнения запрашиваемой посетителем Сайта услуги.</p>
              <div class="popup-privacy__subtitle">Цели использования персональных данных</div>
              <p>Компания может собирать и использовать персональные данные, которые вы предоставляете через Сайт, в следующих целях:</p>
              <ol>
                <li>Предоставление Вам как потребителю качественных услуг;</li>
                <li>Ответы на Ваши вопросы, предоставление информации по той или иной интересующей вас теме;</li>
                <li>Принятие к сведению и учету мнений о работе Компании и ее специалистов;</li>
                <li>В других целях, которые могут стать очевидными из обстоятельств, о возникновении которых Компания обязуется уведомить вас при сборе персональных данных.</li>
              </ol>
              <div class="popup-privacy__subtitle">Хранение и использование персональной информации</div>
              <p>Хранение Ваших персональных данных будет осуществляться Компанией столько, сколько необходимо для выполнения целей, для которых эти персональные данные были собраны, с учетом применимых правил и норм, касающихсядлительности хранения персональных данных, предусмотренных действующим законодательством.<br>Вы в любое время можете потребовать удалить, исправить или дополнить ваши персональные данные, связавшись с Компанией.<br>Компания обеспечивает соблюдение сотрудниками настоящего Положения о политике конфиденциальности и обучает их способам обработки, безопасного управления и контроля за персональными данными.<br>Компания, за исключением случаев, специально отмеченных в настоящем Положении, не будет передавать ваши персональные данные третьим лицам без вашего предварительного согласия на такую передачу.<br>Персональные данные могут быть переданы третьей стороне в той степени, в которой это допускается применимым законодательством, в случае, если Сайт или его часть вместе с клиентскими данными, связанными с ним, будут проданы,  правопреемнику или цессионарию Компанией будут предъявлены требования об обращении с персональными данными в соответствии с настоящим Положением о конфиденциальности.<br>Компания сохраняет за собой право на раскрытие персональных данных в ответ на запрос о предоставлении информации от государственных органов или по иному основанию в соответствии с требованиями применимого законодательства.</p></p>
              <div class="popup-privacy__subtitle">Обратная связь</div>
              <p>Любые вопросы, комментарии и жалобы касательно защиты Персональных данных вы можете направлять по адресу: 197022, Санкт-Петербург, БЦ "Кантемировский", ул Инструментальная д 3, лит Б, офис 206, электронному адресу: info@ra-studio.ru или по телефону: +7 (812) 611-2-333.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/scripts/jquery.js"></script>
    <script src="assets/scripts/inputmask.js"></script>
    <script src="assets/scripts/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/scripts/validation.js"></script>
    <script src="assets/scripts/main.js"></script>
  </body>
</html>