<?php get_header(); ?>

<style type="text/css">

.no-padding {
	padding: 0;
}

.form__submit--inside {
	position: absolute;
	right: 0;
	top: -.5em;
}

.modal header, .modal footer {
	padding: 0;
}
.modal .modal-inner {
	background: #f5f5f5;
	border-radius: 2px;
	padding: 1em;
}

.modal .modal-close:before {
	background: rbga(0, 0, 0, .5);
}

.modal .modal-close:after {
	background: #f5f5f5;
}

.card--excerpt {
	height: 439px;
}
.menu__item{overflow:hidden;padding:0; margin: .35% 0; height: 215px;}.menu__item__content{background-color:white;bottom:0;color:#444;height:61px;left:0;padding:1em;position:absolute;width:100%;-webkit-transition:all .2s ease-out;transition:all .2s ease-out}.menu__item__title{color:#313547;font-size:1.2rem;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}@media only screen and (min-width: 64em){.menu__item__title{font-size:1.5rem}}.menu__item:hover .menu__item__content,.menu__item:focus .menu__item__content{height:100%}.link--grade{color:#E1E8ED;font-weight:bold}.link--grade--pre{color:#E2624F}.link--grade--e{color:#50afdf}.link--grade--ms{color:#FFAE3D}.link--grade--hs{color:#21AABD}

.rack iframe {
  border: none;
  min-height: 258px;
  width: 100%;
}

/*------------------------------------*\
	$Item Carousel // should call it something else
\*------------------------------------*/
.card.menu__item {
  border: none;
}

.carousel__item {
  overflow: hidden;
  padding: 0;
  margin: .35% 0;
  display: inline-block;
  width: 144px;
  margin-right: .5em;
  margin-right: .5rem;
}
.carousel__item:last-child {
  margin-right: 50px;
}

.carousel__item img {
  height: auto;
  max-width: 100%;
  vertical-align: bottom;
  width: 100%;
}

.carousel__item__content {
  background-color: white;
  bottom: 0;
  color: #444;
  height: 0;
  left: 0;
  position: absolute;
  white-space: normal;
  width: 100%;
  -webkit-transition: all .2s ease-out;
  transition: all .2s ease-out;
}

.carousel__item__title, .carousel__item__description {
  color: #313547;
  font-size: 16px;
  margin: 0;
  overflow: hidden;
  padding: .5em;
}

.carousel__item:hover .carousel__item__content, .carousel__item:focus .carousel__item__content {
  height: 100%;
}

.carousel {
  position: relative;
}
.carousel__container--js.carousel__container--is-overflown {
  padding: 0 50px;
}
.carousel__container--js {
  position: relative;
  overflow: hidden;
  white-space: nowrap;
}
.carousel__button {
  display: none;
}
.carousel__container--is-overflown ~ .carousel__button {
  background-color: rgba(255, 255, 255, 0.9);
  border: none;
  bottom: 0;
  display: block;
  position: absolute;
  top: 0;
  width: 50px;
}
.has-cards .carousel__container--is-overflown ~ .carousel__button {
  background-color: rgba(245, 245, 245, 0.9);
}
.carousel__container--is-overflown ~ .carousel__button--next {
  right: 0px;
}
.carousel__container--is-overflown ~ .carousel__button--prev {
  left: 0;
}
.carousel__item {
  border: none;
}


</style>

<div class="alert alert--warning no-margin">
  <div class="align-center clearfix wrap">
    <p class="no-margin zeta">This page is just a demo</p>
  </div>
</div>
<div id="content">

  <article class="ad ad--hero ad--transparent card clearfix no-margin" style="background-color: #e7eef4;">

    <div class="clearfix wrap">
      <div class="col-md--sixcol align-center ad__media">
        <a href="#not-real">
          <img src="http://public.library.nova.edu/wp-content/uploads/2016/09/bon-appetit.jpg" alt="Across the Universe" />
        </a>
      </div>

      <div class="col-md--sixcol">

        <div class="col-md--tencol col--centered ad__copy">

          <header class="card__header">
            <a class="link link--undecorated _link--blue" href="http://sherman.library.nova.edu/sites/spotlight/lists/?for=kids&utm_source=publib&utm_medium=banner&utm_campaign=teen-movie-club">
              <h2 class="menu__item__title">Bon Appetit!</h2>
            </a>
          </header>

          <section class="no-margin">
            <p class="epsilon">
              <b>Perfect pasta!</b> Foolproof techniques that will transform the way you cook.
            </p>

            <a class="button peach" href="#not-real">August Issue</a>
          </section>

          </div>
      </div>

      </div>
    </article>

    <section class="hero wrap clearfix" style="padding-bottom: 1em;">
      <div class="rack">
        <iframe src="https://widgets.ebscohost.com/prod/encryptedkey/eit/eit.php?t=themes%2Fflipster_carousel_slick%2Fxsl.php%3Fcss%3D%2F%2Fimageserver.ebscohost.com%2Fbranding%2FFlipsterCarousel%2Fcss%2Fslick-app-theme_big.css&q=http%3A%2F%2Fwidgets.ebscohost.com%2Fprod%2Fencryptedkey%2Fehis%2Fwidget.php%3Fprof%3Dnsfl.main.eit%26pwd%3Dnovasfl%26query%3D%252BAND%252B(IS%252B0886-4446%252BOR%252BIS%252B0006-6990%252BOR%252BIS%252B1075-7864%252BOR%252BIS%252B0164-8497%252BOR%252BIS%252B2470-9284%252BOR%252BIS%252B1944-723X%252BOR%252BIS%252B0741-9015%252BOR%252BIS%252B2470-9298)%26db%3Deon%26numrec%3D50%26format%3Dxml%26protect%3Dno%26removeehis%3D1%26pl%3D1%26smode%3D%26forcehttp%3D%26proxy%3Dhttps%253A%252F%252Fsherman.library.nova.edu%252Fauth%252Findex.php%253Faid%253D1360%25252526url%2525253D%26rcounturl%3D&h=&settings=8,8,0,0,0" frameborder="0"></iframe>
      </div>
    </section>

    <section class="has-cards hero ">
      <div class="clearfix wrap">


        <div class="hero--small" data-ng-controller="ListController as lc" data-slug="cuentame-un-cuento-books-celebrate-hispanic-heritage-month">

          <div data-ng-repeat="list in lc.list">

            <h2 class="delta">{{ list.title }}</h2>

            <div class="carousel" id="{{lc.slug}}">
              <div class="carousel__container">
                <a ng-href="//novacat.nova.edu/search/?searchtype=i&searcharg={{ item.isbn }}" class="card card--shadow carousel__item"  data-ng-repeat="item in list.items">
                  <img ng-src="//secure.syndetics.com/index.php?isbn={{item.isbn}}/lc.gif&client=novaseu" alt="">
                  <span class="carousel__item__content">
                    <h3 class="carousel__item__title">{{ item.title }}</h3>
                  </span>
                </a>

              </div>

              <button class="carousel__button carousel__button--prev" role="button" aria-hidden="true">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
              </button>

              <button class="carousel__button carousel__button--next" role="button" aria-hidden="true">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
              </button>

            </div>
          </div>

        </div>

        <div class="hero--small"  data-ng-controller="ListController as lc" data-slug="13-scary-tales-not-faint-heart">

          <div data-ng-repeat="list in lc.list">

            <h2 class="delta">{{ list.title }}</h2>

            <div class="carousel" id="{{lc.slug}}">
              <div class="carousel__container">
                <a ng-href="//novacat.nova.edu/search/?searchtype=i&searcharg={{ item.isbn }}" class="card card--shadow carousel__item"  data-ng-repeat="item in list.items">
                  <img ng-src="//secure.syndetics.com/index.php?isbn={{item.isbn}}/lc.gif&client=novaseu" alt="">
                  <span class="carousel__item__content">
                    <h3 class="carousel__item__title">{{ item.title }}</h3>
                  </span>
                </a>

              </div>

              <button class="carousel__button carousel__button--prev" role="button" aria-hidden="true">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
              </button>

              <button class="carousel__button carousel__button--next" role="button" aria-hidden="true">
                <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
              </button>

            </div>
          </div>

        </div>

            <div class="col-md--sixcol col-lg--fourcol">

        				<article role="article">
                  <div class="card card--media card--shadow no-margin no-padding media" style="border-bottom: none;">
                    <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                      <img src="http://sherman.library.nova.edu/sites/spotlight/files/2014/12/vegan_holidays-e1475096660645.jpg"></a>
                  </div>

                  <div class="card card--shadow">
                    <header class="card__header" style="margin-bottom: 1em;">
                      <a class="link link--undecorated _link-blue" href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                        <h2 class="menu__item__title no-margin">Cooking Latin Style</h2>
                      </a>
                    </header>
                    <section class="content no-margin">
                      <p>Ugit atque quia aliquam impedit itaque a ipsa ipsum commodi sint cum culpa fuga!</p>
                    </section>
                    <footer class="card__footer" style="border-top: 1px solid #ddd; padding-top: 1em;">
                      <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/" class="link link--undecorated">Yum</a>
                    </footer>
                  </div>

        				</article> <!-- end article -->
              </div>

              <div class="col-md--sixcol col-lg--fourcol">

                  <article role="article">
                    <div class="card card--media card--shadow no-margin no-padding media" style="border-bottom: none;">
                      <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                        <img src="http://placehold.it/500x281"></a>
                    </div>

                    <div class="card card--shadow">
                      <header class="card__header" style="margin-bottom: 1em;">
                        <a class="link link--undecorated _link-blue" href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                          <h2 class="menu__item__title no-margin">A module</h2>
                        </a>
                      </header>
                      <section class="content no-margin">
                        <p>Ugit atque quia aliquam impedit itaque a ipsa ipsum commodi sint cum culpa fuga!</p>
                      </section>
                      <footer class="card__footer" style="border-top: 1px solid #ddd; padding-top: 1em;">
                        <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/" class="link link--undecorated">Learn</a>
                      </footer>
                    </div>


                  </article> <!-- end article -->
                </div>

                <div class="col-md--sixcol col-lg--fourcol">

                    <article role="article">
                      <div class="card card--media card--shadow no-margin no-padding media" style="border-bottom: none;">
                        <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                          <img src="http://placehold.it/500x281"></a>
                      </div>

                      <div class="card card--shadow">
                        <header class="card__header" style="margin-bottom: 1em;">
                          <a class="link link--undecorated _link-blue" href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/">
                            <h2 class="menu__item__title no-margin">Something else</h2>
                          </a>
                        </header>
                        <section class="content no-margin">
                          <p>Ugit atque quia aliquam impedit itaque a ipsa ipsum commodi sint cum culpa fuga!</p>
                        </section>
                        <footer class="card__footer" style="border-top: 1px solid #ddd; padding-top: 1em;">
                          <a href="http://sherman.library.nova.edu/sites/blog/2015/12/alvin-sherman-library-holiday-hours/" class="link link--undecorated">Call to action</a>
                        </footer>
                      </div>


                    </article> <!-- end article -->
                  </div>
      </div>
    </section>

</div>

<?php get_footer(); ?>
