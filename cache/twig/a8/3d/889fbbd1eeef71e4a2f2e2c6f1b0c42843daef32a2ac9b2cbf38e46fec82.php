<?php

/* modular/footer.html.twig */
class __TwigTemplate_a83d889fbbd1eeef71e4a2f2e2c6f1b0c42843daef32a2ac9b2cbf38e46fec82 extends Twig_Template
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
        echo "<div class=\"modular-row footer ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    <div class=\"footer-modules\">
        <div class=\"footer-copyright\">
            ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "copyright", array());
        echo "
        </div>
        <div class=\"footer-menu\">
            <ul class=\"othermenu\">
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "othermenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 9
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["module"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["module"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  37 => 9,  33 => 8,  26 => 4,  19 => 1,);
    }
}
