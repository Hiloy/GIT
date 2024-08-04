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

/* Foody/template/account/account.twig */
class __TwigTemplate_9ee03904879fdbc3c1b52989b551ea34a3323f1e88910095471bb62c0474c350 extends \Twig\Template
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

<div id=\"account-account\" class=\"container-fluid\">

    <!-- Breadcrumb Start -->
    <div class=\"row px-xl-5\">
        <div class=\"col-12\">
            <nav class=\"breadcrumb bg-light mb-30\">
                ";
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
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "                        <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</span>
                    ";
            } else {
                // line 13
                echo "                        <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
                    ";
            }
            // line 15
            echo "                ";
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
        echo "            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    ";
        // line 21
        if (($context["success"] ?? null)) {
            // line 22
            echo "        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 24
            echo ($context["success"] ?? null);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row px-xl-5\">
        ";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 32
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 33
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 34
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 35
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 38
            echo "        ";
        }
        // line 39
        echo "
        <div id=\"content\" class=\"";
        // line 40
        echo ($context["class"] ?? null);
        echo "\">
            <div class=\"bg-light p-30 mb-5\">
                ";
        // line 42
        echo ($context["content_top"] ?? null);
        echo "
                <h2>";
        // line 43
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 45
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 46
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 47
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                    <li><a href=\"";
        // line 48
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                </ul>
                ";
        // line 50
        if (($context["credit_cards"] ?? null)) {
            // line 51
            echo "                    <h2>";
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
                    <ul class=\"list-unstyled\">
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 54
                echo "                            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 54);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 54);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                ";
        }
        // line 58
        echo "                <h2>";
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 60
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                    ";
        // line 62
        echo "                    ";
        if (($context["reward"] ?? null)) {
            // line 63
            echo "                        <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 65
        echo "                    <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
                    ";
        // line 67
        echo "                    <li><a href=\"";
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
                </ul>
                <h2>";
        // line 69
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    ";
        // line 71
        if ( !($context["tracking"] ?? null)) {
            // line 72
            echo "                        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
                    ";
        } else {
            // line 74
            echo "                        <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
                        <li><a href=\"";
            // line 75
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 77
        echo "                </ul>
                <h2>";
        // line 78
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 80
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
                </ul>
                ";
        // line 82
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 85
        echo ($context["column_right"] ?? null);
        echo "
    </div>

</div>

";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 90,  302 => 85,  296 => 82,  289 => 80,  284 => 78,  281 => 77,  274 => 75,  267 => 74,  259 => 72,  257 => 71,  252 => 69,  244 => 67,  237 => 65,  229 => 63,  226 => 62,  220 => 60,  214 => 58,  210 => 56,  199 => 54,  195 => 53,  189 => 51,  187 => 50,  180 => 48,  174 => 47,  168 => 46,  162 => 45,  157 => 43,  153 => 42,  148 => 40,  145 => 39,  142 => 38,  139 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  125 => 32,  121 => 31,  117 => 29,  109 => 24,  105 => 22,  103 => 21,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"account-account\" class=\"container-fluid\">

    <!-- Breadcrumb Start -->
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
    <!-- Breadcrumb End -->

    {% if success %}
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
                </div>
            </div>
        </div>
    {% endif %}

    <div class=\"row px-xl-5\">
        {{ column_left }}
        {% if column_left and column_right %}
            {% set class = 'col-sm-6' %}
        {% elseif column_left or column_right %}
            {% set class = 'col-sm-9' %}
        {% else %}
            {% set class = 'col-sm-12' %}
        {% endif %}

        <div id=\"content\" class=\"{{ class }}\">
            <div class=\"bg-light p-30 mb-5\">
                {{ content_top }}
                <h2>{{ text_my_account }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                    <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
                    <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
                    <li><a href=\"{{ wishlist }}\">{{ text_wishlist }}</a></li>
                </ul>
                {% if credit_cards %}
                    <h2>{{ text_credit_card }}</h2>
                    <ul class=\"list-unstyled\">
                        {% for credit_card in credit_cards %}
                            <li><a href=\"{{ credit_card.href }}\">{{ credit_card.name }}</a></li>
                        {% endfor %}
                    </ul>
                {% endif %}
                <h2>{{ text_my_orders }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ order }}\">{{ text_order }}</a></li>
                    {# <li><a href=\"{{ download }}\">{{ text_download }}</a></li> #}
                    {% if reward %}
                        <li><a href=\"{{ reward }}\">{{ text_reward }}</a></li>
                    {% endif %}
                    <li><a href=\"{{ return }}\">{{ text_return }}</a></li>
                    {# <li><a href=\"{{ transaction }}\">{{ text_transaction }}</a></li> #}
                    <li><a href=\"{{ recurring }}\">{{ text_recurring }}</a></li>
                </ul>
                <h2>{{ text_my_affiliate }}</h2>
                <ul class=\"list-unstyled\">
                    {% if not tracking %}
                        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_add }}</a></li>
                    {% else %}
                        <li><a href=\"{{ affiliate }}\">{{ text_affiliate_edit }}</a></li>
                        <li><a href=\"{{ tracking }}\">{{ text_tracking }}</a></li>
                    {% endif %}
                </ul>
                <h2>{{ text_my_newsletter }}</h2>
                <ul class=\"list-unstyled\">
                    <li><a href=\"{{ newsletter }}\">{{ text_newsletter }}</a></li>
                </ul>
                {{ content_bottom }}
            </div>
        </div>
        {{ column_right }}
    </div>

</div>

{{ footer }}", "Foody/template/account/account.twig", "");
    }
}
