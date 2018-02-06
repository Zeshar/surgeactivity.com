<?php

/* ZesharCRMCoreBundle:CRUD:billing_info_list.html.twig */
class __TwigTemplate_38c0d44b27e504cbcf23a2004b26d87f5926b6b06f5355f3125281a92ae18d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:show.html.twig", "ZesharCRMCoreBundle:CRUD:billing_info_list.html.twig", 1);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'sonata_whole_content_wrapper_classes' => array($this, 'block_sonata_whole_content_wrapper_classes'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actions($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_tab_menu($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_whole_content_wrapper_classes($context, array $blocks = array())
    {
        echo "content show-page clear-fix";
    }

    // line 11
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
    }

    // line 13
    public function block_show($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"row\">
        <div class=\"title-wrap-simple col-md-6\">
            <h2 class=\"pull-left\">Account Info</h2>
            <button class=\"btn btn-success btn-all-save\" style=\"margin-left: 6px;\">Save</button>
        </div>
    </div>
    ";
        // line 20
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_show_block_actions_js.html.twig");
        echo "

    ";
        // line 22
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab.html.twig");
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/payment_history_tab.html.twig");
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/company_info_tab.html.twig");
        echo "
    ";
        // line 25
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/personal_info_tab.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:billing_info_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 24,  76 => 23,  72 => 22,  67 => 20,  59 => 14,  56 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:show.html.twig' %}*/
/* */
/* {% block actions %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{% endblock %}*/
/* */
/* {% block sonata_whole_content_wrapper_classes %}content show-page clear-fix{% endblock %}*/
/* */
/* {% block sonata_page_content_nav %}{% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="row">*/
/*         <div class="title-wrap-simple col-md-6">*/
/*             <h2 class="pull-left">Account Info</h2>*/
/*             <button class="btn btn-success btn-all-save" style="margin-left: 6px;">Save</button>*/
/*         </div>*/
/*     </div>*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_show_block_actions_js.html.twig') }}*/
/* */
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/billing_info_tab.html.twig') }}*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/payment_history_tab.html.twig') }}*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/company_info_tab.html.twig') }}*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/personal_info_tab.html.twig') }}*/
/* */
/* {% endblock %}*/
/* */
