<?php

/* modular/showcase.html.twig */
class __TwigTemplate_0cb87b1e4d80cdad4e8b9a49de9d4acbf19aaf130dcfd99d7fe96a0d462e18b9 extends Twig_Template
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
        echo "<div id=\"content-slide\">
    <div class=\"slideme\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "            <div class=\"modular-row showcase flush-top\" style=\"
         background: #47b5cc; /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #";
            // line 6
            echo $this->getAttribute($context["slide"], "bg_color", array());
            echo " 0%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%); /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #47b5cc), color-stop(76%, #";
            // line 7
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo "), color-stop(76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo ")); /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #";
            // line 8
            echo $this->getAttribute($context["slide"], "bg_color", array());
            echo " 0%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%); /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #";
            // line 9
            echo $this->getAttribute($context["slide"], "bg_color", array());
            echo " 0%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%); /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #";
            // line 10
            echo $this->getAttribute($context["slide"], "bg_color", array());
            echo " 0%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%); /* IE10+ */
  background: radial-gradient(ellipse at center, #";
            // line 11
            echo $this->getAttribute($context["slide"], "bg_color", array());
            echo " 0%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%, #";
            echo $this->getAttribute($context["slide"], "bg_color_2", array());
            echo " 76%); /* W3C */
       \">
                <h1>";
            // line 13
            echo $this->getAttribute($context["slide"], "heading", array());
            echo "</h1>

                <h2>";
            // line 15
            echo $this->getAttribute($context["slide"], "subheading", array());
            echo "</h2>
                <a class=\"button\" href=\"";
            // line 16
            echo $this->getAttribute($context["slide"], "button_url", array());
            echo "\">";
            echo $this->getAttribute($context["slide"], "button_text", array());
            echo "</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</div>

";
        // line 22
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

<script type=\"text/javascript\">
    \$('#content-slide').slideme({
        arrows: ";
        // line 26
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "arrows", array());
        echo ",
        autoslide: ";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "autoslide", array());
        echo ",
        autoslideHoverStop: ";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "autoslideHoverStop", array());
        echo ",
        interval: ";
        // line 29
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "interval", array());
        echo ",
        loop: ";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "loop", array());
        echo ",
        pagination: \"numbers\",
        transition: '";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "transition", array());
        echo "',
        itemsForSlide: ";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "itemsForSlide", array());
        echo ",
        touch: ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "touch", array());
        echo ",
        swipe: ";
        // line 35
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header_options", array()), "swipe", array());
        echo ",

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  139 => 34,  135 => 33,  131 => 32,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  103 => 22,  98 => 19,  87 => 16,  83 => 15,  78 => 13,  69 => 11,  61 => 10,  53 => 9,  45 => 8,  39 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
