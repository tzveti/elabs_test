<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Engagementlabs test Feb 2013</title>
        <meta name="description" content="Engagementlabs test Feb 2013">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <?php echo HTML::style("/assets/css/normalize.css"); ?>
        <?php echo HTML::style("/assets/css/main.css"); ?>
        <?php echo HTML::script("/assets/js/vendor/modernizr.js"); ?>
        

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <h1>Tzvetanka Chiderova</h1>
            <h2>EngagementLabs Test Homepage</h2>
            
            <table id="app">
                <thead>
                    <tr>
                        <th>Name 
                            <a href="#asc" class="sort" id="asc"></a> 
                            <a href="#desc" class="sort" id="desc"></a>
                        </th>
                        <th>Avatar</th>
                        <th>Tags</th>
                    </tr> 
                </thead>
                <tbody>
                    <?php echo $content; ?>
                </tbody>
            </table>
            
            <table id="user-template">
                <tbody>
                    <tr>
                        <td class="name"></td>
                        <td class="avatar"><img /></td>
                        <td class="tags"></td>
                    </tr>
                </tbody>
            </table>
 
        </div>
        <?php echo HTML::script("/assets/js/require.js", array('data-main'=>'/assets/js/config.js')); ?>
    </body>
</html>