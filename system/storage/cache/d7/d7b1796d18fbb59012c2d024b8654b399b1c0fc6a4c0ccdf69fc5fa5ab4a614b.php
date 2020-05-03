<?php

/* __string_template__2f746785d0671130524c25d768b65ae9983ca2d30beecc9fd795ecda1f96685e */
class __TwigTemplate_18e7a8b287bd382c100aa2a7083c78519405a21acb51259dbd81a6f7a2fd22ab extends Twig_Template
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
        echo "<div id=\"bannergrid";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"banner-grid-wrap text-center\">
  <div class=\"row\">
    ";
        // line 3
        if (((isset($context["grid"]) ? $context["grid"] : null) == 1)) {
            // line 4
            echo "      ";
            $context["gridclass"] = "col-sm-12";
            // line 5
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 2)) {
            // line 6
            echo "      ";
            $context["gridclass"] = "col-sm-6 col-xs-12";
            // line 7
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 3)) {
            // line 8
            echo "      ";
            $context["gridclass"] = "col-md-4 col-sm-12";
            // line 9
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 4)) {
            // line 10
            echo "      ";
            $context["gridclass"] = "col-md-3 col-sm-6 col-xs-12";
            // line 11
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 6)) {
            // line 12
            echo "      ";
            $context["gridclass"] = "col-md-2 col-sm-4 col-xs-12";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["gridclass"] = "col-xs-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 17
            echo "      <div class=\"";
            echo (isset($context["gridclass"]) ? $context["gridclass"] : null);
            echo "\">
        <div class=\"banner-grid\" >
          ";
            // line 19
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive img-center rounded-3\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive img-center rounded-3\" />";
            }
            // line 20
            echo "        </div>
        <div href=\"";
            // line 21
            echo $this->getAttribute($context["banner"], "link", array());
            echo "\"><a>";
            echo $this->getAttribute($context["banner"], "title", array());
            echo "</a></div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__2f746785d0671130524c25d768b65ae9983ca2d30beecc9fd795ecda1f96685e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  93 => 21,  90 => 20,  74 => 19,  68 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div id="bannergrid{{ module }}" class="banner-grid-wrap text-center">*/
/*   <div class="row">*/
/*     {% if (grid == 1) %}*/
/*       {% set gridclass = 'col-sm-12' %}*/
/*     {% elseif (grid == 2) %}*/
/*       {% set gridclass = 'col-sm-6 col-xs-12' %}*/
/*     {% elseif (grid == 3) %}*/
/*       {% set gridclass = 'col-md-4 col-sm-12' %}*/
/*     {% elseif (grid == 4) %}*/
/*       {% set gridclass = 'col-md-3 col-sm-6 col-xs-12' %}*/
/*     {% elseif (grid == 6) %}*/
/*       {% set gridclass = 'col-md-2 col-sm-4 col-xs-12' %}*/
/*     {% else %}*/
/*       {% set gridclass = 'col-xs-12' %}*/
/*     {% endif %}*/
/*     {% for banner in banners %}*/
/*       <div class="{{ gridclass }}">*/
/*         <div class="banner-grid" >*/
/*           {% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" />{% endif %}*/
/*         </div>*/
/*         <div href="{{banner.link}}"><a>{{banner.title}}</a></div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
