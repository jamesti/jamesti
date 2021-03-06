<!DOCTYPE html>
<html lang=pt-br>
    <head>
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="Portifólio de James Moreira">
        <meta name=author content="James Moreira">
        <title>James T.I. - Consultor e Web Developer</title>
        <!-- Bootstrap core CSS -->
        <link rel=stylesheet href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel=stylesheet href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel=stylesheet href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic">
        <link rel=stylesheet href="<?= URL::to('//cdn.jamesti.url.ph/css/landing-page.min.css') ?>">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role=navigation>
            <div class=container>
                <div class=navbar-header>
                    <button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-ex1-collapse>
                        <span class=sr-only>Toggle navigation</span>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                    </button>
                    <a href="<?= URL::to('/') ?>" class=navbar-brand>James T.I.</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#about">Sobre</a>
                        </li>
                        <li><a href="#services" data-toggle=modal data-target=.bs-servicos-modal-lg>Serviços</a>
                        </li>
                        <li><a href="#contact">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class=intro-header>
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class=intro-message>
                            <h1>James T.I.</h1>
                            <h3>Engenheiro de Software</h3>
                            <hr class=intro-divider>
                            <ul class="list-inline intro-social-buttons">
                                <li><a href="//twitter.com/jamescomplexo" target=_blank class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class=network-name>Twitter</span></a>
                                </li>
                                <li><a href="//github.com/nyubai" target=_blank class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class=network-name>Github</span></a>
                                </li>
                                <li><a href="//www.linkedin.com/in/jameslegal" target=_blank class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class=network-name>Linkedin</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-header -->
        <div class=content-section-a>
            <div class=container>
                <div class=row>
                    <div class="col-lg-5 col-sm-6">
                        <hr class=section-heading-spacer>
                        <div class=clearfix></div>
                        <h2 class=section-heading>Death to the Stock Photo:
                            <br>Special Thanks</h2>
                        <p class=lead>A special thanks to Death to the Stock Photo for providing the photographs that you see in this template. <a target=_blank href="http://join.deathtothestockphoto.com/">Visit their website</a> to become a member.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class=img-responsive width=455 height=352 src="<?= URL::to('//cdn.jamesti.url.ph/img/ipad.png') ?>" alt=iPad>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-a -->
        <div class=content-section-b>
            <div class=container>
                <div class=row>
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class=section-heading-spacer>
                        <div class=clearfix></div>
                        <h2 class=section-heading>3D Device Mockups
                            <br>by PSDCovers</h2>
                        <p class=lead>Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by PSDCovers! <a target=_blank href="http://www.psdcovers.com/">Visit their website</a> to download some of their awesome, free photoshop actions!</p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class=img-responsive width=455 height=381 src="<?= URL::to('//cdn.jamesti.url.ph/img/doge.png') ?>" alt=Dog>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-b -->
        <div class=content-section-a>
            <div class=container>
                <div class=row>
                    <div class="col-lg-5 col-sm-6">
                        <hr class=section-heading-spacer>
                        <div class=clearfix></div>
                        <h2 class=section-heading>Google Web Fonts and
                            <br>Font Awesome Icons</h2>
                        <p class=lead>This template features the 'Lato' font, part of the <a target=_blank href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target=_blank href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class=img-responsive width=455 height=301 src="<?= URL::to('//cdn.jamesti.url.ph/img/phones.png') ?>" alt=iPhone>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-section-a -->
        <div class=banner>
            <div class=container>
                <div class=row>
                    <div class=col-lg-6>
                        <h2>Qualidade Profissional:</h2>
                    </div>
                    <div class=col-lg-6>
                        <ul class="list-inline banner-social-buttons">
                            <li><a href="//twitter.com/jamescomplexo" target=_blank class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class=network-name>Twitter</span></a>
                            </li>
                            <li><a href="//github.com/nyubai" target=_blank class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class=network-name>Github</span></a>
                            </li>
                            <li><a href="//www.linkedin.com/in/jameslegal" target=_blank class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class=network-name>Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.banner -->
        <footer>
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <ul class=list-inline>
                            <li><a href="#home">Home</a>
                            </li>
                            <li class=footer-menu-divider>&sdot;</li>
                            <li><a href="#about">Sobre</a>
                            </li>
                            <li class=footer-menu-divider>&sdot;</li>
                            <li><a href="#services">Serviços</a>
                            </li>
                            <li class=footer-menu-divider>&sdot;</li>
                            <li><a href="#contact">Contato</a>
                            </li>
                        </ul>
                        <p class="copyright text-muted small">Copyright &copy; James T.I. 2014. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modals do Navbar -->

        <div class="modal fade bs-servicos-modal-lg" tabindex=-1 role=dialog aria-labelledby=myModalServicos aria-hidden=true>
            <div class="modal-dialog modal-lg">
                <div class=modal-content>
                    <div class=modal-header>
                        <button type=button class=close data-dismiss=modal aria-hidden=true>&times;</button>
                        <h4 class=modal-title id=myModalServicos>Serviços do Artesão</h4>
                    </div>
                    <div class=modal-body>
                        <pre>São vários serviços oferecidos!</pre>
                    </div>
                    <div class=modal-footer>
                        <button type=button class="btn btn-default" data-dismiss=modal>Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.Modals -->

        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>