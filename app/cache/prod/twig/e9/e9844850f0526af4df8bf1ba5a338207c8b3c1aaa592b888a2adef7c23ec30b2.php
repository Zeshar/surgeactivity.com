<?php

/* ZesharCRMCoreBundle:CRUD:admin_account_create.html.twig */
class __TwigTemplate_1193ad80375f1661c4d68d1f9e4ddebf8e7548dbaa1fdeee242448b76b6cf060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:show.html.twig", "ZesharCRMCoreBundle:CRUD:admin_account_create.html.twig", 1);
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
            <h2 class=\"pull-left\">Create Account</h2>
        </div>
    </div>
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/zesharcrmcore/css/account-page-styles.css"), "html", null, true);
        echo "\"  />
    ";
        // line 20
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/account_show_block_actions_js.html.twig");
        echo "

    ";
        // line 22
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/create_account_tab.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:admin_account_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 20,  66 => 19,  59 => 14,  56 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
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
/*             <h2 class="pull-left">Create Account</h2>*/
/*         </div>*/
/*     </div>*/
/*     <link rel="stylesheet" type="text/css"  href="{{ asset('bundles/zesharcrmcore/css/account-page-styles.css') }}"  />*/
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/account_show_block_actions_js.html.twig') }}*/
/* */
/*     {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/create_account_tab.html.twig') }}*/
/* */
/* {% endblock %}*/
/* */
