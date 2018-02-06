<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_email.html.twig */
class __TwigTemplate_c18524dc9a4f5d9f8d2173ea72ddeccbecdd045b75669e0914fb2544a9bc4512 extends Twig_Template
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
        echo "<div class=\"popup-window-email\" title=\"Send Email\" >
    <div class=\"email-form display-block-persistent\" data-action=\"leadEmailSend\" data-controller=\"leads_display\">
        <div class=\"form-group\">
            <label for=\"theme\">Subject</label>
            <input type=\"text\" id=\"email_theme\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
            <label for=\"text\">Text</label>
            <textarea id=\"email_text\" style=\"height: 370px\" class=\"form-control\"></textarea>
           ";
        // line 11
        echo "        </div>
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"\" />
        <input type=\"hidden\" id=\"email_to\" name=\"email_to\" value=\"\" />
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  19 => 1,);
    }
}
/* <div class="popup-window-email" title="Send Email" >*/
/*     <div class="email-form display-block-persistent" data-action="leadEmailSend" data-controller="leads_display">*/
/*         <div class="form-group">*/
/*             <label for="theme">Subject</label>*/
/*             <input type="text" id="email_theme" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="text">Text</label>*/
/*             <textarea id="email_text" style="height: 370px" class="form-control"></textarea>*/
/*            {#<input type="text" id="email_text" class="form-control"/>#}*/
/*         </div>*/
/*         <input type="hidden" id="lead_id" name="lead_id" value="" />*/
/*         <input type="hidden" id="email_to" name="email_to" value="" />*/
/*     </div>*/
/* </div>*/
