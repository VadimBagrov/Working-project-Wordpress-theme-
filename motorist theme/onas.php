<?php
/*
Template Name: onas
*/
?>

<?php get_header(); ?>
<main class="main">


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


<section class="seo container">

  <div class="seo__block">
    <h2 class="seo__title">
      <?php the_field('seo-title'); ?>
    </h2>
    <h6 class="seo__text seo__text--active">
    <?php the_field('seo-text'); ?>
    </h6>
  </div>
</section>

<section class="advantages container">
  <h5 class="advantages__title">Почему выбирают наш автотехцентр?</h5>
  <div class="advantages__blocks">
    <div class="advantages__block">
      <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/heart.svg" alt="heart">
      <p class="advantages__top"><?php the_field('preim-title1' , 6) ?></p>
      <p class="advantages__bottom"><?php the_field('preim-text1' , 6) ?></p>
      </p>
    </div>

    <div class="advantages__block advantages__block2">
      <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/security.svg" alt="security">
      <p class="advantages__top"><?php the_field('preim-title2' , 6) ?></p></p>
      <p class="advantages__bottom"><?php the_field('preim-text2' , 6) ?>
    </div>

    <div class="advantages__block">
      <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/approve.svg" alt="approve">
      <p class="advantages__top"><?php the_field('preim-title3' , 6) ?></p></p>
      <p class="advantages__bottom"><?php the_field('preim-text3' , 6) ?>
    </div>

    <div class="advantages__block">
      <img class="advantages__img" src="<?php echo B__IMG ?>/assets/images/dist/location.svg" alt="location">
      <p class="advantages__top"><?php the_field('preim-title4' , 6) ?></p>
      <p class="advantages__bottom"><?php the_field('preim-text4' , 6) ?>
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
      <input class="question__number mit__all" type="text" placeholder="Номер телефона">
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
          <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-1-cifr' ,6) ?>'><?php the_field('phone-1' ,6) ?></a>
          <a class="contacts__block-text hover-text" href='tel:<?php the_field('phone-2-cifr' ,6) ?>'></br><?php the_field('phone-2' ,6) ?></a>
        </div>

        <div class="contacts__email">
          <div class="contacts__email-top">
            <img class="contacts__img" src="<?php echo B__IMG ?>/assets/images/dist/email.svg" alt="addres">
            <h6 class="contacts__block-title contacts__email-t hover-text">Email</h6>
          </div>
          <a class="contacts__block-tex hover-text" href="mailto:<?php the_field('email' ,6) ?>"><?php the_field('email' ,6) ?></a>
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
            По будням - <?php the_field('time-pn-pt' ,6) ?> (без перерыров)
          </li>
          <li class="contacts__li">
            В субботу и воскресенье - <?php the_field('time-sb-vs' ,6) ?> (без перерывов)
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
<div class="all12 mit__blocks mit2__blocks"></div>
</main>

  <?php get_footer(); ?>
