<?php

/* modular.html.twig */
class __TwigTemplate_aa9158420ba06f473c20caf4077c760464dedee9af910405d33daf6e48210e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("partials/base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 8
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/singlePageNav.min.js"), "method");
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_bottom($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 16
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 17
            echo "        <script>
        // singlePageNav initialization & configuration
        \$('#navbar').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
    }

    // line 30
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        if ((isset($context["show_onpage_menu"]) ? $context["show_onpage_menu"] : null)) {
            // line 32
            echo "        <ul class=\"navigation\">
        
        ";
            // line 52
            echo "

        ";
            // line 54
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "deliver", array()), "dropdown", array()), "enabled", array())) {
                // line 55
                echo "            ";
                echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
                echo "
        ";
            } else {
                // line 57
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 58
                    echo "                ";
                    if ($this->getAttribute($context["page"], "visible", array())) {
                        // line 59
                        echo "                    ";
                        $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                        // line 60
                        echo "                    <li class=\"";
                        echo (isset($context["current_page"]) ? $context["current_page"] : null);
                        echo "\">
                        <a href=\"";
                        // line 61
                        echo $this->getAttribute($context["page"], "url", array());
                        echo "\" class=\"external\">
                            ";
                        // line 62
                        if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                            echo "<i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                            echo "\"></i>";
                        }
                        // line 63
                        echo "                            ";
                        echo $this->getAttribute($context["page"], "menu", array());
                        echo "
                        </a>
                    </li>
                ";
                    }
                    // line 67
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        ";
            }
            // line 69
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 70
                echo "            <li>
                <a href=\"";
                // line 71
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\">
                    ";
                // line 72
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>";
                }
                // line 73
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "    
        ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 79
                echo "            ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 80
                echo "            <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\"><a href=\"#";
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "         </ul>
    ";
        } else {
            // line 84
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 91
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
        ";
            // line 92
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo strtr(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 36
                echo "            ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 37
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 38
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 39
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"external\">
                        ";
                    // line 40
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 41
                    echo "                        ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                    </a>
                    ";
                    // line 43
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                        // line 44
                        echo "                        <ul>
                            ";
                        // line 45
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
                        </ul>
                    ";
                    }
                    // line 48
                    echo "                </li>
            ";
                }
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 51,  320 => 50,  316 => 48,  310 => 45,  307 => 44,  305 => 43,  299 => 41,  293 => 40,  289 => 39,  284 => 38,  281 => 37,  278 => 36,  273 => 35,  262 => 34,  241 => 4,  231 => 92,  226 => 91,  222 => 90,  217 => 89,  214 => 88,  206 => 84,  202 => 82,  189 => 80,  186 => 79,  182 => 78,  179 => 77,  168 => 73,  162 => 72,  158 => 71,  155 => 70,  150 => 69,  147 => 68,  141 => 67,  133 => 63,  127 => 62,  123 => 61,  118 => 60,  115 => 59,  112 => 58,  107 => 57,  101 => 55,  99 => 54,  95 => 52,  91 => 32,  88 => 31,  85 => 30,  71 => 17,  69 => 16,  64 => 15,  61 => 14,  54 => 10,  51 => 9,  48 => 8,  45 => 7,  42 => 6,  38 => 1,  36 => 3,  11 => 1,);
    }
}
