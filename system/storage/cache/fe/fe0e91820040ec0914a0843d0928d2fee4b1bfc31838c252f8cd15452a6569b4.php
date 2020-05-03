<?php

/* __string_template__3c2cd2f2c2d21d16ab1b6f0ae6712274f0c1030dcb75ebdf08f59cb37bf21243 */
class __TwigTemplate_19843c9f15db7558dafeaf29e6534d94e74499572c99373b9eeef67a4d8dea9e extends Twig_Template
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
        echo "\" style=\"box-shadow: 2px 2px 5px 2px #E8E8EF\" class=\"banner-grid-wrap text-center\">
   
  <div class=\"row\">
    ";
        // line 4
        if (((isset($context["grid"]) ? $context["grid"] : null) == 1)) {
            // line 5
            echo "      ";
            $context["gridclass"] = "col-sm-12";
            // line 6
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 2)) {
            // line 7
            echo "      ";
            $context["gridclass"] = "col-sm-6 col-xs-12";
            // line 8
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 3)) {
            // line 9
            echo "      ";
            $context["gridclass"] = "col-md-4 col-sm-12";
            // line 10
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 4)) {
            // line 11
            echo "      ";
            $context["gridclass"] = "col-md-3 col-sm-6 col-xs-12";
            // line 12
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 6)) {
            // line 13
            echo "      ";
            $context["gridclass"] = "col-md-2 col-sm-4 col-xs-12";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "      ";
            $context["gridclass"] = "col-xs-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 18
            echo "    <div class=\"";
            echo (isset($context["gridclass"]) ? $context["gridclass"] : null);
            echo "\" style=\"box-shadow: 2px 2px 5px 2px #E8E8EF\">
     
        <div class=\"banner-grid\">
          ";
            // line 21
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
            // line 22
            echo "        </div>
       <div><a href=\"";
            // line 23
            echo $this->getAttribute($context["banner"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["banner"], "title", array());
            echo "</a></div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__3c2cd2f2c2d21d16ab1b6f0ae6712274f0c1030dcb75ebdf08f59cb37bf21243";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  95 => 23,  92 => 22,  76 => 21,  69 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
/* <div id="bannergrid{{ module }}" style="box-shadow: 2px 2px 5px 2px #E8E8EF" class="banner-grid-wrap text-center">*/
/*    */
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
/*     <div class="{{ gridclass }}" style="box-shadow: 2px 2px 5px 2px #E8E8EF">*/
/*      */
/*         <div class="banner-grid">*/
/*           {% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" />{% endif %}*/
/*         </div>*/
/*        <div><a href="{{banner.link}}">{{banner.title}}</a></div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
