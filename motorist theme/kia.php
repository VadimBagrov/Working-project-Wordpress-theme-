<?php
/*
Template Name: kia
*/

?>

<?php get_header(); ?>

<main class="main">
    <section class="breadcrumbs container">
      <a class="breadcrumbs__text" href="home">ГЛАВНАЯ</a>
      <p class="breadcrumbs__text">»</p>
      <a class="breadcrumbs__text" href="kap-rem-dvs.html">РЕМОНТ ДВИГАТЕЛЯ</a>
    </section>

    <section class="car container">
      <div class="car__img">
        <img class="car__photo" src="<?php the_field('gl-photo'); ?>" alt="mitsubishi">
      </div>
      <div class="car__right">
        <h1 class="car__title">Ремонт двигателя <span class="colortext">Mitsubishi (Митсубиси)</span></h1>
        <div class="car__works">

        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'каталог-услугбренды',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
          <a href="<?php the_content() ?>" class="car__work ">
            <?php the_post_thumbnail('full', array('class' => 'car__images')); ?>
            <p class="car__text hover-text"><?php the_title() ?></p>
          </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>

        </div>
      </div>
    </section>
    <div class="forma__main forma__main--none">
        <div class="forma__close">
          <img class='forma__cl-png' src="http://localhost:8888/wp-content/uploads/2024/05/close-red.png" alt="close">
        </div>
        <div class="forma__div">
          <p class="forma__text-m">
            Оставьте ваши контакты
          </p>
        </div>
        <form class="" action="#" method="post">
          <div class="forma__text-t">
          </div>
          <div class="forma__text-b">
          </div>
          <?php echo do_shortcode('[contact-form-7 id="537b6f6" title="Контактная форма"]') ?>
        </form>
        <p class="forma__d forma__pol">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    <section class="mit container">
      <h3 class="mit__title advantages__title"> Выбор модели</h3>
      <div class="mit__block">
        <img class="mit__prev prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="mit__blocks slider3 multiple-items2">

        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'выбор-модели-слайдер',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>

            <div class="mit__car">
            <?php the_post_thumbnail('full', array('class' => 'mit__img')); ?>
            <div class="mit__bottom">
              <p class="mit__name"><?php the_title() ?></p>
              <button class="mit__send popup-sva" type="submit">Записаться</button>
            </div>
          </div>

      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
        


        </div>
        <img class="mit__next next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
      <button class="mit__all" type="submit">Показать все</button>
    </section>

    <section class="mit2 container mit--all-none">
      <h3 class="mit2__title advantages__title"> Выбор модели</h3>
      <div class="mit2__block">
        <div class="mit2__blocks">
        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'выбор-модели-слайдер',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>

            <div class="mit__car">
            <?php the_post_thumbnail('full', array('class' => 'mit__img')); ?>
            <div class="mit__bottom">
              <p class="mit__name"><?php the_title() ?></p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
        

        </div>
      </div>
    </section>

    <section class="seo container">
      <div class="seo__block">
        <h2 class="seo__title">
          Качественный ремонт двигателей <span class="colortext">в Москве</span>
        </h2>
        <p class="seo__text">
          Специализированный сервис Toyota Motors Club обладает огромным опытом по ремонту двигателей и комплексному
          обслуживанию автомобилей от ведущих производителей: Тойота, Лексус, Kia, Hyundai, Nissan .Мы предлагаем полный
          цикл работ по ремонту двигателей,сочетаем в своей работе гарантии качества, надежность, высокие стандарты и
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          Автотехцентр MotoristDVS в Москве предлагает услуги обслуживание и ремонт...
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
        </p>
      </div>
      <button class="seo__bolee">
        <p class="seo__bolee-text hover-text">Развернуть ↓
        </p>
      </button>
    </section>
    <section class="out container">
      <h3 class="out__title advantages__title"> Примеры наших работ</h3>
      <div class="out__imgs">
        <img class="prev mit__prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="slider2 multiple-items">
          <img class="out__img" src="<?php the_field('izo-1') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-2') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-3') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-4') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-5') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-6') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-7') ?>" alt="images">

        </div>
        <img class="next mit__next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
    </section>

    <section class="forma container">
      <div class="forma__left">
        <h5 class="forma__text">Есть сомнения в исправности двигателя?</h5>
        <h3 class="forma__title">Получите <span class="colortext">бесплатную</span> консультацию от <span
            class="colortext">ведущего</span> моториста</h3>
      </div>
      <div class="forma__right">
        <form class="forma__form" action="#" method="post">
          <div class="forma__text-top">
            <input class="forma__name" type="text" placeholder="Ваше имя">
            <input class="forma__number" type="text" placeholder="Номер телефона">
          </div>
          <div class="forma__text-bottom">
            <button class="forma__send" type="submit">Оставить заявку</button>
          </div>
        </form>
        <p class="forma__data">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    </section>

    <section class="advantages container">
      <h5 class="advantages__title">Почему выбирают наш автотехцентр?</h5>
      <div class="advantages__blocks">
        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/heart.svg" alt="heart">
          <p class="advantages__top">Любимое дело</p>
          <p class="advantages__bottom">Стаж мастеров<br />минимум от 10 лет.<br />Они выбирали<br />любимую проффесию.
          </p>
        </div>

        <div class="advantages__block advantages__block2">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
          <p class="advantages__top">Надежность</p>
          <p class="advantages__bottom">90% запчастей<br />ориигнальные и всегда есть<br />в наличии на складе.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
          <p class="advantages__top">Опыт с 99 года</p>
          <p class="advantages__bottom">50% механиков<br />Работают со дня<br /> основания техцентра.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
          <p class="advantages__top">Удобное<br />расположение</p>
          <p class="advantages__bottom">В 400 метрах<br />
            от метро Стахановская.</p>
        </div>

      </div>
    </section>

    <section class="service-con">
      <div class="service container">
        <h6 class="service__title">Стоимость услуг</h6>
        <div class="service__block">
          <div class="service__left">
            <p class="service__left-title">Узлы автомобиля</p>
            <div class="service__left-df">

              <button class="service__left-block service__dv hovver service__dvs" id="service__dvs">
                <div class="service__bl">
                  <p class="service__text">Двигатель</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__tr service__tran">
                <div class="service__bl">
                  <p class="service__text">Трансмиссия</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__obs service__obsl catalog__more catalog__bottom-bl caralog__mob">
                <div class="service__bl">
                  <p class="service__text">Обслуживание</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>
            </div>
          </div>
          <div class="service__right">
            <div class="service__right-top">
              <p class="service__name">Наименование работ</p>
              <p class="service__price">Стоимость</p>
            </div>

            <div class="service__general">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__dvigatel service__dvigatel--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__transmission service__transmission--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>


            </div>

            <div class="service__obslug service__obslug--none">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>


              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>

            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="question container">
      <div class="question__left">
        <h3 class="question__title">Остались вопросы?</h3>
        <h5 class="question__text">Наш мастер с радостью на них ответит.
          Проконсультирует по стоимости ремонта и
          предложит индивидуальный план ремонта.</h5>
      </div>
      <div class="question__right">
        <form class="question__form" action="#" method="post">
        <?php echo do_shortcode('[contact-form-7 id="c090df8" title="Остались вопросы?"]') ?>
        </form>
      </div>
    </section>

    <section class="contacts container">
      <div class="contacts__block-top">
        <h5 class="contacts__title">Наши<span class="colortext"> контакты</span> </h5>
      </div>
      <div class="contacts__block-bottom">
        <div class="contacts__left">

          <div class="contacts__addres">
            <div class="contacts__adress-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/addres.svg" alt="addres">
              <h6 class="contacts__block-title contacts__addres-t">Адрес</h6>
            </div>
            <p class="contacts__block-text">г. Москва ул.Шоссе энтузиастов 31с40</p>
          </div>
          <div class="contacts__bl-bottom">
            <div class="contacts__phone">
              <div class="contacts__phone-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/phone.svg" alt="addres">
                <h6 class="contacts__block-title contacts__phone-t">Телефоны</h6>
              </div>
              <p class="contacts__block-text hover-text">+7 (495) 701-81-41<br />+7 (916) 755-81-41</p>
            </div>

            <div class="contacts__email">
              <div class="contacts__email-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
                <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
              </div>
              <p class="contacts__block-tex hover-textt">motoristdvs@info.ru</p>
            </div>
          </div>
          <div class="contacts__work">
            <div class="contacts__work-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/clock1.svg" alt="addres">
              <h6 class="contacts__block-title contacts__work-t">Режим работы</h6>
            </div>
            <p class="contacts__block-text">
            <ul class="contacts__ul">
              <li class="contacts__li">
                По будням - с 8:00 до 20:00 (без перерыров)
              </li>
              <li class="contacts__li">
                В субботу и воскресенье - с 10:00 до 16:00 (без перерывов)
              </li>
            </ul>
            </p>
          </div>


        </div>
        <div class="contacts__right">
          <iframe class="contacts__map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Af2c8fa74fac010ca4e84c685711083c206d0c9f6142294b02cba51a8d9ef8825&amp;source=constructor"
            width="500" height="400" frameborder="0"></iframe>
        </div>
      </div>

    </section>
  </main>
    <section class="breadcrumbs container">
      <a class="breadcrumbs__text" href="home">ГЛАВНАЯ</a>
      <p class="breadcrumbs__text">»</p>
      <a class="breadcrumbs__text" href="kap-rem-dvs.html">РЕМОНТ ДВИГАТЕЛЯ</a>
    </section>

    <section class="car container">
      <div class="car__img">
        <img class="car__photo" src="<?php the_field('gl-photo'); ?>" alt="mitsubishi">
      </div>
      <div class="car__right">
        <h1 class="car__title">Ремонт двигателя <span class="colortext">Mitsubishi (Митсубиси)</span></h1>
        <div class="car__works">

        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'каталог-услугбренды',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
          <a href="<?php the_content() ?>" class="car__work ">
            <?php the_post_thumbnail('full', array('class' => 'car__images')); ?>
            <p class="car__text hover-text"><?php the_title() ?></p>
          </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>

        </div>
      </div>
    </section>
    <div class="forma__main forma__main--none">
        <div class="forma__close">
          <img class='forma__cl-png' src="http://localhost:8888/wp-content/uploads/2024/05/close-red.png" alt="close">
        </div>
        <div class="forma__div">
          <p class="forma__text-m">
            Оставьте ваши контакты
          </p>
        </div>
        <form class="" action="#" method="post">
          <div class="forma__text-t">
          </div>
          <div class="forma__text-b">
          </div>
          <?php echo do_shortcode('[contact-form-7 id="537b6f6" title="Контактная форма"]') ?>
        </form>
        <p class="forma__d forma__pol">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    <section class="mit container">
      <h3 class="mit__title advantages__title"> Выбор модели</h3>
      <div class="mit__block">
        <img class="mit__prev prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="mit__blocks slider3 multiple-items2">

        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'выбор-модели-слайдер',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>

            <div class="mit__car">
            <?php the_post_thumbnail('full', array('class' => 'mit__img')); ?>
            <div class="mit__bottom">
              <p class="mit__name"><?php the_title() ?></p>
              <button class="mit__send popup-sva" type="submit">Записаться</button>
            </div>
          </div>

      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
        


        </div>
        <img class="mit__next next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
      <button class="mit__all" type="submit">Показать все</button>
    </section>

    <section class="mit2 container mit--all-none">
      <h3 class="mit2__title advantages__title"> Выбор модели</h3>
      <div class="mit2__block">
        <div class="mit2__blocks">
        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'выбор-модели-слайдер',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>

            <div class="mit__car">
            <?php the_post_thumbnail('full', array('class' => 'mit__img')); ?>
            <div class="mit__bottom">
              <p class="mit__name"><?php the_title() ?></p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
        

        </div>
      </div>
    </section>

    <section class="seo container">
      <div class="seo__block">
        <h2 class="seo__title">
          Качественный ремонт двигателей <span class="colortext">в Москве</span>
        </h2>
        <p class="seo__text">
          Специализированный сервис Toyota Motors Club обладает огромным опытом по ремонту двигателей и комплексному
          обслуживанию автомобилей от ведущих производителей: Тойота, Лексус, Kia, Hyundai, Nissan .Мы предлагаем полный
          цикл работ по ремонту двигателей,сочетаем в своей работе гарантии качества, надежность, высокие стандарты и
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          Автотехцентр MotoristDVS в Москве предлагает услуги обслуживание и ремонт...
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
        </p>
      </div>
      <button class="seo__bolee">
        <p class="seo__bolee-text hover-text">Развернуть ↓
        </p>
      </button>
    </section>
    <section class="out container">
      <h3 class="out__title advantages__title"> Примеры наших работ</h3>
      <div class="out__imgs">
        <img class="prev mit__prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="slider2 multiple-items">
          <img class="out__img" src="<?php the_field('izo-1') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-2') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-3') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-4') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-5') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-6') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-7') ?>" alt="images">

        </div>
        <img class="next mit__next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
    </section>

    <section class="forma container">
      <div class="forma__left">
        <h5 class="forma__text">Есть сомнения в исправности двигателя?</h5>
        <h3 class="forma__title">Получите <span class="colortext">бесплатную</span> консультацию от <span
            class="colortext">ведущего</span> моториста</h3>
      </div>
      <div class="forma__right">
        <form class="forma__form" action="#" method="post">
          <div class="forma__text-top">
            <input class="forma__name" type="text" placeholder="Ваше имя">
            <input class="forma__number" type="text" placeholder="Номер телефона">
          </div>
          <div class="forma__text-bottom">
            <button class="forma__send" type="submit">Оставить заявку</button>
          </div>
        </form>
        <p class="forma__data">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    </section>

    <section class="advantages container">
      <h5 class="advantages__title">Почему выбирают наш автотехцентр?</h5>
      <div class="advantages__blocks">
        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/heart.svg" alt="heart">
          <p class="advantages__top">Любимое дело</p>
          <p class="advantages__bottom">Стаж мастеров<br />минимум от 10 лет.<br />Они выбирали<br />любимую проффесию.
          </p>
        </div>

        <div class="advantages__block advantages__block2">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
          <p class="advantages__top">Надежность</p>
          <p class="advantages__bottom">90% запчастей<br />ориигнальные и всегда есть<br />в наличии на складе.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
          <p class="advantages__top">Опыт с 99 года</p>
          <p class="advantages__bottom">50% механиков<br />Работают со дня<br /> основания техцентра.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
          <p class="advantages__top">Удобное<br />расположение</p>
          <p class="advantages__bottom">В 400 метрах<br />
            от метро Стахановская.</p>
        </div>

      </div>
    </section>

    <section class="service-con">
      <div class="service container">
        <h6 class="service__title">Стоимость услуг</h6>
        <div class="service__block">
          <div class="service__left">
            <p class="service__left-title">Узлы автомобиля</p>
            <div class="service__left-df">

              <button class="service__left-block service__dv hovver service__dvs" id="service__dvs">
                <div class="service__bl">
                  <p class="service__text">Двигатель</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__tr service__tran">
                <div class="service__bl">
                  <p class="service__text">Трансмиссия</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__obs service__obsl catalog__more catalog__bottom-bl caralog__mob">
                <div class="service__bl">
                  <p class="service__text">Обслуживание</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>
            </div>
          </div>
          <div class="service__right">
            <div class="service__right-top">
              <p class="service__name">Наименование работ</p>
              <p class="service__price">Стоимость</p>
            </div>

            <div class="service__general">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__dvigatel service__dvigatel--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__transmission service__transmission--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>


            </div>

            <div class="service__obslug service__obslug--none">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>


              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>

            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="question container">
      <div class="question__left">
        <h3 class="question__title">Остались вопросы?</h3>
        <h5 class="question__text">Наш мастер с радостью на них ответит.
          Проконсультирует по стоимости ремонта и
          предложит индивидуальный план ремонта.</h5>
      </div>
      <div class="question__right">
        <form class="question__form" action="#" method="post">
        <?php echo do_shortcode('[contact-form-7 id="c090df8" title="Остались вопросы?"]') ?>
        </form>
      </div>
    </section>

    <section class="contacts container">
      <div class="contacts__block-top">
        <h5 class="contacts__title">Наши<span class="colortext"> контакты</span> </h5>
      </div>
      <div class="contacts__block-bottom">
        <div class="contacts__left">

          <div class="contacts__addres">
            <div class="contacts__adress-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/addres.svg" alt="addres">
              <h6 class="contacts__block-title contacts__addres-t">Адрес</h6>
            </div>
            <p class="contacts__block-text">г. Москва ул.Шоссе энтузиастов 31с40</p>
          </div>
          <div class="contacts__bl-bottom">
            <div class="contacts__phone">
              <div class="contacts__phone-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/phone.svg" alt="addres">
                <h6 class="contacts__block-title contacts__phone-t">Телефоны</h6>
              </div>
              <p class="contacts__block-text hover-text">+7 (495) 701-81-41<br />+7 (916) 755-81-41</p>
            </div>

            <div class="contacts__email">
              <div class="contacts__email-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
                <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
              </div>
              <p class="contacts__block-tex hover-textt">motoristdvs@info.ru</p>
            </div>
          </div>
          <div class="contacts__work">
            <div class="contacts__work-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/clock1.svg" alt="addres">
              <h6 class="contacts__block-title contacts__work-t">Режим работы</h6>
            </div>
            <p class="contacts__block-text">
            <ul class="contacts__ul">
              <li class="contacts__li">
                По будням - с 8:00 до 20:00 (без перерыров)
              </li>
              <li class="contacts__li">
                В субботу и воскресенье - с 10:00 до 16:00 (без перерывов)
              </li>
            </ul>
            </p>
          </div>


        </div>
        <div class="contacts__right">
          <iframe class="contacts__map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Af2c8fa74fac010ca4e84c685711083c206d0c9f6142294b02cba51a8d9ef8825&amp;source=constructor"
            width="500" height="400" frameborder="0"></iframe>
        </div>
      </div>

    </section>
  </main>
    <section class="breadcrumbs container">
      <a class="breadcrumbs__text" href="home">ГЛАВНАЯ</a>
      <p class="breadcrumbs__text">»</p>
      <a class="breadcrumbs__text" href="kap-rem-dvs.html">РЕМОНТ ДВИГАТЕЛЯ</a>
    </section>

    <section class="car container">
      <div class="car__img">
        <img class="car__photo" src="<?php the_field('gl-photo'); ?>" alt="mitsubishi">
      </div>
      <div class="car__right">
        <h1 class="car__title">Ремонт двигателя <span class="colortext">Mitsubishi (Митсубиси)</span></h1>
        <div class="car__works">

        <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'каталог-услугбренды',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
          <a href="<?php the_content() ?>" class="car__work ">
            <?php the_post_thumbnail('full', array('class' => 'car__images')); ?>
            <p class="car__text hover-text"><?php the_title() ?></p>
          </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>

        </div>
      </div>
    </section>
    <div class="forma__main forma__main--none">
        <div class="forma__close">
          <img class='forma__cl-png' src="http://localhost:8888/wp-content/uploads/2024/05/close-red.png" alt="close">
        </div>
        <div class="forma__div">
          <p class="forma__text-m">
            Оставьте ваши контакты
          </p>
        </div>
        <form class="" action="#" method="post">
          <div class="forma__text-t">
          </div>
          <div class="forma__text-b">
          </div>
          <?php echo do_shortcode('[contact-form-7 id="537b6f6" title="Контактная форма"]') ?>
        </form>
        <p class="forma__d forma__pol">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    <section class="mit container">
      <h3 class="mit__title advantages__title"> Выбор модели</h3>
      <div class="mit__block">
        <img class="mit__prev prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="mit__blocks slider3 multiple-items2">
          <div class="mit__car">
            <img class="mit__img" src="<?php echo B__IMG ?>/assets/images/src/pajero_sport.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name">Pajero sport</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

          <div class="mit__car">
            <img class="mit__img" src="<?php echo B__IMG ?>/assets/images/src/outlander2.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name">Oulander</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit__car">
            <img class="mit__img" src="<?php echo B__IMG ?>/assets/images/src/pajero.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name">Pajero</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit__car">
            <img class="mit__img" src="<?php echo B__IMG ?>/assets/images/src/lancer.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name">Lancer</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit__car">
            <img class="mit__img" src="<?php echo B__IMG ?>/assets/images/src/asx.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name">Asx</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit__car">
            <img class="mit__img mit__l200" src="<?php echo B__IMG ?>/assets/images/src/l200.png" alt="images">
            <div class="mit__bottom">
              <p class="mit__name ">L200</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

        </div>
        <img class="mit__next next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
      <button class="mit__all" type="submit">Показать все</button>
    </section>

    <section class="mit2 container mit--all-none">
      <h3 class="mit2__title advantages__title"> Выбор модели</h3>
      <div class="mit2__block">
        <div class="mit2__blocks">
          <div class="mit2__car">
            <img class="mit2__img" src="<?php echo B__IMG ?>/assets/images/src/pajero_sport.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name">Pajero Sport</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

          <div class="mit2__car">
            <img class="mit2__img" src="<?php echo B__IMG ?>/assets/images/src/outlander2.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name">Oulander</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit2__car">
            <img class="mit2__img" src="<?php echo B__IMG ?>/assets/images/src/pajero.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name">Pajero</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit2__car">
            <img class="mit2__img" src="<?php echo B__IMG ?>/assets/images/src/lancer.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name">Lancer</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit2__car">
            <img class="mit2__img" src="<?php echo B__IMG ?>/assets/images/src/asx.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name">Asx</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>
          <div class="mit2__car">
            <img class="mit2__img mit__l200" src="<?php echo B__IMG ?>/assets/images/src/l200.png" alt="images">
            <div class="mit2__bottom">
              <p class="mit__name ">L200</p>
              <button class="mit__send" type="submit">Записаться</button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="seo container">
      <div class="seo__block">
        <h2 class="seo__title">
          Качественный ремонт двигателей <span class="colortext">в Москве</span>
        </h2>
        <p class="seo__text">
          Специализированный сервис Toyota Motors Club обладает огромным опытом по ремонту двигателей и комплексному
          обслуживанию автомобилей от ведущих производителей: Тойота, Лексус, Kia, Hyundai, Nissan .Мы предлагаем полный
          цикл работ по ремонту двигателей,сочетаем в своей работе гарантии качества, надежность, высокие стандарты и
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          Автотехцентр MotoristDVS в Москве предлагает услуги обслуживание и ремонт...
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          ---------------
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
          особое отношение к каждому клиенту. 90% наших запчастей оригинальные и всегда есть в наличии на складе,а стаж
          мастеров минимум от 10 лет.
        </p>
      </div>
      <button class="seo__bolee">
        <p class="seo__bolee-text hover-text">Развернуть ↓
        </p>
      </button>
    </section>
    <section class="out container">
      <h3 class="out__title advantages__title"> Примеры наших работ</h3>
      <div class="out__imgs">
        <img class="prev mit__prev" src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
        <div class="slider2 multiple-items">
          <img class="out__img" src="<?php the_field('izo-1') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-2') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-3') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-4') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-5') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-6') ?>" alt="images">

          <img class="out__img" src="<?php the_field('izo-7') ?>" alt="images">

        </div>
        <img class="next mit__next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
    </section>

    <section class="forma container">
      <div class="forma__left">
        <h5 class="forma__text">Есть сомнения в исправности двигателя?</h5>
        <h3 class="forma__title">Получите <span class="colortext">бесплатную</span> консультацию от <span
            class="colortext">ведущего</span> моториста</h3>
      </div>
      <div class="forma__right">
        <form class="forma__form" action="#" method="post">
          <div class="forma__text-top">
            <input class="forma__name" type="text" placeholder="Ваше имя">
            <input class="forma__number" type="text" placeholder="Номер телефона">
          </div>
          <div class="forma__text-bottom">
            <button class="forma__send" type="submit">Оставить заявку</button>
          </div>
        </form>
        <p class="forma__data">Оставляя заявку вы даёте согласие на
          обработку ваших <a href="#">Персональных данных</a></p>
      </div>
    </section>

    <section class="advantages container">
      <h5 class="advantages__title">Почему выбирают наш автотехцентр?</h5>
      <div class="advantages__blocks">
        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/heart.svg" alt="heart">
          <p class="advantages__top">Любимое дело</p>
          <p class="advantages__bottom">Стаж мастеров<br />минимум от 10 лет.<br />Они выбирали<br />любимую проффесию.
          </p>
        </div>

        <div class="advantages__block advantages__block2">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
          <p class="advantages__top">Надежность</p>
          <p class="advantages__bottom">90% запчастей<br />ориигнальные и всегда есть<br />в наличии на складе.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
          <p class="advantages__top">Опыт с 99 года</p>
          <p class="advantages__bottom">50% механиков<br />Работают со дня<br /> основания техцентра.</p>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
          <p class="advantages__top">Удобное<br />расположение</p>
          <p class="advantages__bottom">В 400 метрах<br />
            от метро Стахановская.</p>
        </div>

      </div>
    </section>

    <section class="service-con">
      <div class="service container">
        <h6 class="service__title">Стоимость услуг</h6>
        <div class="service__block">
          <div class="service__left">
            <p class="service__left-title">Узлы автомобиля</p>
            <div class="service__left-df">

              <button class="service__left-block service__dv hovver service__dvs" id="service__dvs">
                <div class="service__bl">
                  <p class="service__text">Двигатель</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__tr service__tran">
                <div class="service__bl">
                  <p class="service__text">Трансмиссия</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>

              <button class="service__left-block service__obs service__obsl catalog__more catalog__bottom-bl caralog__mob">
                <div class="service__bl">
                  <p class="service__text">Обслуживание</p>
                </div>
                <img class="service__arrow" src="<?php echo B__IMG ?>/assets/images/dist/arrow.svg" alt="arrow">
              </button>
            </div>
          </div>
          <div class="service__right">
            <div class="service__right-top">
              <p class="service__name">Наименование работ</p>
              <p class="service__price">Стоимость</p>
            </div>

            <div class="service__general">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__dvigatel service__dvigatel--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Капитальный ремонт двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт дизельного двигателя</h2>
                    <p class="service__usluga-price">Договорная</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт турбин</h2>
                    <p class="service__usluga-price">от 10000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Замена цепи/ремня ГРМ</h2>
                    <p class="service__usluga-price">от 7000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Регулировка клапанов</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ТНВД</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт блока цилиндров</h2>
                    <p class="service__usluga-price">от 11000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт ГБЦ двигателя</h2>
                    <p class="service__usluga-price">от 9000 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт форсунок</h2>
                    <p class="service__usluga-price">от 3000 р.</p>
                  </div>
                </div>
              </a>


            </div>

            <div class="service__transmission service__transmission--none ">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт МКПП</h2>
                    <p class="service__usluga-price">от 8000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>


            </div>

            <div class="service__obslug service__obslug--none">

              <a href="#">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Диагностика двигателя</h2>
                    <p class="service__usluga-price">от 1500 р.</p>
                  </div>
                </div>
              </a>


              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Ремонт системы охлаждения</h2>
                    <p class="service__usluga-price">от 6500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Промывка систем автомобиля</h2>
                    <p class="service__usluga-price">от 3500 р.</p>
                  </div>
                </div>
              </a>

              <a href="#">
                <div class="service__usluga-line"></div>
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title">Чип-тюнинг</h2>
                    <p class="service__usluga-price">от 5000 р.</p>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>

            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="question container">
      <div class="question__left">
        <h3 class="question__title">Остались вопросы?</h3>
        <h5 class="question__text">Наш мастер с радостью на них ответит.
          Проконсультирует по стоимости ремонта и
          предложит индивидуальный план ремонта.</h5>
      </div>
      <div class="question__right">
        <form class="question__form" action="#" method="post">
        <?php echo do_shortcode('[contact-form-7 id="c090df8" title="Остались вопросы?"]') ?>
        </form>
      </div>
    </section>

    <section class="contacts container">
      <div class="contacts__block-top">
        <h5 class="contacts__title">Наши<span class="colortext"> контакты</span> </h5>
      </div>
      <div class="contacts__block-bottom">
        <div class="contacts__left">

          <div class="contacts__addres">
            <div class="contacts__adress-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/addres.svg" alt="addres">
              <h6 class="contacts__block-title contacts__addres-t">Адрес</h6>
            </div>
            <p class="contacts__block-text">г. Москва ул.Шоссе энтузиастов 31с40</p>
          </div>
          <div class="contacts__bl-bottom">
            <div class="contacts__phone">
              <div class="contacts__phone-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/phone.svg" alt="addres">
                <h6 class="contacts__block-title contacts__phone-t">Телефоны</h6>
              </div>
              <p class="contacts__block-text hover-text">+7 (495) 701-81-41<br />+7 (916) 755-81-41</p>
            </div>

            <div class="contacts__email">
              <div class="contacts__email-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
                <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
              </div>
              <p class="contacts__block-tex hover-textt">motoristdvs@info.ru</p>
            </div>
          </div>
          <div class="contacts__work">
            <div class="contacts__work-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/clock1.svg" alt="addres">
              <h6 class="contacts__block-title contacts__work-t">Режим работы</h6>
            </div>
            <p class="contacts__block-text">
            <ul class="contacts__ul">
              <li class="contacts__li">
                По будням - с 8:00 до 20:00 (без перерыров)
              </li>
              <li class="contacts__li">
                В субботу и воскресенье - с 10:00 до 16:00 (без перерывов)
              </li>
            </ul>
            </p>
          </div>


        </div>
        <div class="contacts__right">
          <iframe class="contacts__map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Af2c8fa74fac010ca4e84c685711083c206d0c9f6142294b02cba51a8d9ef8825&amp;source=constructor"
            width="500" height="400" frameborder="0"></iframe>
        </div>
      </div>

    </section>
  </main>

<?php get_footer(); ?>