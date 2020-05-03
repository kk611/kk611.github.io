<?php

/* __string_template__3b37c3e6d062112a21c9d36a7a0a450e740da6a38c5b06528ff9cd333f789703 */
class __TwigTemplate_53e2c11962f7f0ba758758b5c746563a4d9e7ac44ec3215b6c5a31232c542f63 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<nav id=\"menu\" class=\"navbar\">
  <div class=\"navbar-header\">
    <a class=\"navbar-brand\" href=\"";
            // line 4
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">
    ";
            // line 5
            if ((isset($context["logo"]) ? $context["logo"] : null)) {
                // line 6
                echo "      <img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"Fitness Pad\" class=\"img-responsive\" />
    ";
            } else {
                // line 8
                echo "      ";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "
    ";
            }
            // line 10
            echo "    </a>
    <button type=\"button\" class=\"btn btn-navbar navbar-toggle rounded-0\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    <span class=\"hidden visible-xs visible-sm pull-right\">";
            // line 12
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "</span>
    <span class=\"hidden visible-xs visible-sm pull-right\">";
            // line 13
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "</span>
  </div>
  <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
    <ul class=\"nav navbar-nav menu-links\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "      ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 19
                    echo "      <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
        <div class=\"dropdown-menu\">
          <div class=\"dropdown-inner\"> ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 22
                        echo "            <ul class=\"list-unstyled\">
              ";
                        // line 23
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 24
                            echo "              <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "            </ul>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "</div>
          <a href=\"";
                    // line 28
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
      </li>
      ";
                } else {
                    // line 31
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
      ";
                }
                // line 33
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>
    <ul class=\"nav navbar-nav navbar-right hidden visible-lg visible-md\">
      <li>";
            // line 36
            echo (isset($context["search"]) ? $context["search"] : null);
            echo "</li>
      <li>";
            // line 37
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "</li>
    </ul>
  </div>
</nav>
";
        }
        // line 41
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__3b37c3e6d062112a21c9d36a7a0a450e740da6a38c5b06528ff9cd333f789703";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 41,  139 => 37,  135 => 36,  131 => 34,  125 => 33,  117 => 31,  107 => 28,  104 => 27,  97 => 26,  86 => 24,  82 => 23,  79 => 22,  75 => 21,  67 => 19,  64 => 18,  60 => 17,  53 => 13,  49 => 12,  45 => 10,  39 => 8,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <nav id="menu" class="navbar">*/
/*   <div class="navbar-header">*/
/*     <a class="navbar-brand" href="{{ home }}">*/
/*     {% if logo %}*/
/*       <img src="{{ logo }}" title="{{ name }}" alt="Fitness Pad" class="img-responsive" />*/
/*     {% else %}*/
/*       {{ name }}*/
/*     {% endif %}*/
/*     </a>*/
/*     <button type="button" class="btn btn-navbar navbar-toggle rounded-0" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     <span class="hidden visible-xs visible-sm pull-right">{{ cart }}</span>*/
/*     <span class="hidden visible-xs visible-sm pull-right">{{ search }}</span>*/
/*   </div>*/
/*   <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*     <ul class="nav navbar-nav menu-links">*/
/*       {% for category in categories %}*/
/*       {% if category.children %}*/
/*       <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*         <div class="dropdown-menu">*/
/*           <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*             <ul class="list-unstyled">*/
/*               {% for child in children %}*/
/*               <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             {% endfor %}</div>*/
/*           <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*       </li>*/
/*       {% else %}*/
/*       <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <ul class="nav navbar-nav navbar-right hidden visible-lg visible-md">*/
/*       <li>{{ search }}</li>*/
/*       <li>{{ cart }}</li>*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* {% endif %} */
