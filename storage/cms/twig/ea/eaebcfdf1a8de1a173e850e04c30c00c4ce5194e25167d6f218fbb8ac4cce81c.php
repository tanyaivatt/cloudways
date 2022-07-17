<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/service/time_date_service.htm */
class __TwigTemplate_7963bd49d1a8411d11dc67a0eb80487ef1c129662f2368720c89f4a19a2f1c70 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"partialTimeDateService\" style=\"margin-top: 10px;\">
    <label for=\"times\"><h3>Дата і час</h3></label>
    
    <select id=\"times\" name=\"time\" style=\"border: .1rem solid rgba(192, 149, 133, 0.2);\">
        
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "job_date", [], "any", false, false, true, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["times"]) {
            // line 7
            echo "        
            <option value=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["times"], "time", [], "any", false, false, true, 8), 8, $this->source), "H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["times"], "time", [], "any", false, false, true, 8), 8, $this->source), "H:i"), "html", null, true);
            echo "</option>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['times'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        
    </select>

    <input type=\"date\" name=\"date\" style=\"border: .1rem solid rgba(192, 149, 133, 0.2);\" required>
    
    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/service/time_date_service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  53 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"partialTimeDateService\" style=\"margin-top: 10px;\">
    <label for=\"times\"><h3>Дата і час</h3></label>
    
    <select id=\"times\" name=\"time\" style=\"border: .1rem solid rgba(192, 149, 133, 0.2);\">
        
        {% for times in service.job_date %}
        
            <option value=\"{{ times.time|date('H:i') }}\">{{ times.time|date('H:i') }}</option>
            
        {% endfor %}
        
    </select>

    <input type=\"date\" name=\"date\" style=\"border: .1rem solid rgba(192, 149, 133, 0.2);\" required>
    
    
</div>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/service/time_date_service.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6);
        static $filters = array("escape" => 8, "date" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
