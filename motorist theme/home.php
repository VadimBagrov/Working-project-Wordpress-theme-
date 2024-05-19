<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>
  <main class="main">

    <section class="main-sec">
      <div class="main-sec__top container">

        <div class="main-sec__left">
          <h1 class="main-sec__left-title">
            Профессиональный ремонт<br />ДВС в Москве
          </h1>
          <button class="main-sec__left-btn" type="submit">Записаться в сервис</button>
        </div>

        <div class="main-sec__right">
          <p class="main-sec__year">25+</p>
          <p class="main-sec__text">Лет<br />Качественного<br />ремонта</p>
        </div>
      </div>
    </section>

    <section class="sliderr">
      <h4 class="brand__title">Бренды</h4>
      <div class="slider__brand">

      <img class="prev " src="<?php echo B__IMG ?>/assets/images/dist/left__arr.png" alt="arrow">
      <div class="slider responsive">

      <?php global $post; $myposts = get_posts([ 'numberposts' => -1, 'tag' => 'бренды',]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>" class="slider__a">
              <?php the_post_thumbnail('full', array('class' => 'brand__img')); ?>
              <p class="slider__name brand__name"><?php the_title() ?></p>
            </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
    </div>
        <img class="next" src="<?php echo B__IMG ?>/assets/images/dist/right__arr.png" alt="arrow">
      </div>
    </section>


    <section class="catalog container">
      <h5 class="catalog__title">Каталог оказываемых услуг</h5>
      <div class="catalog__blocks ">

      <?php global $post; $myposts = get_posts([ 'numberposts' => 4, 'tag' => 'двигатель , обслуживание , трансмиссия', 'include'   => '222,277,224,226', ]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
        <a class="catalog__a" href="<?php the_permalink(); ?>">
          <div class="catalog__block">
          <?php the_post_thumbnail('full', array('class' => 'catalog__img')); ?>
            <div class="catalog__bottom">
              <h2 class="catalog__text"><?php the_title() ?></h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
        <div class="catalog__mob">

        <?php global $post; $myposts = get_posts([ 'numberposts' => 4, 'tag' => 'двигатель , обслуживание , трансмиссия', 'include'   => '228,230,232,234', ]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
        <a class="catalog__a" href="<?php the_permalink(); ?>">
          <div class="catalog__block">
          <?php the_post_thumbnail('full', array('class' => 'catalog__img')); ?>
            <div class="catalog__bottom">
              <h2 class="catalog__text"><?php the_title() ?></h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>

          <div class="catalog__center">
          <?php global $post; $myposts = get_posts([ 'numberposts' => 4, 'tag' => 'двигатель , обслуживание , трансмиссия','include'   => '236,238,240,242', ]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
        <a class="catalog__a" href="<?php the_permalink(); ?>">
          <div class="catalog__block">
          <?php the_post_thumbnail('full', array('class' => 'catalog__img')); ?>
            <div class="catalog__bottom">
              <h2 class="catalog__text"><?php the_title() ?></h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
          </div>

          <div class="catalog__bottom-bl">
          <?php global $post; $myposts = get_posts([ 
            'numberposts' => -1, 
            'tag'         => 'двигатель , обслуживание , трансмиссия', 
            'orderby'     => 'modified',
	          'order'       => 'DESC',
            'exclude'     => '236,238,240,242,228,230,232,234,222,277,224,226']);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
        <a class="catalog__a" href="<?php the_permalink(); ?>">
          <div class="catalog__block">
          <?php the_post_thumbnail('full', array('class' => 'catalog__img')); ?>
            <div class="catalog__bottom">
              <h2 class="catalog__text"><?php the_title() ?></h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>
      <?php } } wp_reset_postdata(); // Сбрасываем $post ?>
          </div>
        </div>

        <button class="catalog__more" id='catalog__more' type="submit">
          <p class="caralog__more-text bold">Показать все</p>
        </button> 

      </div>
    </section>

    <section class="seo container">

      <div class="seo__block">
        <h2 class="seo__title">
          <?php the_field('seo-title'); ?>
        </h2>
        <h6 class="seo__text">
        <?php the_field('seo-text'); ?>
        </h6>
      </div>
      <button class="seo__bolee">
        <p class="seo__bolee-text hover-text">Развернуть ↓
        </p>
      </button>
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
          <p class="advantages__top"><?php the_field('preim-title1') ?></p>
          <p class="advantages__bottom"><?php the_field('preim-text1') ?></p>
          </p>
        </div>

        <div class="advantages__block advantages__block2">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
          <p class="advantages__top"><?php the_field('preim-title2') ?></p></p>
          <p class="advantages__bottom"><?php the_field('preim-text2') ?>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
          <p class="advantages__top"><?php the_field('preim-title3') ?></p></p>
          <p class="advantages__bottom"><?php the_field('preim-text3') ?>
        </div>

        <div class="advantages__block">
          <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
          <p class="advantages__top"><?php the_field('preim-title4') ?></p>
          <p class="advantages__bottom"><?php the_field('preim-text4') ?>
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
            <p class="contacts__block-text"><?php the_field('Adress') ?></p>
          </div>
          <div class="contacts__bl-bottom">
            <div class="contacts__phone">
              <div class="contacts__phone-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/phone.svg" alt="addres">
                <h6 class="contacts__block-title contacts__phone-t">Телефоны</h6>
              </div>
              <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-1-cifr') ?>'><?php the_field('phone-1') ?></a>
              <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-2-cifr') ?>'></br><?php the_field('phone-2') ?></a>
            </div>

            <div class="contacts__email">
              <div class="contacts__email-top">
                <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
                <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
              </div>
              <a class="contacts__block-tex hover-text" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
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
                По будням - <?php the_field('time-pn-pt') ?> (без перерыров)
              </li>
              <li class="contacts__li">
                В субботу и воскресенье - <?php the_field('time-sb-vs') ?> (без перерывов)
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
