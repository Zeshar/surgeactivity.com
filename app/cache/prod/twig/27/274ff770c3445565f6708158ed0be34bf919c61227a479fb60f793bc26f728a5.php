<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_block_actions.html.twig */
class __TwigTemplate_c442f1aa844b4ae004bc0dd161a373175a05d55f918a095b588f5c8c4af3d6d2 extends Twig_Template
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
        echo "<div class=\"show-display-per-block-actions\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        if ( !(array_key_exists("show_cancel_link", $context) && ((isset($context["show_cancel_link"]) ? $context["show_cancel_link"] : null) == false))) {
            // line 3
            echo "        <a href=\"#\" class=\"btn-cancel-block\">Cancel</a>
        &nbsp;&nbsp;&nbsp;
    ";
        }
        // line 6
        echo "    <button class=\"btn-save-block btn btn-green\">";
        if (array_key_exists("save_button_title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["save_button_title"]) ? $context["save_button_title"] : null), "html", null, true);
        } else {
            echo "Save";
        }
        echo "</button>
    ";
        // line 7
        if ((array_key_exists("delete", $context) && ((isset($context["delete"]) ? $context["delete"] : null) == true))) {
            // line 8
            echo "        <button class=\"btn-delete-block btn btn-red\">";
            if (array_key_exists("delete_button_title", $context)) {
                echo twig_escape_filter($this->env, (isset($context["delete_button_title"]) ? $context["delete_button_title"] : null), "html", null, true);
            } else {
                echo "Delete";
            }
            echo "</button>
    ";
        }
        // line 10
        echo "</div>
";
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
        return array (  50 => 10,  40 => 8,  38 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
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
