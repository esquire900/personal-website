<?php

/* modular/text.html.twig */
class __TwigTemplate_fef0c796096a220971dcc0c00991378de47f6b4ba5caaaf54a0b8c1442211082 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pricing", array())) {
            // line 4
            echo "        <div class=\"pricing-container\">
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "pricing", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "                <div class=\"pricing-item\">
                    <div class=\"name\">";
                // line 7
                echo $this->getAttribute($context["item"], "name", array());
                echo "</div>
                    <div class=\"price\">";
                // line 8
                echo $this->getAttribute($context["item"], "price", array());
                echo "</div>
                    ";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 10
                    echo "                        <div class=\"info\">
                            ";
                    // line 11
                    echo $this->getAttribute($context["line"], "line", array());
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                    <div class=\"foot\">
                        <a class=\"button\" href=\"";
                // line 15
                echo $this->getAttribute($context["item"], "button_url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "button_text", array());
                echo "</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array())) {
            // line 22
            echo "        <div class=\"notebooks\">
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                // line 24
                echo "                <div class=\"notebook\">
                    <a href=\"#portfolioModal";
                // line 25
                echo $this->getAttribute($context["portfolio"], "modalid", array());
                echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class='screen'>
                            <div class=\"screen-content\"
                                 style=\"background-image: url(";
                // line 28
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
                echo ")\"></div>
                            <div class=\"screen-content-hover\"><i class=\"fa fa-plus-square\"></i></div>
                        </div>
                    </a>

                    <div class='keyboard'></div>
                    <h4>";
                // line 34
                echo $this->getAttribute($context["portfolio"], "title", array());
                echo "</h4>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </div>
    ";
        }
        // line 39
        echo "

    <div class=\"callout-line\"></div>
</div>

";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 45
            echo "    <div class=\"portfolio-modal modal\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", array());
            echo "\" tabindex=\"-1\" role=\"dialog\"
         aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></div>
            <div class=\"modal-body\">
                <h1>";
            // line 50
            echo $this->getAttribute($context["portfolio"], "title", array());
            echo "</h1>
                <a href=\"";
            // line 51
            echo $this->getAttribute($context["portfolio"], "url", array());
            echo "\">
                    <img src=\"";
            // line 52
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["portfolio"], "image", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive img-centered\"
                         alt=\"";
            // line 53
            echo $this->getAttribute($context["portfolio"], "alt", array());
            echo "\">
                </a>

                <p>";
            // line 56
            echo $this->getAttribute($context["portfolio"], "desc", array());
            echo "</p>
                <ul class=\"client-details\">
                    ";
            // line 58
            if ($this->getAttribute($context["portfolio"], "url", array(), "any", true, true)) {
                // line 59
                echo "                        <li>Client:
                            <strong>
                                <a href=\"";
                // line 61
                echo $this->getAttribute($context["portfolio"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["portfolio"], "client", array());
                echo "</a>
                            </strong>
                        </li>
                    ";
            }
            // line 65
            echo "                    ";
            if ($this->getAttribute($context["portfolio"], "date", array(), "any", true, true)) {
                // line 66
                echo "                        <li>Datum:
                            <strong>
                                ";
                // line 68
                echo $this->getAttribute($context["portfolio"], "date", array());
                echo "
                            </strong>
                        </li>
                    ";
            }
            // line 72
            echo "                    ";
            if ($this->getAttribute($context["portfolio"], "category", array(), "any", true, true)) {
                // line 73
                echo "                        <li>Type:
                            <strong>
                                ";
                // line 75
                echo $this->getAttribute($context["portfolio"], "category", array());
                echo "
                            </strong>
                        </li>
                    ";
            }
            // line 79
            echo "                </ul>
                <button type=\"button\" class=\"button\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 79,  201 => 75,  197 => 73,  194 => 72,  187 => 68,  183 => 66,  180 => 65,  171 => 61,  167 => 59,  165 => 58,  160 => 56,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  133 => 45,  129 => 44,  122 => 39,  118 => 37,  109 => 34,  100 => 28,  94 => 25,  91 => 24,  87 => 23,  84 => 22,  81 => 21,  77 => 19,  65 => 15,  62 => 14,  53 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
