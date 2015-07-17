<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/css/main.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/css/jssor.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/images/ico/apple-touch-icon-57-precomposed.png">

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/jquery.isotope.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/main.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/jssor.slider.mini.js"></script>

        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/js/jssor.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                var options = {
                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,
                        $ChanceToShow: 2,
                        $AutoCenter: 1,
                    }
                };
                var jssor_slider1 = new $JssorSlider$('slider_container', options);
            });
        </script>
    </head><!--/head-->

    <body data-spy="scroll" data-target="#navbar" data-offset="0">
        <?php
        $language = Yii::app()->request->cookies['language']->value;
        $languagesArray = array('hy' => 1, 'ru' => 2, 'en' => 3);
        $languageNumber = $languagesArray[$language];
        $getTranslateWorld = array();
        $translate = Translate::model()->findAll();

        if (!empty($translate)) {
            foreach ($translate as $key => $value) {
                if ($value->language == $language)
                    $getTranslateWorld[$value->word_key] = $value->word_value;
            }
        }
        ?>
        <header id="header" role="banner">
            <div class="container">
                <div id="navbar" class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <div  id="language-selector" style="float:right; margin:30px;">
                            <?php
                            $this->widget('application.components.widgets.LanguageSelector');
                            ?>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                            <li><a href="#about-us"><?php echo $getTranslateWorld['about_us']; ?></a></li>
                            <li><a href="#tours"><?php echo $getTranslateWorld['tours']; ?></a></li>
                            <li><a href="#services"><?php echo $getTranslateWorld['services']; ?></a></li>
                            <li><a href="#about-armenia"><?php echo $getTranslateWorld['about_armenia']; ?></a></li>
                            <li><a href="#gallery"><?php echo $getTranslateWorld['gallery']; ?></a></li>
                            <li><a href="#monuments"><?php echo $getTranslateWorld['monuments']; ?></a></li>
                            <li><a href="#contact"><?php echo $getTranslateWorld['contact']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!--/#header-->
        <section id="main-slider" class="carousel">

            <div class="carousel-inner">
                <?php
                $news = News::model()->findAllByAttributes(array('language' => $language));
                if (!empty($news)) {
                    foreach ($news as $key => $value) {
                        ?>
                        <div class="item <?= ($key == 0) ? 'active' : ''; ?>">
                            <div class="container">
                                <div class="carousel-content">

                                    <h1><?php echo $value->title; ?></h1>
                                    <p class="lead"><?php echo $value->description; ?></p>
                                </div>
                            </div>
                        </div><!--/.item-->
                        <?php
                    }
                }
                ?>
            </div><!--/.carousel-inner-->
            <a class="prev" href="#main-slider" data-slide="prev"><i class="icon-angle-left"></i></a>
            <a class="next" href="#main-slider" data-slide="next"><i class="icon-angle-right"></i></a>
        </section><!--/#main-slider-->
        <section id="about-us">
            <div class="container">
                <div class="box">
                    <div class="center">
                       <!-- <h2><?php echo $getTranslateWorld['about_us']; ?></h2> -->
                        <p class="lead"></p>
                    </div>
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#about-us-->
        <section id="tours">
            <div class="container">
                <div class="box">
                   <!-- <h1><?php echo $getTranslateWorld['tours']; ?></h1> -->
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="box first">
                   <!-- <h1><?php echo $getTranslateWorld['services']; ?></h1> -->
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#services-->
        <section id="about-armenia">
            <div class="container">
                <div class="box">
                    <h1><?php echo $getTranslateWorld['about_armenia']; ?></h1>
                    <div class="row">
                        <?php
                        $regions = Regions::model()->findAllByAttributes(array('language' => $language));
                        if (!empty($regions)) {
                            foreach ($regions as $key => $value) {
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <a href="#myModal" role="button"  data-toggle="modal" class="thumbnail">
                                            <img id = "<?php echo $value->id; ?>" data-image = "<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $value->image; ?>" data-title="<?php echo $value->title; ?>" data-description = "<?php echo $value->description; ?>" class = "region" src="<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $value->image; ?>" alt="<?php echo $value->title; ?>">
                                        </a>
                                        <h4><?php echo $value->title; ?></h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?></div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container">
                <div class="box">
                    <h1><?php echo $getTranslateWorld['gallery']; ?></h1>
                    <div id="slider_container" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:456px;background:#191919;">
                        <div u="loading" style="position:absolute;top:0px;left:0px;">
                            <div style="filter:alpha(opacity=70);opacity:0.7;position:absolute;display:block;background-color:#000000;top:0px;left:0px;width:100%;height:100%;">
                            </div>
                            <div style="position:absolute;display:block;background:url(<?php echo Yii::app()->request->baseUrl; ?>/css/xeon/img/loading.gif) no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
                            </div>
                        </div>
                        <div u="slides" style="cursor:move;position:absolute;left:0px;top:0px;width:800px;height:356px;overflow:hidden;">
                            <?php
                            $gallery = Gallery::model()->findAll();
                            if (!empty($gallery)) {
                                foreach ($gallery as $key => $value) {
                                    ?>
                                    <div>
                                        <a href=''><img u = "image" src = "<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $value->image_big; ?>"></a>
                                        <img u = "thumb" src = "<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $value->image_small; ?>">
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <span u="arrowleft" class="jssora05l" style="top:158px;left:8px;">
                        </span>
                        <span u="arrowright" class="jssora05r" style="top:158px;right:8px">
                        </span>
                        <div u="thumbnavigator" class="jssort01" style="left:0px;bottom:0px;">
                            <div u="slides" style="cursor:default;">
                                <div u="prototype" class="p">
                                    <div class="w"><div u="thumbnailtemplate" class="t"></div></div>
                                    <div class="c"></div>
                                </div>
                            </div>
                        </div>
                        <a style="display:none" href="http://www.jssor.com">jQuery Slider</a>
                        <script>
                            jssor_slider1_starter('slider_container');
                        </script>

                    </div> 
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#gallery-->
        <section id="monuments">
            <div class="container">
                <div class="box">
                    <h1><?php echo $getTranslateWorld['monuments']; ?></h1>
                    <div class="row">
                        <?php
                        $monuments = PlacesOfInterest::model()->findAllByAttributes(array('language' => $languageNumber));
                        if (!empty($monuments)) {
                            foreach ($monuments as $key => $value) {
                                $image = ($value->images == '') ? 'monument.png' : $value->images;
                                ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="center">
                                        <a href="#myModalMonuments" role="button"  data-toggle="modal" class="thumbnail">
                                            <img id = "<?php echo $value->id; ?>" data-image = "<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $image ?>"  data-title="<?php echo $value->name; ?>" data-description = "<?php echo $value->description; ?>" class = "monument" src="<?php echo Yii::app()->request->baseUrl . '/css/xeon/images/gallery/' . $image; ?>" alt="<?php echo $value->name; ?>">
                                        </a>
                                        <h4><?php echo $value->name; ?></h4>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="box last">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1><?php echo $getTranslateWorld['contact_form']; ?></h1>
                            <p></p>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form class="contact-form" name="ContactForm" method="post" action="/site/contact" role="form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="ContactForm[name]" class="form-control" required="required" placeholder="<?php echo $getTranslateWorld['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="ContactForm[email]" class="form-control" required="required" placeholder="<?php echo $getTranslateWorld['email_address']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="ContactForm[subject]" required="required" class="form-control" rows="8" placeholder="<?php echo $getTranslateWorld['subject']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="ContactForm[body]" id="message" required="required" class="form-control" rows="8" placeholder="<?php echo $getTranslateWorld['message']; ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-lg" name="send-message"><?php echo $getTranslateWorld['send_message']; ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div><!--/.col-sm-6-->
                        <div class="col-sm-6">
                            <h1><?php echo $getTranslateWorld['our_address']; ?></h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong><?php echo $getTranslateWorld['city_address']; ?></strong><br>
                                        <?php echo $getTranslateWorld['office_address']; ?><br>
                                        <abbr title="Phone"><?php echo $getTranslateWorld['phone']; ?>:</abbr> (+374 95) 12-77-00
                                    </address>
                                </div>
                            </div>
                            <h1><?php echo $getTranslateWorld['connect_with_us']; ?></h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="social">
                                        <li><a href="#"><i class="icon-facebook icon-social"></i> Facebook</a></li>
                                        <li><a href="#"><i class="icon-google-plus icon-social"></i> Google Plus</a></li>
                                        <li><a href="#"><i class="icon-pinterest icon-social"></i> Pinterest</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="social">
                                        <li><a href="#"><i class="icon-linkedin icon-social"></i> Linkedin</a></li>
                                        <li><a href="#"><i class="icon-twitter icon-social"></i> Twitter</a></li>
                                        <li><a href="#"><i class="icon-youtube icon-social"></i> Youtube</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--/.col-sm-6-->
                    </div><!--/.row-->
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#contact-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <?php echo Yii::app()->params->copyrightInfo; ?>
                        <?php echo $getTranslateWorld['all_rights_reserved']; ?>.
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog" style="z-index: 100000;">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img class="modal-region" src="" alt=""/>
                        <p  class="text-justify"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div id="myModalMonuments" class="modal fade" role="dialog" style="z-index: 100000;">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <img class="modal-monument" src="" alt=""/>
                        <p  class="text-justify"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <script>
            $(document).on('click', '.region', function () {
                $('#myModal').modal();
                $('.modal-title').text($(this).attr('data-title'));
                $('.modal-body > p').text($(this).attr('data-description'));
                $('.modal-region').attr('src', $(this).attr('data-image'));
                $('.modal-region').attr('alt', $(this).attr('data-title'));

            });
            $(document).on('click', '.monument', function () {
                $('#myModalMonuments').modal();
                $('.modal-title').text($(this).attr('data-title'));
                $('.modal-body > p').text($(this).attr('data-description'));
                $('.modal-monument').attr('src', $(this).attr('data-image'));
                $('.modal-monument').attr('alt', $(this).attr('data-title'));

            });
        </script>

    </body>
</html>