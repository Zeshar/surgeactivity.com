<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_milestone_sold.html.twig */
class __TwigTemplate_feb5bdb41b16acbd9173bd07dbc6297fd9e146db80c312312cb47294a147ac10 extends Twig_Template
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
        $__internal_1990c4fd3198a60858c2cf0ebd4cd6ef088e1bb9c29779fb40ba19e7412475fc = $this->env->getExtension("native_profiler");
        $__internal_1990c4fd3198a60858c2cf0ebd4cd6ef088e1bb9c29779fb40ba19e7412475fc->enter($__internal_1990c4fd3198a60858c2cf0ebd4cd6ef088e1bb9c29779fb40ba19e7412475fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_milestone_sold.html.twig"));

        // line 1
        echo "<div class=\"popup-window-sold custom-block\" title=\"Sold\">
    <div class=\"form-group\">
        <label for=\"compaign\">Ref Number</label>
        <input type=\"text\" id=\"policy_number\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Effective DT</label>
        <input type=\"text\" id=\"effective_dt\" class=\"form-control datepicker\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Line Code</label>
        <input type=\"text\" id=\"line_code\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">LSP Code</label>
        <input type=\"text\" id=\"lsp_code\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Renewal Count</label>
        <input type=\"text\" id=\"renewal_count\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Amount</label>
        <input type=\"text\" id=\"premium\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Quantity</label>
        <input type=\"text\" id=\"vehicle_count\" class=\"form-control\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"compaign\">Product</label>
        <input type=\"text\" id=\"homeowners_count\" class=\"form-control\"/>
    </div>
    <input type=\"hidden\" name=\"lead\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
</div>";
        
        $__internal_1990c4fd3198a60858c2cf0ebd4cd6ef088e1bb9c29779fb40ba19e7412475fc->leave($__internal_1990c4fd3198a60858c2cf0ebd4cd6ef088e1bb9c29779fb40ba19e7412475fc_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_milestone_sold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 34,  22 => 1,);
    }
}
/* <div class="popup-window-sold custom-block" title="Sold">*/
/*     <div class="form-group">*/
/*         <label for="compaign">Ref Number</label>*/
/*         <input type="text" id="policy_number" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Effective DT</label>*/
/*         <input type="text" id="effective_dt" class="form-control datepicker"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Line Code</label>*/
/*         <input type="text" id="line_code" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">LSP Code</label>*/
/*         <input type="text" id="lsp_code" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Renewal Count</label>*/
/*         <input type="text" id="renewal_count" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Amount</label>*/
/*         <input type="text" id="premium" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Quantity</label>*/
/*         <input type="text" id="vehicle_count" class="form-control"/>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="compaign">Product</label>*/
/*         <input type="text" id="homeowners_count" class="form-control"/>*/
/*     </div>*/
/*     <input type="hidden" name="lead" value="{{ object.getId() }}" />*/
/* </div>*/
