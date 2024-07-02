<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Foody/template/product/product.twig */
class __TwigTemplate_ebe462582717a48df46147ea3041b52a3f9301bac015e45c588d001116662501 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-product\">
  <!-- Breadcrumb Start -->
  <div class=\"container-fluid\">
      <div class=\"row px-xl-5\">
          <div class=\"col-12\">
              <nav class=\"breadcrumb bg-light mb-30\">
                  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) {
                // line 10
                echo "                          <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                echo "</span>
                      ";
            } else {
                // line 12
                echo "                          <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "</a>
                      ";
            }
            // line 14
            echo "                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "              </nav>
          </div>
      </div>
  </div>
  <!-- Breadcrumb End -->

  ";
        // line 21
        if ((($context["thimb"] ?? null) || ($context["images"] ?? null))) {
            // line 22
            echo "   ";
            $context["class"] = "col-lg-7";
            // line 23
            echo "  ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-lg-12";
            // line 25
            echo "  ";
        }
        // line 26
        echo "  
   <div class=\"container-fluid pb-5\">
      <div class=\"row px-xl-5\">
        ";
        // line 29
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 30
            echo "        
          ";
            // line 31
            if (($context["thumb"] ?? null)) {
                // line 32
                echo "          
          ";
            } else {
                // line 34
                echo "            
          ";
            }
            // line 36
            echo "        
          <div class=\"col-lg-5 mb-30\">
            <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner bg-light\">
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "                        <div class=\"carousel-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 41) == 0)) {
                    echo "active";
                }
                echo "\">
                            <img class=\"w-100 h-100\" src=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 42);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </div>
                ";
            // line 46
            if ((twig_length_filter($this->env, ($context["gallery"] ?? null)) > 1)) {
                // line 47
                echo "                    <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                        <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                        <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                    </a>
                ";
            }
            // line 54
            echo "              </div>
            </div>
        ";
        }
        // line 57
        echo "        

     </div> ";
        // line 60
        echo "  </div> ";
        // line 61
        echo "
</div>
";
        // line 63
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 63,  211 => 61,  209 => 60,  205 => 57,  200 => 54,  191 => 47,  189 => 46,  186 => 45,  167 => 42,  160 => 41,  143 => 40,  137 => 36,  133 => 34,  129 => 32,  127 => 31,  124 => 30,  122 => 29,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  103 => 21,  95 => 15,  81 => 14,  73 => 12,  67 => 10,  64 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-product\">
  <!-- Breadcrumb Start -->
  <div class=\"container-fluid\">
      <div class=\"row px-xl-5\">
          <div class=\"col-12\">
              <nav class=\"breadcrumb bg-light mb-30\">
                  {% for breadcrumb in breadcrumbs %}
                      {% if loop.last %}
                          <span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
                      {% else %}
                          <a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                      {% endif %}
                  {% endfor %}
              </nav>
          </div>
      </div>
  </div>
  <!-- Breadcrumb End -->

  {% if thimb or images %}
   {% set class = 'col-lg-7' %}
  {% else %}
    {% set class = 'col-lg-12' %}
  {% endif %}
  
   <div class=\"container-fluid pb-5\">
      <div class=\"row px-xl-5\">
        {% if thumb or images %}
        
          {% if thumb %}
          
          {% else %}
            
          {% endif %}
        
          <div class=\"col-lg-5 mb-30\">
            <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner bg-light\">
                    {% for image in gallery %}
                        <div class=\"carousel-item {% if loop.index0 == 0 %}active{% endif %}\">
                            <img class=\"w-100 h-100\" src=\"{{ image.popup }}\" alt=\"{{ heading_title }}\">
                        </div>
                    {% endfor %}
                </div>
                {% if gallery|length > 1 %}
                    <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                        <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                        <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                    </a>
                {% endif %}
              </div>
            </div>
        {% endif %}
        

     </div> {# row px-xl-5 #}
  </div> {# container-fluid pb-5 #}

</div>
{{ footer }}", "Foody/template/product/product.twig", "");
    }
}
