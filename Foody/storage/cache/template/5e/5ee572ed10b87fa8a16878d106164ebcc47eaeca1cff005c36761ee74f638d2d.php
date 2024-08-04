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

/* Foody/template/information/contact.twig */
class __TwigTemplate_134b2d0fc6b784c590b2dd74490320cec5240343b4a33960bad08b53ac961123 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container-fluid\">
  <!-- Breadcrumb Start -->
  <div class=\"row px-xl-5\">
      <div class=\"col-12\">
          <nav class=\"breadcrumb bg-light mb-30\">
              ";
        // line 7
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
            // line 8
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                // line 9
                echo "                      <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
                  ";
            } else {
                // line 11
                echo "                      <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</a>
                  ";
            }
            // line 13
            echo "              ";
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
        // line 14
        echo "          </nav>
      </div>
  </div>
  <!-- Breadcrumb End -->
  <div class=\"row px-xl-5\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"bg-light p-30 mb-5\">
        <h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 30
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">
              ";
        // line 33
        if (($context["image"] ?? null)) {
            // line 34
            echo "              <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
              ";
        }
        // line 36
        echo "              <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
                <address>
                ";
        // line 38
        echo ($context["address"] ?? null);
        echo "
                </address>
                ";
        // line 40
        if (($context["geocode"] ?? null)) {
            // line 41
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                ";
        }
        // line 43
        echo "              </div>
              <div class=\"col-sm-3\"><strong>";
        // line 44
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
                ";
        // line 45
        echo ($context["telephone"] ?? null);
        echo "<br />
                <br />
                ";
        // line 47
        if (($context["fax"] ?? null)) {
            // line 48
            echo "                <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
                ";
            // line 49
            echo ($context["fax"] ?? null);
            echo "
                ";
        }
        // line 51
        echo "              </div>
              <div class=\"col-sm-3\">
                ";
        // line 53
        if (($context["open"] ?? null)) {
            // line 54
            echo "                <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
                ";
            // line 55
            echo ($context["open"] ?? null);
            echo "<br />
                <br />
                ";
        }
        // line 58
        echo "                ";
        if (($context["comment"] ?? null)) {
            // line 59
            echo "                <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
                ";
            // line 60
            echo ($context["comment"] ?? null);
            echo "
                ";
        }
        // line 62
        echo "              </div>
            </div>
          </div>
        </div>
        ";
        // line 66
        if (($context["locations"] ?? null)) {
            // line 67
            echo "        <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
        <div class=\"panel-group\" id=\"accordion\">
          ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 70
                echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 72);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 72);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 74);
                echo "\">
              <div class=\"panel-body\">
                <div class=\"row\">
                  ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                  <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 78);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 78);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 78);
                    echo "\" class=\"img-thumbnail\" /></div>
                  ";
                }
                // line 80
                echo "                  <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 80);
                echo "</strong><br/>
                    <address>
                    ";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 82);
                echo "
                    </address>
                    ";
                // line 84
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 84)) {
                    // line 85
                    echo "                    <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 85));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                    ";
                }
                // line 87
                echo "                  </div>
                  <div class=\"col-sm-3\"> <strong>";
                // line 88
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                    ";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 89);
                echo "<br/>
                    <br/>
                    ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                    <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                    ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 93);
                    echo "
                    ";
                }
                // line 95
                echo "                  </div>
                  <div class=\"col-sm-3\">
                    ";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "                    <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                    ";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 99);
                    echo "<br/>
                    <br/>
                    ";
                }
                // line 102
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "                    <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                    ";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 104);
                    echo "
                    ";
                }
                // line 106
                echo "                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "        <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 116
        echo ($context["text_contact"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 118
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 120
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 121
        if (($context["error_name"] ?? null)) {
            // line 122
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 124
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 127
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 129
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 130
        if (($context["error_email"] ?? null)) {
            // line 131
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 133
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 136
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 138
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 139
        if (($context["error_enquiry"] ?? null)) {
            // line 140
            echo "                <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 142
        echo "              </div>
            </div>
            ";
        // line 144
        echo ($context["captcha"] ?? null);
        echo "
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 148
        echo ($context["button_submit"] ?? null);
        echo "\" />
            </div>
          </div>
        </form>
      </div>
      ";
        // line 153
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 154
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 156
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Foody/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 156,  464 => 154,  460 => 153,  452 => 148,  445 => 144,  441 => 142,  435 => 140,  433 => 139,  429 => 138,  424 => 136,  419 => 133,  413 => 131,  411 => 130,  407 => 129,  402 => 127,  397 => 124,  391 => 122,  389 => 121,  385 => 120,  380 => 118,  375 => 116,  369 => 114,  365 => 112,  354 => 106,  349 => 104,  344 => 103,  341 => 102,  335 => 99,  330 => 98,  328 => 97,  324 => 95,  319 => 93,  314 => 92,  312 => 91,  307 => 89,  303 => 88,  300 => 87,  290 => 85,  288 => 84,  283 => 82,  277 => 80,  267 => 78,  265 => 77,  259 => 74,  252 => 72,  248 => 70,  244 => 69,  238 => 67,  236 => 66,  230 => 62,  225 => 60,  220 => 59,  217 => 58,  211 => 55,  206 => 54,  204 => 53,  200 => 51,  195 => 49,  190 => 48,  188 => 47,  183 => 45,  179 => 44,  176 => 43,  166 => 41,  164 => 40,  159 => 38,  153 => 36,  143 => 34,  141 => 33,  136 => 30,  132 => 28,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 20,  104 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container-fluid\">
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
  <div class=\"row px-xl-5\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <div class=\"bg-light p-30 mb-5\">
        <h1>{{ heading_title }}</h1>
        {# <h3>{{ text_location }}</h3> #}
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">
              {% if image %}
              <div class=\"col-sm-3\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\" /></div>
              {% endif %}
              <div class=\"col-sm-3\"><strong>{{ store }}</strong><br />
                <address>
                {{ address }}
                </address>
                {% if geocode %}
                <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                {% endif %}
              </div>
              <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong><br>
                {{ telephone }}<br />
                <br />
                {% if fax %}
                <strong>{{ text_fax }}</strong><br>
                {{ fax }}
                {% endif %}
              </div>
              <div class=\"col-sm-3\">
                {% if open %}
                <strong>{{ text_open }}</strong><br />
                {{ open }}<br />
                <br />
                {% endif %}
                {% if comment %}
                <strong>{{ text_comment }}</strong><br />
                {{ comment }}
                {% endif %}
              </div>
            </div>
          </div>
        </div>
        {% if locations %}
        <h3>{{ text_store }}</h3>
        <div class=\"panel-group\" id=\"accordion\">
          {% for location in locations %}
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\"><a href=\"#collapse-location{{ location.location_id }}\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">{{ location.name }} <i class=\"fa fa-caret-down\"></i></a></h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-location{{ location.location_id }}\">
              <div class=\"panel-body\">
                <div class=\"row\">
                  {% if location.image %}
                  <div class=\"col-sm-3\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\" /></div>
                  {% endif %}
                  <div class=\"col-sm-3\"><strong>{{ location.name }}</strong><br/>
                    <address>
                    {{ location.address }}
                    </address>
                    {% if location.geocode %}
                    <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> {{ button_map }}</a>
                    {% endif %}
                  </div>
                  <div class=\"col-sm-3\"> <strong>{{ text_telephone }}</strong><br/>
                    {{ location.telephone }}<br/>
                    <br/>
                    {% if location.fax %}
                    <strong>{{ text_fax }}</strong><br/>
                    {{ location.fax }}
                    {% endif %}
                  </div>
                  <div class=\"col-sm-3\">
                    {% if location.open %}
                    <strong>{{ text_open }}</strong><br/>
                    {{ location.open }}<br/>
                    <br/>
                    {% endif %}
                    {% if location.comment %}
                    <strong>{{ text_comment }}</strong><br/>
                    {{ location.comment }}
                    {% endif %}
                  </div>
                </div>
              </div>
            </div>
          </div>
          {% endfor %}
        </div>
        {% endif %}
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>{{ text_contact }}</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\" />
                {% if error_name %}
                <div class=\"text-danger\">{{ error_name }}</div>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\" />
                {% if error_email %}
                <div class=\"text-danger\">{{ error_email }}</div>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">{{ entry_enquiry }}</label>
              <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">{{ enquiry }}</textarea>
                {% if error_enquiry %}
                <div class=\"text-danger\">{{ error_enquiry }}</div>
                {% endif %}
              </div>
            </div>
            {{ captcha }}
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ button_submit }}\" />
            </div>
          </div>
        </form>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "Foody/template/information/contact.twig", "");
    }
}
