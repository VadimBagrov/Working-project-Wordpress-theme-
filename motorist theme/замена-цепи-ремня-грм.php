<?php
/*
Template Name: замена-цепи-ремня-грм
*/

?>

<?php get_header(); ?>
<main class="main">
<section class="main-block main-block__zamenarem">
      <div class="main-block__left">
        <h1 class="main-block__title">
        <?php the_field('title-usl') ?>
        </h1>
        <div class="main-block__preims">
          <div class="main-block__preim">
            <img class="main-block__svg" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
            <h5 class="main-block__text"><?php the_field('preim-1') ?></h5>
          </div>

          <div class="main-block__preim">
            <img class="main-block__svg" src="<?php echo B__IMG ?>/assets/images/dist/clock.svg" alt="security">
            <h5 class="main-block__text"><?php the_field('preim-2') ?></h5>
          </div>

          <div class="main-block__preim">
            <img class="main-block__svg" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="security">
            <h5 class="main-block__text"><?php the_field('preim-3') ?></h5>
          </div>

          <div class="main-block__preim">
            <img class="main-block__svg" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="security">
            <h5 class="main-block__text"><?php the_field('preim-4') ?></h5>
          </div>
        </div>
        <a  class='main-block__form-cr popup-sva'>
        <button class="main-block__btn" type='submit'>Записаться в сервис</button>
        </a>
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
    <section class="car container car3">
      <div class="car__img catalog__more mit__all">
        <img class="car__photo" src="<?php echo B__IMG ?>/assets/images/src/outlander.png" alt="mitsubishi">
      </div>
      <div class="car__right">
        <h1 class="car__title">Ремонт двигателя <span class="colortext">Mitsubishi (Митсубиси)</span></h1>
        <div class="car__works">
          <a href="#" class="car__work ">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/dvs1.svg" alt="dvig">
            <p class="car__text hover-text">Капитальный ремонт двигателей</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/engine_6ek94yxxf8e4.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт дизельного двигателя</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/motor_lh2wtmmwqq25.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт ГБЦ двигателя</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/check_engine_mzlrq92bc0t6.svg" alt="dvig">
            <p class="car__text hover-text">Диагностика двигателя</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/motor_69xol7zxvoaa.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт ТНВД</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/engine_msmxies68w65.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт блока цилиндров</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/turbine_hppipci8dsa0.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт турбин</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/repair_rf60k0o8in1z.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт форсунок</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/timing_belt_muyk5mjqwvrs.svg" alt="dvig">
            <p class="car__text hover-text">Замена цепи/ремня ГРМ</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/maintenance_k6wvqk9b5eou 1.svg" alt="dvig">
            <p class="car__text hover-text">Регулировка клапанов</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/maintenance_lu3mnj7ywcng.svg" alt="dvig">
            <p class="car__text hover-text">Техническое обслуживание авто</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/cooling_7i63waglehvc.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт системы охлаждения</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/manual_transmission_yv8ymawhawmw.svg" alt="dvig">
            <p class="car__text hover-text">Ремонт МКПП</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/circulation_1f2cbymjqkxf.svg" alt="dvig">
            <p class="car__text hover-text">Промывка систем автомобиля</p>
          </a>

          <a href="#" class="car__work">
            <img class="car__images" src="<?php echo B__IMG ?>/assets/images/src/chip_208ilogv4xrr.svg" alt="dvig">
            <p class="car__text hover-text">Чип-тюнинг</p>
          </a>
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

  <section id='forma' class="forma container">
    <div class="forma__left">
      <h5 class="forma__text">Есть сомнения в исправности двигателя?</h5>
      <h3 class="forma__title">Получите <span class="colortext">бесплатную</span> консультацию от <span
          class="colortext">ведущего</span> моториста</h3>
    </div>
    <div class="forma__right">
      <form class="forma__form" action="#" method="post">
        <div class="forma__text-top">
        </div>
        <div class="forma__text-bottom">
        </div>
        <?php echo do_shortcode('[contact-form-7 id="537b6f6" title="Контактная форма"]') ?>
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
        <p class="advantages__top"><?php the_field('preim-title1', 6) ?></p>
        <p class="advantages__bottom"><?php the_field('preim-text1', 6) ?></p>
        </p>
      </div>

      <div class="advantages__block advantages__block2">
        <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
        <p class="advantages__top"><?php the_field('preim-title2', 6) ?></p>
        <p class="advantages__bottom"><?php the_field('preim-text2', 6) ?></p>
      </div>

      <div class="advantages__block">
        <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
        <p class="advantages__top"><?php the_field('preim-title3', 6) ?></p>
        <p class="advantages__bottom"><?php the_field('preim-text3', 6) ?></p>
      </div>

      <div class="advantages__block">
        <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
        <p class="advantages__top"><?php the_field('preim-title4', 6) ?></p>
        <p class="advantages__bottom"><?php the_field('preim-text4', 6) ?></p>
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

            <button class="service__left-block service__obs service__obsl">
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

      <?php global $post; $myposts = get_posts([ 
      'numberposts' => -1, 
      'tag'         => 'двигатель , обслуживание , трансмиссия', 
      'orderby'     => 'modified',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title"><?php the_title() ?></h2>
                    <h6 class="service__usluga-price"><?php the_content() ?></h6>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
          </div>

          <div class="service__dvigatel service__dvigatel--none ">

          <?php global $post; $myposts = get_posts([ 
      'numberposts' => -1, 
      'tag'         => 'двигатель', 
      'orderby'     => 'modified',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title"><?php the_title() ?></h2>
                    <h6 class="service__usluga-price"><?php the_content() ?></h6>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
          </div>

          <div class="service__transmission service__transmission--none ">

      <?php global $post; $myposts = get_posts([ 
      'numberposts' => -1, 
      'tag'         => 'трансмиссия', 
      'orderby'     => 'modified',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title"><?php the_title() ?></h2>
                    <h6 class="service__usluga-price"><?php the_content() ?></h6>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>


          </div>

          <div class="service__obslug service__obslug--none">

          <?php global $post; $myposts = get_posts([ 
      'numberposts' => -1, 
      'tag'         => 'обслуживание', 
      'orderby'     => 'modified',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="service__usluga">
                  <div class="service__usluga-div">
                    <h2 class="service__usluga-title"><?php the_title() ?></h2>
                    <h6 class="service__usluga-price"><?php the_content() ?></h6>
                  </div>
                </div>
                <div class="service__usluga-line"></div>
              </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>


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
        <input class="question__number" type="text" placeholder="Номер телефона">
        <button class="question__send hover-text" type="submit">Оставить заявку</button>
      </form>
    </div>
  </section>

  <section id='contact' class="contacts container">
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
          <p class="contacts__block-text"><?php the_field('Adress', 6) ?></p>
        </div>
        <div class="contacts__bl-bottom">
          <div class="contacts__phone">
            <div class="contacts__phone-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/phone.svg" alt="addres">
              <h6 class="contacts__block-title contacts__phone-t">Телефоны</h6>
            </div>
            <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-1-cifr', 6) ?>'><?php the_field('phone-1', 6) ?></a>
            <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-2-cifr', 6) ?>'></br><?php the_field('phone-2', 6) ?></a>
          </div>

          <div class="contacts__email">
            <div class="contacts__email-top">
              <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
              <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
            </div>
            <a class="contacts__block-tex hover-text" href="mailto:<?php the_field('email', 6) ?>"><?php the_field('email', 6) ?></a>
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
              По будням - <?php the_field('time-pn-pt', 6) ?> (без перерыров)
            </li>
            <li class="contacts__li">
              В субботу и воскресенье - <?php the_field('time-sb-vs', 6) ?> (без перерывов)
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

    <div class="all12 mit__blocks mit2__blocks"></div>
  </section>
</main>
  <?php get_footer(); ?>