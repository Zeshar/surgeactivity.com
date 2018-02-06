<?php

/* ZesharCRMCoreBundle:Form:existing_attachments.html.twig */
class __TwigTemplate_4ac38daa00c18908ebf9d5ca7f616391cd5bac26b2a8f38cb43f188a21e96727 extends Twig_Template
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
        $__internal_f2fa89fc41daf5e688b77fb39b5af73306faa162b0a2e2492afa524a7a47f32e = $this->env->getExtension("native_profiler");
        $__internal_f2fa89fc41daf5e688b77fb39b5af73306faa162b0a2e2492afa524a7a47f32e->enter($__internal_f2fa89fc41daf5e688b77fb39b5af73306faa162b0a2e2492afa524a7a47f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Form:existing_attachments.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
                                                <label class=\"control-label\">
                                    Comments
                            </label>

        <div class=\"sonata-ba-field sonata-ba-field-standard-natural\">
                
                ";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAttachments", array(), "method"))) {
            // line 9
            echo "                    <ul class=\"sonata-ba-show-one-to-many\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAttachments", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 11
                echo "                            <li>
                                ";
                // line 12
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"))) {
                    // line 13
                    echo "                                    <p>";
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getText", array(), "method"), "html", null, true));
                    echo "</p>
                                ";
                }
                // line 15
                echo "                                ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getFile", array(), "method"))) {
                    // line 16
                    echo "                                    <p>File:&nbsp;&nbsp;";
                    echo $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getDownloadLink", array(), "method");
                    echo "</p>
                                ";
                }
                // line 18
                echo "                                ";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"))) {
                    // line 19
                    echo "                                    <p>Posted by:&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo "</p>
                                ";
                }
                // line 21
                echo "                                <p>Posted at:&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getCreatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                                <p>Updated at:&nbsp;&nbsp;";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["element"], "getAttachment", array(), "method"), "getUpdatedAt", array(), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                                <br/>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </ul>
                ";
        } else {
            // line 28
            echo "                    <br />
                    <div>This item has no attachments yet.</div>
                ";
        }
        // line 31
        echo "                
        </div>

</div>
";
        
        $__internal_f2fa89fc41daf5e688b77fb39b5af73306faa162b0a2e2492afa524a7a47f32e->leave($__internal_f2fa89fc41daf5e688b77fb39b5af73306faa162b0a2e2492afa524a7a47f32e_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Form:existing_attachments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 28,  84 => 26,  74 => 22,  69 => 21,  63 => 19,  60 => 18,  54 => 16,  51 => 15,  45 => 13,  43 => 12,  40 => 11,  36 => 10,  33 => 9,  31 => 8,  22 => 1,);
    }
}
/* <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                     Comments*/
/*                             </label>*/
/* */
/*         <div class="sonata-ba-field sonata-ba-field-standard-natural">*/
/*                 */
/*                 {% if object.getAttachments() is not empty %}*/
/*                     <ul class="sonata-ba-show-one-to-many">*/
/*                         {% for element in object.getAttachments() %}*/
/*                             <li>*/
/*                                 {% if element.getAttachment().getText() is not empty %}*/
/*                                     <p>{{ element.getAttachment().getText()|nl2br }}</p>*/
/*                                 {% endif %}*/
/*                                 {% if element.getAttachment().getFile() is not empty %}*/
/*                                     <p>File:&nbsp;&nbsp;{{ element.getAttachment().getDownloadLink() | raw }}</p>*/
/*                                 {% endif %}*/
/*                                 {% if element.getAttachment().getCreator() is not empty %}*/
/*                                     <p>Posted by:&nbsp;&nbsp;{{ element.getAttachment().getCreator().getUsername() }}</p>*/
/*                                 {% endif %}*/
/*                                 <p>Posted at:&nbsp;&nbsp;{{ element.getAttachment().getCreatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                                 <p>Updated at:&nbsp;&nbsp;{{ element.getAttachment().getUpdatedAt()|date('Y-m-d H:i:s') }}</p>*/
/*                                 <br/>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% else %}*/
/*                     <br />*/
/*                     <div>This item has no attachments yet.</div>*/
/*                 {% endif %}*/
/*                 */
/*         </div>*/
/* */
/* </div>*/
/* */
