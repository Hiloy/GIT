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

/* default/template/extension/module/custom.twig */
class __TwigTemplate_aed366e9d0eef0951acd6f34326bf6b00777745915352528ca37158dae563b96 extends \Twig\Template
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

\t<ul class=\"breadcrumb\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t\t<li><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo " 
\t</ul>

\t";
        // line 11
        echo ($context["content_top"] ?? null);
        echo "

\t<h2>";
        // line 13
        echo ($context["page_title"] ?? null);
        echo "</h2>

\t";
        // line 15
        if (($context["errors"] ?? null)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                echo "\t\t\t<div class=\"alert alert-warning\">";
                echo $context["error"];
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
        } elseif (($context["empty"] ?? null)) {
            // line 20
            echo "\t\t<div class=\"alert alert-info\">";
            echo ($context["empty"] ?? null);
            echo "</div>
\t";
        }
        // line 22
        echo "
\t";
        // line 23
        if (($context["cart"] ?? null)) {
            // line 24
            echo "\t\t<div id=\"custom-cart\">
\t\t\t";
            // line 25
            echo ($context["cart"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 28
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t";
        // line 32
        if ((($context["login"] ?? null) &&  !($context["logged"] ?? null))) {
            echo " 
\t\t\t\t<div id=\"custom-login\">";
            // line 33
            echo ($context["login"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 34
        echo " 
\t\t\t";
        // line 35
        if ((($context["customer"] ?? null) &&  !($context["logged"] ?? null))) {
            echo " 
\t\t\t\t<div id=\"custom-customer\">";
            // line 36
            echo ($context["customer"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 37
        echo " 
\t\t\t";
        // line 38
        if ((($context["shipping"] ?? null) && (($context["shipping"] ?? null) != twig_constant("false")))) {
            echo " 
\t\t\t\t<div id=\"custom-shipping\">";
            // line 39
            echo ($context["shipping"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 40
        echo " 
\t\t\t";
        // line 41
        if (($context["payment"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-payment\">";
            // line 42
            echo ($context["payment"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 43
        echo "\t
\t\t\t";
        // line 44
        if ((($context["comment"] ?? null) && (($context["comment"] ?? null) != twig_constant("false")))) {
            echo " 
\t\t\t\t<div id=\"custom-comment\">";
            // line 45
            echo ($context["comment"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 46
        echo " 
\t\t</div>
\t\t<div class=\"col-sm-4\">
\t\t\t";
        // line 49
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t";
        // line 50
        if (($context["module"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-module\">";
            // line 51
            echo ($context["module"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 52
        echo " 
\t\t\t";
        // line 53
        if (($context["total"] ?? null)) {
            echo " 
\t\t\t\t<div id=\"custom-total\">";
            // line 54
            echo ($context["total"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 55
        echo " 
\t\t</div>
\t</div>

\t";
        // line 59
        if (($context["payment"] ?? null)) {
            echo " 
\t\t<div class=\"buttons\" id=\"custom-control\">
\t\t\t<div class=\"pull-right\" style=\"width: 100%;\">
\t\t\t\t";
            // line 62
            if (($context["text_agree"] ?? null)) {
                echo " 
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" ";
                // line 63
                if (($context["agree"] ?? null)) {
                    echo " checked=\"checked\" ";
                }
                echo "  />
\t\t\t\t\t&nbsp;
\t\t\t\t\t<label for=\"input-agree\" class=\"control-label\">";
                // line 65
                echo ($context["text_agree"] ?? null);
                echo "</label>
\t\t\t\t\t<br>
\t\t\t\t";
            }
            // line 67
            echo " 
\t\t\t\t<input type=\"button\" value=\"";
            // line 68
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-custom-order\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" style=\"display: block!important\"/>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t";
        }
        // line 73
        echo "
\t";
        // line 74
        echo ($context["content_bottom"] ?? null);
        echo "

\t<div id=\"custom-confirm\" style=\"display: none;\"></div>
\t
</div> 

<script>
\$(document).ready(function() {

  \$('#button-custom-order').on('click', function(){

  \t";
        // line 85
        if ( !($context["logged"] ?? null)) {
            echo " 

\t\t\tcheckoutCustomer()
\t\t\t\t";
            // line 88
            if ((array_key_exists("login", $context) && (($context["login"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutLogin )
\t\t\t\t";
            }
            // line 90
            echo " 
\t\t\t\t";
            // line 91
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutShipping )
\t\t\t\t";
            }
            // line 93
            echo " 
\t\t\t\t\t.then( checkoutPayment )
\t\t\t\t";
            // line 95
            if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
            }
            // line 97
            echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( failureCallback );

  \t";
        } else {
            // line 101
            echo " 

  \t\t";
            // line 103
            if ((array_key_exists("shipping", $context) && (($context["shipping"] ?? null) != twig_constant("false")))) {
                echo " 

  \t\t\tcheckoutShipping()
  \t\t\t\t.then( checkoutPayment )
  \t\t\t\t";
                // line 107
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t.then( checkoutComment )
\t\t\t\t";
                }
                // line 109
                echo " 
\t\t\t\t.then( checkoutConfirm )
\t\t\t\t.catch( failureCallback );

  \t\t";
            } else {
                // line 113
                echo " 

  \t\t\tcheckoutPayment()
  \t\t\t\t";
                // line 116
                if ((array_key_exists("comment", $context) && (($context["comment"] ?? null) != twig_constant("false")))) {
                    echo " 
\t\t\t\t\t\t.then( checkoutComment )
\t\t\t\t\t";
                }
                // line 118
                echo " 
\t\t\t\t\t.then( checkoutConfirm )
\t\t\t\t\t.catch( ailureCallback );


  \t\t";
            }
            // line 123
            echo "\t

  \t";
        }
        // line 125
        echo " 

  });

});
  
</script>
";
        // line 132
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/custom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 132,  356 => 125,  351 => 123,  343 => 118,  337 => 116,  332 => 113,  325 => 109,  319 => 107,  312 => 103,  308 => 101,  301 => 97,  295 => 95,  291 => 93,  285 => 91,  282 => 90,  276 => 88,  270 => 85,  256 => 74,  253 => 73,  243 => 68,  240 => 67,  234 => 65,  227 => 63,  223 => 62,  217 => 59,  211 => 55,  206 => 54,  202 => 53,  199 => 52,  194 => 51,  190 => 50,  186 => 49,  181 => 46,  176 => 45,  172 => 44,  169 => 43,  164 => 42,  160 => 41,  157 => 40,  152 => 39,  148 => 38,  145 => 37,  140 => 36,  136 => 35,  133 => 34,  128 => 33,  124 => 32,  120 => 31,  115 => 28,  109 => 25,  106 => 24,  104 => 23,  101 => 22,  95 => 20,  92 => 19,  83 => 17,  78 => 16,  76 => 15,  71 => 13,  66 => 11,  61 => 8,  51 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }} 

<div class=\"container\">

\t<ul class=\"breadcrumb\">
\t{% for breadcrumb in breadcrumbs %} 
\t\t<li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t{% endfor %} 
\t</ul>

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

\t<div class=\"row\">
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
{{ footer }}", "default/template/extension/module/custom.twig", "");
    }
}
