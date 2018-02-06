<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_milestone_sold.html.twig */
class __TwigTemplate_0d0394a3e7b495d12a4751701d9ccece26827f29493a13ea413654338992d3bf extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
</div>";
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
        return array (  54 => 34,  19 => 1,);
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
