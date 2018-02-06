<?php

/* ZesharCRMCoreBundle:Block:block_importCSV.html.twig */
class __TwigTemplate_f25593a97ed8f4589b7756a96d19e11dc9b3161cf74b710d90eb0b702af28aaf extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["allTypes"]) ? $context["allTypes"] : null));
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
        return array (  63 => 19,  52 => 17,  48 => 16,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
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
