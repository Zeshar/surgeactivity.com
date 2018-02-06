<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions.html.twig */
class __TwigTemplate_1d6ede806e6713c3b904703cc51d50bb83e2c0be7a72e9e4022815be42aa3b10 extends Twig_Template
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
        $__internal_02270eef4d63c42a7acb8d8b3d005d4782543321255a04f7e8a8ce4da5571771 = $this->env->getExtension("native_profiler");
        $__internal_02270eef4d63c42a7acb8d8b3d005d4782543321255a04f7e8a8ce4da5571771->enter($__internal_02270eef4d63c42a7acb8d8b3d005d4782543321255a04f7e8a8ce4da5571771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions.html.twig"));

        // line 1
        echo "<div class=\"show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        if ( !(array_key_exists("show_cancel_link", $context) && ((isset($context["show_cancel_link"]) ? $context["show_cancel_link"] : $this->getContext($context, "show_cancel_link")) == false))) {
            // line 3
            echo "        <a href=\"#\" class=\"btn-cancel-block\">Cancel</a>
        &nbsp;&nbsp;&nbsp;
    ";
        }
        // line 6
        echo "    <button class=\"btn-save-block btn btn-green\">";
        if (array_key_exists("save_button_title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["save_button_title"]) ? $context["save_button_title"] : $this->getContext($context, "save_button_title")), "html", null, true);
        } else {
            echo "Save";
        }
        echo "</button>
    ";
        // line 7
        if ((array_key_exists("delete", $context) && ((isset($context["delete"]) ? $context["delete"] : $this->getContext($context, "delete")) == true))) {
            // line 8
            echo "        <button class=\"btn-delete-block btn btn-red\">";
            if (array_key_exists("delete_button_title", $context)) {
                echo twig_escape_filter($this->env, (isset($context["delete_button_title"]) ? $context["delete_button_title"] : $this->getContext($context, "delete_button_title")), "html", null, true);
            } else {
                echo "Delete";
            }
            echo "</button>
    ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_02270eef4d63c42a7acb8d8b3d005d4782543321255a04f7e8a8ce4da5571771->leave($__internal_02270eef4d63c42a7acb8d8b3d005d4782543321255a04f7e8a8ce4da5571771_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  43 => 8,  41 => 7,  32 => 6,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="show-display-per-block-actions" style="margin-bottom: 15px;">*/
/*     {% if not (show_cancel_link is defined and show_cancel_link == false) %}*/
/*         <a href="#" class="btn-cancel-block">Cancel</a>*/
/*         &nbsp;&nbsp;&nbsp;*/
/*     {% endif %}*/
/*     <button class="btn-save-block btn btn-green">{% if save_button_title is defined %}{{ save_button_title }}{% else %}Save{% endif %}</button>*/
/*     {% if delete is defined and delete == true %}*/
/*         <button class="btn-delete-block btn btn-red">{% if delete_button_title is defined %}{{ delete_button_title }}{% else %}Delete{% endif %}</button>*/
/*     {% endif %}*/
/* </div>*/
/* */
