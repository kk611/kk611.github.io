<?php

/* __string_template__e427883ffd2b4f6ff9ca215e075bfb0715a4e0db9be7bf3d34b5121292c09774 */
class __TwigTemplate_6252e60072ced385ccecb7839da562249ee40a1810d99376dba395be70d35d03 extends Twig_Template
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
    <div style=\"height :15px;padding-bottom:10px\"></div>
    ";
        // line 5
        if (((isset($context["grid"]) ? $context["grid"] : null) == 1)) {
            // line 6
            echo "      ";
            $context["gridclass"] = "col-sm-12";
            // line 7
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 2)) {
            // line 8
            echo "      ";
            $context["gridclass"] = "col-sm-6 col-xs-12";
            // line 9
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 3)) {
            // line 10
            echo "      ";
            $context["gridclass"] = "col-md-4 col-sm-12";
            // line 11
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 4)) {
            // line 12
            echo "      ";
            $context["gridclass"] = "col-md-3 col-sm-6 col-xs-12";
            // line 13
            echo "    ";
        } elseif (((isset($context["grid"]) ? $context["grid"] : null) == 6)) {
            // line 14
            echo "      ";
            $context["gridclass"] = "col-md-2 col-sm-4 col-xs-12";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "      ";
            $context["gridclass"] = "col-xs-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 19
            echo "    
      <div class=\"";
            // line 20
            echo (isset($context["gridclass"]) ? $context["gridclass"] : null);
            echo "\">
        <div class=\"banner-grid\">
          ";
            // line 22
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
            // line 23
            echo "        </div>
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
        return "__string_template__e427883ffd2b4f6ff9ca215e075bfb0715a4e0db9be7bf3d34b5121292c09774";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  94 => 23,  78 => 22,  73 => 20,  70 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  29 => 6,  27 => 5,  19 => 1,);
    }
}
/* <div id="bannergrid{{ module }}" class="banner-grid-wrap text-center">*/
/*   */
/*   <div class="row">*/
/*     <div style="height :15px;padding-bottom:10px"></div>*/
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
/*     */
/*       <div class="{{ gridclass }}">*/
/*         <div class="banner-grid">*/
/*           {% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive img-center rounded-3" />{% endif %}*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
