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

/* default/template/information/contact.twig */
class __TwigTemplate_15eac72f2032f24052f5ee79fd9ec36f16e990e9c864a51d77d13fb1ade45121 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 18
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 22
        if (($context["image"] ?? null)) {
            // line 23
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 25
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 27
        echo ($context["address"] ?? null);
        echo "
              </address>
              ";
        // line 29
        if (($context["geocode"] ?? null)) {
            // line 30
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 32
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 33
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 34
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 36
        if (($context["fax"] ?? null)) {
            // line 37
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 38
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 40
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 42
        if (($context["open"] ?? null)) {
            // line 43
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 44
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 47
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 48
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 49
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 51
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 55
        if (($context["locations"] ?? null)) {
            // line 56
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 59
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 61);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 61);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 63);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 67);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 69
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                echo "</strong><br/>
                  <address>
                  ";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 71);
                echo "
                  </address>
                  ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 74));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 76
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 77
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br/>
                  ";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 78);
                echo "<br/>
                  <br/>
                  ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 82);
                    echo "
                  ";
                }
                // line 84
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 88);
                    echo "<br/>
                  <br/>
                  ";
                }
                // line 91
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br/>
                  ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 93);
                    echo "
                  ";
                }
                // line 95
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </div>
      ";
        }
        // line 103
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 105
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 109
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 110
        if (($context["error_name"] ?? null)) {
            // line 111
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 113
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 118
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 119
        if (($context["error_email"] ?? null)) {
            // line 120
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 122
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 125
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 127
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 128
        if (($context["error_enquiry"] ?? null)) {
            // line 129
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 131
        echo "            </div>
          </div>
          ";
        // line 133
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 137
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 141
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 142
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 144
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 144,  425 => 142,  421 => 141,  414 => 137,  407 => 133,  403 => 131,  397 => 129,  395 => 128,  391 => 127,  386 => 125,  381 => 122,  375 => 120,  373 => 119,  369 => 118,  364 => 116,  359 => 113,  353 => 111,  351 => 110,  347 => 109,  342 => 107,  337 => 105,  331 => 103,  327 => 101,  316 => 95,  311 => 93,  306 => 92,  303 => 91,  297 => 88,  292 => 87,  290 => 86,  286 => 84,  281 => 82,  276 => 81,  274 => 80,  269 => 78,  265 => 77,  262 => 76,  252 => 74,  250 => 73,  245 => 71,  239 => 69,  229 => 67,  227 => 66,  221 => 63,  214 => 61,  210 => 59,  206 => 58,  200 => 56,  198 => 55,  192 => 51,  187 => 49,  182 => 48,  179 => 47,  173 => 44,  168 => 43,  166 => 42,  162 => 40,  157 => 38,  152 => 37,  150 => 36,  145 => 34,  141 => 33,  138 => 32,  128 => 30,  126 => 29,  121 => 27,  115 => 25,  105 => 23,  103 => 22,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <h3>{{ text_location }}</h3>
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
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "default/template/information/contact.twig", "");
    }
}
