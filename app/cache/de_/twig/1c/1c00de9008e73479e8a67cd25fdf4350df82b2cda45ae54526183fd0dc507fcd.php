<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_email.html.twig */
class __TwigTemplate_ec0b1008ecfec9d66c5be1c0105c7f8420bc0b8a109996ae87480ae9bcd0fa95 extends Twig_Template
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
        $__internal_9fc3317b0f45bc9e7c05c2643651ca72f7836727a74b0541b2e68d1d9826acd5 = $this->env->getExtension("native_profiler");
        $__internal_9fc3317b0f45bc9e7c05c2643651ca72f7836727a74b0541b2e68d1d9826acd5->enter($__internal_9fc3317b0f45bc9e7c05c2643651ca72f7836727a74b0541b2e68d1d9826acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_email.html.twig"));

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
        
        $__internal_9fc3317b0f45bc9e7c05c2643651ca72f7836727a74b0541b2e68d1d9826acd5->leave($__internal_9fc3317b0f45bc9e7c05c2643651ca72f7836727a74b0541b2e68d1d9826acd5_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  22 => 1,);
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
