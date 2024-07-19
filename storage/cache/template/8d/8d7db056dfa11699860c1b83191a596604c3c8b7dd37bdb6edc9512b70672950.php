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

/* default/template/extension/module/custom/login.twig */
class __TwigTemplate_5c85a3248f421e53fb5a3dd7e3aba693b08c998ef8b7487eb22d1641616ef35d extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo ($context["heading_login"] ?? null);
        echo "</div>
  <div class=\"panel-body\">
    <div class=\"radio\">
      <label>
        ";
        // line 6
        if ((($context["account"] ?? null) == "register")) {
            echo " 
        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 8
            echo " 
        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 10
        echo " 
        ";
        // line 11
        echo ($context["text_register"] ?? null);
        echo "</label>
    </div>

    ";
        // line 14
        if (($context["checkout_guest"] ?? null)) {
            echo " 
    <div class=\"radio\">
      <label>
        ";
            // line 17
            if ((($context["account"] ?? null) == "guest")) {
                echo " 
        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 19
                echo " 
        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 21
            echo " 
        ";
            // line 22
            echo ($context["text_guest"] ?? null);
            echo "</label>
    </div>
    ";
        }
        // line 24
        echo " 

    <div class=\"radio\">
      <label>
        ";
        // line 28
        if ((($context["account"] ?? null) == "auth")) {
            echo " 
        <input type=\"radio\" name=\"account\" value=\"auth\" checked=\"checked\" />
        ";
        } else {
            // line 30
            echo " 
        <input type=\"radio\" name=\"account\" value=\"auth\" />
        ";
        }
        // line 32
        echo " 
        ";
        // line 33
        echo ($context["text_auth"] ?? null);
        echo "</label>
    </div>

    <form id=\"auth-form\" ";
        // line 36
        if ((($context["account"] ?? null) != "auth")) {
            echo " 'style=\"display: none;\"' ";
        }
        echo "  >
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-email\">";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-password\">";
        // line 42
        echo ($context["entry_password"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 43
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
        <a href=\"";
        // line 44
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
        <input type=\"submit\" value=\"";
        // line 45
        echo ($context["button_login"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </form>

  </div>
</div>  

<script type=\"text/javascript\"><!--
  jQuery('[name=account]').on('change', function(event){

    jQuery('#custom-login .panel-body').find('.alert').remove();
    let account = event.target.value;

    \$.ajax({
      url: 'index.php?route=extension/module/custom/login/save',
      data: {'account': account},
      dataType: 'json',
      type: 'post',
      success: function(){
        custom_block.render('customer');
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });

    if (account === 'auth') {

      jQuery('#auth-form').show();

      jQuery('#custom-customer').hide();
      jQuery('#custom-shipping').hide();
      jQuery('#custom-payment').hide();
      jQuery('#custom-comment').hide();
      jQuery('#custom-module').hide();
      jQuery('#custom-total').hide();
      jQuery('#custom-confirm').hide();

    } else {

      jQuery('#auth-form').hide();

      jQuery('#custom-customer').show();
      jQuery('#custom-shipping').show();
      jQuery('#custom-payment').show();
      jQuery('#custom-comment').show();
      jQuery('#custom-module').show();
      jQuery('#custom-total').show();
      jQuery('#custom-confirm').show();

    }

  });
  jQuery(document).ready(function(\$) {
    jQuery('[name=account]:checked').trigger('change'); 
  });

  jQuery('#auth-form').on('submit', function(event){

    event.preventDefault();

    \$.ajax({
      url: 'index.php?route=checkout/login/save',
      data: jQuery(this).serialize(),
      dataType: 'json',
      type: 'post',
      success: function(json){

        if (json['redirect']) {
          location = json['redirect'];
        } else if (json['error']) {
          if (json['error']['warning']) {
            jQuery('#custom-login .panel-body').prepend('<div class=\"alert alert-danger\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });

  });
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/custom/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 45,  144 => 44,  140 => 43,  136 => 42,  130 => 39,  126 => 38,  119 => 36,  113 => 33,  110 => 32,  105 => 30,  99 => 28,  93 => 24,  87 => 22,  84 => 21,  79 => 19,  73 => 17,  67 => 14,  61 => 11,  58 => 10,  53 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\">{{ heading_login }}</div>
  <div class=\"panel-body\">
    <div class=\"radio\">
      <label>
        {% if account == 'register' %} 
        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        {% else %} 
        <input type=\"radio\" name=\"account\" value=\"register\" />
        {% endif %} 
        {{ text_register }}</label>
    </div>

    {% if checkout_guest %} 
    <div class=\"radio\">
      <label>
        {% if account == 'guest' %} 
        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        {% else %} 
        <input type=\"radio\" name=\"account\" value=\"guest\" />
        {% endif %} 
        {{ text_guest }}</label>
    </div>
    {% endif %} 

    <div class=\"radio\">
      <label>
        {% if account == 'auth' %} 
        <input type=\"radio\" name=\"account\" value=\"auth\" checked=\"checked\" />
        {% else %} 
        <input type=\"radio\" name=\"account\" value=\"auth\" />
        {% endif %} 
        {{ text_auth }}</label>
    </div>

    <form id=\"auth-form\" {% if account != 'auth' %} 'style=\"display: none;\"' {% endif %}  >
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-email\">{{ entry_email }}</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-password\">{{ entry_password }}</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
        <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
        <input type=\"submit\" value=\"{{ button_login }}\" id=\"button-login\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\" />
    </form>

  </div>
</div>  

<script type=\"text/javascript\"><!--
  jQuery('[name=account]').on('change', function(event){

    jQuery('#custom-login .panel-body').find('.alert').remove();
    let account = event.target.value;

    \$.ajax({
      url: 'index.php?route=extension/module/custom/login/save',
      data: {'account': account},
      dataType: 'json',
      type: 'post',
      success: function(){
        custom_block.render('customer');
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });

    if (account === 'auth') {

      jQuery('#auth-form').show();

      jQuery('#custom-customer').hide();
      jQuery('#custom-shipping').hide();
      jQuery('#custom-payment').hide();
      jQuery('#custom-comment').hide();
      jQuery('#custom-module').hide();
      jQuery('#custom-total').hide();
      jQuery('#custom-confirm').hide();

    } else {

      jQuery('#auth-form').hide();

      jQuery('#custom-customer').show();
      jQuery('#custom-shipping').show();
      jQuery('#custom-payment').show();
      jQuery('#custom-comment').show();
      jQuery('#custom-module').show();
      jQuery('#custom-total').show();
      jQuery('#custom-confirm').show();

    }

  });
  jQuery(document).ready(function(\$) {
    jQuery('[name=account]:checked').trigger('change'); 
  });

  jQuery('#auth-form').on('submit', function(event){

    event.preventDefault();

    \$.ajax({
      url: 'index.php?route=checkout/login/save',
      data: jQuery(this).serialize(),
      dataType: 'json',
      type: 'post',
      success: function(json){

        if (json['redirect']) {
          location = json['redirect'];
        } else if (json['error']) {
          if (json['error']['warning']) {
            jQuery('#custom-login .panel-body').prepend('<div class=\"alert alert-danger\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });

  });
//--></script>", "default/template/extension/module/custom/login.twig", "");
    }
}
