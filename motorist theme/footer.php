<footer class="footer">
    <div class="footer__container container">
      <div class="footer__one">
        <h3 class="footer__logo"><span class="colortext">MOTORIST</span>DVS</h3>
        <p class="footer__servis">Сертифицированый сервис</p>
        <div class="footer__phone-block">
          <a class="footer__phone hover-text" href="tel:<?php the_field('phone-1-cifr', 6) ?>"><?php the_field('phone-1', 6) ?></a>
          <a class="footer__phone hover-text" href="tel:<?php the_field('phone-2-cifr', 6) ?>"></br><?php the_field('phone-2', 6) ?></a>
        </div>
        <a class="footer__email hover-text" href="mailto:<?php the_field('email', 6) ?>"><?php the_field('email', 6) ?></a>
        <p class="footer__addres"><?php the_field('Adress', 6) ?></p>
        <p class="footer__grafick">Будни: с <?php the_field('time-pn-pt', 6) ?><br />
          Суббота воскресенье: <?php the_field('time-sb-vs', 6) ?></p>
      </div>

      <div class="footer__two">
        <a href="#" class="footer__brand">
          <img class="footer__img-brand footer__toyota" src="<?php echo B__IMG ?>/assets/images/dist/toyota.svg" alt="toyota">
          <p class="footer__text-brand hover-text">Toyota</p>
        </a>
        <a href="#" class="footer__brand">
          <img class="footer__img-brand footer__lexus" src="<?php echo B__IMG ?>/assets/images/dist/lexus.svg" alt="lexus">
          <p class="footer__text-brand hover-text">Lexus</p>
        </a>
        <a href="#" class="footer__brand">
          <img class="footer__img-brand footer__nissan" src="<?php echo B__IMG ?>/assets/images/dist/nissan.svg" alt="nissan">
          <p class="footer__text-brand hover-text">Nissan</p>
        </a>
        <a href="#" class="footer__brand">
          <img class="footer__img-brand footer__hyundai" src="<?php echo B__IMG ?>/assets/images/dist/hyundai.svg" alt="hyundai">
          <p class="footer__text-brand hover-text">Hyundai</p>
        </a>
        <a href="#" class="footer__brand">
          <img class="footer__img-brand footer__kia" src="<?php echo B__IMG ?>/assets/images/dist/kia.svg" alt="kia">
          <p class="footer__text-brand hover-text">Kia</p>
        </a>
      </div>
      <div class="footer__usl">
        <div class="footer__three">
          <ul class="footer__ul-three">
            <li class="footer__li-three">
              <a class="footer__a-three hover-text" href="#"><span class="colortext">-</span> Ремонт двигателя</a>
            </li>
            <li class="footer__li-three">
              <a class="footer__a-three hover-text" href="#"><span class="colortext">-</span> Ремонт трансмиссии</a>
            </li>
            <li class="footer__li-three">
              <a class="footer__a-three hover-text" href="#"><span class="colortext">-</span> Обслуживание
                автомобиля</a>
            </li>
          </ul>
        </div>

        <div class="footer__four">
          <ul class="footer__ul-four">
            <li class="footer__li-four">
              <a class="footer__a-four hover-text" href="#"><span class="colortext">-</span> Чип-тюнинг</a>
            </li>
            <li class="footer__li-four">
              <a class="footer__a-four hover-text" href="#"><span class="colortext">-</span> Ремонт турбин</a>
            </li>
            <li class="footer__li-four">
              <a class="footer__a-four hover-text" href="#"><span class="colortext">-</span> Диагностика двигателя</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__five">
        <ul class="footer__ul-five">
          <li class="footer__li-five hover-text">
            <a class="footer__a-five hover-text" href="/blog">Блог</a>
          </li>
          <li class="footer__li-five hover-text">
            <a class="footer__a-five hover-text" href="/onas">О нас</a>
          </li>
          <li class="footer__li-five hover-text">
            <a class="footer__a-five hover-text" href="#contact">Контакты</a>
          </li>
          <li class="footer__li-five hover-text">
            <a class="footer__a-five hover-text" href="#catalog">Наши услуги</a>
          </li>
          <li class="footer__li-five">
            <a class="footer__a-five hover-text" href="/spec">Спецпредложения</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="js/main.js"></script>
  <script src="js/secondary.js"></script>
  <?php wp_footer() ?>
</body>

</html>