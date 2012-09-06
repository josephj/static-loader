<?php
/**
 * Use this configuration file to make relationship
 * between modules and static (CSS/JavaScript) files.
 * You must also specify module dependencies here.
 *
 * The static_loader library will transform this configuration file
 * to an YUI config.
 */
$config = array();
//=================
// Seed
//=================
/**
 * The external CSS/JS seed URLs.
 */
$config["seed"] = array(
    "css" => "/combo/?g=css",
    "js"  => "/combo/?g=js",
);
//=================
// Base
//=================
/**
 * The basis configuration for YUI.
 */
$config["base"] = array(
    "filter"     => "raw",
    "combine"    => TRUE,
    "comboBase"  => "/combo/?f=",
    "comboSep"   => ",",
    "logInclude" => array(),
    "logExclude" => array(),
    "root"       => "lib/yui3/build/",
    "langs"      => "en-US,zh-TW",
    "jsCallback" => "(new Y.ModuleManager()).startAll();",
);
//=================
// Groups
//=================
/**
 * Before setting this, you should understand the group attribute in YUI config.
 * * Reference: http://yuilibrary.com/yui/docs/api/classes/config.html#property_groups *
 * NOTE - We add a magic 'serverComboCSS' attribute.
 *        Set it to true if you want all belonging CSS files
 *        being combined and loaded with traditional link tag approach,
 *        instead of using dynamic scripting.
 */
$config["groups"] = array(
    // For miiiCasa customized libraries.
    "welcome" => array(
        "combine"        => TRUE,
        "serverComboCSS" => FALSE, // Load CSS on-the-fly.
        "root"           => "lib/yui/extension/",
        "lang"           => array("en-US", "zh-TW"),
    ),
);
//=================
// Modules
//=================
/**
 * Individual module setting.
 * You should specify its belonging group, related CSS & JS files,
 * and dependent modules.
 */
$config["modules"] = array(
    "welcome" => array(
        "group" => "welcome",
        "js"    => "welcome/welcome.js"
    ),
);
return $config;
?>
