<?php

/* modular/features.html.twig */
class __TwigTemplate_5ba4f42d0578db79452823331f8b242a696007ce39dff24a06a713f860a90470 extends Twig_Template
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
        // line 1
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 4
            echo "        <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    <div class=\"feature-items\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "        <div class=\"feature\">
            ";
            // line 9
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 10
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>

            <div class=\"feature-content icon-offset\">
                ";
            } else {
                // line 14
                echo "                <div class=\"feature-content\">
                    ";
            }
            // line 16
            echo "                    ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 17
                echo "                        <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
                    ";
            }
            // line 19
            echo "                    ";
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 20
                echo "                        <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
                        <p><a href=\"";
                // line 21
                echo $this->getAttribute($context["feature"], "linkurl", array());
                echo "\">";
                echo $this->getAttribute($context["feature"], "linktext", array());
                echo "</a></p>
                    ";
            }
            // line 23
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  95 => 23,  88 => 21,  83 => 20,  80 => 19,  74 => 17,  71 => 16,  67 => 14,  59 => 10,  57 => 9,  54 => 8,  50 => 7,  47 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
