<?php

/* ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig */
class __TwigTemplate_431659ebcd8e54044282a03a1b87910a4bcab124afc6d47046987328f7d58f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"group-forms\">
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"year\">Year</label>
            ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationYearSelect", array("activeValue" =>         // line 6
(isset($context["autoYear"]) ? $context["autoYear"] : null))));
        // line 7
        echo "
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">Make</label>
            <input type=\"text\" id=\"compaign\" name=\"auto_make[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("autoMake", $context)) ? ((isset($context["autoMake"]) ? $context["autoMake"] : null)) : ("")), "html", null, true);
        echo "\" />
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"compaign\">Model</label>
            <input type=\"text\" name=\"auto_model[\$\$name\$\$]\" id=\"compaign\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("autoModel", $context)) ? ((isset($context["autoModel"]) ? $context["autoModel"] : null)) : ("")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">VIN Number</label>
            <input type=\"text\" id=\"compaign\" name=\"auto_vinNumber[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("autoVinNumber", $context)) ? ((isset($context["autoVinNumber"]) ? $context["autoVinNumber"] : null)) : ("")), "html", null, true);
        echo "\" />
        </div>
    </div>

    <input type=\"hidden\" class=\"autoId\" name=\"autoId[\$\$name\$\$]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("autoId", $context)) ? ((isset($context["autoId"]) ? $context["autoId"] : null)) : ("")), "html", null, true);
        echo "\" />
    ";
        // line 27
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", "ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig", 27)->display(array_merge($context, array("empty" => (isset($context["empty"]) ? $context["empty"] : null), "singleEmpty" => (isset($context["singleEmpty"]) ? $context["singleEmpty"] : null), "last" => (isset($context["last"]) ? $context["last"] : null), "save" => false)));
        // line 28
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  62 => 27,  58 => 26,  51 => 22,  44 => 18,  34 => 11,  28 => 7,  26 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="group-forms">*/
/*     <div class="form-group row">*/
/*         <div class="col-md-6">*/
/*             <label for="year">Year</label>*/
/*             {{ render(controller('ZesharCRMCoreBundle:FormItems:leadPrequalificationYearSelect', {*/
/*                 'activeValue': autoYear*/
/*             } )) }}*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">Make</label>*/
/*             <input type="text" id="compaign" name="auto_make[$$name$$]" class="form-control" value="{{ autoMake is defined ?  autoMake  : '' }}" />*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group row">*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">Model</label>*/
/*             <input type="text" name="auto_model[$$name$$]" id="compaign" class="form-control" value="{{ autoModel is defined ? autoModel  : '' }}" />*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <label for="compaign">VIN Number</label>*/
/*             <input type="text" id="compaign" name="auto_vinNumber[$$name$$]" class="form-control" value="{{ autoVinNumber is defined ? autoVinNumber : '' }}" />*/
/*         </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" class="autoId" name="autoId[$$name$$]" value="{{ autoId is defined ?  autoId  : '' }}" />*/
/*     {% include('ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig') with {'empty': empty, 'singleEmpty': singleEmpty, 'last': last, 'save': false} %}*/
/* */
/* </div>*/
