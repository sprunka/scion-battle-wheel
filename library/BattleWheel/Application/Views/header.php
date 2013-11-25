<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php
echo $title;
?></title>
<!-- Head Scripts -->
</head>
<body>
    <div id="globalWrapper">
        <div id="header" title="<?php
echo PROJECT_NAME . " - " . PRODUCT_NAME;
?>"></div>
        <div id="column-one">
        <div id="secondbox" class="portlet">
            <h5>Navigation</h5>
            <div class="pBody">
<?php
$menu = new \BattleWheel\Framework\View\Template('nav', 'menu');
$menu->render(DONT_RENDER_HEADER);
?>
            </div>
        </div>
    </div>
<!-- end of the left (by default at least) column -->
    <div id="column-content">
        <div id="content"><a name="top" id="contentTop"></a>
            <h1 class="firstHeading"><?php
echo $title;
?></h1>
            <div id="bodyContent">
                <div id="contentSub"><?php
echo $subtitle;
?></div>
                <!-- start content -->
