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
class __TwigTemplate_ac391a44533c2adea6349a994bd8e7f53665ae617a8f1219b8166c8299bfbba7 extends \Twig\Template
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

\t";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "

\t<h2>";
        // line 23
        echo ($context["page_title"] ?? null);
        echo "</h2>

\t";
        // line 25
        if (($context["errors"] ?? null)) {
            // line 26
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "\t\t\t<div class=\"alert alert-warning\">";
                echo $context["error"];
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t";
        } elseif (($context["empty"] ?? null)) {
            // line 30
            echo "\t\t<div class=\"alert alert-info\">";
            echo ($context["empty"] ?? null);
            echo "</div>
\t";
        }
        // line 32
        echo "
\t";
        // line 33
        if (($context["cart"] ?? null)) {
            // line 34
            echo "\t\t<div id=\"custom-cart\">
\t\t\t";
            // line 35
            echo ($context["cart"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 38
        echo "
\t<div class=\"row \">
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 41
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 42
        if ((($context["login"] ?? null) &&  !($context["logged"] ?? null))) {
            echo " 
\t\t\t\t<div id=\"custom-login\">";
            // line 43
            echo ($context["login"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 44
        echo " 
\t\t\t";
        // line 45
        if ((($context["customer"] ?? null) &&  !($context["logged"] ?? null))) {
            echo " 
\t\t\t\t<div id=\"custom-customer\">";
            // line 46
            echo ($context["customer"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 47
        echo " 
\t\t\t";
        // line 48
        if ((($context["shipping"] ?? null) && (($context["shipping"] ?? null) != twig_constant("false")))) {
            echo " 
\t\t\t\t<div id=\"custom-shipping\">";
            // line 49
            echo ($context["shipping"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 50
        echo " 
\t\t\t";
        // line 51
        if (($context["payment"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-payment\">";
            // line 52
            echo ($context["payment"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 53
        echo "\t
\t\t\t";
        // line 54
        if ((($context["comment"] ?? null) && (($context["comment"] ?? null) != twig_constant("false")))) {
            echo " 
\t\t\t\t<div id=\"custom-comment\">";
            // line 55
            echo ($context["comment"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 56
        echo " 
\t\t</div>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 59
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t";
        // line 60
        if (($context["module"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-module\">";
            // line 61
            echo ($context["module"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 62
        echo " 
\t\t\t";
        // line 63
        if (($context["total"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-total\">";
            // line 64
            echo ($context["total"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 65
        echo " 
\t\t</div>
\t</div>

\t";
        // line 69
        if (($context["payment"] ?? null)) {
            echo " 
\t\t<div class=\"buttons\" id=\"custom-control\">
\t\t\t<div class=\"pull-right\" style=\"width: 100%;\">
\t\t\t\t";
            // line 72
            if (($context["text_agree"] ?? null)) {
                echo " 
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" ";
                // line 73
                if (($context["agree"] ?? null)) {
                    echo " checked=\"checked\" ";
                }
                echo "  />
\t\t\t\t\t&nbsp;
\t\t\t\t\t<label for=\"input-agree\" class=\"control-label\">";
                // line 75
                echo ($context["text_agree"] ?? null);
                echo "</label>
\t\t\t\t\t<br>
\t\t\t\t";
            }
            // line 77
            echo " 
\t\t\t\t<input type=\"button\" value=\"";
            // line 78
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-custom-order\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"display: block!important\"/>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t";
        }
        // line 83
        echo "
\t";
        // line 84
        echo ($context["content_bottom"] ?? null);
        echo "

\t<div id=\"custom-confirm\" style=\"display: none;\"></div>
\t
</div> 

<script>
\$(document).ready(function() {

  \$('#button-custom-order').on('click', function(){

  \t";
        // line 95
        if ( !($context["logged"] ?? null)) {
            echo " 

\t\t\tcheckoutCustomer()
\t\t\t\t";
            // line 98
            if ((array_key_exists("login", $context) && (($context["login"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutLogin )
\t\t\t\t";
            }
            // line 100
            echo " 
\t\t\t\t";
            // line 101
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutShipping )
\t\t\t\t";
            }
            // line 103
            echo " 
\t\t\t\t\t.then( checkoutPayment )
\t\t\t\t";
            // line 105
            if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
            }
            // line 107
            echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( failureCallback );

  \t";
        } else {
            // line 111
            echo " 

  \t\t";
            // line 113
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 

  \t\t\tcheckoutShipping()
  \t\t\t\t.then( checkoutPayment )
  \t\t\t\t";
                // line 117
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
                }
                // line 119
                echo " 
\t\t\t\t.then( checkoutConfirm )
\t\t\t\t.catch( failureCallback );

  \t\t";
            } else {
                // line 123
                echo " 

  \t\t\tcheckoutPayment()
  \t\t\t\t";
                // line 126
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t\t.then( checkoutComment )
\t\t\t\t\t";
                }
                // line 128
                echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( ailureCallback );


  \t\t";
            }
            // line 133
            echo "\t

  \t";
        }
        // line 135
        echo " 

  });

});
  
</script>
";
        // line 142
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
        return array (  402 => 142,  393 => 135,  388 => 133,  380 => 128,  374 => 126,  369 => 123,  362 => 119,  356 => 117,  349 => 113,  345 => 111,  338 => 107,  332 => 105,  328 => 103,  322 => 101,  319 => 100,  313 => 98,  307 => 95,  293 => 84,  290 => 83,  280 => 78,  277 => 77,  271 => 75,  264 => 73,  260 => 72,  254 => 69,  248 => 65,  243 => 64,  239 => 63,  236 => 62,  231 => 61,  227 => 60,  223 => 59,  218 => 56,  213 => 55,  209 => 54,  206 => 53,  201 => 52,  197 => 51,  194 => 50,  189 => 49,  185 => 48,  182 => 47,  177 => 46,  173 => 45,  170 => 44,  165 => 43,  161 => 42,  157 => 41,  152 => 38,  146 => 35,  143 => 34,  141 => 33,  138 => 32,  132 => 30,  129 => 29,  120 => 27,  115 => 26,  113 => 25,  108 => 23,  103 => 21,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
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

\t{{ content_top }}

\t<h2>{{ page_title }}</h2>

\t{% if errors %}
\t\t{% for error in errors %}
\t\t\t<div class=\"alert alert-warning\">{{ error }}</div>
\t\t{% endfor %}
\t{% elseif empty %}
\t\t<div class=\"alert alert-info\">{{ empty }}</div>
\t{% endif %}

\t{% if cart %}
\t\t<div id=\"custom-cart\">
\t\t\t{{ cart }}
\t\t</div>
\t{% endif %}

\t<div class=\"row \">
\t\t<div class=\"col-sm-8\">
\t\t\t{{ column_left }}
\t\t\t{% if login and not logged %} 
\t\t\t\t<div id=\"custom-login\">{{ login }}</div>
\t\t\t{% endif %} 
\t\t\t{% if customer and not logged %} 
\t\t\t\t<div id=\"custom-customer\">{{ customer }}</div>
\t\t\t{% endif %} 
\t\t\t{% if shipping and shipping != constant('false') %} 
\t\t\t\t<div id=\"custom-shipping\">{{ shipping }}</div>
\t\t\t{% endif %} 
\t\t\t{% if payment %} 
\t\t\t\t<div id=\"custom-payment\">{{ payment }}</div>
\t\t\t{% endif %}\t
\t\t\t{% if comment and comment != constant('false') %} 
\t\t\t\t<div id=\"custom-comment\">{{ comment }}</div>
\t\t\t{% endif %} 
\t\t</div>
\t\t<div class=\"col-sm-4\">
\t\t\t{{ column_right }}
\t\t\t{% if module %} 
\t\t\t\t<div id=\"custom-module\">{{ module }}</div>
\t\t\t{% endif %} 
\t\t\t{% if total %} 
\t\t\t\t<div id=\"custom-total\">{{ total }}</div>
\t\t\t{% endif %} 
\t\t</div>
\t</div>

\t{% if payment %} 
\t\t<div class=\"buttons\" id=\"custom-control\">
\t\t\t<div class=\"pull-right\" style=\"width: 100%;\">
\t\t\t\t{% if text_agree %} 
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" {% if agree %} checked=\"checked\" {% endif %}  />
\t\t\t\t\t&nbsp;
\t\t\t\t\t<label for=\"input-agree\" class=\"control-label\">{{ text_agree }}</label>
\t\t\t\t\t<br>
\t\t\t\t{% endif %} 
\t\t\t\t<input type=\"button\" value=\"{{ button_continue }}\" id=\"button-custom-order\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\" style=\"display: block!important\"/>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t{% endif %}

\t{{ content_bottom }}

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
