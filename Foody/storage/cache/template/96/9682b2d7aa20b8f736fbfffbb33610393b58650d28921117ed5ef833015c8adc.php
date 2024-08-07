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

/* setting/setting.twig */
class __TwigTemplate_9ddb7ba65ca3450b1d946d5ee0fab3ac8076148c1741e711357c756e2910f44b extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_meta_title"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 68
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 68) == ($context["config_theme"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
                echo "</option>                    
                    ";
            } else {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>                    
                    ";
            }
            // line 73
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 79
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 83
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 83) == ($context["config_layout_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 84);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 84);
                echo "</option>                    
                    ";
            } else {
                // line 85
                echo "                    
                    <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 86);
                echo "</option>                    
                    ";
            }
            // line 88
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 95
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 97
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 98
        if (($context["error_name"] ?? null)) {
            // line 99
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 100
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 103
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 105
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 106
        if (($context["error_owner"] ?? null)) {
            // line 107
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 108
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 113
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 114
        if (($context["error_address"] ?? null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 116
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 119
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 121
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 125
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 127
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_email"] ?? null)) {
            // line 129
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 130
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 133
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 135
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 136
        if (($context["error_telephone"] ?? null)) {
            // line 137
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 138
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 141
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 143
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 147
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 148
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 149
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 153
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 155
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 159
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 161
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 164
        if (($context["locations"] ?? null)) {
            // line 165
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 168
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 169
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 169), ($context["config_location"] ?? null))) {
                    // line 170
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 170);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 171);
                    echo "
                      ";
                } else {
                    // line 173
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 173);
                    echo "\" />
                      ";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 174);
                    echo "
                      ";
                }
                // line 175
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo " </div>
              </div>
              ";
        }
        // line 179
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 182
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 186
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 186) == ($context["config_country_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 187);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 187);
                echo "</option>                    
                    ";
            } else {
                // line 188
                echo "                    
                    <option value=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 189);
                echo "</option>                    
                    ";
            }
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 196
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 203
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 207
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 207) == ($context["config_timezone"] ?? null))) {
                // line 208
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 208);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 208);
                echo "</option>
                      ";
            } else {
                // line 210
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 210);
                echo "</option>
                      ";
            }
            // line 212
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 217
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 221
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 221) == ($context["config_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
                echo "</option>                    
                    ";
            } else {
                // line 223
                echo "                    
                    <option value=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 224);
                echo "</option>                    
                    ";
            }
            // line 226
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 231
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 235) == ($context["config_admin_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 236);
                echo "</option>                    
                    ";
            } else {
                // line 237
                echo "                    
                    <option value=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 238);
                echo "</option>                    
                    ";
            }
            // line 240
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 245
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 249
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 249) == ($context["config_currency"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 250);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 250);
                echo "</option>                    
                    ";
            } else {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 252);
                echo "</option>                    
                    ";
            }
            // line 254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 259
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 261
        if (($context["config_currency_auto"] ?? null)) {
            // line 262
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 263
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 265
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 266
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 267
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 268
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 269
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 270
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 272
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 273
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 274
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 278
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 282
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 282) == ($context["config_length_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 283);
                echo "</option>                    
                    ";
            } else {
                // line 284
                echo "                    
                    <option value=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 285);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 285);
                echo "</option>                    
                    ";
            }
            // line 287
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 292
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 296
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 296) == ($context["config_weight_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 297);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 297);
                echo "</option>                    
                    ";
            } else {
                // line 298
                echo "                    
                    <option value=\"";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 299);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 299);
                echo "</option>                    
                    ";
            }
            // line 301
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 308
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 310
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 312
        if (($context["config_product_count"] ?? null)) {
            // line 313
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 314
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 316
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 317
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 318
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 319
        if ( !($context["config_product_count"] ?? null)) {
            // line 320
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 321
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 323
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 324
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 325
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 329
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 331
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 332
        if (($context["error_limit_admin"] ?? null)) {
            // line 333
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 334
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 338
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 340
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 342
        if (($context["config_review_status"] ?? null)) {
            // line 343
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 344
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 346
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 347
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 348
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 349
        if ( !($context["config_review_status"] ?? null)) {
            // line 350
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 351
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 353
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 354
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 355
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 359
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 361
        if (($context["config_review_guest"] ?? null)) {
            // line 362
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 363
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 365
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 366
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 367
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 368
        if ( !($context["config_review_guest"] ?? null)) {
            // line 369
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 370
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 372
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 373
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 374
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 379
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 381
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 383
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 384
        if (($context["error_voucher_min"] ?? null)) {
            // line 385
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 386
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 389
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 391
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 392
        if (($context["error_voucher_max"] ?? null)) {
            // line 393
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 394
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 398
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 400
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 402
        if (($context["config_tax"] ?? null)) {
            // line 403
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 404
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 406
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 407
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 408
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 409
        if ( !($context["config_tax"] ?? null)) {
            // line 410
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 411
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 413
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 414
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 415
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 419
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 422
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 423
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 424
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 425
            echo "                      
                      <option value=\"shipping\">";
            // line 426
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 428
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 429
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 430
            echo "                      
                      <option value=\"payment\">";
            // line 431
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 432
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 437
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 440
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 441
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 442
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 443
            echo "                      
                      <option value=\"shipping\">";
            // line 444
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 446
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 447
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 448
            echo "                      
                      <option value=\"payment\">";
            // line 449
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 450
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 456
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 458
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 460
        if (($context["config_customer_online"] ?? null)) {
            // line 461
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 462
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 464
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 465
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 466
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 467
        if ( !($context["config_customer_online"] ?? null)) {
            // line 468
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 469
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 471
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 472
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 473
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 477
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 479
        if (($context["config_customer_activity"] ?? null)) {
            // line 480
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 481
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 483
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 484
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 485
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 486
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 487
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 488
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 490
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 491
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 492
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 496
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 498
        if (($context["config_customer_search"] ?? null)) {
            // line 499
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 500
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 502
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 503
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 504
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 505
        if ( !($context["config_customer_search"] ?? null)) {
            // line 506
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 507
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 509
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 510
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 511
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 515
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 518
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 519
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 519) == ($context["config_customer_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 520
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 520);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 520);
                echo "</option>                      
                      ";
            } else {
                // line 521
                echo "                      
                      <option value=\"";
                // line 522
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 522);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 522);
                echo "</option>                      
                      ";
            }
            // line 524
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 529
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 531
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 532
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 532), ($context["config_customer_group_display"] ?? null))) {
                // line 533
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 533);
                echo "\" checked=\"checked\" />
                        ";
                // line 534
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 534);
                echo "
                        ";
            } else {
                // line 536
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 536);
                echo "\" />
                        ";
                // line 537
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 537);
                echo "
                        ";
            }
            // line 538
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 542
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 543
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 546
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 548
        if (($context["config_customer_price"] ?? null)) {
            // line 549
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 550
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 552
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 553
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 554
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 555
        if ( !($context["config_customer_price"] ?? null)) {
            // line 556
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 557
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 559
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 560
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 561
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 565
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 567
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 568
        if (($context["error_login_attempts"] ?? null)) {
            // line 569
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 570
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 573
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 576
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 578
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 578) == ($context["config_account_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 579
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 579);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 579);
                echo "</option>                      
                      ";
            } else {
                // line 580
                echo "                      
                      <option value=\"";
                // line 581
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 581);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 581);
                echo "</option>                      
                      ";
            }
            // line 583
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 589
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 591
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 593
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 597
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 599
        if (($context["config_cart_weight"] ?? null)) {
            // line 600
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 601
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 603
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 604
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 605
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 606
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 607
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 608
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 610
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 611
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 612
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 616
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 618
        if (($context["config_checkout_guest"] ?? null)) {
            // line 619
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 620
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 622
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 623
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 624
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 625
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 626
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 627
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 629
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 630
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 631
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 635
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 638
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 640
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 640) == ($context["config_checkout_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 641
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 641);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 641);
                echo "</option>                      
                      ";
            } else {
                // line 642
                echo "                      
                      <option value=\"";
                // line 643
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 643);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 643);
                echo "</option>                      
                      ";
            }
            // line 645
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 650
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 653
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 654
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 654) == ($context["config_order_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 655
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 655);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 655);
                echo "</option>                      
                      ";
            } else {
                // line 656
                echo "                      
                      <option value=\"";
                // line 657
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 657);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 657);
                echo "</option>                      
                      ";
            }
            // line 659
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 664
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 667
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 668
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 668), ($context["config_processing_status"] ?? null))) {
                // line 669
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 669);
                echo "\" checked=\"checked\" />
                          ";
                // line 670
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 670);
                echo "
                          ";
            } else {
                // line 672
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 672);
                echo "\" />
                          ";
                // line 673
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 673);
                echo "
                          ";
            }
            // line 674
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        echo " </div>
                    ";
        // line 677
        if (($context["error_processing_status"] ?? null)) {
            // line 678
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 679
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 682
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 685
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 686
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 686), ($context["config_complete_status"] ?? null))) {
                // line 687
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687);
                echo "\" checked=\"checked\" />
                          ";
                // line 688
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 688);
                echo "
                          ";
            } else {
                // line 690
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 690);
                echo "\" />
                          ";
                // line 691
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 691);
                echo "
                          ";
            }
            // line 692
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 694
        echo " </div>
                    ";
        // line 695
        if (($context["error_complete_status"] ?? null)) {
            // line 696
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 697
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 704
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 704) == ($context["config_fraud_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 705
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 705);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 705);
                echo "</option>                      
                      ";
            } else {
                // line 706
                echo "                      
                      <option value=\"";
                // line 707
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 707);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 707);
                echo "</option>                      
                      ";
            }
            // line 709
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 714
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 717
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 719
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 719) == ($context["config_api_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 720
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 720);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 720);
                echo "</option>                      
                      ";
            } else {
                // line 721
                echo "                      
                      <option value=\"";
                // line 722
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 722);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 722);
                echo "</option>                      
                      ";
            }
            // line 724
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 730
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 732
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 734
        if (($context["config_stock_display"] ?? null)) {
            // line 735
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 736
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 738
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 739
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 740
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 741
        if ( !($context["config_stock_display"] ?? null)) {
            // line 742
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 743
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 745
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 746
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 747
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 751
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 753
        if (($context["config_stock_warning"] ?? null)) {
            // line 754
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 755
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 757
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 758
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 759
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 760
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 761
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 762
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 764
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 765
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 766
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 770
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 772
        if (($context["config_stock_checkout"] ?? null)) {
            // line 773
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 774
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 776
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 777
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 778
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 779
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 780
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 781
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 783
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 784
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 785
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 790
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 792
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 796
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 796) == ($context["config_affiliate_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 797
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 797);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 797);
                echo "</option>                      
                      ";
            } else {
                // line 798
                echo "                      
                      <option value=\"";
                // line 799
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 799);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 799);
                echo "</option>                      
                      ";
            }
            // line 801
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 806
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 808
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 809
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 810
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 812
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 813
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 814
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 815
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 816
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 817
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 819
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 820
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 821
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 825
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 827
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 828
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 829
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 831
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 832
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 833
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 834
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 835
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 836
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 838
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 839
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 840
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 844
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 846
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 850
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 853
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 855
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 855) == ($context["config_affiliate_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 856
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 856);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 856);
                echo "</option>                      
                      ";
            } else {
                // line 857
                echo "                      
                      <option value=\"";
                // line 858
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 858);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 858);
                echo "</option>                      
                      ";
            }
            // line 860
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 866
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 868
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 871
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 872
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 873
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 873) == ($context["config_return_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 874
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 874);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 874);
                echo "</option>                      
                      ";
            } else {
                // line 875
                echo "                      
                      <option value=\"";
                // line 876
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 876);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 876);
                echo "</option>                      
                      ";
            }
            // line 878
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 883
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 886
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 887
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 887) == ($context["config_return_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 888
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 888);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 888);
                echo "</option>                      
                      ";
            } else {
                // line 889
                echo "                      
                      <option value=\"";
                // line 890
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 890);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 890);
                echo "</option>                      
                      ";
            }
            // line 892
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 898
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 900
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 903
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 905
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 905) == ($context["config_captcha"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 906
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 906);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 906);
                echo "</option>                      
                      ";
            } else {
                // line 907
                echo "                      
                      <option value=\"";
                // line 908
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 908);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 908);
                echo "</option>                      
                      ";
            }
            // line 910
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 915
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 918
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 919
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 919), ($context["config_captcha_page"] ?? null))) {
                // line 920
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 920);
                echo "\" checked=\"checked\" />
                          ";
                // line 921
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 921);
                echo "
                          ";
            } else {
                // line 923
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 923);
                echo "\" />
                          ";
                // line 924
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 924);
                echo "
                          ";
            }
            // line 925
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 927
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 934
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 935
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 936
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 940
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 941
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 942
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 948
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 950
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 953
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 954
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 955
            echo "                      
                      <option value=\"mail\">";
            // line 956
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 958
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 959
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 960
            echo "                      
                      <option value=\"smtp\">";
            // line 961
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 962
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 967
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 969
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 973
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 975
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 979
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 981
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 985
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 987
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 991
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 993
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 997
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 999
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1004
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1006
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1008
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1009
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1010
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1010), ($context["config_mail_alert"] ?? null))) {
                // line 1011
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1011);
                echo "\" checked=\"checked\" />
                          ";
                // line 1012
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1012);
                echo "
                          ";
            } else {
                // line 1014
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1014);
                echo "\" />
                          ";
                // line 1015
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1015);
                echo "
                          ";
            }
            // line 1016
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1018
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1022
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1024
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1031
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1033
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1035
        if (($context["config_maintenance"] ?? null)) {
            // line 1036
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1037
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1039
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1040
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1041
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1042
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1043
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1044
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1046
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1047
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1048
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1052
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1054
        if (($context["config_seo_url"] ?? null)) {
            // line 1055
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1056
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1058
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1059
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1060
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1061
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1062
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1063
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1065
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1066
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1067
        echo " </label>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_type\">";
        // line 1072
        echo ($context["entry_seo_url_type"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <select id=\"config_seo_url_type\" class=\"form-control\" name=\"config_seo_url_type\">
                    ";
        // line 1075
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seo_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["seo_type"]) {
            // line 1076
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1076) == ($context["config_seo_url_type"] ?? null))) {
                // line 1077
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1077);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1077);
                echo "</option>
                      ";
            } else {
                // line 1079
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1079);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1079);
                echo "</option>
                      ";
            }
            // line 1081
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1082
        echo "                  </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1086
        echo ($context["entry_seo_url_include_path_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_include_path"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  ";
        // line 1088
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1089
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 1091
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\"/>
                    ";
            // line 1095
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 1098
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\"/>
                    ";
            // line 1100
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 1104
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 1107
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_postfix\"><span data-toggle=\"tooltip\" title=\"";
        // line 1110
        echo ($context["entry_seo_url_postfix_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_postfix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seo_url_postfix\" value=\"";
        // line 1112
        echo ($context["config_seo_url_postfix"] ?? null);
        echo "\" id=\"config_seo_url_postfix\" class=\"form-control\"/>
                  </div>
                </div>
            
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1117
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1119
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1123
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1125
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1130
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1132
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1134
        if (($context["config_secure"] ?? null)) {
            // line 1135
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1136
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1138
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1139
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1140
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1141
        if ( !($context["config_secure"] ?? null)) {
            // line 1142
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1143
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1145
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1146
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1147
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1151
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1153
        if (($context["config_password"] ?? null)) {
            // line 1154
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1155
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1157
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1158
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1159
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1160
        if ( !($context["config_password"] ?? null)) {
            // line 1161
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1162
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1164
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1165
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1166
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1170
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1172
        if (($context["config_shared"] ?? null)) {
            // line 1173
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1174
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1176
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1177
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1178
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1179
        if ( !($context["config_shared"] ?? null)) {
            // line 1180
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1181
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1183
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1184
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1185
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1189
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1191
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1192
        if (($context["error_encryption"] ?? null)) {
            // line 1193
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1194
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1198
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1200
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1202
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1206
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1208
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1212
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1214
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1219
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1221
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1223
        if (($context["config_error_display"] ?? null)) {
            // line 1224
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1225
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1227
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1228
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1229
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1230
        if ( !($context["config_error_display"] ?? null)) {
            // line 1231
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1232
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1234
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1235
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1236
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1240
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1242
        if (($context["config_error_log"] ?? null)) {
            // line 1243
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1244
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1246
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1247
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1248
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1249
        if ( !($context["config_error_log"] ?? null)) {
            // line 1250
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1251
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1253
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1254
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1255
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1259
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1261
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1262
        if (($context["error_log"] ?? null)) {
            // line 1263
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1264
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1276
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1298
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1307
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1313
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1320
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1335
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3713 => 1335,  3695 => 1320,  3685 => 1313,  3676 => 1307,  3664 => 1298,  3639 => 1276,  3625 => 1264,  3619 => 1263,  3617 => 1262,  3611 => 1261,  3606 => 1259,  3600 => 1255,  3595 => 1254,  3592 => 1253,  3587 => 1251,  3584 => 1250,  3582 => 1249,  3579 => 1248,  3574 => 1247,  3571 => 1246,  3566 => 1244,  3563 => 1243,  3561 => 1242,  3556 => 1240,  3550 => 1236,  3545 => 1235,  3542 => 1234,  3537 => 1232,  3534 => 1231,  3532 => 1230,  3529 => 1229,  3524 => 1228,  3521 => 1227,  3516 => 1225,  3513 => 1224,  3511 => 1223,  3506 => 1221,  3501 => 1219,  3491 => 1214,  3484 => 1212,  3475 => 1208,  3468 => 1206,  3459 => 1202,  3452 => 1200,  3447 => 1198,  3441 => 1194,  3435 => 1193,  3433 => 1192,  3427 => 1191,  3420 => 1189,  3414 => 1185,  3409 => 1184,  3406 => 1183,  3401 => 1181,  3398 => 1180,  3396 => 1179,  3393 => 1178,  3388 => 1177,  3385 => 1176,  3380 => 1174,  3377 => 1173,  3375 => 1172,  3368 => 1170,  3362 => 1166,  3357 => 1165,  3354 => 1164,  3349 => 1162,  3346 => 1161,  3344 => 1160,  3341 => 1159,  3336 => 1158,  3333 => 1157,  3328 => 1155,  3325 => 1154,  3323 => 1153,  3316 => 1151,  3310 => 1147,  3305 => 1146,  3302 => 1145,  3297 => 1143,  3294 => 1142,  3292 => 1141,  3289 => 1140,  3284 => 1139,  3281 => 1138,  3276 => 1136,  3273 => 1135,  3271 => 1134,  3264 => 1132,  3259 => 1130,  3249 => 1125,  3242 => 1123,  3233 => 1119,  3226 => 1117,  3218 => 1112,  3211 => 1110,  3206 => 1107,  3200 => 1104,  3193 => 1100,  3189 => 1098,  3183 => 1095,  3176 => 1091,  3172 => 1089,  3170 => 1088,  3163 => 1086,  3157 => 1082,  3151 => 1081,  3143 => 1079,  3135 => 1077,  3132 => 1076,  3128 => 1075,  3122 => 1072,  3115 => 1067,  3110 => 1066,  3107 => 1065,  3102 => 1063,  3099 => 1062,  3097 => 1061,  3094 => 1060,  3089 => 1059,  3086 => 1058,  3081 => 1056,  3078 => 1055,  3076 => 1054,  3069 => 1052,  3063 => 1048,  3058 => 1047,  3055 => 1046,  3050 => 1044,  3047 => 1043,  3045 => 1042,  3042 => 1041,  3037 => 1040,  3034 => 1039,  3029 => 1037,  3026 => 1036,  3024 => 1035,  3017 => 1033,  3012 => 1031,  3000 => 1024,  2993 => 1022,  2987 => 1018,  2979 => 1016,  2974 => 1015,  2969 => 1014,  2964 => 1012,  2959 => 1011,  2957 => 1010,  2954 => 1009,  2950 => 1008,  2943 => 1006,  2938 => 1004,  2928 => 999,  2923 => 997,  2914 => 993,  2909 => 991,  2900 => 987,  2893 => 985,  2884 => 981,  2879 => 979,  2870 => 975,  2863 => 973,  2854 => 969,  2847 => 967,  2840 => 962,  2835 => 961,  2832 => 960,  2827 => 959,  2822 => 958,  2817 => 956,  2814 => 955,  2809 => 954,  2805 => 953,  2797 => 950,  2792 => 948,  2783 => 942,  2777 => 941,  2771 => 940,  2764 => 936,  2758 => 935,  2754 => 934,  2745 => 927,  2737 => 925,  2732 => 924,  2727 => 923,  2722 => 921,  2717 => 920,  2715 => 919,  2712 => 918,  2708 => 917,  2703 => 915,  2691 => 910,  2684 => 908,  2681 => 907,  2674 => 906,  2669 => 905,  2665 => 904,  2661 => 903,  2653 => 900,  2648 => 898,  2635 => 892,  2628 => 890,  2625 => 889,  2618 => 888,  2613 => 887,  2609 => 886,  2601 => 883,  2589 => 878,  2582 => 876,  2579 => 875,  2572 => 874,  2567 => 873,  2563 => 872,  2559 => 871,  2551 => 868,  2546 => 866,  2533 => 860,  2526 => 858,  2523 => 857,  2516 => 856,  2511 => 855,  2507 => 854,  2503 => 853,  2495 => 850,  2486 => 846,  2479 => 844,  2473 => 840,  2468 => 839,  2465 => 838,  2460 => 836,  2457 => 835,  2455 => 834,  2452 => 833,  2447 => 832,  2444 => 831,  2439 => 829,  2436 => 828,  2434 => 827,  2427 => 825,  2421 => 821,  2416 => 820,  2413 => 819,  2408 => 817,  2405 => 816,  2403 => 815,  2400 => 814,  2395 => 813,  2392 => 812,  2387 => 810,  2384 => 809,  2382 => 808,  2375 => 806,  2363 => 801,  2356 => 799,  2353 => 798,  2346 => 797,  2341 => 796,  2337 => 795,  2331 => 792,  2326 => 790,  2319 => 785,  2314 => 784,  2311 => 783,  2306 => 781,  2303 => 780,  2301 => 779,  2298 => 778,  2293 => 777,  2290 => 776,  2285 => 774,  2282 => 773,  2280 => 772,  2273 => 770,  2267 => 766,  2262 => 765,  2259 => 764,  2254 => 762,  2251 => 761,  2249 => 760,  2246 => 759,  2241 => 758,  2238 => 757,  2233 => 755,  2230 => 754,  2228 => 753,  2221 => 751,  2215 => 747,  2210 => 746,  2207 => 745,  2202 => 743,  2199 => 742,  2197 => 741,  2194 => 740,  2189 => 739,  2186 => 738,  2181 => 736,  2178 => 735,  2176 => 734,  2169 => 732,  2164 => 730,  2151 => 724,  2144 => 722,  2141 => 721,  2134 => 720,  2129 => 719,  2125 => 718,  2121 => 717,  2113 => 714,  2101 => 709,  2094 => 707,  2091 => 706,  2084 => 705,  2079 => 704,  2075 => 703,  2067 => 700,  2062 => 697,  2056 => 696,  2054 => 695,  2051 => 694,  2043 => 692,  2038 => 691,  2033 => 690,  2028 => 688,  2023 => 687,  2021 => 686,  2018 => 685,  2014 => 684,  2007 => 682,  2002 => 679,  1996 => 678,  1994 => 677,  1991 => 676,  1983 => 674,  1978 => 673,  1973 => 672,  1968 => 670,  1963 => 669,  1961 => 668,  1958 => 667,  1954 => 666,  1947 => 664,  1935 => 659,  1928 => 657,  1925 => 656,  1918 => 655,  1913 => 654,  1909 => 653,  1901 => 650,  1889 => 645,  1882 => 643,  1879 => 642,  1872 => 641,  1867 => 640,  1863 => 639,  1859 => 638,  1851 => 635,  1845 => 631,  1840 => 630,  1837 => 629,  1832 => 627,  1829 => 626,  1827 => 625,  1824 => 624,  1819 => 623,  1816 => 622,  1811 => 620,  1808 => 619,  1806 => 618,  1799 => 616,  1793 => 612,  1788 => 611,  1785 => 610,  1780 => 608,  1777 => 607,  1775 => 606,  1772 => 605,  1767 => 604,  1764 => 603,  1759 => 601,  1756 => 600,  1754 => 599,  1747 => 597,  1738 => 593,  1731 => 591,  1726 => 589,  1713 => 583,  1706 => 581,  1703 => 580,  1696 => 579,  1691 => 578,  1687 => 577,  1683 => 576,  1675 => 573,  1670 => 570,  1664 => 569,  1662 => 568,  1656 => 567,  1649 => 565,  1643 => 561,  1638 => 560,  1635 => 559,  1630 => 557,  1627 => 556,  1625 => 555,  1622 => 554,  1617 => 553,  1614 => 552,  1609 => 550,  1606 => 549,  1604 => 548,  1597 => 546,  1592 => 543,  1586 => 542,  1583 => 541,  1575 => 538,  1570 => 537,  1565 => 536,  1560 => 534,  1555 => 533,  1553 => 532,  1550 => 531,  1546 => 530,  1540 => 529,  1528 => 524,  1521 => 522,  1518 => 521,  1511 => 520,  1506 => 519,  1502 => 518,  1494 => 515,  1488 => 511,  1483 => 510,  1480 => 509,  1475 => 507,  1472 => 506,  1470 => 505,  1467 => 504,  1462 => 503,  1459 => 502,  1454 => 500,  1451 => 499,  1449 => 498,  1444 => 496,  1438 => 492,  1433 => 491,  1430 => 490,  1425 => 488,  1422 => 487,  1420 => 486,  1417 => 485,  1412 => 484,  1409 => 483,  1404 => 481,  1401 => 480,  1399 => 479,  1392 => 477,  1386 => 473,  1381 => 472,  1378 => 471,  1373 => 469,  1370 => 468,  1368 => 467,  1365 => 466,  1360 => 465,  1357 => 464,  1352 => 462,  1349 => 461,  1347 => 460,  1340 => 458,  1335 => 456,  1327 => 450,  1322 => 449,  1319 => 448,  1314 => 447,  1309 => 446,  1304 => 444,  1301 => 443,  1296 => 442,  1292 => 441,  1288 => 440,  1280 => 437,  1273 => 432,  1268 => 431,  1265 => 430,  1260 => 429,  1255 => 428,  1250 => 426,  1247 => 425,  1242 => 424,  1238 => 423,  1234 => 422,  1226 => 419,  1220 => 415,  1215 => 414,  1212 => 413,  1207 => 411,  1204 => 410,  1202 => 409,  1199 => 408,  1194 => 407,  1191 => 406,  1186 => 404,  1183 => 403,  1181 => 402,  1176 => 400,  1171 => 398,  1165 => 394,  1159 => 393,  1157 => 392,  1151 => 391,  1144 => 389,  1139 => 386,  1133 => 385,  1131 => 384,  1125 => 383,  1118 => 381,  1113 => 379,  1106 => 374,  1101 => 373,  1098 => 372,  1093 => 370,  1090 => 369,  1088 => 368,  1085 => 367,  1080 => 366,  1077 => 365,  1072 => 363,  1069 => 362,  1067 => 361,  1060 => 359,  1054 => 355,  1049 => 354,  1046 => 353,  1041 => 351,  1038 => 350,  1036 => 349,  1033 => 348,  1028 => 347,  1025 => 346,  1020 => 344,  1017 => 343,  1015 => 342,  1008 => 340,  1003 => 338,  997 => 334,  991 => 333,  989 => 332,  983 => 331,  976 => 329,  970 => 325,  965 => 324,  962 => 323,  957 => 321,  954 => 320,  952 => 319,  949 => 318,  944 => 317,  941 => 316,  936 => 314,  933 => 313,  931 => 312,  924 => 310,  919 => 308,  905 => 301,  898 => 299,  895 => 298,  888 => 297,  883 => 296,  879 => 295,  873 => 292,  861 => 287,  854 => 285,  851 => 284,  844 => 283,  839 => 282,  835 => 281,  829 => 278,  823 => 274,  818 => 273,  815 => 272,  810 => 270,  807 => 269,  805 => 268,  802 => 267,  797 => 266,  794 => 265,  789 => 263,  786 => 262,  784 => 261,  777 => 259,  765 => 254,  758 => 252,  755 => 251,  748 => 250,  743 => 249,  739 => 248,  731 => 245,  719 => 240,  712 => 238,  709 => 237,  702 => 236,  697 => 235,  693 => 234,  687 => 231,  675 => 226,  668 => 224,  665 => 223,  658 => 222,  653 => 221,  649 => 220,  643 => 217,  637 => 213,  631 => 212,  623 => 210,  615 => 208,  612 => 207,  608 => 206,  602 => 203,  592 => 196,  580 => 191,  573 => 189,  570 => 188,  563 => 187,  558 => 186,  554 => 185,  548 => 182,  543 => 179,  538 => 177,  530 => 175,  525 => 174,  520 => 173,  515 => 171,  510 => 170,  508 => 169,  505 => 168,  501 => 167,  495 => 166,  492 => 165,  490 => 164,  482 => 161,  475 => 159,  466 => 155,  459 => 153,  452 => 149,  446 => 148,  442 => 147,  433 => 143,  428 => 141,  423 => 138,  417 => 137,  415 => 136,  409 => 135,  404 => 133,  399 => 130,  393 => 129,  391 => 128,  385 => 127,  380 => 125,  371 => 121,  364 => 119,  359 => 116,  353 => 115,  351 => 114,  345 => 113,  340 => 111,  335 => 108,  329 => 107,  327 => 106,  321 => 105,  316 => 103,  311 => 100,  305 => 99,  303 => 98,  297 => 97,  292 => 95,  278 => 88,  271 => 86,  268 => 85,  261 => 84,  256 => 83,  252 => 82,  246 => 79,  233 => 73,  226 => 71,  223 => 70,  216 => 69,  211 => 68,  207 => 67,  201 => 64,  192 => 60,  187 => 58,  178 => 54,  173 => 52,  168 => 49,  162 => 48,  160 => 47,  154 => 46,  149 => 44,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_edit }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">{{ tab_store }}</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">{{ tab_local }}</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">{{ tab_option }}</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">{{ tab_image }}</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">{{ tab_mail }}</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">{{ entry_meta_title }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"{{ config_meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title\" class=\"form-control\" />
                  {% if error_meta_title %}
                  <div class=\"text-danger\">{{ error_meta_title }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">{{ entry_meta_description }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description\" class=\"form-control\">{{ config_meta_description }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">{{ entry_meta_keyword }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword\" class=\"form-control\">{{ config_meta_keyword }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">{{ entry_theme }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    {% for theme in themes %}
                    {% if theme.value == config_theme %}                    
                    <option value=\"{{ theme.value }}\" selected=\"selected\">{{ theme.text }}</option>                    
                    {% else %}                    
                    <option value=\"{{ theme.value }}\">{{ theme.text }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">{{ entry_layout }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    {% for layout in layouts %}
                    {% if layout.layout_id == config_layout_id %}                    
                    <option value=\"{{ layout.layout_id }}\" selected=\"selected\">{{ layout.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ layout.layout_id }}\">{{ layout.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" />
                  {% if error_name %}
                  <div class=\"text-danger\">{{ error_name }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" />
                  {% if error_owner %}
                  <div class=\"text-danger\">{{ error_owner }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"{{ entry_address }}\" rows=\"5\" id=\"input-address\" class=\"form-control\">{{ config_address }}</textarea>
                  {% if error_address %}
                  <div class=\"text-danger\">{{ error_address }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_geocode }}\">{{ entry_geocode }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
                  {% if error_email %}
                  <div class=\"text-danger\">{{ error_email }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                  {% if error_telephone %}
                  <div class=\"text-danger\">{{ error_telephone }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">{{ entry_fax }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"{{ config_fax }}\" placeholder=\"{{ entry_fax }}\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">{{ entry_image }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_open }}\">{{ entry_open }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_comment }}\">{{ entry_comment }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                </div>
              </div>
              {% if locations %}
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_location }}\">{{ entry_location }}</span></label>
                <div class=\"col-sm-10\"> {% for location in locations %}
                  <div class=\"checkbox\">
                    <label> {% if location.location_id in config_location %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" checked=\"checked\" />
                      {{ location.name }}
                      {% else %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" />
                      {{ location.name }}
                      {% endif %} </label>
                  </div>
                  {% endfor %} </div>
              </div>
              {% endif %} </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">{{ entry_country }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    {% for country in countries %}
                    {% if country.country_id == config_country_id %}                    
                    <option value=\"{{ country.country_id }}\" selected=\"selected\">{{ country.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ country.country_id }}\">{{ country.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">{{ entry_zone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">{{ entry_timezone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    {% for timezone in timezones %}
                      {% if timezone.value == config_timezone %}
                        <option value=\"{{ timezone.value }}\" selected=\"selected\">{{ timezone.text }}</option>
                      {% else %}
                        <option value=\"{{ timezone.value }}\">{{ timezone.text }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">{{ entry_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    {% for language in languages %}
                    {% if language.code == config_language %}                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">{{ entry_admin_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    {% for language in languages %}
                    {% if language.code == config_admin_language %}                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>                    
                    {% else %}                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"{{ help_currency }}\">{{ entry_currency }}</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    {% for currency in currencies %}
                    {% if currency.code == config_currency %}                    
                    <option value=\"{{ currency.code }}\" selected=\"selected\">{{ currency.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ currency.code }}\">{{ currency.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_currency_auto }}\">{{ entry_currency_auto }}</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    {{ text_yes }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    {{ text_yes }}
                    {% endif %} </label>
                  <label class=\"radio-inline\"> {% if not config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    {{ text_no }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">{{ entry_length_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    {% for length_class in length_classes %}
                    {% if length_class.length_class_id == config_length_class_id %}                    
                    <option value=\"{{ length_class.length_class_id }}\" selected=\"selected\">{{ length_class.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ length_class.length_class_id }}\">{{ length_class.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">{{ entry_weight_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    {% for weight_class in weight_classes %}
                    {% if weight_class.weight_class_id == config_weight_class_id %}                    
                    <option value=\"{{ weight_class.weight_class_id }}\" selected=\"selected\">{{ weight_class.title }}</option>                    
                    {% else %}                    
                    <option value=\"{{ weight_class.weight_class_id }}\">{{ weight_class.title }}</option>                    
                    {% endif %}
                    {% endfor %}                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>{{ text_product }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_product_count }}\">{{ entry_product_count }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"{{ help_limit_admin }}\">{{ entry_limit_admin }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"{{ config_limit_admin }}\" placeholder=\"{{ entry_limit_admin }}\" id=\"input-admin-limit\" class=\"form-control\" />
                    {% if error_limit_admin %}
                    <div class=\"text-danger\">{{ error_limit_admin }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_review }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review }}\">{{ entry_review }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review_guest }}\">{{ entry_review_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_voucher }}</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_min }}\">{{ entry_voucher_min }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"{{ config_voucher_min }}\" placeholder=\"{{ entry_voucher_min }}\" id=\"input-voucher-min\" class=\"form-control\" />
                    {% if error_voucher_min %}
                    <div class=\"text-danger\">{{ error_voucher_min }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_max }}\">{{ entry_voucher_max }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"{{ config_voucher_max }}\" placeholder=\"{{ entry_voucher_max }}\" id=\"input-voucher-max\" class=\"form-control\" />
                    {% if error_voucher_max %}
                    <div class=\"text-danger\">{{ error_voucher_max }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_tax }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_tax }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_default }}\">{{ entry_tax_default }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% if config_tax_default == 'shipping' %}                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>                      
                      {% else %}                      
                      <option value=\"shipping\">{{ text_shipping }}</option>                      
                      {% endif %}
                      {% if config_tax_default == 'payment' %}                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>                      
                      {% else %}                      
                      <option value=\"payment\">{{ text_payment }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_customer }}\">{{ entry_tax_customer }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% if config_tax_customer == 'shipping' %}                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>                      
                      {% else %}                      
                      <option value=\"shipping\">{{ text_shipping }}</option>                      
                      {% endif %}
                      {% if config_tax_customer == 'payment' %}                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>                      
                      {% else %}                      
                      <option value=\"payment\">{{ text_payment }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_account }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_online }}\">{{ entry_customer_online }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_activity }}\">{{ entry_customer_activity }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_customer_search }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group }}\">{{ entry_customer_group }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_customer_group_id %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group_display }}\">{{ entry_customer_group_display }}</span></label>
                  <div class=\"col-sm-10\"> {% for customer_group in customer_groups %}
                    <div class=\"checkbox\">
                      <label> {% if customer_group.customer_group_id in config_customer_group_display %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
                        {{ customer_group.name }}
                        {% else %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" />
                        {{ customer_group.name }}
                        {% endif %} </label>
                    </div>
                    {% endfor %}
                    {% if error_customer_group_display %}
                    <div class=\"text-danger\">{{ error_customer_group_display }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_price }}\">{{ entry_customer_price }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"{{ help_login_attempts }}\">{{ entry_login_attempts }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\" />
                    {% if error_login_attempts %}
                    <div class=\"text-danger\">{{ error_login_attempts }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"{{ help_account }}\">{{ entry_account }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_account_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_checkout }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"{{ help_invoice_prefix }}\">{{ entry_invoice_prefix }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_cart_weight }}\">{{ entry_cart_weight }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout_guest }}\">{{ entry_checkout_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout }}\">{{ entry_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_checkout_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"{{ help_order_status }}\">{{ entry_order_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_order_status_id %}                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"{{ help_processing_status }}\">{{ entry_processing_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_processing_status %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_processing_status %}
                    <div class=\"text-danger\">{{ error_processing_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"{{ help_complete_status }}\">{{ entry_complete_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_complete_status %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_complete_status %}
                    <div class=\"text-danger\">{{ error_complete_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"{{ help_fraud_status }}\">{{ entry_fraud_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_fraud_status_id %}                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"{{ help_api }}\">{{ entry_api }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for api in apis %}
                      {% if api.api_id == config_api_id %}                      
                      <option value=\"{{ api.api_id }}\" selected=\"selected\">{{ api.username }}</option>                      
                      {% else %}                      
                      <option value=\"{{ api.api_id }}\">{{ api.username }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_display }}\">{{ entry_stock_display }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_warning }}\">{{ entry_stock_warning }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_checkout }}\">{{ entry_stock_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_affiliate }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">{{ entry_affiliate_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_affiliate_group_id %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_approval }}\">{{ entry_affiliate_approval }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_auto }}\">{{ entry_affiliate_auto }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_commission }}\">{{ entry_affiliate_commission }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate }}\">{{ entry_affiliate }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_affiliate_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_return }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"{{ help_return }}\">{{ entry_return }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>                      
                      {% for information in informations %}
                      {% if information.information_id == config_return_id %}                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>                      
                      {% else %}                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"{{ help_return_status }}\">{{ entry_return_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      {% for return_status in return_statuses %}
                      {% if return_status.return_status_id == config_return_status_id %}                      
                      <option value=\"{{ return_status.return_status_id }}\" selected=\"selected\">{{ return_status.name }}</option>                      
                      {% else %}                      
                      <option value=\"{{ return_status.return_status_id }}\">{{ return_status.name }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_captcha }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_captcha }}\">{{ entry_captcha }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>                      
                      {% for captcha in captchas %}
                      {% if captcha.value == config_captcha %}                      
                      <option value=\"{{ captcha.value }}\" selected=\"selected\">{{ captcha.text }}</option>                      
                      {% else %}                      
                      <option value=\"{{ captcha.value }}\">{{ captcha.text }}</option>                      
                      {% endif %}
                      {% endfor %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_captcha_page }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for captcha_page in captcha_pages %}
                      <div class=\"checkbox\">
                        <label> {% if captcha_page.value in config_captcha_page %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" checked=\"checked\" />
                          {{ captcha_page.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" />
                          {{ captcha_page.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">{{ entry_logo }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ logo }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"{{ help_icon }}\">{{ entry_icon }}</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ icon }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_engine }}\">{{ entry_mail_engine }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      {% if config_mail_engine == 'mail' %}                      
                      <option value=\"mail\" selected=\"selected\">{{ text_mail }}</option>                      
                      {% else %}                      
                      <option value=\"mail\">{{ text_mail }}</option>                      
                      {% endif %}
                      {% if config_mail_engine == 'smtp' %}                      
                      <option value=\"smtp\" selected=\"selected\">{{ text_smtp }}</option>                      
                      {% else %}                      
                      <option value=\"smtp\">{{ text_smtp }}</option>                      
                      {% endif %}                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_parameter }}\">{{ entry_mail_parameter }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_hostname }}\">{{ entry_mail_smtp_hostname }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_password }}\">{{ entry_mail_smtp_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert }}\">{{ entry_mail_alert }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for mail_alert in mail_alerts %}
                      <div class=\"checkbox\">
                        <label> {% if mail_alert.value in config_mail_alert %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" checked=\"checked\" />
                          {{ mail_alert.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" />
                          {{ mail_alert.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert_email }}\">{{ entry_mail_alert_email }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_maintenance }}\">{{ entry_maintenance }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_seo_url }}\">{{ entry_seo_url }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_type\">{{ entry_seo_url_type }}</label>
                  <div class=\"col-sm-10\">
                  <select id=\"config_seo_url_type\" class=\"form-control\" name=\"config_seo_url_type\">
                    {% for seo_type in seo_types %}
                      {% if seo_type.type == config_seo_url_type %}
                        <option value=\"{{ seo_type.type }}\" selected=\"selected\">{{ seo_type.name }}</option>
                      {% else %}
                        <option value=\"{{ seo_type.type }}\">{{ seo_type.name }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ entry_seo_url_include_path_help }}\">{{ entry_seo_url_include_path }}</span></label>
                  <div class=\"col-sm-10\">
                  {% if config_seo_url_include_path %}
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\"/>
                    {{ text_yes }}
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\"/>
                    {{ text_no }}
                    </label>
                  {% else %}
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\"/>
                    {{ text_yes }}
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\"/>
                    {{ text_no }}
                    </label>
                  {% endif %}
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_postfix\"><span data-toggle=\"tooltip\" title=\"{{ entry_seo_url_postfix_help }}\">{{ entry_seo_url_postfix }}</span></label>
                  <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seo_url_postfix\" value=\"{{ config_seo_url_postfix }}\" id=\"config_seo_url_postfix\" class=\"form-control\"/>
                  </div>
                </div>
            
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"{{ help_robots }}\">{{ entry_robots }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"{{ entry_robots }}\" id=\"input-robots\" class=\"form-control\">{{ config_robots }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"{{ help_compression }}\">{{ entry_compression }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_secure }}\">{{ entry_secure }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_password }}\">{{ entry_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_shared }}\">{{ entry_shared }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"{{ help_encryption }}\">{{ entry_encryption }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"{{ entry_encryption }}\" id=\"input-encryption\" class=\"form-control\">{{ config_encryption }}</textarea>
                    {% if error_encryption %}
                    <div class=\"text-danger\">{{ error_encryption }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"{{ help_file_max_size }}\">{{ entry_file_max_size }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_ext_allowed }}\">{{ entry_file_ext_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_mime_allowed }}\">{{ entry_file_mime_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      {{ text_no }}
                      {% endif %}</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\" />
                    {% if error_log %}
                    <div class=\"text-danger\">{{ error_log }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">{{ text_select }}</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">{{ text_none }}</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
{{ footer }} 
", "setting/setting.twig", "");
    }
}
