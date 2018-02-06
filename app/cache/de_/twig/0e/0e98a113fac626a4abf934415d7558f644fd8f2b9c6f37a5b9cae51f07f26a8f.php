<?php

/* ZesharCRMCoreBundle:Block:block_importCSV.html.twig */
class __TwigTemplate_2bbc17a46d83561b7e6464c872deaf5f4e9e87412dc738a343a380b9932721e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "ZesharCRMCoreBundle:Block:block_importCSV.html.twig", 1);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27f93ad04bfab39b211ebb171b4732fcc07aa90ddc6fd02ce59a4b707515bfde = $this->env->getExtension("native_profiler");
        $__internal_27f93ad04bfab39b211ebb171b4732fcc07aa90ddc6fd02ce59a4b707515bfde->enter($__internal_27f93ad04bfab39b211ebb171b4732fcc07aa90ddc6fd02ce59a4b707515bfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Block:block_importCSV.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f93ad04bfab39b211ebb171b4732fcc07aa90ddc6fd02ce59a4b707515bfde->leave($__internal_27f93ad04bfab39b211ebb171b4732fcc07aa90ddc6fd02ce59a4b707515bfde_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_65197b44e4ccc3d4447f1b1284981e095b0660c382bb4ef0a11a7b18b2829c09 = $this->env->getExtension("native_profiler");
        $__internal_65197b44e4ccc3d4447f1b1284981e095b0660c382bb4ef0a11a7b18b2829c09->enter($__internal_65197b44e4ccc3d4447f1b1284981e095b0660c382bb4ef0a11a7b18b2829c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "<div class=\"box\">
<div class=\"box-header\">
    <h3 class=\"box-title\">CSV Import</h3>
</div>
<div class=\"box-body\">
    <table>
        <tbody>
            <tr>
                <td>Import File directly:&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("shortyImportCSV");
        echo "\" method=\"post\" enctype=\"multipart/form-data\" >
                        <select size=\"1\" name=\"fileType\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTypes"]) ? $context["allTypes"] : $this->getContext($context, "allTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["oneCSV"]) {
            // line 17
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCSV"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oneCSV"], "title", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneCSV'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                        </select> <br />
                        <input type=\"file\" name=\"csvFile\" /> <br />
                        <input type=\"submit\" value=\"Upload\" />
                     </form>
                 </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
";
        
        $__internal_65197b44e4ccc3d4447f1b1284981e095b0660c382bb4ef0a11a7b18b2829c09->leave($__internal_65197b44e4ccc3d4447f1b1284981e095b0660c382bb4ef0a11a7b18b2829c09_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_importCSV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 17,  57 => 16,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataBlockBundle:Block:block_base.html.twig' %}*/
/* */
/* {% block block %}*/
/* <div class="box">*/
/* <div class="box-header">*/
/*     <h3 class="box-title">CSV Import</h3>*/
/* </div>*/
/* <div class="box-body">*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>Import File directly:&nbsp;&nbsp;&nbsp;</td>*/
/*                 <td>*/
/*                     <form action="{{ path('shortyImportCSV') }}" method="post" enctype="multipart/form-data" >*/
/*                         <select size="1" name="fileType">*/
/*                             {% for oneCSV in allTypes %}*/
/*                                 <option value="{{ oneCSV.id }}">{{ oneCSV.title }}</option>*/
/*                             {% endfor %}*/
/*                         </select> <br />*/
/*                         <input type="file" name="csvFile" /> <br />*/
/*                         <input type="submit" value="Upload" />*/
/*                      </form>*/
/*                  </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
