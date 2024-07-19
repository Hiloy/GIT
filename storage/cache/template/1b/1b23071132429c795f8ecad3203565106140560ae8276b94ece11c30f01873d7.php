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

/* Foody/template/extension/module/custom.twig */
class __TwigTemplate_03781eb8888b5ee8b0f2ca3690f9cb6d29739089dfd56f7df768f24c27bf1163 extends \Twig\Template
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

<div class=\"container\">

\t<!-- Breadcrumb Start -->
\t<div class=\"row px-xl-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t\t<nav class=\"breadcrumb bg-light mb-30\">
\t\t\t\t\t\t\t";
        // line 9
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
            // line 10
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t\t\t";
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
        // line 16
        echo "\t\t\t\t\t</nav>
\t\t\t</div>
\t</div>
\t<!-- Breadcrumb End -->

\t<div class=\"bg-light p-30 mb-5\">
\t\t";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
\t\t<h2>";
        // line 23
        echo ($context["page_title"] ?? null);
        echo "</h2>
\t\t";
        // line 24
        if (($context["errors"] ?? null)) {
            // line 25
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "\t\t\t\t<div class=\"alert alert-warning\">";
                echo $context["error"];
                echo "</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t";
        } elseif (($context["empty"] ?? null)) {
            // line 29
            echo "\t\t\t<div class=\"alert alert-info\">";
            echo ($context["empty"] ?? null);
            echo "</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        if (($context["cart"] ?? null)) {
            // line 32
            echo "\t\t\t<div id=\"custom-cart\">
\t\t\t\t";
            // line 33
            echo ($context["cart"] ?? null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 36
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8\">
\t\t\t\t";
        // line 38
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t";
        // line 39
        if ((($context["login"] ?? null) &&  !($context["logged"] ?? null))) {
            // line 40
            echo "\t\t\t\t\t<div id=\"custom-login\">";
            echo ($context["login"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if ((($context["customer"] ?? null) &&  !($context["logged"] ?? null))) {
            // line 43
            echo "\t\t\t\t\t<div id=\"custom-customer\">";
            echo ($context["customer"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if ((($context["shipping"] ?? null) && (($context["shipping"] ?? null) != twig_constant("false")))) {
            // line 46
            echo "\t\t\t\t\t<div id=\"custom-shipping\">";
            echo ($context["shipping"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (($context["payment"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t<div id=\"custom-payment\">";
            echo ($context["payment"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if ((($context["comment"] ?? null) && (($context["comment"] ?? null) != twig_constant("false")))) {
            // line 52
            echo "\t\t\t\t\t<div id=\"custom-comment\">";
            echo ($context["comment"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t";
        // line 56
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t\t";
        // line 57
        if (($context["module"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t<div id=\"custom-module\">";
            echo ($context["module"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t";
        if (($context["total"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t<div id=\"custom-total\">";
            echo ($context["total"] ?? null);
            echo "</div>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 65
        if (($context["payment"] ?? null)) {
            // line 66
            echo "\t\t\t<div class=\"buttons\" id=\"custom-control\">
\t\t\t\t<div class=\"pull-right\" style=\"width: 100%;\">
\t\t\t\t\t";
            // line 68
            if (($context["text_agree"] ?? null)) {
                // line 69
                echo "\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" ";
                // line 70
                if (($context["agree"] ?? null)) {
                    echo " checked=\"checked\" ";
                }
                echo "  />
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<label for=\"input-agree\" class=\"control-label\">";
                // line 72
                echo ($context["text_agree"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</label>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t<input type=\"button\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-custom-order\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"display: block!important\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t";
        }
        // line 81
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>

\t<div id=\"custom-confirm\" style=\"display: none;\"></div>
\t
</div> 

<script>
\$(document).ready(function() {

  \$('#button-custom-order').on('click', function(){

  \t";
        // line 93
        if ( !($context["logged"] ?? null)) {
            echo " 

\t\t\tcheckoutCustomer()
\t\t\t\t";
            // line 96
            if ((array_key_exists("login", $context) && (($context["login"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutLogin )
\t\t\t\t";
            }
            // line 98
            echo " 
\t\t\t\t";
            // line 99
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutShipping )
\t\t\t\t";
            }
            // line 101
            echo " 
\t\t\t\t\t.then( checkoutPayment )
\t\t\t\t";
            // line 103
            if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
            }
            // line 105
            echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( failureCallback );

  \t";
        } else {
            // line 109
            echo " 

  \t\t";
            // line 111
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 

  \t\t\tcheckoutShipping()
  \t\t\t\t.then( checkoutPayment )
  \t\t\t\t";
                // line 115
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
                }
                // line 117
                echo " 
\t\t\t\t.then( checkoutConfirm )
\t\t\t\t.catch( failureCallback );

  \t\t";
            } else {
                // line 121
                echo " 

  \t\t\tcheckoutPayment()
  \t\t\t\t";
                // line 124
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t\t.then( checkoutComment )
\t\t\t\t\t";
                }
                // line 126
                echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( ailureCallback );


  \t\t";
            }
            // line 131
            echo "\t

  \t";
        }
        // line 133
        echo " 

  });

});
  
</script>
";
        // line 140
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 140,  368 => 133,  363 => 131,  355 => 126,  349 => 124,  344 => 121,  337 => 117,  331 => 115,  324 => 111,  320 => 109,  313 => 105,  307 => 103,  303 => 101,  297 => 99,  294 => 98,  288 => 96,  282 => 93,  266 => 81,  255 => 76,  248 => 72,  241 => 70,  238 => 69,  236 => 68,  232 => 66,  230 => 65,  226 => 63,  220 => 61,  217 => 60,  211 => 58,  209 => 57,  205 => 56,  201 => 54,  195 => 52,  192 => 51,  186 => 49,  183 => 48,  177 => 46,  174 => 45,  168 => 43,  165 => 42,  159 => 40,  157 => 39,  153 => 38,  149 => 36,  143 => 33,  140 => 32,  137 => 31,  131 => 29,  128 => 28,  119 => 26,  114 => 25,  112 => 24,  108 => 23,  104 => 22,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }} 

<div class=\"container\">

\t<!-- Breadcrumb Start -->
\t<div class=\"row px-xl-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t\t<nav class=\"breadcrumb bg-light mb-30\">
\t\t\t\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t\t\t\t\t{% if loop.last %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</nav>
\t\t\t</div>
\t</div>
\t<!-- Breadcrumb End -->

\t<div class=\"bg-light p-30 mb-5\">
\t\t{{ content_top }}
\t\t<h2>{{ page_title }}</h2>
\t\t{% if errors %}
\t\t\t{% for error in errors %}
\t\t\t\t<div class=\"alert alert-warning\">{{ error }}</div>
\t\t\t{% endfor %}
\t\t{% elseif empty %}
\t\t\t<div class=\"alert alert-info\">{{ empty }}</div>
\t\t{% endif %}
\t\t{% if cart %}
\t\t\t<div id=\"custom-cart\">
\t\t\t\t{{ cart }}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8\">
\t\t\t\t{{ column_left }}
\t\t\t\t{% if login and not logged %}
\t\t\t\t\t<div id=\"custom-login\">{{ login }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if customer and not logged %}
\t\t\t\t\t<div id=\"custom-customer\">{{ customer }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if shipping and shipping != constant('false') %}
\t\t\t\t\t<div id=\"custom-shipping\">{{ shipping }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if payment %}
\t\t\t\t\t<div id=\"custom-payment\">{{ payment }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if comment and comment != constant('false') %}
\t\t\t\t\t<div id=\"custom-comment\">{{ comment }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t{{ column_right }}
\t\t\t\t{% if module %}
\t\t\t\t\t<div id=\"custom-module\">{{ module }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if total %}
\t\t\t\t\t<div id=\"custom-total\">{{ total }}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t{% if payment %}
\t\t\t<div class=\"buttons\" id=\"custom-control\">
\t\t\t\t<div class=\"pull-right\" style=\"width: 100%;\">
\t\t\t\t\t{% if text_agree %}
\t\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" {% if agree %} checked=\"checked\" {% endif %}  />
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t<label for=\"input-agree\" class=\"control-label\">{{ text_agree }}</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</label>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<input type=\"button\" value=\"{{ button_continue }}\" id=\"button-custom-order\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\" style=\"display: block!important\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t{% endif %}
\t\t{{ content_bottom }}
\t</div>

\t<div id=\"custom-confirm\" style=\"display: none;\"></div>
\t
</div> 

<script>
\$(document).ready(function() {

  \$('#button-custom-order').on('click', function(){

  \t{% if (not logged) %} 

\t\t\tcheckoutCustomer()
\t\t\t\t{% if (login is defined and login != constant('false')) %} 
\t\t\t\t\t.then( checkoutLogin )
\t\t\t\t{% endif %} 
\t\t\t\t{% if (shipping is defined and shipping != constant('false')) %} 
\t\t\t\t\t.then( checkoutShipping )
\t\t\t\t{% endif %} 
\t\t\t\t\t.then( checkoutPayment )
\t\t\t\t{% if (comment is defined and comment != constant('false')) %} 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t{% endif %} 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( failureCallback );

  \t{% else %} 

  \t\t{% if (shipping is defined and shipping != constant('false')) %} 

  \t\t\tcheckoutShipping()
  \t\t\t\t.then( checkoutPayment )
  \t\t\t\t{% if (comment is defined and comment != constant('false')) %} 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t{% endif %} 
\t\t\t\t.then( checkoutConfirm )
\t\t\t\t.catch( failureCallback );

  \t\t{% else %} 

  \t\t\tcheckoutPayment()
  \t\t\t\t{% if (comment is defined and comment != constant('false')) %} 
\t\t\t\t\t\t.then( checkoutComment )
\t\t\t\t\t{% endif %} 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( ailureCallback );


  \t\t{% endif %}\t

  \t{% endif %} 

  });

});
  
</script>
{{ footer }}", "Foody/template/extension/module/custom.twig", "");
    }
}
