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

/* C:\OpenServer\domains\test/themes/salon_of_beauty/partials/services.htm */
class __TwigTemplate_526c4f5b2cb757e786e6ec71cf25104eb35cc143f8e2c09201a5e201c99d5c7e extends \Twig\Template
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
        echo "<section class=\"services\" id=\"services\">

    <h1 class=\"heading\"> наші <span>послуги</span> </h1>
    
    <div class=\"box-container\">
        ";
        // line 6
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 6);
        // line 7
        echo "        ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 7);
        // line 8
        echo "        ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 8);
        // line 9
        echo "        ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 9);
        // line 10
        echo "        ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 10);
        // line 11
        echo "        ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 11);
        // line 12
        echo "            
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 14
            echo "        <div class=\"box\">
            <!-- <i class=\"fas fa-notes-medical\"></i> -->
            <h3 class=\"product__title\">
                <a href=\"";
            // line 17
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 17, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 17)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a>
            </h3>
            <div class=\"product__price\">
                <del> ₴";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "old_price", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "   </del>₴";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
            </div>
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
            <a href=\"";
            // line 23
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 23, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 23)]);
            echo "\" class=\"btn\"> Більше.. <span class=\"fas fa-chevron-right\"></span> </a>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 26, $this->source), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  100 => 26,  92 => 23,  84 => 20,  76 => 17,  71 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"services\" id=\"services\">

    <h1 class=\"heading\"> наші <span>послуги</span> </h1>
    
    <div class=\"box-container\">
        {% set records = builderList.records %}
        {% set displayColumn = builderList.displayColumn %}
        {% set noRecordsMessage = builderList.noRecordsMessage %}
        {% set detailsPage = builderList.detailsPage %}
        {% set detailsKeyColumn = builderList.detailsKeyColumn %}
        {% set detailsUrlParameter = builderList.detailsUrlParameter %}
            
                {% for record in records %}
        <div class=\"box\">
            <!-- <i class=\"fas fa-notes-medical\"></i> -->
            <h3 class=\"product__title\">
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{ record.title }}</a>
            </h3>
            <div class=\"product__price\">
                <del> ₴{{ record.old_price }}   </del>₴{{ record.price }}
            </div>
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" class=\"btn\"> Більше.. <span class=\"fas fa-chevron-right\"></span> </a>
        </div>
        {% else %}
        <p>{{ noRecordsMessage }}</p>
                {% endfor %}
    </div>
    
</section>", "C:\\OpenServer\\domains\\test/themes/salon_of_beauty/partials/services.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "for" => 13);
        static $filters = array("page" => 17, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['page', 'escape'],
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
