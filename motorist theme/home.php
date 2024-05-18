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

      <?php global $post; $myposts = get_posts([ 'numberposts' => -1,]);
        if( $myposts ){
        foreach( $myposts as $post ){
          setup_postdata( $post ); ?>
            <a href="#" class="slider__a">
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

        <a class="catalog__a" href="kap__remont">
          <div class="catalog__block">
            <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/kap_rem_dvs.avif" alt="Капитальный ремонт двигателя">
            <div class="catalog__bottom">
              <h2 class="catalog__text">Капитальный ремонт двигателей</h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>

        <a class="catalog__a" href="">
          <div class="catalog__block">
            <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_diz_dvs.avif" alt="Ремонт дизельного двигателя">
            <div class="catalog__bottom">
              <h2 class="catalog__text">Ремонт дизельного двигателя</h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>

        <a class="catalog__a" href="">
          <div class="catalog__block">
            <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_gbc_1.avif" alt="Ремонт ГБЦ двигателя">
            <div class="catalog__bottom">
              <h2 class="catalog__text">Ремонт ГБЦ двигателя</h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>

        <a class="catalog__a" href="">
          <div class="catalog__block">
            <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/diag_dvs.avif" alt="Диагностика двигателя">
            <div class="catalog__bottom">
              <h2 class="catalog__text">Диагностика двигателя</h2>
              <button class="catalog__btn">Подробнее</button>
            </div>
          </div>
        </a>
        <div class="catalog__mob">

          <a class="catalog__a" href="">
            <div class="catalog__block">
              <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_blk-cil.avif" alt="Ремонт блока цилиндров">
              <div class="catalog__bottom">
                <h2 class="catalog__text">Ремонт блока цилиндров</h2>
                <button class="catalog__btn">Подробнее</button>
              </div>
            </div>
          </a>

          <a class="catalog__a" href="">
            <div class="catalog__block">
              <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_tur_2.avif" alt="Ремонт турбин">
              <div class="catalog__bottom">
                <h2 class="catalog__text">Ремонт турбин</h2>
                <button class="catalog__btn">Подробнее</button>
              </div>
            </div>
          </a>

          <a class="catalog__a" href="">
            <div class="catalog__block">
              <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_fors.avif" alt="Ремонт форсунок">
              <div class="catalog__bottom">
                <h2 class="catalog__text">Ремонт форсунок</h2>
                <button class="catalog__btn">Подробнее</button>
              </div>
            </div>
          </a>

          <a class="catalog__a" href="">
            <div class="catalog__block">
              <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/zam_cep.avif" alt="Замена цепи/ремня ГРМ">
              <div class="catalog__bottom">
                <h2 class="catalog__text">Замена цепи/ремня ГРМ</h2>
                <button class="catalog__btn">Подробнее</button>
              </div>
            </div>
          </a>
          <div class="catalog__center">
            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/reg_klap.avif" alt="Регулировка клапанов">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Регулировка клапанов</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>

            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/tex_obs.avif" alt="Техническое обслуживание авто">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Техническое обслуживание авто</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>
            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/remont_tnvd.avif" alt="Ремонт ТНВД">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Ремонт ТНВД</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>
            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_sis.avif" alt="Ремонт системы охлаждения">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Ремонт системы охлаждения</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>
          </div>

          <div class="catalog__bottom-bl">
            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/rem_kpp.avif" alt="Ремонт МКПП">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Ремонт МКПП</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>

            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/prom_sis.avif" alt="Промывка систем автомобиля">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Промывка систем автомобиля</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>

            <a class="catalog__a" href="">
              <div class="catalog__block">
                <img class="catalog__img" src="<?php echo B__IMG ?>/assets/images/dist/chip_tun.avif" alt="Чип-тюнинг">
                <div class="catalog__bottom">
                  <h2 class="catalog__text">Чип-тюнинг</h2>
                  <button class="catalog__btn">Подробнее</button>
                </div>
              </div>
            </a>
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

              <a href="kap__remont">
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

              <a href="kap__remont">
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
