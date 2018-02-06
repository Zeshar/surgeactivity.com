<?php

/* ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig */
class __TwigTemplate_1697d8d7c75f48694a045c880a6e413fa020c040afe277e4026d7665154e9228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade6176e15e3dc497ae9db84c77a979602c64c8739fd91ce509252f9de8b04cf = $this->env->getExtension("native_profiler");
        $__internal_ade6176e15e3dc497ae9db84c77a979602c64c8739fd91ce509252f9de8b04cf->enter($__internal_ade6176e15e3dc497ae9db84c77a979602c64c8739fd91ce509252f9de8b04cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade6176e15e3dc497ae9db84c77a979602c64c8739fd91ce509252f9de8b04cf->leave($__internal_ade6176e15e3dc497ae9db84c77a979602c64c8739fd91ce509252f9de8b04cf_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_c3d11e66e8737aefc8f56284191eba9468b814d1681d44eb3fc6f68a0c2dcea6 = $this->env->getExtension("native_profiler");
        $__internal_c3d11e66e8737aefc8f56284191eba9468b814d1681d44eb3fc6f68a0c2dcea6->enter($__internal_c3d11e66e8737aefc8f56284191eba9468b814d1681d44eb3fc6f68a0c2dcea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "    <table class=\"table table-bordered table-striped sonata-ba-list\">
        <thead>
        <tr>
            <th colspan=\"3\">Deleted Leads List</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                <div class=\"btn-group\" align=\"center\">
                    <a class=\"btn btn-small\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">Deleted Leads List</a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
";
        
        $__internal_c3d11e66e8737aefc8f56284191eba9468b814d1681d44eb3fc6f68a0c2dcea6->leave($__internal_c3d11e66e8737aefc8f56284191eba9468b814d1681d44eb3fc6f68a0c2dcea6_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_deleted_lead_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <table class="table table-bordered table-striped sonata-ba-list">*/
/*         <thead>*/
/*         <tr>*/
/*             <th colspan="3">Deleted Leads List</th>*/
/*         </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*         <tr>*/
/*             <td>*/
/*                 <div class="btn-group" align="center">*/
/*                     <a class="btn btn-small" href="{{ link }}">Deleted Leads List</a>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
