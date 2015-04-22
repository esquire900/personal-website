<?php

/* partials/social.html.twig */
class __TwigTemplate_e369dd1f051a5e2b54d5743580f7c3be9f068e7d1c10ea41b8585753845278c4 extends Twig_Template
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
        echo "<ul class=\"social-icons\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo $this->getAttribute($context["social"], "url", array());
            echo "\">
                ";
            // line 5
            if ($this->getAttribute($context["social"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["social"], "icon", array());
                echo "\"></i>";
            }
            // line 6
            echo "            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>  
";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  39 => 6,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
