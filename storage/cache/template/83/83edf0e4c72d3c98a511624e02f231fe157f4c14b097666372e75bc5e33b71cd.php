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

/* Foody/template/extension/module/custom/login.twig */
class __TwigTemplate_4e47ad768bf0e877d7d503b30452bd67fe5c32386a01f7f025961cd81c62942e extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/login.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{# <div class=\"panel panel-default\">
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
//--></script> #}", "Foody/template/extension/module/custom/login.twig", "");
    }
}
