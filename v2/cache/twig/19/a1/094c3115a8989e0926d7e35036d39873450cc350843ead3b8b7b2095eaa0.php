<?php

/* partials/base.html.twig */
class __TwigTemplate_19a1094c3115a8989e0926d7e35036d39873450cc350843ead3b8b7b2095eaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'social' => array($this, 'block_social'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</head>
<body id=\"top\" class=\"";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
<div id=\"sb-site\">
    ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('showcase', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
</div>
<div class=\"sb-slidebar sb-left sb-width-thin\">
    <div id=\"panel\">
        ";
        // line 79
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 80
        echo "    </div>
</div>
";
        // line 82
        $this->displayBlock('bottom', $context, $blocks);
        // line 94
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->env->loadTemplate("partials/metadata.html.twig")->display($context);
        // line 8
        echo "        <meta name=\"viewport\"
              content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\"/>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 14
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 15
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 16
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slideme.css"), "method");
        // line 19
        echo "            ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 20
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 21
            echo "            ";
        }
        // line 22
        echo "            ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 23
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 24
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 25
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "            ";
        }
        // line 27
        echo "        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/deliver.js"), "method");
        // line 34
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 35
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.slideme2.js"), "method");
        // line 36
        echo "        ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "        <header id=\"header\">
            <div class=\"logo\">
                <a href=\"";
        // line 46
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
                    <img src=\"";
        // line 47
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/user/data/logo.png\" sizes=\"60vw\" style=\"height: 60px;margin-top:15px\"/>
                </a>
                ";
        // line 49
        $this->displayBlock('social', $context, $blocks);
        // line 52
        echo "            </div>
            <div id=\"navbar\">
                ";
        // line 54
        $this->displayBlock('header_extra', $context, $blocks);
        // line 55
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "                ";
        $this->env->loadTemplate("partials/search.html.twig")->display($context);
        // line 59
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
    ";
    }

    // line 49
    public function block_social($context, array $blocks = array())
    {
        // line 50
        echo "                ";
        $this->env->loadTemplate("partials/social.html.twig")->display($context);
        // line 51
        echo "                ";
    }

    // line 54
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 56
        echo "                    ";
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 57
        echo "                ";
    }

    // line 64
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "        </section>
    ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "                ";
        $this->env->loadTemplate("modular/footer.html.twig")->display($context);
        // line 72
        echo "            ";
    }

    // line 82
    public function block_bottom($context, array $blocks = array())
    {
        // line 83
        echo "    <script>
        \$(function () {
            \$(document).ready(function () {
                \$.slidebars({
                    hideControlClasses: true,
                    scrollLock: true
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 83,  294 => 82,  290 => 72,  287 => 71,  284 => 70,  279 => 68,  274 => 73,  272 => 70,  269 => 69,  267 => 68,  262 => 67,  259 => 66,  254 => 64,  250 => 57,  247 => 56,  244 => 55,  239 => 54,  235 => 51,  232 => 50,  229 => 49,  222 => 59,  219 => 58,  216 => 55,  214 => 54,  210 => 52,  208 => 49,  203 => 47,  199 => 46,  195 => 44,  192 => 43,  188 => 36,  185 => 35,  182 => 34,  179 => 33,  176 => 32,  173 => 31,  170 => 30,  166 => 27,  163 => 26,  160 => 25,  157 => 24,  154 => 23,  151 => 22,  148 => 21,  145 => 20,  142 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  124 => 13,  121 => 12,  113 => 37,  111 => 30,  105 => 28,  103 => 12,  98 => 10,  94 => 8,  92 => 7,  84 => 6,  81 => 5,  78 => 4,  72 => 94,  70 => 82,  66 => 80,  64 => 79,  58 => 75,  56 => 66,  53 => 65,  51 => 64,  48 => 63,  46 => 43,  41 => 41,  38 => 40,  36 => 4,  31 => 1,);
    }
}
