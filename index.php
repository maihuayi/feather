<?php
defined('_JEXEC') or die;


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">

<head>
    <meta charset="utf-8" />
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>

<body>
    <div id="container">
        <div class="row">
            <header>
                <div class="span6">
                    <jdoc:include type="modules" name="logo" />
                </div>
                <div class="span6">
                    <jdoc:include type="modules" name="search" />
                </div>
            </header>
        </div>
        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="menu" />
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="slider" />
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="breadcrumbs" />
            </div>
        </div>
        
        <div id="message" class="row">
            <div class="span12">
                <jdoc:include type="modules" name="message" />
            </div>
        </div>

        <div class="row">
            <div class="span4">
                <jdoc:include type="modules" name="position-1" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-2" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-3" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-4" />
            </div>
        </div>
        
        <div class="row">
            <div class="span3">
                <jdoc:include type="modules" name="sidebar-1" />
            </div>
            <div class="span6">
                <jdoc:include type="component" />
            </div>
            <div class="span3">
                <jdoc:include type="modules" name="sidebar-2" />
            </div>
        </div>

        <div class="row">
            <div class="span4">
                <jdoc:include type="modules" name="position-5" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-6" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-7" />
            </div>
            <div class="span4">
                <jdoc:include type="modules" name="position-8" />
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <jdoc:include type="modules" name="footer" />
            </div>
        </div>

        <div id="debug">
            <jdoc:include type="modules" name="debug" />
        </div>
    </div><!-- end container -->
</body>

</html>