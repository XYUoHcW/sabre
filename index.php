<?php get_header(); ?>
<main>


<div class="articles">
    <div class="row">
        <div class="small-12 columns article-list">
            <article class="article-item">
                <header class="article-header">
                    <h2>Lorem ipsum dolor</h2>
                    <a href="mailto:g4spr0m@example.com">g4spr0m</a>
                    <time datetime="2015-11-23T19:00">23 listopada</time>.
                </header>
                <p>
                    Lorem ipsum dolor sit amet, <em>consectetuer adipiscing elit</em>.
                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In
                    nisi neque, aliquet vel, dapibus id, <strong>mattis vel</strong>, nisi. Sed
                    pretium, ligula sollicitudin laoreet viverra, tortor libero
                    sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis.
                    Ut justo. Suspendisse potenti.
                </p>

                <blockquote>
                    <p>
                    Sed egestas, ante et vulputate volutpat, eros pede
                    semper est, vitae luctus metus libero eu augue. Morbi
                    purus libero, faucibus adipiscing, commodo quis,
                    gravida id, est. Sed lectus.  Praesent elementum
                    hendrerit tortor. Sed semper lorem at felis.
                    </p>
                </blockquote>

                    <p>
                    Sed egestas, ante et vulputate volutpat, eros pede
                    semper est, vitae luctus metus libero eu augue. Morbi
                    purus libero, faucibus adipiscing, commodo quis,
                    gravida id, est. Sed lectus.  Praesent elementum
                    hendrerit tortor. Sed semper lorem at felis.
                    </p>

<pre>
jQuery.each( args, function( _, arg ) {
  var type = jQuery.type( arg );
  if ( type === "function" ) {
    if ( !options.unique || !self.has( arg)) {
      list.push( arg );
    }
  } else if (arg && arg.length && type !== "string") {
    add( arg );
  }
});
</pre>

                <p>Sed egestas, ante et <q>vulputate</q>     volutpat, eros pede semper est,
                vitae luctus metus libero eu augue. Morbi purus libero,
                faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.
                Praesent elementum hendrerit tortor. Sed semper lorem at felis.
                Vestibulum volutpat, lacus a ultrices sagittis, mi neque
                euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus
                pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                </p>
            </article>
        </div>
    </div>
</div>

<section class="contact">
    <form action="#">
        <div class="row">
            <div class="small-12 columns">
                <h2>Kontakt</h2>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                <label class="accesibility-label" for="name">Imię</label>
                <input id="name" type="text" placeholder="Imię" name="name">
            </div>
            <div class="large-6 columns">
                <label class="accesibility-label" for="email">E-mail</label>
                <input id="email" type="email" placeholder="E-mail" name="email">
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns">
                <label class="accesibility-label" for="contact-content">Treść</label>
                <textarea id="contact-content"  class="contact-content"  cols="30" rows="3" name="content" placeholder="Treść"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="small-12 columns"><input class="float-right button primary" type="submit" value="Wyślij"></div>
        </div>
    </form>
</section>


<section class="about">
    <div class="row">
        <div class="small-12 columns">
            <h2>O nas</h2>
            <ul class="about-list no-style">
                <li>

                <div class="profile-image picture-frame float-left">
                    <img src="img/g4s.jpg" alt="Tomasz Roman Szkółka">
                </div>

                <div class="profile-description">
                    <h4>Tomasz Roman Szkółka</h4>
                    <p>
                    Morbi in sem quis dui placerat ornare.
                    Pellentesque odio nisi, euismod in, pharetra a,
                    ultricies in, diam. Sed arcu. Cras consequat.
                    </p>
                    <div class="social-icons">
                        <a href="https://twitter.com/panietomaszu" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <span class="invisible">Twitter</span>
                        </a>
                        <a href="https://plus.google.com/104452716964187953495/about" target="_blank">
                            <i class="fa fa-google-plus"></i>
                            <span class="invisible">Google Plus</span>
                        </a>
                    </div>
                </div>


                </li>
                <li>

                <div class="profile-image picture-frame float-left">
                    <img src="img/jurand.jpg" alt="Dalajlama">
                </div>

                <div class="profile-description">
                    <h4>Jurand</h4>
                    <p>
                    Morbi in sem quis dui placerat ornare.
                    Pellentesque odio nisi, euismod in, pharetra a,
                    ultricies in, diam. Sed arcu. Cras consequat.
                    </p>
                    <div class="social-icons">
                        <a href="https://plus.google.com/+JakubRodakJurand" target="_blank">
                            <i class="fa fa-google-plus"></i>
                            <span class="invisible">Google Plus</span>
                        </a>
                    </div>
                </div>


                </li>
            </ul>
    </div>
</div>
    </section>



    <section class="article-list">
        <div class="row">
            <div class="small-12 columns">
                <header>
                    <h2>Najnowsze</h2>
                </header>
                <article class="article-item">
                    <header class="article-header">
                        <a href="#">
                            <h4>Pierwszy artykuł lorem ipsum</h4>
                        </a>
                        <a href="mailto:g4spr0m@example.com">g4spr0m</a>
                        <time datetime="2015-11-23T19:00">23 listopada</time>.
                    </header>
                    <p>Sed egestas, ante et vulputate volutpat, eros pede
                    semper est, vitae luctus metus libero eu augue. Morbi purus
                    libero, faucibus adipiscing, commodo quis, gravida id, est.
                    Sed lectus. Lorem ectus.</p>
                    <a href="#">Czytaj więcej...</a>
                </article>
                <article class="article-item">
                    <header class="article-header">
                        <a href="#">
                            <h4>Trzeci tekst</h4>
                        </a>
                        <a href="mailto:dalajlama@example.com">dalajlama</a>
                        <time datetime="2015-11-23T19:00">23 listopada</time>.
                    </header>
                    <p>Sed egestas, ante et vulputate volutpat, eros pede
                    semper est, vitae luctus metus libero eu augue. Morbi purus
                    libero, faucibus adipiscing, commodo quis, gravida id, est.
                    Sed lectus. Lorem ectus.</p>
                    <a href="#">Czytaj więcej...</a>
                </article>
                <article class="article-item">
                    <header class="article-header">
                        <a href="#">
                            <h4>Drugi wpis</h4>
                        </a>
                        <a href="mailto:dalajlama@example.com">dalajlama</a>
                        <time datetime="2015-11-23T19:00">23 listopada</time>.
                    </header>
                    <p>Sed egestas, ante et vulputate volutpat, eros pede
                    semper est, vitae luctus metus libero eu augue. Morbi purus
                    libero, faucibus adipiscing, commodo quis, gravida id, est.
                    Sed lectus. Lorem ectus.</p>
                    <a href="#">Czytaj więcej...</a>
                </article>
            </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>
