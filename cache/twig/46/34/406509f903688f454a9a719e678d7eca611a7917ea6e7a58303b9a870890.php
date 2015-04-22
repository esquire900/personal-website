<?php

/* partials/navigation.html.twig */
class __TwigTemplate_4634406509f903688f454a9a719e678d7eca611a7917ea6e7a58303b9a870890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 19
        echo "
<ul class=\"navigation\">
    ";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "deliver", array()), "dropdown", array()), "enabled", array())) {
            // line 22
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 24
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", array())) {
                    // line 26
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                    // line 27
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 28
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
                        ";
                    // line 29
                    if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 30
                    echo "                        ";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
            ";
                }
                // line 34
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 37
            echo "        <li>
            <a href=\"";
            // line 38
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 39
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 40
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>           ";
    }

    // line 1
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 4
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 5
                    echo "            <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                ";
                    // line 10
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                        // line 11
                        echo "                    <ul>
                        ";
                        // line 12
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 15
                    echo "            </li>
        ";
                }
                // line 17
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 17,  161 => 15,  155 => 12,  152 => 11,  150 => 10,  144 => 8,  138 => 7,  134 => 6,  129 => 5,  126 => 4,  123 => 3,  118 => 2,  107 => 1,  103 => 44,  92 => 40,  86 => 39,  82 => 38,  79 => 37,  74 => 36,  71 => 35,  65 => 34,  57 => 30,  51 => 29,  47 => 28,  42 => 27,  39 => 26,  36 => 25,  31 => 24,  25 => 22,  23 => 21,  19 => 19,);
    }
}
