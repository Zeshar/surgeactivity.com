<?php

/* ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig */
class __TwigTemplate_f028d45a6c77e72728812d6115714b2704922ce8816040288893190a42035b61 extends Twig_Template
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
        $__internal_ad8be1de60bf1ac999b3e29438f12aef90a15f4af79ad957b522199ea2626365 = $this->env->getExtension("native_profiler");
        $__internal_ad8be1de60bf1ac999b3e29438f12aef90a15f4af79ad957b522199ea2626365->enter($__internal_ad8be1de60bf1ac999b3e29438f12aef90a15f4af79ad957b522199ea2626365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig"));

        // line 1
        echo "<div class=\"group-forms\">
    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"year\">Year</label>
            ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadPrequalificationYearSelect", array("activeValue" =>         // line 6
(isset($context["autoYear"]) ? $context["autoYear"] : $this->getContext($context, "autoYear")))));
        // line 7
        echo "
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">Make</label>
            <input type=\"text\" id=\"compaign\" name=\"auto_make[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("autoMake", $context)) ? ((isset($context["autoMake"]) ? $context["autoMake"] : $this->getContext($context, "autoMake"))) : ("")), "html", null, true);
        echo "\" />
        </div>
    </div>

    <div class=\"form-group row\">
        <div class=\"col-md-6\">
            <label for=\"compaign\">Model</label>
            <input type=\"text\" name=\"auto_model[\$\$name\$\$]\" id=\"compaign\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("autoModel", $context)) ? ((isset($context["autoModel"]) ? $context["autoModel"] : $this->getContext($context, "autoModel"))) : ("")), "html", null, true);
        echo "\" />
        </div>
        <div class=\"col-md-6\">
            <label for=\"compaign\">VIN Number</label>
            <input type=\"text\" id=\"compaign\" name=\"auto_vinNumber[\$\$name\$\$]\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("autoVinNumber", $context)) ? ((isset($context["autoVinNumber"]) ? $context["autoVinNumber"] : $this->getContext($context, "autoVinNumber"))) : ("")), "html", null, true);
        echo "\" />
        </div>
    </div>

    <input type=\"hidden\" class=\"autoId\" name=\"autoId[\$\$name\$\$]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("autoId", $context)) ? ((isset($context["autoId"]) ? $context["autoId"] : $this->getContext($context, "autoId"))) : ("")), "html", null, true);
        echo "\" />
    ";
        // line 27
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:prequalificationButtonGroup.html.twig", "ZesharCRMCoreBundle:FormItems:leadPrequalificationAutoBlock.html.twig", 27)->display(array_merge($context, array("empty" => (isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")), "singleEmpty" => (isset($context["singleEmpty"]) ? $context["singleEmpty"] : $this->getContext($context, "singleEmpty")), "last" => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "save" => false)));
        // line 28
        echo "
</div>";
        
        $__internal_ad8be1de60bf1ac999b3e29438f12aef90a15f4af79ad957b522199ea2626365->leave($__internal_ad8be1de60bf1ac999b3e29438f12aef90a15f4af79ad957b522199ea2626365_prof);

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
        return array (  67 => 28,  65 => 27,  61 => 26,  54 => 22,  47 => 18,  37 => 11,  31 => 7,  29 => 6,  28 => 5,  22 => 1,);
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
