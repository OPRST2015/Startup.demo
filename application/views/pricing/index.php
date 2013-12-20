<!DOCTYPE html>
<html>
  <head><?php require_once('application/views/partials/head.php'); ?>
  </head>
  <body>
    <header class="header-10">
      <div class="container">
        <div class="row">
          <div class="navbar span12">
            <div class="navbar-inner">
              <button type="button" class="btn btn-navbar"></button><a href="#" class="brand">Startup</a>
              <div class="nav-collapse pull-right">
                <ul class="nav">
                  <li><a href="">Home</a></li>
                  <li class="active"><a href="#">Pricing</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                <form class="navbar-form pull-left"><a href="#" class="btn bg-nephritis">Buy Now</a></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="header-11-sub bg-midnight-blue">
      <div class="background">&nbsp;</div>
      <div class="container">
        <div class="row">
          <div class="span4">
            <h3>Features of Startup Framework</h3>
            <p>
               
              You have the design, you have the code. We’ve created the product that will help your startup to look even better.
            </p>
            <div class="signup-form">
              <form>
                <div class="controls controls-row">
                  <input type="text" placeholder="Your E-mail" class="span4">
                </div>
                <div class="controls controls-row">
                  <div>
                    <input type="password" placeholder="Your password">
                  </div>
                  <div>
                    <input type="password" placeholder="Confirmation">
                  </div>
                </div>
                <div class="controls controls-row">
                  <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                </div>
              </form>
            </div>
            <div class="additional-links">By signin up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> of Use</a> and <a href="#">Privacy Policy</a></div>
          </div>
          <div class="span7 offset1 player-wrapper">
            <div class="player">
              <iframe src="http://player.vimeo.com/video/29568236?color=3498db"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="logos">
      <div class="container">
        <div><img src="public/img/logos/mashable.png"></div>
        <div><img src="public/img/logos/guardian.png"></div>
        <div><img src="public/img/logos/forbes.png"></div>
        <div><img src="public/img/logos/red-bull.png"></div>
        <div><img src="public/img/logos/ny-times.png"></div>
      </div>
    </section>
    <section class="price-1">
      <div class="container">
        <h3>Take a look to our Plan</h3>
        <p class="lead">This is probably the best plan ever made</p>
        <div class="row plans">
          <div class="span4 plan">
            <div class="title">Starter</div>
            <div class="price">19€/month</div>
            <div class="description">10,000 messages <br> <b>unlimited</b> data<br> <b>unlimited</b> users<br> first 10 day free</div><a href="#" class="btn disabled">Your Current Plan</a>
          </div>
          <div class="span4 plan">
            <div class="title">Business</div>
            <div class="price">39€/month</div>
            <div class="description">10,000 messages <br> <b>unlimited</b> data<br> <b>unlimited</b> users<br> first 30 day free</div><a href="#" class="btn btn-primary">Change to this Plan</a>
          </div>
          <div class="span4 plan">
            <div class="title">Enterprise</div>
            <div class="price">59€/month</div>
            <div class="description">10,000 messages <br> <b>unlimited</b> data<br> <b>unlimited</b> users<br> first 60 day free</div><a href="#" class="btn btn-primary">Change to this Plan</a>
          </div>
        </div>
      </div>
    </section>
    <section class="content-13 subscribe-form bg-turquoise">
      <div class="container">
        <div class="row">
          <form>
            <div class="span8">
              <input type="text" placeholder="Enter your e-mail" spellcheck="false">
            </div>
            <div class="span4">
              <button type="submit" class="btn btn-large btn-primary">Subscribe Now</button>
            </div>
          </form>
        </div>
      </div>
    </section><?php require_once('application/views/partials/footer.php'); ?>
  </body>
</html>